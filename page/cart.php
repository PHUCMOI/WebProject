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
    <title>DEGREY</title>

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
    <link rel="stylesheet" href="../public/css/cart.css" />
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
              <a href="./index.php">
                <img src="../public/img/logo.svg" alt=""
              /></a>
            </div>
          </div>
          <div class="menu navbar-nav">
            <ul class="nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="./index.php"
                  >Trang chủ <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Sản phẩm</a
                >
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./product.php"
                    >Tất cả các sản phẩm</a
                  >
                  <a class="dropdown-item" href="./product.php">Áo</a>
                  <a class="dropdown-item" href="./product.php">Quần</a>
                  <a class="dropdown-item" href="./product.php"
                    >Phụ kiện khác</a
                  >
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./store.php">Cửa hàng</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="./intro.php"
                  tabindex="-1"
                  aria-disabled="true"
                  >Giới thiệu</a
                >
              </li>
            </ul>
          </div>
          <div class="header-action d-flex justify-content-around">
            <div class="search-box">
              <input
                type="text"
                class="search-input"
                placeholder="Nhập sản phẩm tìm kiếm"
              />
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
                >2</span
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="overlay"></div>
    <section class="cart">
      <div
        class="cart-title d-flex justify-content-center border-bottom position-relative"
      >
        <i class="fa-solid fa-cart-shopping"></i>
        <h2>Giỏ hàng</h2>
        <button
          class="close-cart position-absolute top-0 start-0 translate-middle"
        >
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
                      <span class="d-lg-grid px-2 d-inline-block fw-bold bg-light"
                        >+</span
                      >
                    </span>
                    <button
                      class="text-primary border-0 bg-transparent fw-light"
                    >
                      <span><i class="fa-solid fa-trash-can"></i></span>
                    </button>
                  </div>
                  <h3 class="text-danger fw-bold text-start">500.000 VND</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="price-total d-flex justify-content-between border-top p-1">
        <p>Tổng tiền:</p>
        <span class="text-danger fw-bold" id="total-money-sidebar">320.000 VND</span>
      </div>
      <button class="cart-btn btn3">
        <a href="#">Xem giỏ hàng</a>
      </button>
    </section>
    <section class="breadcrumb-item">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
              <a href="./product.php">Sản phẩm</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Giỏ hàng
            </li>
          </ol>
        </nav>
      </div>
    </section>
    <div class="cart-detail mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="cart-title border-bottom mb-3">
              <h2>Giỏ hàng của bạn</h2>
            </div>
            <p class="fst-italic message">
              Hiện tại có 1 sản phẩm trong giỏ hàng
            </p>
            <div class="product-list">
              <div class="product-item d-flex border mb-4">
                <div class="image">
                  <img src="../public/img/Jacket/jacket1.png" alt="" />
                </div>
                <div
                  class="info d-flex flex-column justify-content-between flex-grow-1"
                >
                  <div>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <p class="text-dark fw-bold mb-lg-3 mb-sm-1">
                        THE LAUGHTER VARSITY JACKET (M)
                      </p>
                      
                    </div>
                    <p class="text-black-50 d-flex justify-content-between ">
                      <span class="border d-inline-block me-3">
                        <span class="count-product d-inline-block fw-bold bg-light">-</span>
                        <span class="count-product  d-inline-block fw-bold">1</span>
                        <span class="count-product  d-inline-block fw-bold bg-light">+</span>
                    </span>
                      <button
                        class="text-primary border-0 bg-transparent fw-light"
                      >
                        <span><i class="fa-solid fa-trash-can"></i></span>
                        Xóa
                      </button>
                    </p>
                  </div>
                  <div>
                    <h2 class="text-danger fw-bold" id="sub-total-money">500.000 VND</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bill border">
              <div class="border-bottom mb-2 p-3 fs-5 fw-normal text-center">
                <h2>Thông tin đơn hàng</h2>
              </div>
              <div
                class="mb-2 p-3 fs-5 fw-normal text-center"
              >
                <span class="text-black fw-bold">Tổng tiền: </span>
                <span class="total-money fw-bold" id="total-money"
                  >9.000.000 VND</span
                >
              </div>
              <div
                class="note mb-2 px-3 fs-5 fw-normal d-flex justify-content-between align-items-center discount-box"
              >
                <ul>
                  <li>Phí vận chuyển sẽ được tính ở trang thanh toán.</li>
                  <li>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</li>
                </ul>
              </div>
              <div class="discount-form text-center">
                <button class="button-82-pushable" role="button">
                  <span class="button-82-shadow"></span>
                  <span class="button-82-edge"></span>
                  <span class="button-82-front text">
                    <a href="./payment.php">Thanh toán</a>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script src="../public/js/cart.js"></script>
  </body>
</html>
