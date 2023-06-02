<div class="col">
    <div class="feature-card">
        <div class="feature-media">
            <div class="feature-label">
                <label class="label-text feature">{{$badge}}</label>
            </div>
            <button class="feature-wish wish">
                <i class="fas fa-heart"></i></button><a class="feature-image" href="{{route("products.show",$id)}}"><img
                    src="{{asset("storage/images/product/".$image)}}" alt="product" /></a>
        </div>
        <div class="feature-content">
            <h6 class="feature-name">
                <a href="{{route("products.show",$id)}}">{{$name}}</a>
            </h6>
            <div class="feature-rating">
                <span class="text-muted" style="color: rgb(156, 141, 52) !important">{{$brand}}</span>
            </div>
            <h6 class="feature-price">
                <del>₹{{$price+20}}</del><span><span class="fw-bold">₹{{$price}}</span>
                    <span style="color: rgb(152, 111, 255) !important">/ {{$rate}}</span></span>
            </h6>
            <p class="feature-desc">
                {{$description}}
            </p>
            <button class="product-add" title="Add to Cart">
                <i class="fas fa-shopping-basket"></i><span>add</span>
            </button>
            <div class="product-action">
                <button class="action-minus" title="Quantity Minus">
                    <i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number"
                    type="text" name="quantity" value="1" /><button class="action-plus" title="Quantity Plus">
                    <i class="icofont-plus"></i>
                </button>
            </div>
        </div>
    </div>
</div>
