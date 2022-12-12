
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
    <title>Degrey</title>
    <link rel="stylesheet" href="../libary/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="../public/css/intro.css" />
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
                  <h3 class="text-danger fw-bold text-start" >500.000 VND</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="price-total d-flex justify-content-between border-top p-1">
      <p>Tổng tiền: </p> <span class="text-danger fw-bold " id="total-money-sidebar">320.000 VND</span>  
      </div>
    <button class="cart-btn btn3">
      <a href="./cart.php">Xem giỏ hàng</a>
    </button>
    </section>
    <section class="breadcrumb-item">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Cửa hàng</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="banner">
      <div class="container">
        <div class="banner-image">
          <img src="../public/img/intro-banner.png" alt="" />
        </div>
      </div>
    </section>
    
<section class="address">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <div class="intro-content ">
          <h1>Giới thiệu</h1>
          <p>Cái tên Degrey được tạo ra rất ngẫu hứng, xuất phát từ “Chuỗi ngày u buồn về sự nghiệp, tương lai trong quá khứ của chính mình” – theo lời chia sẻ của Degrey’s founder. Là một local brand mang khuynh hướng Á Đông, kết hợp giữa hai yếu tố truyền thống và hiện đại, Degrey luôn cố gắng mang đến những thông điệp văn hoá ý nghĩa qua từng đường nét thiết kế. Tiếp theo đó sự sang trọng, thanh lịch cũng là những yếu tố tạo nên một Degrey đầy sức hút, sự lựa chọn hoàn hảo dành cho các bạn trẻ yêu thích phong cách hoài cổ nhưng vẫn muốn thoát xác trong những bộ cánh mới mẻ hơn.</p>
          <p>Thành lập từ năm 2016 và được nhiều bạn trẻ biết đến qua những mẫu áo truyền thông, Degrey hiện đang từng bước khẳng định vị trí của mình trong bản đồ streetwear Việt Nam</p>
          <p>Hiện nay, Degrey vẫn đang tiếp tục hoàn thiện và phát triển về sản phẩm cũng như mở rộng nhiều phong cách thời trang.</p>
          <p>Degrey xin gửi lời cảm ơn đến tất cả những khách hàng đã, đang và sẽ ủng hộ Degrey cũng như Xoài thời gian qua và sắp tới. Cảm ơn rất nhiều !</p>
          <p>Sơ lược lịch sử DEGREY do DOSIIN - kênh media về thời trang và life-style, khai thác mảng văn hóa đường phố tại Việt</p>
         <div class="history">
          <iframe src="https://youtube.com/embed/H7vcKCjX-IE" allowfullscreen width="60%" & height="300px"></iframe>
         </div>
          <p><b>Một số dự án Degrey tham gia</b></p>
          <p>Degrey – Không chỉ là quần áo (Degrey x Koo) </p>
          <iframe src="https://youtube.com/embed/wnZWXRpGcZ4" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Không cần phải chạy theo xu hướng thị trường, thị hiếu của số đông. Cứ sáng tạo và tự do theo cách của mình muốn. Đó cũng chính là thông điệp của Koo và Degrey muốn gửi gắm cho các bạn thông qua sự kết hợp này.....</p>
          <p><b>Degrey - Sinh nhật vui vẻ Đạt G (Degrey x Đạt G)</b></p>
          <iframe src="https://youtube.com/embed/rO92dxA-Ftc" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Đánh dấu sinh nhật Đạt G, Degrey muốn tạo ra bst để dành cho các fan thân thương yêu mến Đạt G trong dịp đặc biệt này. Cũng là lời cảm ơn đặc biệt mà Degrey muốn gửi đến Đạt G và các bạn. Các bạn đã ủng hộ và chung vui cùng Đạt G....</p>
          <p><b>Degrey – Hơi thở Việt (Degrey x Biti’s Hunter)</b></p>
          <iframe src="https://youtube.com/embed/O6yvqvjuIgU" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Sản phẩm hợp tác hình ảnh giữa Degrey và Biti’s Hunter làm tăng hơi thở Việt. Sự kết hợp độc đáo giữa Degrey và Biti’s Hunter, hai thương hiệu Việt cùng chung tay góp phần xây dựng hình ảnh mang định hướng thời trang Việt Nam đến gần với các bạn trẻ ......</p>
          <p><b>Degrey – Mang thời trang đến gần underground (Degrey x Blacka)</b></p>
          <iframe src="https://youtube.com/embed/FXxF19jJwMk" allowfullscreen width="100%" & height="450px"></iframe>
          <iframe src="https://youtube.com/embed/gEJKVTKAhvE" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Với hầu hết ý tưởng từ chàng rapper Việt - Blacka - chiếc áo Tee DEGREY x BLACKA với hai phiên bản màu đen truyền thống và xanh neon. Được thiết kế bắt nguồn từ cuộc đời và sự nghiệp hiphop của chính anh, chiếc áo như một dấu ấn khẳng định con đường rapper 10 năm của Blacka gửi đến mọi người cũng như đứa con tinh thần “Anh đã từng yêu” mà anh vừa cho ra mắt gửi đến các fan đã dõi theo Blacka từ lúc “chập chững” cho đến tận bây giờ....</p>
          <p><b>Degrey – Foudation wind Jacket (Degrey x Dossin) </b></p>
          <iframe src="https://youtube.com/embed/jlLd9unvGss" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Sản phẩm được lấy cảm hứng từ album "Foundation Vol. 4" của rapper tài năng Basick, quán quân cuộc thi “Show Me The Money" mùa 4."Chúng ta luôn phải tuân theo quy luật của cuộc sống.Nhưng với thời trang thì KHÔNG.Chúng tôi thoải mái làm những điều khác biệt.VÌ VẬY CHÚNG TÔI TÌM ĐẾN NHAU".......</p>
          <p><b>Degrey – Make love Not war (Degrey x Dirty Coins)</b></p>
          <iframe src="https://youtube.com/embed/hZLzbjN3yYE" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Degrey với các dự án đồng hành cùng Dirty coins không còn gì xa lạ đối với các bạn. Thông qua bst lần này, tụi mình muốn nhắn nhủ thông điệp thế giới cần tình yêu, hãy tạo yêu thương đừng gây chiến tranh.....</p>
          <h3>Hướng dẫn mua hàng và thanh toán tại Degrey</h3>
          <ul class="payment-methods">
            <li>Mua hàng offline - Phương thức giao hàng - Trả tiền mặt
              <ul>
                <li>Phương thức Giao hàng – Trả tiền mặt chỉ áp dụng đối với những khu vực DEGREY hỗ trợ giao nhận hoặc trả tiền mua hàng trực tiếp tại cửa hàng DEGREY
                </li>
                <li>Với phương thức thanh toán trực tiếp Quý khách có thể đặt hàng trên Website DEGREY.VN .
                </li>
                <li>Nhân viên chúng tôi sẽ tiến hành gọi xác nhận đơn hàng, xuất hàng cho Quý khách và xác nhận ngày giờ giao hàng với Quý khách sau khi xuất hàng.
                </li>
                <li>Quý khách có trách nhiệm thanh toán đầy đủ toàn bộ giá trị đơn hàng cho Nhân viên giao nhận hoặc Nhân viên bán hàng và chăm sóc khách hàng của DEGREY ngay khi hoàn tất kiểm tra hàng hóa và nhận Phiếu giao hàng kiêm phiếu xuất kho.Hoặc có thể thanh toán quẹt thẻ ATM, VISA, ví MOMO trực tiếp tại cửa hàng DEGREY. Quý khách thanh toán đúng số tiền trên Phiếu đã ghi, nếu có bất cứ thắc mắc nào Quý khách gọi lại cho DEGREY để được thông tin cụ thể hơn.</li>
              </ul>
            </li>
            <li>Mua hàng online - Phương thức thanh toán trước
              <ul>
                <li>Gọi điện để được tư vấn và đặt hàng online trực tiếp với bộ phận chăm sóc khách hàng của DEGREY qua số 0336311117
                </li>
                <li>
                  Khách hàng truy cập website: DEGREY.VN để mua hàng và hoàn thành thông tin đơn hàng.
                </li>
                <li>Chuyển tiền, chuyển khoản, thanh toán trực tiếp bằng tiền mặt hoặc qua thẻ tại các hệ thống ngân hàng hoặc trung tâm giao dịch của DEGREY</li>
              </ul>
            </li>
            <li>Mua hàng online - Phương thức (COD) nhận hàng thanh toán
              <ul>
                <li>Đối với  tất cả các đơn hàng được đặt hàng thành công với hình thức COD (nhận hàng thanh toán tại nhà), khách hàng sẽ được nhân viên của DEGREY liên hệ tư vấn xác nhận đơn hàng và tuỳ vào trường hợp để hướng dẫn khách hàng ĐẶT CỌC TRƯỚC từ 100.000đ – 500.000đ với đơn hàng > 02 triệu được nhân viên DEGREY thông báo cụ thể khi liên hệ. Giá trị đặt cọc sẽ được trừ trực tiếp vào giá trị sản phẩm,  khi nhận hàng bạn chỉ cần thanh toán số tiền còn lại.
                </li>
                <li>Hình thức đặt cọc linh hoạt, bạn có thể chuyển khoản qua các tài khoản của DEGREY cuối trang này, cũng có thể chuyển tiền qua các ví điện tử hoặc có thể gửi mã card điện thoại giá trị tương ứng tới Hotline của DEGREY.
                </li>
                <li>Ngay sau khi DEGREY xác nhận đã nhận được đặt cọc của quý khách hàng thành công, nhân viên DEGREY sẽ lên đơn hàng, test sản phẩm đóng gói cẩn thận và chuyển tới đơn vị vận chuyển như Giao hàng tiết kiệm, Grab, …chuyển tới quý khách hàng.</li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="link-page">
          <h2>Danh mục Page</h2>
            <ul class="list-unstyled">
                <li>
                    <a href="./product.php">SẢN PHẦM DEGREY</a>

                </li>
                <li>
                    <a href="./store.php">STORE | CỬA HÀNG</a>
                </li>
                <li>
                    <a href="#">DEGREY | ABOUT US</a>
                </li>
            </ul>
          <div class="image-store">
            <img src="../public/img/Store2.png" alt="" />
            <div class="glow-wrap">
              <i class="glow"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
     
    </div>
  </div>
</section>

    <section class="footer">
      <hr />
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6 col-sm-6 ">
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
          <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6 col-sm-6">
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
          <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6 col-sm-6">
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
          <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6 col-sm-6">
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
                  <i class="fa-brands fa-facebook-square"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-google-plus-g"></i>
                  <i class="fa-brands fa-youtube"></i>
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
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/shopping-cart.js"></script>
    <script src="../public/js/intro.js">
       
    </script>
  </body>
</html>




