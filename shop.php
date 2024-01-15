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
                    <h3 class="heading">Trays</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->
<div class="container py-5 my-5">
    <div class="row wow zoomInUp">
        <div class="col-12">
            <div class="product-actions">
                <button data-toggle-btn="filter"><i class="bx bx-sm bx-filter-alt"></i> Filters</button>
                <select name="">
                    <option value="">Featured</option>
                    <option value="">Best Selling</option>
                    <option value="">Alphabetically, A-Z</option>
                    <option value="">Alphabetically, Z-A</option>
                    <option value="">Price, low to high</option>
                    <option value="">Price, high to low</option>
                    <option value="">Date, new to old</option>
                    <option value="">Date, old to new</option>
                </select>
                <button class="active"><i class="bx bx-sm bx-grid-alt"></i></button>
                <button><i class="bx bx-sm bx-menu-alt-left"></i></button>
            </div>
            <div class="product-filterWrapper mb-4" data-toggle-content="filter">
                <div class="row">
                    <div class="col-12 col-lg">
                        <div class="product-filter">
                            <div class="product-filter__title">Categories</div>
                            <ul>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="category">
                                    <label>Category 1</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="category">
                                    <label>Category 2</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="category">
                                    <label>Category 3</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="category">
                                    <label>Category 4</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="product-filter">
                            <div class="product-filter__title">Brands</div>
                            <ul>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="brand">
                                    <label>Brand 1</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="brand">
                                    <label>Brand 2</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="product-filter">
                            <div class="product-filter__title">Price Filter</div>
                            <ul>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="price">
                                    <label>$10 - $20</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="price">
                                    <label>$21 - $30</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="price">
                                    <label>$31 - $50</label>
                                </li>
                                <li class="product-filter__checkbox">
                                    <input type="checkbox" name="price">
                                    <label>$51 - $100</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="product-filter">
                            <div class="product-filter__title">Sizes</div>
                            <ul class="product-filter__list">
                                <li class="product-filter__checkbox product-filter__checkbox--lg">
                                    <input type="checkbox" name="size">
                                    <label data-size="S"></label>
                                </li>
                                <li class="product-filter__checkbox product-filter__checkbox--lg">
                                    <input type="checkbox" name="size">
                                    <label data-size="M"></label>
                                </li>
                                <li class="product-filter__checkbox product-filter__checkbox--lg">
                                    <input type="checkbox" name="size">
                                    <label data-size="L"></label>
                                </li>
                                <li class="product-filter__checkbox product-filter__checkbox--lg">
                                    <input type="checkbox" name="size">
                                    <label data-size="XL"></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="product-filter">
                            <div class="product-filter__title">Colors</div>
                            <ul class="product-filter__list">
                                <li
                                    class="product-filter__checkbox product-filter__checkbox--lg product-filter__checkbox--rounded">
                                    <input type="checkbox" name="size">
                                    <label style="--bg:#ff0000"></label>
                                </li>
                                <li
                                    class="product-filter__checkbox product-filter__checkbox--lg product-filter__checkbox--rounded">
                                    <input type="checkbox" name="size">
                                    <label style="--bg:#00ff00"></label>
                                </li>
                                <li
                                    class="product-filter__checkbox product-filter__checkbox--lg product-filter__checkbox--rounded">
                                    <input type="checkbox" name="size">
                                    <label style="--bg:#0000ff"></label>
                                </li>
                                <li
                                    class="product-filter__checkbox product-filter__checkbox--lg product-filter__checkbox--rounded">
                                    <input type="checkbox" name="size">
                                    <label style="--bg:#ff00ff"></label>
                                </li>
                            </ul>
                        </div>
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
        <div class="col-12 mt-5">
            <ul class="pagination">
                <li><a href="#"><i class='bx bx-left-arrow-alt'></i></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#"><i class='bx bx-right-arrow-alt'></i></a></li>
            </ul>
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