<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./img/favicon (2).ico"
      type="image/x-icon"
    />
    <link rel="icon" href="../public/img/favicon (2).ico" type="image/x-icon" />
    <title>DEGREY®</title>

    <link rel="stylesheet" href="../libary/bootstrap/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="../public/css/style.css" />
  </head>
  <body>
    <section id="header">
      <div class="container">
        <div class="header-item d-flex justify-content-between">
          <div class="icon-menu d-flex align-items-center">
            <span class="menu-icon">
              <i class="fa-solid fa-bars"></i>
            </span>
            <div class="header-logo">
              <a href="./index.php"> <img src="../public/img/logo.svg" alt="" /></a>
            </div>
          </div>
          <div class="menu navbar-nav">
            <ul class="nav mr-auto">
              <li class="nav-item">
                <a class="nav-link " href="./index.php">Trang chủ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./product.php">Tất cả các sản phẩm</a>
                  <a class="dropdown-item" href="./product.php#Jacket&Tshirt">Áo</a>
                  <a class="dropdown-item" href="./product.php#Pants">Quần</a>
                  <a class="dropdown-item" href="./product.php#ACCESSORY">Phụ kiện khác</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./store.php">Cửa hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./intro.php" tabindex="-1" aria-disabled="true">Giới thiệu</a>
              </li>
            </ul>
          </div>
          <div class="header-action d-flex justify-content-around">
            <div class="search-box">
              <input type="text" class="search-input" placeholder="Nhập sản phẩm tìm kiếm">
              <button class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
            <div class="shopping-cart position-relative">
                <span class="fs-4"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></span>
                <span
                  class="cart-count bg-white px-1 rounded-2 position-absolute border"
                  >2</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="overlay"></div>
    <section class="cart">
      <div class="cart-title d-flex justify-content-center border-bottom position-relative">
        <i class="fa-solid fa-cart-shopping"></i><h2>Giỏ hàng</h2>
        <button class="close-cart position-absolute top-0 start-0 translate-middle">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="product-item-sidebar">
        <div class="container">
          <div class="row">
            <div class="product-item d-flex border">
              <div class="image col-lg-4">
                <img src="../public/img/T-Shirt/t6.png" alt="" />
              </div>
              <div
                class="info col-lg-8 d-flex flex-column justify-content-between px-lg-1 px-sm-0"
              >
                <div>
                  <div class="name-product">
                    <h2 class="text-dark">THE LAUGHTER VARSITY JACKET (M)</h2>
                  </div>
                  <div
                    class="count-sidebar text-black-50 d-flex justify-content-between"
                  >
                    <span class="border d-inline-block me-3">
                      <span class="px-2 d-inline-block fw-bold bg-light"
                        >-</span
                      >
                      <span class="px-2 d-inline-block fw-bold">1</span>
                      <span class="px-2 d-inline-block fw-bold bg-light"
                        >+</span
                      >
                    </span>
                    <button
                      class="text-primary border-0 bg-transparent fw-light"
                    >
                      <span><i class="fa-solid fa-trash-can"></i></span>
                    </button>
                  </div>
                  <h3 class="text-danger fw-bold text-start" id="total-product" >500.000 VND</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="price-total d-flex justify-content-between border-top p-1">
      <p>Tổng tiền: </p> <span class="text-danger fw-bold"  id="total-money-sidebar">320.000 VND</span>  
    </div>
    <button class="cart-btn btn3">
      <a href="./cart.php">Xem giỏ hàng</a>
    </button>
    </section>
    <section class="image-mini container d-flex position-relative">
      <div class="mini-item">
        <div class="image">
          <img src="../public/img/slide-mini/img 1.png" alt="" class="tablet" />
        </div>
      </div>
      <div class="mini-item">
        <div class="image">
          <img src="../public/img/slide-mini/img2.png" alt="" class="tablet" />
        </div>
      </div>
      <div class="mini-item">
        <div class="image">
          <img src="../public/img/slide-mini/img3.png" alt="" class="tablet" />
        </div>
      </div>
      <div class="mini-item">
        <div class="image">
          <img src="../public/img/slide-mini/img4.png" alt="" class="tablet" />
        </div>
      </div>
      <div class="mini-item">
        <div class="image">
          <img src="../public/img/slide-mini/img5.png" alt="" class="tablet" />
        </div>
      </div>
      <div class="mini-item">
        <div class="image">
          <img src="../public/img/slide-mini/img6.png" alt="" class="tablet" />
        </div>
      </div>
    </section>
    <section class="image-slider container">
      <div class="image-item">
        <div class="image">
          <a href="./product.php"><img src="../public/img/SLIDE1.jpg" alt="" class="pc-tablet" /></a>
          <img src="../public/img/slide 1 567.png" alt="" class="sp" />
        </div>
      </div>
      <div class="image-item">
        <div class="image">
          <img src="../public/img/Slide2.jpg" alt="" class="pc-tablet" />
          <img src="../public/img/slide 2 567.png" alt="" class="sp" />
        </div>
      </div>
      <div class="image-item">
        <div class="image">
          <img src="../public/img/SLIDE 3.jpg" alt="" class="pc-tablet" />
          <img src="../public/img/slide 3 567.png" alt="" class="sp" />
        </div>
      </div>
    </section>
    <section class="daily">
      <div class="container">
        <h2>Đặc quyền cho bạn hôm nay!</h2>
        <div class="row">
          <div class="col-lg-3 col-sm-6 py-2">
            <div class="daily-card">
              <div class="daily-title">
                <h3>Hỗ trợ vận chuyển</h3>
              </div>
              <div class="daily-content">
                <p>Áp mã để nhận ngay ưu đãi giảm giá vận chuyển tại Degrey</p>
              </div>
              <div class="daily-copyright">
                <button class="btn-test" data-disscount="ABC">
                  Sao chép mã
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-2">
            <div class="daily-card">
              <div class="daily-title">
                <h3>Hà Nội Freeship</h3>
              </div>
              <div class="daily-content">
                <p>Degrey dành tặng Hà Nội mã freeship 0đ (số lượng có hạn)</p>
              </div>
              <div class="daily-copyright">
                <button class="btn-test" data-disscount="ABCD">
                  Sao chép mã
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-2">
            <div class="daily-card">
              <div class="daily-title">
                <h3>Tặng 125.000đ</h3>
              </div>
              <div class="daily-content">
                <p>Áp dụng đặc biệt cho đơn hàng từ 2,5 triệu đồng.</p>
              </div>
              <div class="daily-copyright">
                <button class="btn-test" data-disscount="ABC">
                  Sao chép mã
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-2">
            <div class="daily-card">
              <div class="daily-title">
                <h3>Khuyến mãi đến 10%</h3>
              </div>
              <div class="daily-content">
                <p>Mã giảm 10% cho hoá đơn mua hàng trên 5 triệu đồng</p>
              </div>
              <div class="daily-copyright">
                <button class="btn-test" data-disscount="ABC">
                  Sao chép mã
                </button>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <section class="popup-coupon">
      <div class="popup-image position-relative" >
        <img src="../public/img/popup/popup-discount.png" alt="popup-discount-code">
        <button class="cancel-popup position-absolute top-0 start-100 translate-middle " >
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    </section>
    <section class="card">
      <div class="container">
        <div class="jacket my-4">
          <h2><a href="./product.php#Jacket">ÁO KHOÁC | JACKET</a></h2>
          <div class="product-list-jacket row">
            <div
              class="col-xl-2_4 col-lg-2_4 .col-xxl-2_4 col-md-4 col-sm-6 col-6"
            >
              <div class="card-item ">
                <div class="card-image position-relative">
                  <img src="../public/img/Jacket/jacket1.png" alt="" />
                    <ul class="social position-absolute top-50 end-0 translate-middle-y">
                      <li><button class="btn-add-to-cart"><i class="fa-solid fa-cart-plus"></i></button></li>
                    <li><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="fa-solid fa-bag-shopping"></i></button></li>
                    </ul>
                   <span class="flash-tag position-absolute">New Arrival</span>  
                </div>
                <div class="card-title">
                  <h3>Áo Khoác Nấm Degrey Đỏ SS2 - AKND Đỏ</h3>
                  <p>390.000đ</p>
                </div>
                <button class="btn btn--detail">
                  <a href="./detail.php">Chi tiết</a>
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="button-more d-flex justify-content-center">
               <button class="more-btn btn2">
                 <a href="./product.php#Jacket"> xem thêm sản phẩm</a>
               </button>
              </div>
             </div>
          </div>
        </div>
        <div class="T-Shirt">
          <h2><a href="./product.php#Tshirt">ÁO THUN | TSHIRT</a></h2>
          <div class="product-list-tshirt row">
            <div class="col-xl-2_4 col-lg-2_4 .col-xxl-2_4 col-md-4 col-sm-6 col-6">
              <div class="card-item ">
                <div class="card-image position-relative">
                  <img src="../public/img/T-Shirt/t1.png" alt="" />
                    <ul class="social position-absolute top-50 end-0 translate-middle-y">
                      <li><a href=""><i class="fa-solid fa-cart-plus"></i></a></li>
                      <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                    </ul>
                    <span class="flash-tag position-absolute">Item Hot</span>
                </div>
                <div class="card-title">
                  <h3>Áo Khoác Nấm Degrey Đỏ SS2 - AKND Đỏ</h3>
                  <p>390.000đ</p>
                </div>
                <button class="btn btn--detail">
                  <a href="./detail.php">Chi tiết</a>
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="button-more d-flex justify-content-center">
               <button class="more-btn btn2">
                <a href="./product.php#Tshirt">xem thêm sản phẩm</a>
               </button>
              </div>
             </div>
          </div>
        </div>
        <div class="pants">
          <h2><a href="./product.php#Pants">Quần | Pants</a></h2>
          <div class="product-list-pants row">
            <div
              class="col-xl-2_4 col-lg-2_4 .col-xxl-2_4 col-md-4 col-sm-6 col-6"
            >
              <div class="card-item ">
                <div class="card-image position-relative">
                  <img src="../public/img/Backpacks/bag9.png" alt="" />
                    <ul class="social position-absolute top-50 end-0 translate-middle-y">
                      <li><a href=""><i class="fa-solid fa-cart-plus"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                    </ul>
                    <span class="flash-tag position-absolute">New Arrival</span>
                  
                </div>
                <div class="card-title">
                  <h3>Áo Khoác Nấm Degrey Đỏ SS2 - AKND Đỏ</h3>
                  <p>390.000đ</p>
                </div>
                <button class="btn btn--detail">
                  <a href="./detail.php">Chi tiết</a>
                </button>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="button-more d-flex justify-content-center">
               <button class="more-btn btn2">
                 <a href="./product.php#Pants">xem thêm sản phẩm</a>
               </button>
              </div>
             </div>
          </div>
        </div>
        
      </div>
    </section>
    <section class="suggest">
      <div class="container">
        <h2>Set đồ gợi ý</h2>
        <div class="suggest-content d-flex justify-content-between">
          <div class="suggest-item">
            <div class="suggest-image" data-bs-toggle="tooltip" data-bs-placement="top" title="" >
              <img src="../public/img/suggest1.png" alt="" data-toggle="tooltip" data-placement="top-0" title="Tooltip on left"/>
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest2.png" alt="" />
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest3.png" alt="" />
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image" data-bs-toggle="tooltip" data-bs-placement="top" title="" >
              <img src="../public/img/suggest4.png" alt="" data-toggle="tooltip" data-placement="top-0" title="Tooltip on left"/>
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest5.png" alt="" />
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest6.png" alt="" />
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image" data-bs-toggle="tooltip" data-bs-placement="top" title="" >
              <img src="../public/img/suggest7.png" alt="" data-toggle="tooltip" data-placement="top-0" title="Tooltip on left"/>
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest8.png" alt="" />
            </div>
          </div>
          <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest9.png" alt="" />
            </div>
          </div>
          <!-- <div class="suggest-item">
            <div class="suggest-image">
              <img src="../public/img/suggest4.png" alt="" />
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <button onclick="topFunction()" class="button-backtop " role="button" id="myBtn" title="Go to top"><p class="inner rotate ">Quay về đầu trang <i class="fa-solid fa-arrow-right-long"></i></p></button>
    <div class="social-panel-container">
      <div class="social-panel">
        <p>Liên hệ với chúng tôi <i class="fa fa-heart bgr " style="color:red"></i> </p>
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <h4>DEGREY VIETNAM</h4>
        <ul>
          <li>
            <a href="https://discord.com/" target="_blank">
              <i class="fab fa-discord"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/?lang=vi" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          
          <li>
            <a href="https://www.facebook.com/degrey.saigon" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/degrey.saigon/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <button class="floating-btn">
      <i class="fa-brands fa-facebook-messenger"></i>
    </button>
    <section class="footer">
      <hr />
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>Về DEGREY</h3>
                <p>
                  Cái tên Degrey được tạo ra rất ngẫu hứng, xuất phát từ “Chuỗi
                  ngày u buồn về sự nghiệp, tương lai trong quá khứ của chính
                  mình” – theo lời chia sẻ của Degrey’s founder.
                </p>
              </div>
              <div class="footer-logo">
                <img src="../public/img/logo-footer.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>Địa chỉ</h3>
                <b>-Sài Gòn:</b>
                <p>
                  43 Huỳnh Văn Bánh P.17 Q.Phú Nhuận 905 Luỹ Bán Bích P.Tân
                  Thành Q.Tân Phú 26 Lý Tự Trọng Q.1 - The New Playground
                </p>
                <b>-Đà Lạt:</b>
                <p>11 Khu Hoà Bình P.1</p>
                <p><b>Điện thoại:</b> 0336311117</p>
                <p><b>Email:</b> degrey.vn@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>Hỗ trợ khách hàng</h3>
                <ul>
                  <li>Shop</li>
                  <li>Hướng dẫn đặt hàng</li>
                  <li>Chính xác và quy định</li>
                  <li>Chính sách bảo mật</li>
                  <li>Thông tin sở hữa</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>Chăm sóc khách hàng</h3>
                <div class="footer-phone d-flex">
                  <div class="phone-icon">
                    <i class="fa-solid fa-phone-volume"></i>
                  </div>
                  <div class="phone-number">
                    <p>0336311117</p>
                    <u>degrey.vn@gmail.com</u>
                  </div>
                </div>
                <h3>Follow Us</h3>
                <div class="contact-icon">
                  <a href="https://www.facebook.com/degrey.saigon">
                    <i class="fa-brands fa-facebook-square"></i
                  ></a>
                  <a href="https://www.instagram.com/degrey.saigon/">
                    <i class="fa-brands fa-instagram"></i>
                  </a>

                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-google-plus-g"></i>
                  <a href="https://www.youtube.com/degreyvn">
                    <i class="fa-brands fa-youtube"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="end">
      <hr />
      <p>Copyright © 2022 DEGREY VIETNAM</p>
    </section>  
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/data.js"></script>
    <script src="../public/js/shopping-cart.js"></script>
    <script src="../public/js/main.js"></script>
    <!-- <script src="../public/js/product.js"></script> -->
  </body>
</html>
