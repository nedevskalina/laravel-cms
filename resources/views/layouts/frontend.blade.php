<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>UrbanVibe Print</title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="/css/animations.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="/plugins/hover/hover-min.css" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <link href="/css/style.css" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <link href="/css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/css/skins/light_blue.css" rel="stylesheet">


    <!-- Custom css -->
    <link href="/css/custom.css" rel="stylesheet">
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans  transparent-header  ">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-container start -->
    <div class="header-container">


        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        @include('frontend.partials.header')
        <!-- header end -->
    </div>
    <!-- header-container end -->

    <!-- banner start -->
    <!-- ================ -->
    @yield('slider')
    <!-- banner end -->

    <div id="page-start"></div>

    <!-- section start -->
    <!-- ================ -->
    <section class="section light-gray-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals"><i class="icon-star"></i> Latest Arrivals</a></li>
                        <li><a href="#pill-2" role="tab" data-toggle="tab" title="Featured"><i class="icon-heart"></i> Featured</a></li>
                        <li><a href="#pill-3" role="tab" data-toggle="tab" title="Top Sellers"><i class=" icon-up-1"></i> Top Sellers</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-1.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <span class="badge">30% OFF</span>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Suscipit consequatur velit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$100.00</del> $70.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-2.jpg" alt="">
                                            <span class="badge">25% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Consectetur adipisicing elit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$199.00</del> $150.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-3.jpg" alt="">
                                            <span class="badge">33% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-3.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Quas inventore modi</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$9.99</del> $6.66</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-4.jpg" alt="">
                                            <span class="badge">20% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-4.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Lorem ipsum dolor sit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$86.25</del> $69.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-5.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Velit Suscipit consequatur</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$12.00</del> $8.40</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-6.jpg" alt="">
                                            <span class="badge">50% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-6.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Reprehenderit a reiciendis</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$158.00</del> $129.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-7.jpg" alt="">
                                            <span class="badge">40% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Cumque sequi repellat</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$49.99</del> $29.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-8.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-8.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Soluta suscipit dolore</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$11.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-2">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-2.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Consectetur adipisicing elit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$199.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-1.jpg" alt="">
                                            <span class="badge">New</span>
                                            <a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Suscipit consequatur velit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$70.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-4.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-4.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Lorem ipsum dolor sit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$99.00</del> $69.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-3.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-3.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Quas inventore modi</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$9.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-6.jpg" alt="">
                                            <span class="badge">20% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-6.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Reprehenderit a reiciendis</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$161.25</del> $129.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-5.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Velit Suscipit consequatur</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$12.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-8.jpg" alt="">
                                            <span class="badge">Offer</span>
                                            <a class="overlay-link popup-img-single" href="images/product-8.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Soluta suscipit dolore</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$11.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-7.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Cumque sequi repellat</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$29.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-3">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-4.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-4.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Lorem ipsum dolor sit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$99.00</del> $69.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-3.jpg" alt="">
                                            <span class="badge">New</span>
                                            <a class="overlay-link popup-img-single" href="images/product-3.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Quas inventore modi</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$9.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-2.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="images/product-2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Consectetur adipisicing elit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$199.00</del> $140.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-1.jpg" alt="">
                                            <span class="badge">Last 3 Pieces</span>
                                            <a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Suscipit consequatur velit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$70.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-8.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-8.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Soluta suscipit dolore</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$11.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-7.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Cumque sequi repellat</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$29.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-6.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-6.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Reprehenderit a reiciendis</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$129.00</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="images/product-5.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="shop-product.html">Velit Suscipit consequatur</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$12.99</span>
                                                <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pills end -->
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section dark-translucent-bg background-img-2" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="title">Don't Miss Out Our Offers</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <p><a href="#" class="btn btn-lg btn-default btn-animated">Learn More<i class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="logo-font">Brands</h3>
                    <div class="separator-2"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At distinctio quia, et natus nulla cumque consequuntur, <br> sed, quam aliquam excepturi ea necessitatibus facilis, vero illum dignissimos eligendi quasi consectetur possimus.</p>
                    <div class="clients-container">
                        <div class="clients">
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                                <a href="#"><img src="images/client-1.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                                <a href="#"><img src="images/client-2.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <a href="#"><img src="images/client-3.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
                                <a href="#"><img src="images/client-4.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
                                <a href="#"><img src="images/client-5.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
                                <a href="#"><img src="images/client-6.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
                                <a href="#"><img src="images/client-7.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
                                <a href="#"><img src="images/client-8.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                                <a href="#"><img src="images/client-1.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                                <a href="#"><img src="images/client-2.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <a href="#"><img src="images/client-3.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
                                <a href="#"><img src="images/client-4.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
                                <a href="#"><img src="images/client-5.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
                                <a href="#"><img src="images/client-6.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
                                <a href="#"><img src="images/client-7.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
                                <a href="#"><img src="images/client-8.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                                <a href="#"><img src="images/client-1.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                                <a href="#"><img src="images/client-2.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <a href="#"><img src="images/client-3.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
                                <a href="#"><img src="images/client-4.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
                                <a href="#"><img src="images/client-5.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
                                <a href="#"><img src="images/client-6.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
                                <a href="#"><img src="images/client-7.png" alt=""></a>
                            </div>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
                                <a href="#"><img src="images/client-8.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section light-gray-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Featured <strong>Categories</strong></h2>
                    <div class="separator"></div>
                    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa unde sequi consectetur atque blanditiis rem sed porro ducimus, quidem inventore eum quis.</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel carousel-autoplay pl-10 pr-10">
            <div class="listing-item pl-10 pr-10 mb-20">
                <div class="overlay-container bordered overlay-visible">
                    <img src="images/category-1.jpg" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-plus"></i></a>
                    <div class="overlay-bottom">
                        <div class="text">
                            <h3 class="title">Category Title</h3>
                            <div class="separator light"></div>
                            <p class="small margin-clear"><em>Quia nostrum temporibus et, <br> velit debitis ab, eligendi totam.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-item pl-10 pr-10 mb-20">
                <div class="overlay-container bordered overlay-visible">
                    <img src="images/category-2.jpg" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-plus"></i></a>
                    <div class="overlay-bottom">
                        <div class="text">
                            <h3 class="title">Category Title</h3>
                            <div class="separator light"></div>
                            <p class="small margin-clear"><em>Quia nostrum temporibus et, <br> velit debitis ab, eligendi totam.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-item pl-10 pr-10 mb-20">
                <div class="overlay-container bordered overlay-visible">
                    <img src="images/category-3.jpg" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-plus"></i></a>
                    <div class="overlay-bottom">
                        <div class="text">
                            <h3 class="title">Category Title</h3>
                            <div class="separator light"></div>
                            <p class="small margin-clear"><em>Quia nostrum temporibus et, <br> velit debitis ab, eligendi totam.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-item pl-10 pr-10 mb-20 mb-20">
                <div class="overlay-container bordered overlay-visible">
                    <img src="images/category-4.jpg" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-plus"></i></a>
                    <div class="overlay-bottom">
                        <div class="text">
                            <h3 class="title">Category Title</h3>
                            <div class="separator light"></div>
                            <p class="small margin-clear"><em>Quia nostrum temporibus et, <br> velit debitis ab, eligendi totam.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-item pl-10 pr-10 mb-20 mb-20">
                <div class="overlay-container bordered overlay-visible">
                    <img src="images/category-5.jpg" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-plus"></i></a>
                    <div class="overlay-bottom">
                        <div class="text">
                            <h3 class="title">Category Title</h3>
                            <div class="separator light"></div>
                            <p class="small margin-clear"><em>Quia nostrum temporibus et, <br> velit debitis ab, eligendi totam.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-item pl-10 pr-10 mb-20 mb-20">
                <div class="overlay-container bordered overlay-visible">
                    <img src="images/category-6.jpg" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-plus"></i></a>
                    <div class="overlay-bottom">
                        <div class="text">
                            <h3 class="title">Category Title</h3>
                            <div class="separator light"></div>
                            <p class="small margin-clear"><em>Quia nostrum temporibus et, <br> velit debitis ab, eligendi totam.</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section dark-translucent-bg pv-40" style="background-image:url('images/shop-banner.jpg');background-position: 50% 32%;">
        <div class="container">
            <div class="row grid-space-10">
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg"><i class="fa fa-diamond"></i></span>
                        <h3>Premium &amp; Guaranteed Quality</h3>
                        <div class="separator clearfix"></div>
                        <p>Voluptatem ad provident non repudiandae beatae cupiditate.</p>
                        <a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                        <span class="icon default-bg"><i class="icon-lock"></i></span>
                        <h3>Secure &amp; Safe Payment</h3>
                        <div class="separator clearfix"></div>
                        <p>Iure sequi unde hic. Sapiente quaerat sequi inventore.</p>
                        <a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg"><i class="icon-globe"></i></span>
                        <h3 class="pl-10 pr-10">Free &amp; Fast Shipping</h3>
                        <div class="separator clearfix"></div>
                        <p>Inventore dolores aut laboriosam cum consequuntur.</p>
                        <a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
                        <span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
                        <h3>24/7 Customer Support</h3>
                        <div class="separator clearfix"></div>
                        <p>Inventore dolores aut laboriosam cum consequuntur.</p>
                        <a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="title"><strong>Subscribe</strong> To Our Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
                                <div class="separator"></div>
                                <form class="form-inline margin-clear">
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="subscribe3">Email address</label>
                                        <input type="email" class="form-control form-control-lg" id="subscribe3" placeholder="Enter email" name="subscribe3" required="">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- footer top start -->
    <!-- ================ -->
    <div class="dark-bg  default-hovered footer-top animated-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Powerful Bootstrap Template</h2>
                                <h2>Waste no more time</h2>
                            </div>
                            <div class="col-sm-4">
                                <p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent ">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top end -->

    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-content">
                                <div class="logo-footer"><img id="logo-footer" src="images/logo_light_blue.png" alt=""></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed.</p>
                                <div class="icons-block mt-10 mb-10">
                                    <i class="fa fa-cc-paypal"></i>
                                    <i class="fa fa-cc-amex"></i>
                                    <i class="fa fa-cc-discover"></i>
                                    <i class="fa fa-cc-mastercard"></i>
                                    <i class="fa fa-cc-visa"></i>
                                    <i class="fa fa-cc-stripe"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">My Account</h2>
                                <div class="separator-2"></div>
                                <nav class="mb-20">
                                    <ul class="nav nav-pills nav-stacked list-style-icons">
                                        <li><a href="components-social-icons.html"><i class="icon-tools"></i> Settings</a></li>
                                        <li><a href="components-buttons.html"><i class="icon-search"></i> My Orders</a></li>
                                        <li><a href="components-buttons.html"><i class="icon-basket-1"></i> Cart</a></li>
                                        <li><a href="components-forms.html"><i class="icon-heart"></i> Wish List</a></li>
                                        <li><a href="components-tabs-and-pills.html"><i class="icon-chat"></i> Notifications</a></li>
                                        <li><a target="_blank" href="http://htmlcoder.me/support"><i class="icon-thumbs-up"></i> Support</a></li>
                                        <li><a href="#"><i class="icon-lock"></i> Privacy</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">Latest Products</h2>
                                <div class="separator-2"></div>
                                <div class="row grid-space-10">
                                    <div class="col-xs-6">
                                        <div class="overlay-container mb-10">
                                            <img src="images/product-1.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="overlay-container mb-10">
                                            <img src="images/product-2.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="overlay-container mb-10">
                                            <img src="images/product-3.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="overlay-container mb-10">
                                            <img src="images/product-4.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">Find Us</h2>
                                <div class="separator-2"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
                                <ul class="social-links circle animated-effect-1">
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
                                </ul>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-10 text-default"></i> One infinity loop, 54100</li>
                                    <li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
                                    <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>info@theproject.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
            <div class="container">
                <div class="subfooter-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">Copyright ?? 2016 The Project by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

    </footer>
    <!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="/plugins/modernizr.js"></script>
<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="/plugins/jquery.validate.js"></script>
<!-- Background Video -->
<script src="/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="/js/custom.js"></script>

</body>
</html>
