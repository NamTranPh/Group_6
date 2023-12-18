<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/cardbook.css') }}">

   
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Festivals</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
          
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex" style="margin: 0px 0px 0px 160px">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            style="width: 500px ; font-size: 20px;"
          />
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Đăng nhập</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div
            class="carousel-item active"
            style="
              background-image: url('https://bcp.cdnchinhphu.vn/Uploaded/dangdinhnam/2016_08_14/hinh-anh-tuong-lai-nao-cho-nganh-du-lich-tinh-quang-ninh-1.jpg');
            "
          >
            <div class="carousel-caption" style="font-size: 20px; font-weight: 500; ">
              <h5>First slide label</h5>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo
                commodi aut excepturi consequatur quibusdam explicabo?
                Doloremque voluptates corrupti facere optio veniam at vel
                cupiditate similique. Maiores eveniet quod consectetur iusto.
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="
              background-image: url('https://bcp.cdnchinhphu.vn/Uploaded/duongphuonglien/2020_09_24/giai%20nhat%20thuyen%20hoa.jpg');
            "
          >
            <div class="carousel-caption">
              <h5>Second slide label</h5>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Asperiores dicta est voluptate, aliquid nihil quam deleniti
                voluptates sed incidunt eius! A magnam quis aperiam deleniti
                cumque dicta saepe id delectus?
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="
              background-image: url('https://www.anhdulich.vn/storage/sliders/slide4.jpg');
            "
          >
            <div class="carousel-caption">
              <h5>Third slide label</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                beatae saepe quo aspernatur cupiditate. Provident itaque porro
                officia sapiente totam, nam impedit maiores assumenda laborum.
                Perspiciatis maiores mollitia unde tempora!.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>

    <!-- Prdcard start -->
    <section class="prdcard">
      <div class="container py-2">
        <h2 class="title"><span>Festivals</span></h2>
        <div class="row">
          <!-- Card start -->
          <div class="prd col-md-8 col-lg-6 col-xl-3">
            <div class="main card text-black rounded-0">
              <div class="imgcard">
                <img
                  src="https://tse3.mm.bing.net/th?id=OIP.Q15aMyvXHjeOjwa3NrkBagHaE8&pid=Api&P=0&h=180"
                  class="card-img-top rounded-0"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <div class="text-center">
                  <h5 class="card-title">Festival in Japan</h5>
                  <p class="text-muted mb-2">Hoa anh đào</p>
                </div>
                <div>
                  <div class="content d-flex justify-content-between">
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Minus saepe modi pariatur! Saepe, odio non rem ipsa esse
                      ipsam veritatis laborum excepturi temporibus tenetur
                      impedit minima odit natus facilis harum?</span
                    ><span></span>
                  </div>
                </div>
                <div
                  class="more d-flex justify-content-between total font-weight-bold mt-4"
                >
                  <span
                    ><a class="btn btn-outline-success" href="#" role="button"
                      >Read more</a
                    ></span
                  ><span class="moredate"
                    ><i class="fa-sharp fa-solid fa-calendar"></i
                    >29/10/2023</span
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- Card End -->
          <div class="prd col-md-8 col-lg-6 col-xl-3">
            <div class="main card text-black rounded-0">
              <div class="imgcard">
                <img
                  src="https://toplist.vn/images/800px/le-hoi-van-hoa-noi-tieng-tren-the-gioi-114980.jpg"
                  class="card-img-top rounded-0"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <div class="text-center">
                  <h5 class="card-title">
                    International Ice & Snow Sculpture Festival
                  </h5>
                  <p class="text-muted mb-2">China</p>
                </div>
                <div>
                  <div class="content d-flex justify-content-between">
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Minus saepe modi pariatur! Saepe, odio non rem ipsa esse
                      ipsam veritatis laborum excepturi temporibus tenetur
                      impedit minima odit natus facilis harum?</span
                    ><span></span>
                  </div>
                </div>
                <div
                  class="more d-flex justify-content-between total font-weight-bold mt-4"
                >
                  <span
                    ><a class="btn btn-outline-success" href="#" role="button"
                      >Read more</a
                    ></span
                  ><span class="moredate"
                    ><i class="fa-sharp fa-solid fa-calendar"></i
                    >29/10/2023</span
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="prd col-md-8 col-lg-6 col-xl-3">
            <div class="main card text-black rounded-0">
              <div class="imgcard">
                <img
                  src="https://toplist.vn/images/800px/le-thanh-patrick-dublin-ireland-810495.jpg"
                  class="card-img-top rounded-0"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <div class="text-center">
                  <h5 class="card-title">Songkran</h5>
                  <p class="text-muted mb-2">Thailand</p>
                </div>
                <div>
                  <div class="content d-flex justify-content-between">
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Minus saepe modi pariatur! Saepe, odio non rem ipsa esse
                      ipsam veritatis laborum excepturi temporibus tenetur
                      impedit minima odit natus facilis harum?</span
                    ><span></span>
                  </div>
                </div>
                <div
                  class="more d-flex justify-content-between total font-weight-bold mt-4"
                >
                  <span
                    ><a class="btn btn-outline-success" href="#" role="button"
                      >Read more</a
                    ></span
                  ><span class="moredate"
                    ><i class="fa-sharp fa-solid fa-calendar"></i
                    >29/10/2023</span
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="prd col-md-8 col-lg-6 col-xl-3">
            <div class="main card text-black rounded-0">
              <div class="imgcard">
                <img
                  src="https://toplist.vn/images/800px/le-hoi-van-hoa-noi-tieng-tren-the-gioi-114987.jpg"
                  class="card-img-top rounded-0"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <div class="text-center">
                  <h5 class="card-title">
                    Noche de Brujas - Night of the Witches
                  </h5>
                  <p class="text-muted mb-2">Cerro Mono Blanco, Mexico</p>
                </div>
                <div class="content d-flex justify-content-between">
                  <span
                    >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Minus saepe modi pariatur! Saepe, odio non rem ipsa esse
                    ipsam veritatis laborum excepturi temporibus tenetur impedit
                    minima odit natus facilis harum?</span
                  ><span></span>
                </div>
                <div
                  class="more d-flex justify-content-between total font-weight-bold mt-4"
                >
                  <span
                    ><a class="btn btn-outline-success" href="#" role="button"
                      >Read more</a
                    ></span
                  ><span class="moredate"
                    ><i class="fa-sharp fa-solid fa-calendar"></i
                    >29/10/2023</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Prdcard -->

    <!--image card books start-->
    <section class="book">
      <div class="container">
        <h2 class="title">Books at Festivals<span>.com</span></h2>
        <!--image start-->
        <div class="insertbook">
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>
                <span>
                  Around the World in 500 Festivals: The World's Most
                  Spectacular Celebrations (Culture Smart!)</span
                >
              </h2>
              <p>
                Around the World in 500 Festivals is a rare book that will
                fascinate and inspire. A large-format, beautifully illustrated
                coffee-table volume, it is a photographic exploration of the
                richness and variety of the world’s most colourful, moving,
                joyful, and spectacular celebrations. Thousands of festivals,
                great and small, take place around the world every year.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a class="read-more" href="#"
                    >Buy <i class="fa-solid fa-cart-shopping"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>
                <span>
                  Around the World in 500 Festivals: The World's Most
                  Spectacular Celebrations (Culture Smart!)</span
                >
              </h2>
              <p>
                Around the World in 500 Festivals is a rare book that will
                fascinate and inspire. A large-format, beautifully illustrated
                coffee-table volume, it is a photographic exploration of the
                richness and variety of the world’s most colourful, moving,
                joyful, and spectacular celebrations. Thousands of festivals,
                great and small, take place around the world every year.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a class="read-more" href="#"
                    >Buy <i class="fa-solid fa-cart-shopping"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>
                <span>
                  Around the World in 500 Festivals: The World's Most
                  Spectacular Celebrations (Culture Smart!)</span
                >
              </h2>
              <p>
                Around the World in 500 Festivals is a rare book that will
                fascinate and inspire. A large-format, beautifully illustrated
                coffee-table volume, it is a photographic exploration of the
                richness and variety of the world’s most colourful, moving,
                joyful, and spectacular celebrations. Thousands of festivals,
                great and small, take place around the world every year.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a class="read-more" href="#"
                    >Buy <i class="fa-solid fa-cart-shopping"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>
                <span>
                  Around the World in 500 Festivals: The World's Most
                  Spectacular Celebrations (Culture Smart!)</span
                >
              </h2>
              <p>
                Around the World in 500 Festivals is a rare book that will
                fascinate and inspire. A large-format, beautifully illustrated
                coffee-table volume, it is a photographic exploration of the
                richness and variety of the world’s most colourful, moving,
                joyful, and spectacular celebrations. Thousands of festivals,
                great and small, take place around the world every year.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a class="read-more" href="#"
                    >Buy <i class="fa-solid fa-cart-shopping"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>
                <span>
                  Around the World in 500 Festivals: The World's Most
                  Spectacular Celebrations (Culture Smart!)</span
                >
              </h2>
              <p>
                Around the World in 500 Festivals is a rare book that will
                fascinate and inspire. A large-format, beautifully illustrated
                coffee-table volume, it is a photographic exploration of the
                richness and variety of the world’s most colourful, moving,
                joyful, and spectacular celebrations. Thousands of festivals,
                great and small, take place around the world every year.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a class="read-more" href="#"
                    >Buy <i class="fa-solid fa-cart-shopping"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>Your <span>Title</span></h2>
              <div class="title">
                <p>
                  Around the World in 500 Festivals: The World's Most
                  Spectacular Celebrations (Culture Smart!)
                </p>
              </div>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a class="read-more" href="#"
                    >Buy <i class="fa-solid fa-cart-shopping"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img
              src="https://m.media-amazon.com/images/P/1857336852.01._SCLZZZZZZZ_SX500_.jpg"
              alt=""
            />
            <div class="details">
              <h2>Your <span>Title</span></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>Now</span></a>
                <div class="icon-links">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                  <a href="#"><i class="fas fa-paperclip"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
          <!--image card start-->
          <div class="image">
            <img src="3.jpg" alt="" />
            <div class="details">
              <h2>Your <span>Title</span></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <div class="more">
                <a href="#" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                  <a href="#"><i class="fas fa-paperclip"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--image card end-->
        </div>
        <!--image end-->
        <div class="d-grid gap-2 col-6 mx-auto">
          <a class="btn btn-warning" href="./books.html" role="button"
            >See more</a
          >
        </div>
      </div>
    </section>
    <!--image card book end-->

    <!-- Footer -->
    <section class="foot">
      <footer class="footer-distributed">
        <!-- Left -->
        <div class="footer-left">
          <h3>Festivals<span>.com</span></h3>

          <p class="footer-links">
            <a href="index.html">Home</a>
            |
            <a href="about.html">About</a>
            |
            <a href="contact.html">Contact</a>
            |
            <a href="books.html">Books</a>
          </p>

          <p class="footer-date-name">Started <strong>20/5/2023</strong></p>
        </div>
        <!-- Center -->
        <div class="footer-center">
          <div>
            <i class="fa-solid fa-location-dot"></i>
            <p><span>Hà Nội</span>Việt Nam</p>
          </div>

          <div>
            <i class="fa-solid fa-phone"></i>
            <p>+84 943178267</p>
          </div>
          <div>
            <i class="fa-solid fa-envelope"></i>
            <p>G2.Aptech@gmail.com</p>
          </div>
        </div>
        <!-- Right  -->
        <div class="footer-right">
          <p class="footer-follow">
            <span>Follow Us</span>
            <strong>Festivals.com</strong>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ut,
            perferendis aut atque saepe sequi dolorum sint velit pariatur non
            facere blanditiis officiis!
          </p>
          <div class="footer-icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
          </div>
        </div>
      </footer>
    </section>

    <!-- Link script -->
    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
