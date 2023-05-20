<li class="cart-item">
    <div class="cart-media">
      <a href="#"><img src="{{("storage/images/product/".$image)}}" alt="{{$name}}" /></a
      ><button class="cart-delete">
        <i class="far fa-trash-alt"></i>
      </button>
    </div>
    <div class="cart-info-group">
      <div class="cart-info">
        <h6><a href="product-single.html">{{$name}}</a></h6>
        <p>Unit Price - ₹{{$price}}</p>
      </div>
      <div class="cart-action-group">
        <div class="product-action">
          <button class="action-minus" title="Quantity Minus">
            <i class="icofont-minus"></i></button
          ><input class="action-input"
            title="Quantity Number"
            type="text"
            name="quantity"
            value="1"
          /><button class="action-plus" title="Quantity Plus">
            <i class="icofont-plus"></i>
          </button>
        </div>
        <h6>₹{{$price * 2}}</h6>
      </div>
    </div>
  </li>