<!doctype html>
<html lang="en">

<head>
    <title>Home <?php include 'connection.php'?></title>

    <link rel="stylesheet" href="style.css"> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<style>
body {
    background: #fefefe;
}
</style>

<body>
    <header>



        <nav class="navbar navbar-light navbar-expand-sm  ">
            <img src="https://img.icons8.com/cotton/256/capsule.png" alt=""
                style="width:50px;height:50px; margin:10px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ABC clinic</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Services</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">contact</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
        <!-- place navbar here -->











    </header>
    <main>

        <div class="container">
            <div class="image"></div>
            <div class="text">ABC clinic</div>
        </div>
        <style>
        .t {
            color: rgb(64, 123, 201);
        }
        </style>








        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
        @import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');



        .cards {
            height: auto;
            width: 100%;
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -webkit-justify-content: center;
            max-width: 820px;
            background: #fefefe;
        }

        .card--1 .card__img,
        .card--1 .card__img--hover {
            background-image: url('');
        }

        .card--2 .card__img,
        .card--2 .card__img--hover {
            background-image: url('');
        }

        .card__like {
            width: 18px;
        }

        .card__clock {
            width: 15px;
            vertical-align: middle;
            fill: #AD7D52;
        }

        .card__time {
            font-size: 12px;
            color: #AD7D52;
            vertical-align: middle;
            margin-left: 5px;
        }

        .card__clock-info {
            float: right;
        }

        .card__img {
            visibility: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 235px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;

        }

        .card__info-hover {
            position: absolute;
            padding: 16px;
            width: 100%;
            opacity: 0;
            top: 0;
        }

        .card__img--hover {
            transition: 0.2s all ease-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            position: absolute;
            height: 235px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            top: 0;

        }

        .card {
            margin-right: 25px;
            transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
            background-color: #fefefe;
            width: 33.3%;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 13px 10px -7px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0px 30px 18px -8px rgba(0, 0, 0, 0.1);
            transform: scale(1.10, 1.10);
        }

        .card__info {
            z-index: 2;
            background-color: #fff;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            padding: 16px 24px 24px 24px;
        }

        .card__category {
            font-family: 'Raleway', sans-serif;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 500;
            color: #868686;
        }

        .card__title {
            margin-top: 5px;
            margin-bottom: 10px;
            font-family: 'Roboto Slab', serif;
        }

        .card__by {
            font-size: 12px;
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
        }

        .card__author {
            font-weight: 600;
            text-decoration: none;
            color: #AD7D52;
        }

        .card:hover .card__img--hover {
            height: 100%;
            opacity: 0.3;
        }

        .card:hover .card__info {
            background-color: transparent;
            position: relative;
        }

        .card:hover .card__info-hover {
            opacity: 1;
        }
        </style>

        <center>
            <section class="cards mt-5">



                <article class="card card--2">
                    <div class="card__info-hover">
                        <svg class="card__like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card__clock-info">
                            <svg class="card__clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg><span class="card__time">5 min</span>
                        </div>

                    </div>
                    <div class="card__img"></div>
                    <a href="#" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category"> Travel</span>
                        <h3 class="card__title">Discover the sea</h3>
                        <span class="card__by">by <a href="#" class="card__author" title="author">John Doe</a></span>
                    </div>
                </article>


                <article class="card card--2">
                    <div class="card__info-hover">
                        <svg class="card__like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card__clock-info">
                            <svg class="card__clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg><span class="card__time">5 min</span>
                        </div>

                    </div>
                    <div class="card__img"></div>
                    <a href="#" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category"> Travel</span>
                        <h3 class="card__title">Discover the sea</h3>
                        <span class="card__by">by <a href="#" class="card__author" title="author">John Doe</a></span>
                    </div>
                </article>

                <article class="card card--2">
                    <div class="card__info-hover">
                        <svg class="card__like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card__clock-info">
                            <svg class="card__clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg><span class="card__time">5 min</span>
                        </div>

                    </div>
                    <div class="card__img"></div>
                    <a href="#" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category"> Travel</span>
                        <h3 class="card__title">Discover the sea</h3>
                        <span class="card__by">by <a href="#" class="card__author" title="author">John Doe</a></span>
                    </div>
                </article>


            </section>



        </center>


        <center>
            <style>
            .about {
                margin-top: 100px;
            }
            </style>
            <div class="about t ">
                <h2>About us</h2>
            </div>
        </center>

        <div class="right " style="float:left;">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita repudiandae consequatur, illum
                blanditiis necessitatibus asperiores in perferendis saepe quaerat amet hic possimus eos alias, porro
                animi placeat illo optio ad? Ut magnam fugiat quisquam suscipit numquam? Minus quod fugiat voluptate
                obcaecati omnis, labore dicta ipsum excepturi cum beatae et id quasi officiis illum sed ullam dolore non
                deserunt! Quisquam ex tempore unde odio ullam aspernatur distinctio provident qui recusandae, et eum
                illum repudiandae? Maiores facere iure praesentium. Modi, provident tenetur nobis eos commodi distinctio
                dolor repellat quia porro nostrum quas mollitia excepturi debitis accusantium ipsa, neque possimus
                voluptates doloremque libero.</p>
        </div>

        <div class="services">

            <center>
                <div class="about t ">
                    <h2>Services</h2>
                </div>
            </center>

            <div class="container">

                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>

            <div id="content" >
              <center>
              <iframe src="book.php" style=" width:500px; height:500px; margin-top:15%;"></iframe>

              </center>
</div>

<center>
            <div class="maps">

                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=trivandram&t=&z=20&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                        </iframe>
                        <a href="https://2yu.co">2yu</a>
                        <br>
                        <style>
                        .mapouter {
                            margin-top: 100px;
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 70%;

                        }
                        </style>
                        <a href="https://embedgooglemap.2yu.co/">html embed google map</a>
                        <style>
                        .gmap_canvas {

                            overflow: hidden;
                            background: none !important;
                            height: 85%;
                            width: 100%;
                            border-radius: 30px;
                            background-image: linear-gradient(to right, white, #333, white);
                            background-repeat: no-repeat;
                            background-size: 100% 10px;

                        }
                        </style>
                    </div>
                </div>

            </div>
            </center>
  


    </main>
    <footer>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted " style="margin-top:0px; padding:0px;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>