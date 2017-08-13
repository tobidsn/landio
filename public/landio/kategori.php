
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Land.io: Belanja sambil sedekah </title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Peter Finlan and Taty Grassini Codrops" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="css/landio.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <!-- Navigation
    ================================================== -->
     <nav class="navbar navbar-dark bg-inverse">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <span class="icon-logo"></span>
          <span class="sr-only">Land.io</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <ul class="nav navbar-nav pull-xs-right"> 
            <li class="nav-item nav-item-toggable active">
              <a class="nav-link" href="#">Belanja</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#">Kategori</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#">Cara Kerja</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Cari produk, brands &amp; toko&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-sm-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Cari produk, brands &amp; toko&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-sm-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                <div class="media">
                  <div class="media-left">
                    <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading">Joel Fisher</h5>
                    <h6>hey@joelfisher.com</h6>
                  </div>
                </div>
                <a href="#" class="dropdown-item text-uppercase">Daftar</a>
                <a href="#" class="dropdown-item text-uppercase">Masuk</a>
                <a href="#" class="dropdown-item text-uppercase">View posts</a>
                <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
                <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
                <a href="#" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">Tobi Muhamad</h5>
              <h6>tobidsn@gmail.com</h6>
            </div>
          </div>
          <a href="#" class="dropdown-item text-uppercase">View posts</a>
          <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
          <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
          <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
          <a href="#" class="btn-circle has-gradient pull-xs-right m-b-1">
            <span class="sr-only">Edit</span>
            <span class="icon-edit"></span>
          </a>
        </div>
      </div>
    </nav>

    <div class="container text-xs-center">
         <h3 style="padding-top: 40px">Pilih Kategori</h3>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="product span4"> 
                         <div class="image">
                            <a href="/collections/all/products/goat-mug">
                              <img src="//cdn.shopify.com/s/files/1/0249/6470/products/cd5c0ad1a1a2d2dfed5e981c56b332ae_large_02127aad-ca4a-4620-946c-3f0733e82086_large.jpg?v=1422234257" alt="Goat Mug">
                            <span class="hover-text"><p>A coffee mug that is practical and sustainable, but is also a fashion accessory and tells the primeval story of coffee.</p></span>
                            </a>
                        </div>
                        <div class="details">
                            <a href="/collections/all/products/goat-mug" class="clearfix">
                               <span class="title">Goat Mug</span> 
                               <span class="price"> 
                                 | Rp. 100k
                               </span>
                               <span class="tbl">Beli</span> 
                            </a> 
                          </div>
                    </div>
                </div> 

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="product span4"> 
                         <div class="image">
                            <a href="/collections/all/products/goat-mug">
                              <img src="//cdn.shopify.com/s/files/1/0249/6470/products/cd5c0ad1a1a2d2dfed5e981c56b332ae_large_02127aad-ca4a-4620-946c-3f0733e82086_large.jpg?v=1422234257" alt="Goat Mug">
                            <span class="hover-text"><p>A coffee mug that is practical and sustainable, but is also a fashion accessory and tells the primeval story of coffee.</p></span>
                            </a>
                        </div>
                        <div class="details">
                            <a href="/collections/all/products/goat-mug" class="clearfix">
                               <span class="title">Goat Mug</span> 
                               <span class="price"> 
                                 | Rp. 100k
                               </span>
                               <span class="tbl">Beli</span> 
                            </a> 
                          </div>
                    </div>
                </div> 

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="product span4"> 
                         <div class="image">
                            <a href="/collections/all/products/goat-mug">
                              <img src="//cdn.shopify.com/s/files/1/0249/6470/products/cd5c0ad1a1a2d2dfed5e981c56b332ae_large_02127aad-ca4a-4620-946c-3f0733e82086_large.jpg?v=1422234257" alt="Goat Mug">
                            <span class="hover-text"><p>A coffee mug that is practical and sustainable, but is also a fashion accessory and tells the primeval story of coffee.</p></span>
                            </a>
                        </div>
                        <div class="details">
                            <a href="/collections/all/products/goat-mug" class="clearfix">
                               <span class="title">Goat Mug</span> 
                               <span class="price"> 
                                 | Rp. 100k
                               </span>
                               <span class="tbl">Beli</span> 
                            </a> 
                          </div>
                    </div>
                </div> 

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="product span4"> 
                         <div class="image">
                            <a href="/collections/all/products/goat-mug">
                              <img src="//cdn.shopify.com/s/files/1/0249/6470/products/cd5c0ad1a1a2d2dfed5e981c56b332ae_large_02127aad-ca4a-4620-946c-3f0733e82086_large.jpg?v=1422234257" alt="Goat Mug">
                            <span class="hover-text"><p>A coffee mug that is practical and sustainable, but is also a fashion accessory and tells the primeval story of coffee.</p></span>
                            </a>
                        </div>
                        <div class="details">
                            <a href="/collections/all/products/goat-mug" class="clearfix">
                               <span class="title">Goat Mug</span> 
                               <span class="price"> 
                                 | Rp. 100k
                               </span>
                               <span class="tbl">Beli</span> 
                            </a> 
                          </div>
                    </div>
                </div> 

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="product span4"> 
                         <div class="image">
                            <a href="/collections/all/products/goat-mug">
                              <img src="//cdn.shopify.com/s/files/1/0249/6470/products/cd5c0ad1a1a2d2dfed5e981c56b332ae_large_02127aad-ca4a-4620-946c-3f0733e82086_large.jpg?v=1422234257" alt="Goat Mug">
                            <span class="hover-text"><p>A coffee mug that is practical and sustainable, but is also a fashion accessory and tells the primeval story of coffee.</p></span>
                            </a>
                        </div>
                        <div class="details">
                            <a href="/collections/all/products/goat-mug" class="clearfix">
                               <span class="title">Goat Mug</span> 
                               <span class="price"> 
                                 | Rp. 100k
                               </span>
                               <span class="tbl">Beli</span> 
                            </a> 
                          </div>
                    </div>
                </div> 

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="product span4"> 
                         <div class="image">
                            <a href="/collections/all/products/goat-mug">
                              <img src="//cdn.shopify.com/s/files/1/0249/6470/products/cd5c0ad1a1a2d2dfed5e981c56b332ae_large_02127aad-ca4a-4620-946c-3f0733e82086_large.jpg?v=1422234257" alt="Goat Mug">
                            <span class="hover-text"><p>A coffee mug that is practical and sustainable, but is also a fashion accessory and tells the primeval story of coffee.</p></span>
                            </a>
                        </div>
                        <div class="details">
                            <a href="/collections/all/products/goat-mug" class="clearfix">
                               <span class="title">Goat Mug</span> 
                               <span class="price"> 
                                 | Rp. 100k
                               </span>
                               <span class="tbl">Beli</span> 
                            </a> 
                          </div>
                    </div>
                </div> 

            </div>
        </div>
    </div> 
    </br>

    </br>

    <!-- Footer
    ================================================== -->
    
    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Land.io 2015. <br>
                Dibuat dengan Cinta untuk Dunia
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline"> 
              <li class="nav-item active"><a class="nav-link" href="#">Belanja</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Kategori</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Cara Kerja</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Blog</a></li> 
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
  </body>
</html>
