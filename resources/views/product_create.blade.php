<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpagina - TimeToShare</title>
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
            <img src="{{$profile_picture}}" alt="Profielfoto" id="js--profilepicture" onclick="myProfile()">
        </header>
        <main >
            <form action="/store/product" method="POST" class="product_form a-popup">
                @csrf
                <h1 class="center-text">Product aanbieden</h1>
                <section>
                    <label for="name">Naam van het product</label>
                    <input name="name" id="name" type="text" class="general_textarea general_input" maxlength="26"/>
                </section>

                <section>
                    <label for="description">Beschrijving</label>
                    <textarea name="description" id="description" type="text" maxlength="84" class="general_textarea"></textarea>
                </section>
            
                <section>
                    <label for="img">Upload een foto</label>
                    <input type="file" id="img" name="img" accept="image/*" >
                </section>

                <section>
                    <label for="deadline">Hoe lang wil je het product uitlenen?</label>
                    <select name="deadline" id="deadline" class="select-blue">
                        <option value="1 week">1 week</option>
                        <option value="2 weken">2 weken</option>
                        <option value="3 weken">3 weken</option>
                        <option value="4 weken">4 weken</option>
                    </select>
                </section>

                <section>
                    <label for="category">Categorie van het product</label>
                    <select name="category" id="categories" class="select-blue">
                        <option value="Boeken">Boeken</option>
                        <option value="Elektronica">Elektronica</option>
                        <option value="Kleding en Accessoires">Kleding en accessoires</option>
                        <option value="Speelgoed">Speelgoed</option>
                        <option value="Vervoersmiddelen">Vervoersmiddelen</option>
                        <option value="Anders">Anders</option>
                    </select>
                </section>
            
                <button type="submit" class="button-primary">Product toevoegen</button>
            </form>
        </main>
    </body>
</html>
