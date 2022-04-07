<article class="productCard--wrapper profile_product_card">
    <section class="productCard-left--wrapper">
        <img src="{{$user_product->photo}}" alt="Foto van {{$user_product->name}}">
        <p>{{$user_product->category}}</p>
    </section>
    <section class="productCard-right--wrapper">
        <h1>{{$user_product->name}}</h1>
        <section class="productCard-right-info--wrapper">
            <section class="info">
                <span class="material-icons-round calendar">
                calendar_today
                </span>
                <p>{{$user_product->deadline}}</p>
            </section>
            <section class="info">
                <img src="{{$user_product->owner_profile_picture}}" alt="profielfoto van {{$user_product->owner_name}}">
                <a href="/profile/{{$user_product->user_id}}">{{$user_product->owner_name}}</a>
            </section>

        </section>
        <section class="productCard-see-button--wrapper">
            <a href="product/{{$user_product->id}}" class="button-primary-swapped see_product">Bekijk product</a>
            <a href="/delete/product/{{$user_product->id}}" class="button-delete material-icons-round">delete_outline</a>
        </section>
    </section>
</article>

