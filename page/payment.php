<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../public/img/favicon (2).ico"
      type="image/x-icon"
    />
    <link rel="icon" href="../public/img/favicon (2).ico" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />

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
    <link rel="stylesheet" href="../public/css/payment.css" />
  </head>
  <body>
    <section class="payment">
      <div class="container">
        <div class="row shopping-cart">
          <div class="col-lg-6 col-md-10 mt-5 m-auto">
            <div class="cart-title mb-3">
              <h2><a href="./index.php">Degrey Vietnam</a></h2>
              <section class="breadcrumb-item">
                <nav
                  style="
                    --bs-breadcrumb-divider: url(
                      &#34;data:image/svg + xml,
                      %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;
                    );
                  "
                  aria-label="breadcrumb"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="./cart.php">Gi??? h??ng</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="./product.php">Th??ng tin giao h??ng</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Ph????ng th???c thanh to??n
                    </li>
                  </ol>
                </nav>
              </section>
            </div>
            <div class="validate-form">
              <div class="info-pay">
                <h4>Th??ng tin giao h??ng</h4>
                <p>B???n ???? c?? t??i kho???n? <a href="./login.php">????ng nh???p</a></p>
              </div>
              <form id="form" class="form">
                <div class="form-control">
                  <input type="text" placeholder="H??? v?? t??n" id="username" />
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error message</small>
                </div>
                <div class="info-private d-flex justify-content-between">
                  <div class="form-control form-email">
                    <input type="email" placeholder="Email" id="email" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                  </div>
                  <div class="form-control form-phone">
                    <input
                      type="text"
                      placeholder="S??? ??i???n tho???i"
                      id="phone"
                    />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                  </div>
                </div>
                <div
                  class="province col-md-auto d-flex justify-content-between mb-3" 
                >
                  <select
                    class="form-select form-select-sm me-2 "
                    id="city"
                    aria-label=".form-select-sm"
                  >
                    <option value="" selected>Ch???n t???nh th??nh</option>
                  </select>

                  <select
                    class="form-select form-select-sm me-2"
                    id="district"
                    aria-label=".form-select-sm"
                  >
                    <option value="" selected>Ch???n qu???n huy???n</option>
                  </select>

                  <select
                    class="form-select form-select-sm"
                    id="ward"
                    aria-label=".form-select-sm"
                  >
                    <option value="" selected>Ch???n ph?????ng x??</option>
                  </select>
                </div>
                <div class="form-control">
                  <input type="text" placeholder="?????a ch???" id="address" />
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error message</small>
                </div>
                <div class="methods">
                  <div class="ship-cod">
                    <h4>Ph????ng th???c v???n chuy???n</h4>
                    <ul>
                      <form action="">
                        <li>
                          <label for=""
                            ><input
                              type="radio"
                              value=""
                              checked="checked"
                            />Giao h??ng t???n n??i</label
                          >
                        </li>
                      </form>
                    </ul>
                  </div>
                  <div class="payment-methods">
                    <h4>Ph????ng th???c thanh to??n</h4>
                    <ul>
                      <li>
                        <label for="COD"
                          ><input
                            type="radio"
                            name="method"
                            value="COD"
                            id="COD"
                            checked
                          />Thanh to??n khi giao h??ng (COD)</label
                        >
                      </li>
                      <li>
                        <label for="bank"
                          ><input
                            type="radio"
                            name="method"
                            value="bank"
                            id="bank"
                          />Chuy???n kho???n qua ng??n h??ng</label
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="footer-payment d-flex justify-content-between">
                    <a href="./cart.php">Quay l???i th??ng tin ????n h??ng</a>
                    <button class="border-0 fw-bold text-white ">
                      X??c nh???n thanh to??n
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="pay col-lg-6 col-md-10 ">
            <div class="product-list mt-5">
              <div class="product-item d-flex border mb-4">
                <div class="image">
                  <img src="../public/img/T-Shirt/t6.png" alt="" />
                </div>
                <div
                  class="info d-flex flex-column justify-content-between px-4 py-3 flex-grow-1"
                >
                  <div>
                    <div class="d-flex">
                      <h2 class="text-dark fs-5">??o thun si??u ?????p (M)</h2>
                    </div>
                  </div>
                  <div>
                    <h3 class="fs-5 fw-bold">500.000 VND</h3>
                  </div>
                </div>
              </div>
              <div class="product-item d-flex border mb-4">
                <div class="image">
                  <img src="../public/img/Jacket/jacket1.png" alt="" />
                </div>
                <div
                  class="info d-flex flex-column justify-content-between px-4 py-3 flex-grow-1"
                >
                  <div>
                    <div class="d-flex">
                      <h2 class="text-dark fs-5">??o thun si??u ?????p (M)</h2>
                    </div>
                  </div>
                  <div>
                    <h3 class="fs-5 fw-bold">500.000 VND</h3>
                  </div>
                </div>
              </div>
              <hr />
            </div>
            <div class="discount-form d-flex justify-content-between">
              <input
                type="text"
                placeholder="M?? gi???m gi??"
                id="discount-form-input"
                onclick="paste(this)"
              />
              <button class="fw-bold text-white" id="btn-apply">S??? d???ng</button>
            </div>
            <div class="apply-discount d-flex justify-content-between py-3">
              <div class="discount-title d-flex mt-3">
                <i class="fa-solid fa-tags"></i>
                <p>M?? gi???m gi??</p>
              </div>
              <button
                class="button-discount"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                role="button"
              >
                <span class="text">Gi???m 10%</span><span>L???y ngay</span>
              </button>
              <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        M?? gi???m gi?? c???a shop
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div class="daily-card">
                        <div class="daily-title d-flex">
                          <i class="fa-brands fa-discourse"></i>
                          <h3>FREESHIPCOD</h3>
                        </div>
                        <div class="daily-content">
                          <p>Mi???n ph?? ph?? v???n chuy???n to??n qu???c</p>
                        </div>
                        <div class="daily-copyright">
                          <button
                            class="btn-test"
                            data-disscount="FREESHIPCOD"
                            role="button"
                          >
                            ??p d???ng
                          </button>
                        </div>
                      </div>
                      <div class="daily-card">
                        <div class="daily-title d-flex">
                          <i class="fa-brands fa-discourse"></i>
                          <h3>DEGREYRATYEUBAN</h3>
                        </div>
                        <div class="daily-content">
                          <p>Gi???m 10% gi?? tr??? ????n h??ng</p>
                        </div>
                        <div class="daily-copyright">
                          <button
                            class="btn-test"
                            data-disscount="DEGREYRATYEUBAN"
                            role="button"
                          >
                            ??p d???ng
                          </button>
                        </div>
                      </div>
                      <div class="daily-card">
                        <div class="daily-title d-flex">
                          <i class="fa-brands fa-discourse"></i>
                          <h3>HANOIKHONGVOIDUOCDAU</h3>
                        </div>
                        <div class="daily-content">
                          <p>
                            Mi???n ph?? v???n chuy???n v???i c?????c ph?? th???p h??n 50,000???
                          </p>
                        </div>
                        <div class="daily-copyright">
                          <button
                            class="btn-test"
                            data-disscount="HANOIKHONGVOIDUOCDAU"
                            role="button"
                          >
                            ??p d???ng
                          </button>
                        </div>
                      </div>
                      <div class="daily-card">
                        <div class="daily-title d-flex">
                          <i class="fa-brands fa-discourse"></i>
                          <h3>DEGREYVIETNAM</h3>
                        </div>
                        <div class="daily-content">
                          <p>Gi???m 5% gi?? tr??? ????n h??ng,</p>
                        </div>
                        <div class="daily-copyright">
                          <button
                            class="btn-test"
                            data-disscount="DEGREYVIETNAM"
                            role="button"
                          >
                            ??p d???ng
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bill">
              <div
                class="mb-2 p-3 fs-5 fw-normal d-flex justify-content-between align-items-center"
              >
                <span class="text-black-50">T???m t??nh:</span>
                <span class="text-primary" id="sub-total-money"
                  >9.000.000 VND</span
                >
              </div>
              <div
                class="mb-2 p-3 fs-5 fw-normal d-flex justify-content-between align-items-center discount-box d-none"
              >
                <span class="text-black-50">Gi???m gi??:</span>
                <span class="text-primary" id="discount-money"
                  >9.000.000 VND</span
                >
              </div>
              <hr />
              <div
                class="mb-2 p-3 fs-5 fw-normal d-flex justify-content-between align-items-center"
              >
                <span class="text-black-50">Th??nh ti???n:</span>
                <span class="text-primary" id="total-money">9.000.000 VND</span>
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
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>V??? DEGREY</h3>
                <p>
                  C??i t??n Degrey ???????c t???o ra r???t ng???u h???ng, xu???t ph??t t??? ???Chu???i
                  ng??y u bu???n v??? s??? nghi???p, t????ng lai trong qu?? kh??? c???a ch??nh
                  m??nh??? ??? theo l???i chia s??? c???a Degrey???s founder.
                </p>
              </div>
              <div class="footer-logo">
                <img src="../public/img/logo-footer.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>?????a ch???</h3>
                <b>-S??i G??n:</b>
                <p>
                  43 Hu???nh V??n B??nh P.17 Q.Ph?? Nhu???n 905 Lu??? B??n B??ch P.T??n
                  Th??nh Q.T??n Ph?? 26 L?? T??? Tr???ng Q.1 - The New Playground
                </p>
                <b>-???? L???t:</b>
                <p>11 Khu Ho?? B??nh P.1</p>
                <p><b>??i???n tho???i:</b> 0336311117</p>
                <p><b>Email:</b> degrey.vn@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>H??? tr??? kh??ch h??ng</h3>
                <ul>
                  <li>Shop</li>
                  <li>H?????ng d???n ?????t h??ng</li>
                  <li>Ch??nh x??c v?? quy ?????nh</li>
                  <li>Ch??nh s??ch b???o m???t</li>
                  <li>Th??ng tin s??? h???a</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-item">
              <div class="footer-content">
                <h3>Ch??m s??c kh??ch h??ng</h3>
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
      <p>Copyright ?? 2022 DEGREY VIETNAM</p>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="../public/js/data.js"></script>
    <script src="../public/js/shopping-cart.js"></script>
    <script src="../public/js/checkout.js"></script>
  </body>
</html>
