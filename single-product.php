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
                    <h3 class="heading">Single Product</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="container py-5 my-5 wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <ul class="singleProduct__img">
                <li><img src="images/product-img-1.png" alt="product" class="imgFluid" /></li>
                <li><img src="images/product-img-2.png" alt="product" class="imgFluid" /></li>
                <li><img src="images/product-img-3.png" alt="product" class="imgFluid" /></li>
                <li><img src="images/product-img-4.png" alt="product" class="imgFluid" /></li>
            </ul>
            <ul class="singleProduct__pictures">
                <li>
                    <img src="images/product-img-1.png" alt="product" class="imgFluid" />
                </li>
                <li>
                    <img src="images/product-img-2.png" alt="product" class="imgFluid" />
                </li>
                <li>
                    <img src="images/product-img-3.png" alt="product" class="imgFluid" />
                </li>
                <li>
                    <img src="images/product-img-4.png" alt="product" class="imgFluid" />
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-5">
            <div class="singleProduct__content">
                <h4 class="singleProduct__contentTitle">Lorem Ipsum Dolor Sit</h4>
                <div class="singleProduct__review">
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <span><a href="#">55 Reviews</a> &#8226;
                        <a href="#">Write a Review</a></span>
                </div>
                <div class="singleProduct__contentDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odit similique rem assumenda, facere libero optio ex error aliquam minus iste. Voluptatibus
                    corrupti, eius odio dignissimos adipisci placeat dolore beatae, nam provident libero illum
                    aliquid modi?</div>
                <ul class="singleProduct__info">
                    <li>
                        <div>Product Code</div>
                        <div>AA798D</div>
                    </li>
                    <li>
                        <div>Availability</div>
                        <div><span>3</span> in Stock</div>
                    </li>
                </ul>
                <div class="singleProduct__price">
                    <ins>&dollar;698.00</ins>
                    <del>&dollar;2195.00</del>
                </div>
                <div class="singleProduct__stockLeft">
                    <p>Hurry! Only 3 left in stock</p>
                    <progress min="0" value="3" max="9"></progress>
                </div>
                <div class="singleProduct__quantity">
                    <p>Quantity</p>
                    <div>
                        <div class="singleProduct__quantityCounter">
                            <button><i class="fas fa-minus"></i></button>
                            <input type="number" value="1">
                            <button><i class="fas fa-plus"></i></button>
                        </div>
                        <a href="cart.php" class="themeBtn"><i class="bx bx-cart-alt"></i> Add to Cart</a>
                    </div>
                    <a href="cart.php" class="themeBtn themeBtn--full">Buy It Now</a>
                    <ul>
                        <li>
                            <a href="#"><i class="far fa-heart"></i> Add to wishlist</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-chart-bar"></i> Add to compare</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-question-circle"></i> Ask about
                                product</a>
                        </li>
                    </ul>
                </div>
                <ul class="singleProduct__social">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Products -->
<div class="section py-5 my-5">
    <div class="section__bg section__bg--gradient wow fadeInUp"></div>
    <div class="container">
        <div class="row mb-4 wow fadeInLeftBig">
            <div class="col-12">
                <div class="section-content">
                    <h2 class="heading">Similar Products</h2>
                </div>
            </div>
        </div>
        <div class="row products-slider wow zoomInUp">
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-1.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-2.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-3.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-4.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-1.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-2.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-3.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product-card">
                    <div class="product-card__img">
                        <img src="images/product-img-4.png" alt="image" class="imgFluid">
                        <a href="single-product.php" class="themeBtn themeBtn--rounded">View Details</a>
                    </div>
                    <div class="product-card__content">
                        <a href="single-product.php" class="title">Your title here</a>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="product-card__content-bottom">
                            <ul class="rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star-half'></i></li>
                            </ul>
                            <div class="price">&dollar;86.99</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'include/footer.php'; ?>