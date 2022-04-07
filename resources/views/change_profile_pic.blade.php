<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verboden - TimeToShare</title>
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
            <form action="/store/profilepic" method="POST" class="product_form a-popup">
                @csrf
                <h1 class="center-text">Verander je profielfoto</h1>
            
                <section>
                    <label for="img">Upload een foto</label>
                    <input type="file" id="img" name="img" accept="image/*" >
                </section>
            
                <button type="submit" class="button-primary">Profielfoto veranderen</button>
            </form>
        </main>
    </body>
</html>