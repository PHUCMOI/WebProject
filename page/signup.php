<?php
  session_start();
  ob_start();
  if(isset($_SESSION['loggedin'])){
    header('location: index.php');
  }
  if(isset($_GET['Submit'])&&($_GET['Submit']=="dangky"))
  {
    include "./connect.php";
    $UserName= $_GET['useName'];
    $Pass=$_GET['pass'];
    $Gmail= $_GET['gmail'];
    $MaKH = $Gmail;
    $str = "insert into khang values ('$MaKH', '$UserName','$Pass','$Gmail')";
    if($connect->query($str)==true){
    echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
    header('location: login.php');
    }
    else{
      echo "<script type='text/javascript'>alert('Thêm không thành công');</script>";
    }
    $connect->close();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Sign up</title>
    <link rel="stylesheet" href="../libary/bootstrap/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../public/css/signup.css" />

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
      <div class="product-item d-flex border mb-4 mt-3">
        <div class="image">
            <img src="../public/img/T-Shirt/t6.png" alt="" />
        </div>
        <div class="info d-flex flex-column justify-content-between px-1 ">
            <div>
                <div class="d-flex ">
                    <h2 class="text-dark">
                        Áo thun siêu đẹp (M)
                    </h2>
                    <button class="text-primary border-0 bg-transparent fw-light">
                      <span><i class="fa-solid fa-trash-can"></i></i></span>
                     
                  </button>
                </div>
                <p class="count text-black-50 text-start">
                    <span class="border d-inline-block me-3">
                        <span class="px-2 d-inline-block fw-bold bg-light">-</span>
                        <span class="px-2 d-inline-block fw-bold">1</span>
                        <span class="px-2 d-inline-block fw-bold bg-light">+</span>
                    </span>
                    <h3 class="text-danger fw-bold text-start">
                      500.000 VND
                  </h3>
                </p>
            </div>
        </div>
      </div>
      <div class="product-item d-flex border mb-4 mt-3">
        <div class="image">
            <img src="../public/img/T-Shirt/t6.png" alt="" />
        </div>
        <div class="info d-flex flex-column justify-content-between px-1 ">
            <div>
                <div class="d-flex ">
                    <h2 class="text-dark">
                        Áo thun siêu đẹp (M)
                    </h2>
                    <button class="text-primary border-0 bg-transparent fw-light">
                      <span><i class="fa-solid fa-trash-can"></i></i></span>
                     
                  </button>
                </div>
                <p class="count text-black-50 text-start">
                    <span class="border d-inline-block me-3">
                        <span class="px-2 d-inline-block fw-bold bg-light">-</span>
                        <span class="px-2 d-inline-block fw-bold">1</span>
                        <span class="px-2 d-inline-block fw-bold bg-light">+</span>
                    </span>
                    <h3 class="text-danger fw-bold text-start">
                      500.000 VND
                  </h3>
                </p>
            </div>
        </div>
      </div>
      <div class="product-item d-flex border mb-4 mt-3">
        <div class="image">
            <img src="../public/img/T-Shirt/t6.png" alt="" />
        </div>
        <div class="info d-flex flex-column justify-content-between px-1 ">
            <div>
                <div class="d-flex ">
                    <h2 class="text-dark">
                        Áo thun siêu đẹp (M)
                    </h2>
                    <button class="text-primary border-0 bg-transparent fw-light">
                      <span><i class="fa-solid fa-trash-can"></i></i></span>
                     
                  </button>
                </div>
                <p class="count text-black-50 text-start">
                    <span class="border d-inline-block me-3">
                        <span class="px-2 d-inline-block fw-bold bg-light">-</span>
                        <span class="px-2 d-inline-block fw-bold">1</span>
                        <span class="px-2 d-inline-block fw-bold bg-light">+</span>
                    </span>
                    <h3 class="text-danger fw-bold text-start">
                      500.000 VND
                  </h3>
                </p>
            </div>
        </div>
      </div>
      

    </div>
    <div class="price-total d-flex justify-content-between border-top p-1">
      <p>Tổng tiền: </p> <span class="text-danger fw-bold ">320.000 VND</span>  
    </div>
    <button class="cart-btn btn3">
      <a href="./cart.php">Xem giỏ hàng</a>
    </button>
    </section>
    <div class="wapper">
      <div class="wapper-heading">
        <h1>Tạo tài khoản</h1>
      </div>
      <form method="get">
        <div class="input__field">
          <input id="username" type="text" placeholder="User Name" name="useName"/>
        </div>

        <div class="input__field">
          <input id="email" type="text" placeholder="Email" name="gmail"/>
        </div>
        <div class="input__field">
          <input id="password" type="password" placeholder="Password" name="pass"/>
        </div>
        <div class="input__field"> 
          <input id="password" type="password" placeholder="Confirm Password" />
        </div>
        <button id="btnSignup" class="btn btn-signup" name="Submit" value="dangky">Đăng ký</button>
        <a href="login.php" class="login-link">Đăng nhập</a>
      </form>
    </div>
    <script src="../public/js/sign-in.js"></script>
    
  </body>
</html>
