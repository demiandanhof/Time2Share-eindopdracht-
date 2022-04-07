<article class="productCard--wrapper profile_product_card">
    <section class="productCard-left--wrapper">
        <img src="{{$user_product->photo}}" alt="Foto van {{$user_product->name}}">
        <p>{{$user_product->category}}</p>
    </section>
    <section class="productCard-right--wrapper">
        <h1>{{$user_product->name}}</h1>
        <section class="productCard-right-info--wrapper">
            <section class="info">
                <span class="material-icons-round">
                calendar_today
                </span>
                <p>{{$user_product->deadline}}</p>
            </section>
            <section class="info">
                @if($user_product->status == "Niet beschikbaar")
                    <span class="dot red"></span>
                @else
                    <span class="dot green"></span>
                @endif
                <p>{{$user_product->status}}</p>
            </section>

        </section>
        <section class="productCard-see-button--wrapper card-profile">
            <a href="product/{{$user_product->id}}" class="button-primary-swapped see_product">Bekijk product</a>
        </section>
    </section>
</article>