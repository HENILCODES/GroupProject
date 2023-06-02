<div class="col">
    <div class="category-wrap">
        <div class="category-media">
            <img src="{{ asset('storage/images/product/'.$image) }}" alt="category" />
            <div class="category-overlay">
                <a href="{{route('categorys.show',$id)}}"><i class="fas fa-link"></i></a>
            </div>
        </div>
        <div class="category-meta">
            <h4>{{$name}}</h4>
            <p>({{$totalProductItem}} items)</p>
        </div>
    </div>
</div>
