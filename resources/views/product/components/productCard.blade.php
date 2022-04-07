<article class="productCard--wrapper" data-product-weeks={{$product->deadline}} data-product-category={{$product->category}}>
    <section class="productCard-left--wrapper">
        <img src="{{$product->photo}}" alt="Foto van {{$product->name}}">
        <p class="product_category">{{$product->category}}</p>
    </section>
    <section class="productCard-right--wrapper">
        <h1>{{$product->name}}</h1>
        <section class="productCard-right-info--wrapper">
            <section class="info">
                <span class="material-icons-round">
                calendar_today
                </span>
                <p>{{$product->deadline}}</p>
            </section>
            <section class="info">
                <img src="{{$product->owner_profile_picture}}" alt="profielfoto van {{$product->owner_name}}">
                <a href="/profile/{{$product->user_id}}">{{$product->owner_name}}</a>
            </section>

        </section>
        <section class="productCard-see-button--wrapper">
            <a href="/product/{{$product->id}}" class="button-primary-swapped">Bekijk product</a>
        </section>
    </section>
</article>