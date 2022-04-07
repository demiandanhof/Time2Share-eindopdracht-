<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->name}} - TimeToShare</title>
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
            <article class="product_content--wrapper a-popup">
                <section class="product_content_left--wrapper">
                    <img src="{{$product->photo}}" alt="Foto van {{$product->name}}">
                    <p class="grey center-text">{{$product->category}}</p>
                    <p class="inline-size-fix center-text">{{$product->description}}</p>
                </section>
                <section class="product_content_right--wrapper">
                    <h1>{{$product->name}}</h1>
                    @if($product->user_id == $current_user_id)
                        <a class="button-disabled extra-width" pointer-events: none>Lenen</a>
                        <p>Je kan niet je eigen product lenen.</p>
                    @elseif($product->status == "Niet beschikbaar")
                        <a class="button-disabled extra-width" pointer-events: none>Lenen</a>
                        <p>{{$product->status}}</p>
                    @else
                        <a href="{{$product->id}}/borrow" class="button-primary extra-width">Lenen</a>
                    @endif
                    <br>
                    <h3>Te lenen voor</h3>
                    <section class="info_product_page">
                        <span class="material-icons-round" style="font-size:48px;">
                        calendar_today
                        </span>
                        <p>{{$product->deadline}}</p>
                    </section>

                    <h3>Aangeboden door</h3>
                    <section class="info_product_page">
                        <img src="{{$product->owner_profile_picture}}" alt="profielfoto van {{$product->owner_name}}">
                        <a href="/profile/{{$product->user_id}}">{{$product->owner_name}}</a>
                    </section>
                </section>
            </article>
        </main>
    </body>
</html>
