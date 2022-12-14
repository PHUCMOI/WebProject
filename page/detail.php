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
    <title>DEGREY </title>

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
    <link rel="stylesheet" href="../public/css/detail.css" />
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
                  <a class="dropdown-item" href="./product.php">Áo</a>
                  <a class="dropdown-item" href="./product.php">Quần</a>
                  <a class="dropdown-item" href="./product.php">Phụ kiện khác</a>
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
      <div id="overlay"></div>
    </section>
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
            <!-- <div class="product-item d-flex border">
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
                  <h3 class="text-danger fw-bold text-start" >500.000 VND</h3>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="price-total d-flex justify-content-between border-top p-1">
      <p>Tổng tiền: </p> <span class="text-danger fw-bold " id="total-money-sidebar">0 VND</span>  
      </div>
    <button class="cart-btn btn3">
      <a href="./cart.php">Xem giỏ hàng</a>
    </button>
    </section>
    <section class="breadcrumb-link">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item " aria-current="page">Sản phẩm</li>
            <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="address">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="slider-sync">
                <div class="slider-for">
                    <div>
                        <img src="../public/img/Jacket/jacket1.png" alt="">
                    </div>
                    <div>
                        <img src="../public/img/Jacket/jacket2.png" alt="">
                    </div>
                    <div>
                        <img src="../public/img/Jacket/jacket3.png" alt="">
                    </div>
                    <div>
                        <img src="../public/img/Jacket/jacket4.png" alt="">
                    </div>
                    <div>
                        <img src="../public/img/Jacket/jacket5.png" alt="">
                    </div>
                </div>
            
                <ul class="slider-nav">
                    <li>
                        <img src="../public/img/Jacket/jacket1.png" alt="" width="100%">
                    </li>
                    <li>
                        <img src="../public/img/Jacket/jacket2.png" alt="" width="100%">
                    </li>
                    <li>
                        <img src="../public/img/Jacket/jacket3.png" alt="" width="100%">
                    </li>
                    <li>
                        <img src="../public/img/Jacket/jacket4.png" alt="" width="100%">
                    </li>
                    <li>
                        <img src="../public/img/Jacket/jacket5.png" alt="" width="100%">
                    </li>
                </ul>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div id="detail">
                <h2 class="product-name fs-3">Áo thun siêu đẹp</h2>
                <p class="product-price text-danger fs-4 fw-bold mb-4">400.000 VND</p>
                <div class="size d-flex">
                  <span class="fw-bold me-3">Kích cỡ:</span>
                <div class="product-size mb-4">
                    <span class="border py-2 px-3 border-dark me-2" >M</span>
                    <span class="border py-2 px-3 border-dark me-2">S</span>
                    <span class="border py-2 px-3 border-dark me-2">L</span>
                    <span class="border py-2 px-3 border-dark me-2">XL</span>
                </div>
                </div>
                <div class="d-flex  align-items-center mb-4 flex-wrap">
                  <span class="fw-bold me-3">Số lượng:</span>
                    <span class="count-product d-inline-block me-3">
                        <span class="rounded-circle px-2 d-inline-block fw-bold btn-minus-count">-</span>
                        <span class="count py-1 px-2 d-inline-block fw-bold ">1</span>
                        <span class="rounded-circle  px-2 d-inline-block fw-bold btn-plus-count">+</span>
                    </span>
                    <button class="btn btn-add-to-cart">Thêm vào giỏ hàng</button>
                </div>
                <div class="item-detail d-flex text-center justify-content-between">
                    <p>Freeship đơn hàng giá trị trên 1 triệu đồng</p>
                    <p>Đổi hàng chưa qua sử dụng trong vòng 30 ngày
                    </p>
                </div>
                <div class="product-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sint impedit
                        reiciendis ducimus, ipsa quo quibusdam dolorum quisquam magnam dolore eius cum. Sed
                        nihil itaque dolorum impedit nostrum vel a distinctio? Molestias voluptate soluta
                        repellat ullam? Magni, laudantium! Excepturi corrupti eaque, dolorum voluptatem nostrum
                        nemo. Quo nam itaque officia dolores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, dignissimos?
                        Exercitationem iure architecto temporibus aliquam, numquam, culpa aperiam placeat
                        voluptatem tempora nemo alias? Similique, rerum eius. Et provident voluptatem tenetur.
                    </p>
                </div>
                <div class="description-image">
                    <img src="../public/img/choose-size.png" alt="">
                </div>
            </div>
        </div>
        </div>   
      </div>
    </section>
    <h2 class="text-center product-other">Sản phẩm khác</h2>
    <section class="image-mini container d-flex position-relative">
      <div class="card-item ">
                <div class="card-image position-relative">
                  <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/8-78a9a777-3e79-416c-a1b1-fc946ae497d8.png?v=1660796386763" alt="" />                    
                </div>
                <div class="card-title">
                  <h3>C LETTER</h3>
                  <p>460.000 VND</p>
                </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/3-70e260c0-8db1-4787-91aa-6e3957154f16.png?v=1660807288967" alt="" />                    
        </div>
        <div class="card-title">
          <h3>BASIC FOR LIFE V2 T-SHIRT</h3>
          <p>500.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/1-510ed511-2f0b-4224-8685-788dc907d76f.png?v=1660796852203" alt="" />                    
        </div>
        <div class="card-title">
          <h3>Sleeveless Shirt</h3>
          <p>360.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/4-31ee274b-3c12-42d9-ade4-f053aa5f8899.png?v=1660812066847" alt="" />                    
        </div>
        <div class="card-title">
          <h3>BASIC HOODIE</h3>
          <p>499.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/1-1350bf44-84a8-40f8-8588-52320057b2fa.png?v=1660794085027" alt="" />                    
        </div>
        <div class="card-title">
          <h3>.CO. RACING</h3>
          <p>599.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/6-3dd1dff6-f997-48f5-bcfe-4a1c750e1e7d.png?v=1660812635007" alt="" />                    
        </div>
        <div class="card-title">
          <h3>LEOPARD PUFFER</h3>
          <p>400.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/6-185112d1-08c2-41c7-81d9-7f5fb0b3295f.png?v=1660794929167" alt="" />                    
        </div>
        <div class="card-title">
          <h3>LEOPARD BIG LOGO</h3>
          <p>299.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/8-f5a54185-e937-4caf-900c-e7bed7fc4cf9.png?v=1660799787213" alt="" />                    
        </div>
        <div class="card-title">
          <h3>CAMO MIX SHORT</h3>
          <p>215.000 VND</p>
        </div>
      </div>
      <div class="card-item ">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/1-219443e2-3c51-4874-9ab0-29dd8b318d6b.png?v=1660793561507" alt="" />                    
        </div>
        <div class="card-title">
          <h3>C-STAR BLACK LEATHER</h3>
          <p>300.000 VND</p>
        </div>
      </div>
      <div class="card-item">
        <div class="card-image position-relative">
          <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/414/728/products/1-d64b73ff-2866-47c9-8fce-e5954fcbb668.png?v=1660793486343" alt="" />                    
        </div>
        <div class="card-title">
          <h3>KNIT SWEATER</h3>
          <p>499.000 VND</p>
        </div>
      </div>
    </section>
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
                <img src="./img/logo-footer.svg" alt="" />
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
    <script src="../public/js/detail.js"></script>
  </body>
</html>





