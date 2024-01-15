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
                    <h3 class="heading">Checkout</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Checkout -->
<div class="container py-5 my-5 wow zoomIn">
    <form action="#">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="auth-form">
                    <div class="checkout-box__title">Billing Information</div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="input-field">
                                <label for="firstName">First Name <span class="required">*</span></label>
                                <input type="text" name="firstName" id="firstName" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-field">
                                <label for="lastName">Last Name <span class="required">*</span></label>
                                <input type="text" name="lastName" id="lastName" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-field">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" name="email" id="email" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-field">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <input type="text" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-field">
                                <label for="company">Company (optional)</label>
                                <input type="text" name="company" id="company" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-field">
                                <label for="address">Address <span class="required">*</span></label>
                                <input type="text" name="address" id="address" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-field">
                                <label for="postal">Postal Code <span class="required">*</span></label>
                                <input type="text" name="postal" id="postal" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-field">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-field">
                                <label for="country">Country</label>
                                <select name="country" id="country">
                                    <option value="USA">USA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="checkout-box">
                    <div class="checkout-box__title">Order Overview</div>
                    <ul class="checkout__orderOverview">
                        <li>
                            <span>Sub Total</span>
                            <span>$53.97</span>
                        </li>
                        <li>
                            <span>Discount Vouchers</span>
                            <span>$0.00</span>
                        </li>
                        <li>
                            <span>Shipping</span>
                            <span>$0.00</span>
                        </li>
                        <li class="total">
                            <span>Total</span>
                            <span>$53.97</span>
                        </li>
                    </ul>
                </div>
                <div class="checkout-box checkout__paymentMethod">
                    <div class="checkout-box__title">Payment Method</div>
                    <ul class="checkout__radios">
                        <li>
                            <input type="radio" name="payment" id="cod" />
                            <label for="cod">Cash on delivery</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="paypal" />
                            <label for="paypal">Paypal <img src="images/paypal.png" alt="" /></label>
                        </li>
                    </ul>
                    <button type="submit" class="themeBtn themeBtn--full mt-4">Place Your Order</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Footer -->
<?php include 'include/footer.php'; ?>