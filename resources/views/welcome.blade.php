<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom - TimeToShare</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="/js/filter.js"></script>
</head>
    <body>
        <header class="logged_out">
            <img src="/img/misc/TimeToShare_Logo.png" alt="Website logo" class="website-logo">
            <input type="text" class="searchbar box-shadow" id="js--searchbar">
            <a href="/" class="button-primary login">Inloggen/registreren</a>
        </header>
        <main>
            <article class="welcome-banner--wrapper">
                <section class="welcome-banner-img-section">
                    <img src="/img/misc/sharing_caring.png" alt="Sharing is caring foto">
                </section>
                <section class="welcome-banner-right-section">
                    <p>Time To Share is hét platform voor het lenen en uitlenen van spullen</p>
                    <section class="welcome-banner-buttons">
                        <a href="/register" class="button-secondary box-shadow">Account aanmaken</a>
                        <a href="/" class="button-primary box-shadow hidden">Inloggen</a>
                    </section>
                </section>
            </article>
            
            <article class="main-content--wrapper">
                <section class="main-content-top--wrapper">
                    <h1>Nu te leen</h1>
                    <section class="main-content-filters--wrapper">
                        <section class="filter--wrapper">
                            <select name="category" id="category">
                                <option value="Alle categorieën">Alle categorieën</option>
                                <option value="boeken">Boeken</option>
                                <option value="Elektronica">Elektronica</option>
                                <option value="kleding_en_accessoires">Kleding en accessoires</option>
                                <option value="Speelgoed">Speelgoed</option>
                                <option value="Vervoersmiddelen">Vervoersmiddelen</option>
                                <option value="Anders">Anders</option>
                            </select>
                    </section>
                    <section class="filter--wrapper">
                        <select name="weeks" id="weeks">
                            <option value="Alle weken">Alle weken</option>
                            <option value="1 week">1 week</option>
                            <option value="2 weken">2 weken</option>
                            <option value="3 weken">3 weken</option>
                            <option value="4 weken">4 weken</option>
                        </select>
                    </section>
                </section>
            </section>

            <section class="product-cards--wrapper a-popup">
            @foreach($all_products as $product)
                @if($product->status == "Beschikbaar")
                    @include('product.components.productCard')
                @endif
            @endforeach
        </section>
    </article>
    <input type="text" class="searchbar-mobile box-shadow mobile-only" id="js--searchbar2">
</main>
    </body>
</html>