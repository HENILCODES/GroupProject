<aside class="cart-sidebar">
    <div class="cart-header">
      <div class="cart-total">
        <i class="fas fa-shopping-basket"></i><span>total item (5)</span>
      </div>
      <button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list">
     <x-products.carts.item name="Mango" price="25" image="05.jpg" />
     <x-products.carts.item name="Bangan" price="55" image="04.jpg"/>
     <x-products.carts.item name="Milk" price="32" image="14.jpg"/>
    </ul>
    <div class="cart-footer">
      <button class="coupon-btn">Do you have a coupon code?</button>
      <form class="coupon-form">
        <input type="text" placeholder="Enter your coupon code" /><button
          type="submit"
        >
          <span>apply</span>
        </button>
      </form>
      <a class="cart-checkout-btn" href="checkout.html"
        ><span class="checkout-label">Proceed to Checkout</span
        ><span class="checkout-price">₹369.78</span></a
      >
    </div>
  </aside>