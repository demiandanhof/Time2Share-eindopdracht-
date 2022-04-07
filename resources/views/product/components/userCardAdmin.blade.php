<article class="productCard--wrapper profile_product_card">
    <section class="productCard-left--wrapper">
        <img src="{{$user->profile_picture}}" alt="Foto van {{$user->name}}">
    </section>
    <section class="productCard-right--wrapper">
        <h1>{{$user->name}}</h1>
        <a href="/profile/{{$user->id}}" class="button-primary-swapped">Naar profiel</a>
        <br>
        <a href="/delete/user/{{$user->id}}" class="button-delete center-text">Gebruiker blokkeren</a>
    </section>
</article>