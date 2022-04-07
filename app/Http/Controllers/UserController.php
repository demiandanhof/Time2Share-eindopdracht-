<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function products($id){
        $user_id = auth()->user()->id;

        if($user_id == $id){
            return $this->ownProfile();
        }
        else{
            $user_products = \App\Models\User::where("id","=",$id)->first()->myProducts;
            $user = \App\Models\User::where("id","=",$id)->first();
            $reviews = \App\Models\User::where("id","=",$id)->first()->myReviews;
            $borrowed_products = \App\Models\User::where("id","=",$id)->first()->myBorrowedProducts;
            $user_id = auth()->user()->id;
            $user_name = auth()->user()->name;
            $user_pic = auth()->user()->profile_picture;

            return view('profile', [
                'user' => $user,
                'current_user_id' => $user_id,
                'current_user_name' => $user_name,
                'current_user_pic' => $user_pic,
                'borrowed_products' => $borrowed_products,
                'reviews' => $reviews,
                'user_products' => $user_products,
            ]);
        }

    }

    public function home(){
        $all_products = \App\Models\Product::all();
        $profile_picture = auth()->user()->profile_picture;
        $user_id = auth()->user()->id;
        return view('home',[
            'all_products' => $all_products,
            'profile_picture' => $profile_picture,
            'user_id' => $user_id,
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

    public function admin(){
        $user_admin = auth()->user()->admin;
        $user_pic = auth()->user()->profile_picture;
        if($user_admin == 1){
            return $this-> returnAdmin();
        }
        else{
            return view('forbidden',[
                'current_user_pic' => $user_pic,
            ]);
        }
    }

    public function storeReview(Request $request, \App\Models\Review $review){
        $user_id = $request->input('user_id');
        $user_name = auth()->user()->name;

        $review->user_id = $user_id;
        $review->writer_name = $user_name;

        if($request->input('satisfied') == 'ja'){
            $review->thumbs = '/img/up.png';
        }
        else if($request->input('satisfied') == 'nee'){
            $review->thumbs = '/img/down.png';
        }

        $review->review_text = $request->input('review_text');
        $review->created_at = now();
        $review->save();
        return back();
    }

    public function deleteUser($id){
        $user = \App\Models\User::where("id","=",$id)->first();
        if($user->admin == 1){
            return $this-> returnAdmin();
        }
        else{
            \App\Models\Product::where("user_id","=",$id)->delete();
            $borrowed_products = \App\Models\Product::all();
            foreach($borrowed_products as $borrowed_product){
                if($borrowed_product->borrow_id == $user->id){
                    $borrowed_product->borrow_id = null;
                    $borrowed_product->save();
                }
            }
            \App\Models\Review::where("user_id","=",$id)->delete();
            \App\Models\User::where("id","=",$id)->first()->delete();
            return $this-> returnAdmin();
        }

    }

    public function returnAdmin(){
        $all_products = \App\Models\Product::all();
        $all_users = \App\Models\User::all();
        $profile_picture = auth()->user()->profile_picture;
        return view('admin',[
            'all_products' => $all_products,
            'all_users' => $all_users,
            'current_user_pic' => $profile_picture,
        ]);
    }

    public function changeProfilePic(){
        $profile_picture = auth()->user()->profile_picture;
        return view('change_profile_pic',[
            'current_user_pic' => $profile_picture,
        ]);
    }

    public function storeProfilePic(Request $request, \App\Models\User $user){
        $user_id = auth()->user()->id;

        $profile_picture = $request->input('img');

        DB::table('users')->where('id', $user_id)->update(['profile_picture' => '/img/profile_pictures/' . $profile_picture]);
        DB::table('products')->where('user_id', $user_id)->update(['owner_profile_picture' => '/img/profile_pictures/' . $profile_picture]);

        return $this-> home();
    }

    public function uitloggen(){
        $all_products = \App\Models\Product::all();
        auth()->logout();
        return view('welcome',[
            'all_products' => $all_products,
        ]);
    }
}
