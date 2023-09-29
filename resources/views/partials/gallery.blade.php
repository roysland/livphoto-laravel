<section class="image-grid">
    @foreach($images as $image)
    <figure data-id="{{$image->id}}" data-order="{{$image->gallery_order}}" data-folder={{$image->category}} data-src={{$image->url}} tab-index="0">
        <picture>
            <source media="(min-width: 768px)" srcset={{ $image->url }} />
            <source media="(min-width: 0px)" srcset={{ $image->url }} />
            <img src={{ $image->url }} alt="" />
        </picture>
    </figure>
    @endforeach
</section>