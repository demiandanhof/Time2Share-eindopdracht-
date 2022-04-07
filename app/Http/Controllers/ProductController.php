<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function show($id){
        $product = \App\Models\Product::where("id","=",$id)->first();
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;
        $user_pic = auth()->user()->profile_picture;
        return view('product',[
            'current_user_id' => $user_id,
            'current_user_name' => $user_name,
            'current_user_pic' => $user_pic,
            'product'=> $product,
        ]);
    }

    public function borrow($id){
        $product = \App\Models\Product::where("id","=",$id)->first();
        $user_id = auth()->user()->id;

        if ($product->borrow_id !== null){
            if($product->borrow_id == $user_id){
                return view('unsuccesfull',[
                    'reason' => "je hebt dit product al geleend",
                ]);
            }
            else if($product->user_id == $user_id){
                return view('unsuccesfull',[
                    'reason' => "product is al geleend door andere gebruiker en je kan niet je eigen product lenen",
                ]);
            }
            else{
                return view('unsuccesfull',[
                    'reason' => "product is al geleend door andere gebruiker",
                ]);
            }
        }
        else{
            if($product->user_id == $user_id){
                return view('unsuccesfull',[
                    'reason' => "je kan niet je eigen product lenen",
                ]);
            }
            else{
                $product->borrow_id = $user_id;
                $product->status = "Niet beschikbaar";
                $product->save();

                $user_name = auth()->user()->name;

                return $this->ownProfile();
            }
        }
    }

    public function home(){
        $all_products = \App\Models\Product::all();
        $profile_picture = auth()->user()->profile_picture;
        return view('home',[
            'all_products' => $all_products,
            'profile_picture' => $profile_picture,
        ]);
    }

    public function ownProfile(){
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;
        $user_pic = auth()->user()->profile_picture;
        $borrowed_products = \App\Models\User::where("id","=",$user_id)->first()->myBorrowedProducts;
        $reviews = \App\Models\User::where("id","=",$user_id)->first()->myReviews;
        $user_products = \App\Models\User::where("id","=",$user_id)->first()->myProducts;
        return view('own_profile', [
            'current_user_id' => $user_id,
            'current_user_name' => $user_name,
            'current_user_pic' => $user_pic,
            'borrowed_products' => $borrowed_products,
            'reviews' => $reviews,
            'user_products' => $user_products,
        ]);
    }

    public function return_product($id){
        $product = \App\Models\Product::where("id","=",$id)->first();
        $product->borrow_id = null;
        $product->status= "Beschikbaar";
        $product->save();
        return redirect('/ownprofile');
    }

    public function create(){
        $owner_profile_picture = auth()->user()->profile_picture;
        return view('product_create',[
            'profile_picture' => $owner_profile_picture,
        ]);
    }

    public function store(Request $request, \App\Models\Product $product){
        $user_id = auth()->user()->id;
        $owner_profile_picture = auth()->user()->profile_picture;
        $owner_name = auth()->user()->name;

        $product->owner_profile_picture = $owner_profile_picture;
        $product->owner_name = $owner_name;
        $product->user_id = $user_id;

        $product->status = "Beschikbaar";

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->photo = '/img/products/' . $request->input('img');
        $product->deadline = $request->input('deadline');
        $product->category = $request->input('category');

        
        $product->save();

        try{
            $product->save();
            return $this->ownProfile();
        }
        catch(Exception $e){
            return redirect('/create');
        }

    }

    public function deleteProduct($id){
        \App\Models\Product::where("id","=",$id)->first()->delete();
        $all_products = \App\Models\Product::all();
        $all_users = \App\Models\User::all();
        return $this->back();
    }

    public function back(){
        return back();
    }
}
