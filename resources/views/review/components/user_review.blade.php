<article class="user_review--wrapper">
    <section class="thumb-section--wrapper">
        <img src="{{$review->thumbs}}" alt="">
    </section>
    <section class="text-section--wrapper">
        <p>{{$review->writer_name}}</p>
        <h2>{{$review->review_text}}</h2>
        <p>{{$review->created_at}}</p>
    </section>
</article>