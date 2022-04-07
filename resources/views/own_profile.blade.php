<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$current_user_name}} - TimeToShare</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="/js/main.js"></script>
</head>
    <body>
        <header class="logged_in">
            <img src="/img/misc/TimeToShare_Logo.png" alt="Website logo" class="website-logo" onclick="home()">
            <input type="text" class="searchbar box-shadow" onclick="home()">
            <a href="/create" class="button-primary-swapped create">Product aanbieden</a>
            <img src="{{$current_user_pic}}" alt="Profielfoto" id="js--profilepicture" onclick="myProfile()">
        </header>
        <main>
            <article class="user_profile_content--wrapper a-popup">
                <section class="user_profile_right_section--wrapper">
                    <section class="profile_picture_section--wrapper">
                        <a href="/ownprofile/changeprofilepic">
                            <img src="{{$current_user_pic}}" alt="Profielfoto" class="profile_profilepicture">
                        </a>
                        <h1>{{$current_user_name}}</h1>  
                        <a href="/uitgelogd" class="button-primary-swapped">Uitloggen</a>      
                    </section>
                    <hr class="line">
                    <section class="user_reviews_section--wrapper">
                        <h1>Jouw beoordelingen</h1>
                        <section class="review">
                            @if(!$reviews->isEmpty())
                                @foreach($reviews as $review)
                                    @include('review.components.user_review')
                                @endforeach
                            @else
                                <p class="center-text">Geen beoordelingen</p>
                            @endif
                        </section>
                    </section>
                </section>

                <section class="user_profile_right_section--wrapper">
                    <section class="borrowed_products--wrapper">
                        <h1 class="center-text margin-top">Geleende producten</h1>
                        @if(!$borrowed_products->isEmpty())
                            @foreach($borrowed_products as $borrowed_product)
                                @include('product.components.borrowedProductCard')
                            @endforeach
                        @else
                            <p class="center-text">Je leent geen producten</p>
                        @endif
                    </section>
                    <br>
                    <section class="margin-bottom">
                        <h1 class="center-text ">Aangeboden producten</h1>
                        @if(!$user_products->isEmpty())
                            @foreach($user_products as $user_product)
                                @include('product.components.userProductCard')
                            @endforeach
                        @else
                        <p class="center-text">Je bied geen producten aan</p>
                        @endif
                        <br>
                        @if(!$user_products->isEmpty())
                            <a href="/create" class="button-primary-swapped margin-bottom">Nieuw product aanbieden</a>
                        @else
                            <a href="/create" class="button-primary margin-bottom">Nieuw product aanbieden</a>
                        @endif
                    </section>

                </section>
            </article>
        </main>
    </body>
</html>

