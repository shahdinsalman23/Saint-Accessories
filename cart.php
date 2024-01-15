<!-- Header -->
<?php include 'include/header.php'; ?>

<!-- Banner -->
<div class="banner banner--mini">
    <div class="banner__bg wow fadeInUpBig">
        <img src="images/banner-bg-1.png" alt="image" class="imgFluid">
    </div>
    <div class="container wow zoomIn" data-wow-delay="750ms">
        <div class="row">
            <div class="col-12">
                <div class="banner__content section-content section-content--light">
                    <h3 class="heading">Cart</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart -->
<div class="container py-5 my-5 wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="cart-product">
                <div class="cart-product__img">
                    <img src="images/product-img-1.png" alt="Product Image" />
                </div>
                <div class="cart-product__content">
                    <div class="cart-product__contentTop">
                        <div>
                            <div class="title">Lorem ipsum dolor</div>
                            <div class="desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit.
                            </div>
                            <div class="subtitle">SKU # 12345</div>
                        </div>
                        <div class="cart-product__quantity">
                            <button><i class='bx bx-minus'></i></button>
                            <input type="text" value="1">
                            <button><i class='bx bx-plus'></i></button>
                        </div>
                    </div>
                    <div class="cart-product__contentBottom">
                        <button class="themeBtn">
                            <i class='bx bx-sm bx-trash'></i> Remove from Cart
                        </button>
                        <button class="themeBtn">
                            <i class="bx bx-sm bx-heart"></i> Move to Wishlist
                        </button>
                        <span class="price">&dollar;17.99</span>
                    </div>
                </div>
            </div>
            <div class="cart-product">
                <div class="cart-product__img">
                    <img src="images/product-img-2.png" alt="Product Image" />
                </div>
                <div class="cart-product__content">
                    <div class="cart-product__contentTop">
                        <div>
                            <div class="title">Lorem ipsum dolor</div>
                            <div class="desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit.
                            </div>
                            <div class="subtitle">SKU # 12345</div>
                        </div>
                        <div class="cart-product__quantity">
                            <button><i class='bx bx-minus'></i></button>
                            <input type="text" value="1">
                            <button><i class='bx bx-plus'></i></button>
                        </div>
                    </div>
                    <div class="cart-product__contentBottom">
                        <button class="themeBtn">
                            <i class='bx bx-sm bx-trash'></i> Remove from Cart
                        </button>
                        <button class="themeBtn">
                            <i class="bx bx-sm bx-heart"></i> Move to Wishlist
                        </button>
                        <span class="price">&dollar;17.99</span>
                    </div>
                </div>
            </div>
            <div class="cart-product">
                <div class="cart-product__img">
                    <img src="images/product-img-3.png" alt="Product Image" />
                </div>
                <div class="cart-product__content">
                    <div class="cart-product__contentTop">
                        <div>
                            <div class="title">Lorem ipsum dolor</div>
                            <div class="desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit.
                            </div>
                            <div class="subtitle">SKU # 12345</div>
                        </div>
                        <div class="cart-product__quantity">
                            <button><i class='bx bx-minus'></i></button>
                            <input type="text" value="1">
                            <button><i class='bx bx-plus'></i></button>
                        </div>
                    </div>
                    <div class="cart-product__contentBottom">
                        <button class="themeBtn">
                            <i class='bx bx-sm bx-trash'></i> Remove from Cart
                        </button>
                        <button class="themeBtn">
                            <i class="bx bx-sm bx-heart"></i> Move to Wishlist
                        </button>
                        <span class="price">&dollar;17.99</span>
                    </div>
                </div>
            </div>
            <div class="cart-product">
                <div class="cart-product__img">
                    <img src="images/product-img-4.png" alt="Product Image" />
                </div>
                <div class="cart-product__content">
                    <div class="cart-product__contentTop">
                        <div>
                            <div class="title">Lorem ipsum dolor</div>
                            <div class="desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit.
                            </div>
                            <div class="subtitle">SKU # 12345</div>
                        </div>
                        <div class="cart-product__quantity">
                            <button><i class='bx bx-minus'></i></button>
                            <input type="text" value="1">
                            <button><i class='bx bx-plus'></i></button>
                        </div>
                    </div>
                    <div class="cart-product__contentBottom">
                        <button class="themeBtn">
                            <i class='bx bx-sm bx-trash'></i> Remove from Cart
                        </button>
                        <button class="themeBtn">
                            <i class="bx bx-sm bx-heart"></i> Move to Wishlist
                        </button>
                        <span class="price">&dollar;17.99</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="cart-box">
                <div class="cart-box__title">Cart Summary</div>
                <ul class="cart__summary">
                    <li>
                        <span>Sub Total</span>
                        <span>&dollar;53.97</span>
                    </li>
                    <li>
                        <span>Shipping</span>
                        <span>Free</span>
                    </li>
                    <li><input type="text" placeholder="Add a discount code (optional)" /></li>
                    <li class="total">
                        <span>Total</span>
                        <span>&dollar;53.97</span>
                    </li>
                </ul>
                <a href="checkout.php" class="themeBtn themeBtn--full mt-4">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'include/footer.php'; ?>