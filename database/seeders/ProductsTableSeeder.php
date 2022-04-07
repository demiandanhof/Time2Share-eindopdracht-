<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('products')->insert([
            "user_id" => "1",
            "name" => "Freezerburnpy",
            "status" => "Beschikbaar",
            "description" => "Leuke knuffel",
            "photo" => "/img/products/freezerburnpy.webp",
            "deadline" => "2 weken",
            "category" => "Speelgoed",
            "owner_name" => "Démian",
            "owner_profile_picture" => "/img/profile_pictures/demian.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "1",
            "name" => "Mario Kart 8 Deluxe",
            "status" => "Beschikbaar",
            "description" => "Leuke game voor de Nintendo Switch",
            "photo" => "/img/products/mario_kart_8.jpg",
            "deadline" => "2 weken",
            "category" => "Elektronica",
            "owner_name" => "Démian",
            "owner_profile_picture" => "/img/profile_pictures/demian.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "2",
            "name" => "Muts",
            "status" => "Beschikbaar",
            "description" => "Leuke zwarte muts",
            "photo" => "/img/products/muts.jpg",
            "deadline" => "1 week",
            "category" => "Kleding",
            "owner_name" => "Lisa",
            "owner_profile_picture" => "/img/profile_pictures/lisa.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "3",
            "name" => "Canon G7X Camera",
            "status" => "Beschikbaar",
            "description" => "Goed werkende camera die mooie foto's schiet.",
            "photo" => "/img/products/gx7.webp",
            "deadline" => "3 weken",
            "category" => "Elektronica",
            "owner_name" => "Lars",
            "owner_profile_picture" => "/img/profile_pictures/lars.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "2",
            "name" => "Fjällräven Kånken tas",
            "status" => "Beschikbaar",
            "description" => "Mooie en praktische tas",
            "photo" => "/img/products/Fjallraven_kanken_tas.webp",
            "deadline" => "2 weken",
            "category" => "Anders",
            "owner_name" => "Lisa",
            "owner_profile_picture" => "/img/profile_pictures/lisa.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "3",
            "name" => "Arjen Lubach IV",
            "status" => "Beschikbaar",
            "description" => "Beetje beschadigd maar leest nog steeds geweldig.",
            "photo" => "/img/products/IV.jpg",
            "deadline" => "2 weken",
            "category" => "Boeken",
            "owner_name" => "Lars",
            "owner_profile_picture" => "/img/profile_pictures/lars.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "1",
            "name" => "Pro Controller",
            "status" => "Beschikbaar",
            "description" => "Goed werkende Pro Controller",
            "photo" => "/img/products/pro_controller.jpg",
            "deadline" => "1 week",
            "category" => "Elektronica",
            "owner_name" => "Démian",
            "owner_profile_picture" => "/img/profile_pictures/demian.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "3",
            "name" => "Het Diner",
            "status" => "Beschikbaar",
            "description" => "Interessant boek geschreven door Herman Koch.",
            "photo" => "/img/products/Het-diner.jpg",
            "deadline" => "3 weken",
            "category" => "Boeken",
            "owner_name" => "Lars",
            "owner_profile_picture" => "/img/profile_pictures/lars.jpg",
        ]);

        DB::table('products')->insert([
            "user_id" => "3",
            "name" => "Gazelle herenfiets",
            "status" => "Beschikbaar",
            "description" => "Een prima fiets voor dagelijks gebruik.",
            "photo" => "/img/products/heren_fiets.jpg",
            "deadline" => "4 weken",
            "category" => "Vervoer",
            "owner_name" => "Lars",
            "owner_profile_picture" => "/img/profile_pictures/lars.jpg",
        ]);
    }
    
}
