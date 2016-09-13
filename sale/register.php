<div class="main-wrapper">
  <div id="vue">
    <cart :cart="cart" :cart-sub-total="cartSubTotal" :tax="tax" :cart-total="cartTotal" :checkout-bool="checkoutBool"></cart>
    <products :cart="cart" :cart-sub-total="cartSubTotal" :tax="tax" :cart-total="cartTotal" :products-data="productsData"></products>
    <checkout-area v-if="checkoutBool" :cart="cart" :tax="tax" :cart-sub-total="cartSubTotal" :cart-total="cartTotal" :products-data="productsData" :total-with-tax="totalWithTax"></checkout-area>
  </div>
</div>