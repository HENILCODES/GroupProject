
<div class="product-card">
    <div class="product-media">
        <div class="product-label">
            <label class="label-text {{$badge}}">{{$badge}}</label>
        </div>
        <button class="product-wish wish">
            <i class="fas fa-heart"></i></button>
        <a class="product-image" href="product-tab.html"> <img src="{{ asset('storage/images/product/'.$image) }}"
                alt="product" /></a>
    </div>
    <div class="product-content">
        <h6 class="product-name">
            <a href="product-tab.html">{{ $name }}</a>
        </h6>
        <h6 class="product-price">
            <del>₹{{ $price+25 }}</del>
            <span><b class="fw-bold">₹{{ $price }} </b> <span style="color: rgb(152, 111, 255) !important"> / {{$rateValue}}<sup>{{$rate}}</sup></span>
            </span>
        </h6>
        <button class="product-add" title="Add to Cart">
            <i class="fas fa-shopping-basket"></i><span>add</span>
        </button>
        <div class="product-action">
            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1" />
            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
        </div>
    </div>
</div>