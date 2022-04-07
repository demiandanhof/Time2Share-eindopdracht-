<article class="productCard--wrapper profile_product_card">
    <section class="productCard-left--wrapper">
        <img src="{{$borrowed_product->photo}}" alt="Foto van {{$borrowed_product->name}}">
        <p>{{$borrowed_product->category}}</p>
    </section>
    <section class="productCard-right--wrapper">
        <h1>{{$borrowed_product->name}}</h1>
        <section class="productCard-right-info--wrapper">
            <section class="info">
                <span class="material-icons-round">
                calendar_today
                </span>
                <p>{{$borrowed_product->deadline}}</p>
            </section>
            <section class="info">
                <img src="{{$borrowed_product->owner_profile_picture}}" alt="profielfoto van {{$borrowed_product->owner_name}}">
                <a href="/profile/{{$borrowed_product->user_id}}">{{$borrowed_product->owner_name}}</a>
            </section>

        </section>
        <section class="productCard-see-button--wrapper">
            <a href="product/{{$borrowed_product->id}}/return" class="button-primary-swapped">Teruggeven</a>
        </section>
    </section>
</article>