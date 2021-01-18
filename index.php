<?php
include_once "base.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
    <link rel="stylesheet" href="plugin/style.css" />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <!-- fontawesome -->
    <!-- google icon -->
    <script
      src="https://kit.fontawesome.com/0384e8e8f1.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- wow -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Langar&family=Noto+Serif:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- slick -->
    <link rel="stylesheet" href="plugin/slick.css">
    <link rel="stylesheet" href="plugin/slick-theme.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="plugin/slick.min.js"></script>

    <title>ShiangYun's website</title>
  </head>

  <body>
    <script>
      new WOW().init();
    </script>

    <!-- start Nav -->
    <nav class="nav">
      <div class="container">
        <div class="logo">
          <a href="#header">Shiang.</a>
        </div>
        <div id="mainListDiv" class="main_list">
          <ul class="navlinks">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
              <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="material-icons" style="vertical-align:center">face</span>
              </a>   
            </li>
          </ul>
        </div>
        <span class="navTrigger">
          <i></i>
          <i></i>
          <i></i>
        </span>
      </div>
    </nav>
    <!-- end nav -->


    <!--start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="api/checkAcc.php" method="post">
          <div class="mb-3 row">
            <label for="staticAccount" class="col-sm-2 col-form-label">Account</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staticAccount" name="acc">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" name="pw">
            </div>
          </div>
          <div>
            <input class="btn-primary" type="submit">
            <input class="btn-warning" type="reset">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   <!--end Modal -->

    <!-- start header -->
    <section id="header">
      <div class="container">
        <div class="header_pic">
          <!-- <img src="img/IMG_6266.jpg" style="width:400px;padding:100px 0px;"> -->
          <img
            id="mainpic"
            src="img/img5.jpg"
            style="width: 80%; padding-top: 70px"
          />
          <img src="img/syimg.png" class="sy_word wow zoomInRight" style="max-height:586px" />
          <div class="header_wel">
            <h1
              style="color: white"
              class="wow bounceInDown"
              data-wow-delay="1s"
            >
              Welcome
            </h1>
            <h1
              style="color: white"
              class="wow bounceInLeft"
              data-wow-delay="1s"
            >
              to
            </h1>
            <h1 style="color: white" class="wow bounceInUp" data-wow-delay="2s">
              my little planet.
            </h1>

            <a href="#about" class="wow fadeInUp" data-wow-delay="3.5s"
              >start<br /><span class="material-icons">arrow_drop_down</span></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- start About -->
    <section id="about" class="text-white pt-5">
      <div class="container" style="padding-top: 80px">
        <h3 class="aboutme text-center m-2" style="color: white">About me</h3>
        <div class="row" style="padding-top: 40px;">
          <div class="col-lg-6 wow bounceInUp" style="color: white;">
            <h5>Introduction</h5>
            <p>
              <?php
              $intros = $Introductions->all(['sh'=>'1']);
              
              // print_r($intros);
              foreach($intros as $intro){
                echo $intro['text'];
              }
              ?>
            </p>
            <hr />
            <h5>Experience</h5>
            <div
              class="accordion accordion-flush bg-light"
              id="accordionFlushExample"
              style="border-radius: 8% 8%"
            >

            <?php
            $exps=$Experience->all();
            echo $exps;
            foreach($exps as $exp){
            ?>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse1"
                  >
                    泰山職訓場-PHP資料庫網頁設計班
                  </button>
                </h2>
                <div id="flush-collapse1" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>

            <?php
            }
            ?>

            

              <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse2"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    仁寶電腦
                  </button>
                </h2>
                <div id="flush-collapse2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    澳洲打工度假
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                >
                  <div class="accordion-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour"
                    aria-expanded="false"
                    aria-controls="flush-collapseFour"
                  >
                    宜家貿易
                  </button>
                </h2>
                <div
                  id="flush-collapseFour"
                  class="accordion-collapse collapse"
                >
                  <div class="accordion-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive"
                    aria-expanded="false"
                    aria-controls="flush-collapseFive"
                  >
                    Starbucks
                  </button>
                </h2>
                <div
                  id="flush-collapseFive"
                  class="accordion-collapse collapse bg-dark"
                >
                  <div class="accordion-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
            </div> -->

            <button id="donlo">
              <a href="/img/img1.jpg" download
                ><span class="material-icons">cloud_download</span> Download
                Resume</a
              >
            </button>
          </div>
          <div class="col-lg-6">
            <img src="img/IMG_63542.jpg" style="width: 100%" />
          </div>
        </div>
      </div>
    </section>
    <!-- end About -->

    <!-- start Skills -->
    <section id="skills" class="text-white pt-5">
      <div class="container text-white" style="padding-top: 100px; vertical-align: middle;">
        <h3 class="ski text-center m-2" style="color: white">Skills</h3>

        <div class="row text-center d-flex justify-content-center pt-5">
          <div
            class="col-12 col-sm-6 col-xs-6 col-lg-6 mt-3"
            style="max-width: 320px"
          >
            <div class="ski_block">
              <!-- <h5>Front-end</h5> -->
              <span class="material-icons">code</span>
              <ul>
                <li>HTML
                    <div class="circle-wrap">
                        <div class="circle hm">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>
            

                <li>CSS
                    <div class="circle-wrap">
                        <div class="circle cs">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

                <li>Bootstrap
                    <div class="circle-wrap">
                        <div class="circle bs">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

                <li>Javascript
                    <div class="circle-wrap">
                        <div class="circle js">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

              </ul>
            </div>
          </div>
          <div
            class="col-12 col-sm-6 col-xs-6 col-lg-6 mt-3"
            style="max-width: 320px"
          >
            <div class="ski_block">
              <!-- <h5>Back-end</h5> -->
              <span class="material-icons">topic</span>
              <ul>
                <li>PHP
                    <div class="circle-wrap">
                        <div class="circle pp">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

                <li>mySQL
                    <div class="circle-wrap">
                        <div class="circle sq">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-6 mt-3" style="max-width: 320px">
            <div class="ski_block">
              <!-- <h5>Computer Graphics</h5> -->
              <span class="material-icons">brush</span>
              <ul>
                <li>Photoshop
                    <div class="circle-wrap">
                        <div class="circle ps">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

                <li>illustrator
                    <div class="circle-wrap">
                        <div class="circle il">
                            
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            
                            <div class="inside-circle">
                                50%
                            </div>
                            
                        </div>
                    </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Skills -->

    <!-- start portfolio -->
    <section id="portfolio" class="text-white pt-5">
      <div class="container" style="padding-top: 100px;">
        <h3 class="portfolio text-center m-2" style="color: white">Portfolio</h3>
        <div class="row text-center d-flex justify-content-center mt-5">
          <div
            class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0"
            style="max-width:250px;max-height:250px"
          >
            <img src="https://picsum.photos/300/250/?random=1" />
            <a href="#" class="myWork_link"
              ><span class="material-icons">link</span></a
            >
          </div>
          <div
            class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0"
            style="max-width: 250px"
          >
            <img src="https://picsum.photos/300/250/?random=2" />
            <a href="#" class="myWork_link"
              ><span class="material-icons">link</span></a
            >
          </div>
          <div
            class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0"
            style="max-width: 250px"
          >
            <img src="https://picsum.photos/300/250/?random=3" />
            <a href="#" class="myWork_link"
              ><span class="material-icons">link</span></a
            >
          </div>
          <div
            class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0"
            style="max-width: 250px"
          >
            <img src="https://picsum.photos/300/250/?random=4" />
            <a href="#" class="myWork_link"
              ><span class="material-icons">link</span></a
            >
          </div>
          <div
            class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0"
            style="max-width: 250px"
          >
            <img src="https://picsum.photos/300/250/?random=5" />
            <a href="#" class="myWork_link"
              ><span class="material-icons">link</span></a
            >
          </div>
          <div
            class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0"
            style="max-width: 250px"
          >
            <img src="https://picsum.photos/300/250/?random=6" />
            <a href="#" class="myWork_link"
              ><span class="material-icons">link</span></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- end portfolio -->

    <!-- start contact -->
    <section id="contact" class="text-white pt-5">
      <div style="padding-top: 100px">
        <header class="container text-center">
          <h3 class="dmam">Drop me a message!</h3>
          <p>Get in touch.</p>
        </header>
        <article class="container py-5">
          <form action="" class="row text-dark d-flex justify-content-center">
            <div class="form-floating mb-2 col-10 col-lg-9">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mb-2 col-10 col-lg-9">
              <input
                type="name"
                class="form-control"
                id="floatingName"
                placeholder="Name"
              />
              <label for="floatingPassword">Name</label>
            </div>

            <div class="form-floating mb-2 col-10 col-lg-9">
              <input
                type="phone"
                class="form-control"
                id="floatingPhone"
                placeholder="Phone Number"
              />
              <label for="floatingPassword">Phone Number</label>
            </div>

            <div class="form-floating mb-2 col-10 col-lg-9">
              <textarea
                class="form-control"
                placeholder="Leave a message here"
                id="floatingMessage"
                style="height: 100px"
              ></textarea>
              <label for="floatingMessage">Message</label>
            </div>

            <div class="col-10 col-lg-9">
              <button type="submit" class="btn btn-primary float-end">
                Send
              </button>
            </div>
          </form>
        </article>

        <!-- start footer -->
        <footer style="color: white">
          <!-- <div class="container text-center" style="padding-top:20px;">
                    <small class="">copyright &copy; <span class="text-warning">Shiang-Yun Lin Design</span>. All right
                        reserved</small>
                </div> -->
          <small style="float: right; margin: 20px"
            >Design by <span class="text-warning">Shiang-Yun Lin</span></small
          >
        </footer>
        <!-- end footer -->
      </div>
    </section>
    <!-- end contact -->

    <!-- jQuery -->
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<script>
  $(function () {
    $(document).scroll(function () {
      // var $nav = $("#mainNavbar");
      var $nav = $(".nav");
      $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
  });

  $(".navTrigger").click(function () {
    $(this).toggleClass("active");
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();
  });

  // $(window).scroll(function() {
  //             if ($(document).scrollTop() > 50) {
  //                 $('.nav, div.main_list').addClass('affix');
  //                 console.log("OK");
  //             } else {
  //                 $('.nav, div.main_list').removeClass('affix');
  //             }
  // });

  //slick輪播
  $(".mywork").slick({
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 4
  });
</script>

<!-- 好看的動畫
https://codepen.io/ruslanvybor/pen/gOPVjax 
https://codepen.io/jonneal/pen/GRJRzVK
https://codepen.io/kyledws/pen/Gvelt
card hover effect
-->
