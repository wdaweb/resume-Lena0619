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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <!-- fontawesome -->
  <!-- google icon -->
  <script src="https://kit.fontawesome.com/0384e8e8f1.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- wow -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Langar&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet" />
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
          <li><a href="#work">Works</a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
        <img id="mainpic" src="img/img5.jpg" style="width: 80%; padding-top: 70px" />
        <img src="img/syimg.png" class="sy_word wow zoomInRight" style="max-height:586px" />
        <div class="header_wel">
          <h1 style="color: white" class="wow bounceInDown" data-wow-delay="1s">
            Welcome
          </h1>
          <h1 style="color: white" class="wow bounceInLeft" data-wow-delay="1s">
            to
          </h1>
          <h1 style="color: white" class="wow bounceInUp" data-wow-delay="2s">
            my little planet.
          </h1>

          <a href="#about" class="wow fadeInUp" data-wow-delay="3.5s">start<br /><span class="material-icons">arrow_drop_down</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->

  <!-- start About -->
  <section id="about" class="text-white pt-5" style="height:100%">
    <div class="container" style="padding-top: 80px">
      <h3 class="aboutme text-center m-2" style="color: white">About</h3>
      <div class="row" style="padding-top: 40px;">
        <div class="col-lg-6 wow bounceInUp" style="color: white;">
          <h5>Introduction</h5>
          <p class="pb-3">
            <?php
            $intros = $Introductions->all(['sh' => '1']);

            // print_r($intros);
            foreach ($intros as $intro) {
              echo $intro['text'];
            }
            ?>
          </p>
          <hr />
          <h5 class="pt-3 pb-1">Experience</h5>
          <div class="accordion accordion-flush bg-light rounded" id="accordionFlushExample">

            <?php
            $exps = $Experience->all();

            foreach ($exps as $key => $exp) {
            ?>

              <div class="accordion-item" style="color:black;">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $key + 1 ?>" style="font-weight: 900;">
                    <?php echo $exp['work']; ?>

                  </button>
                </h2>
                <div id="flush-collapse<?= $key + 1 ?>" class="accordion-collapse collapse">
                  <div class="accordion-body p-2" style="background: #FCFAF2;">
                    <?php
                    echo "<span style='font-size:0.8rem'>" . $exp['period'] . "</span>";
                    echo "<br>";
                    echo "<br>";
                    echo "<pre style='margin:0;font-weight:900'>";
                    echo $exp['detail'];
                    echo "</pre>";
                    ?>
                  </div>
                </div>
              </div>

            <?php
            }
            ?>

          </div>

          <button id="donlo" class="my-5">
            <a href="./others/ShiangYunLin.pdf" download>
              <span class="material-icons">cloud_download</span> Download Resume
            </a>
          </button>
        </div>
        <div class="col-lg-6">
          <?php
          $pics = $Picture->all(['sh' => '1']);

          foreach ($pics as $key => $pic) {
          ?>
            <img class="rounded float-end" src="img/<?= $pic['img']; ?>" style="width: 90%; margin:0 auto" />

          <?php
          }
          ?>
        </div>
      </div>
  </section>
  <!-- end About -->

  <!-- start Skills -->
  <section id="skills" class="text-white pt-5">
    <div class="container text-white" style="padding-top: 100px; vertical-align: middle;">
      <h3 class="ski text-center m-2" style="color: white">Skills</h3>

      <div class="row text-center d-flex justify-content-center pt-5">
        <div class="col-12 col-sm-6 col-xs-6 col-lg-6 mt-3" style="max-width: 320px">
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
        <div class="col-12 col-sm-6 col-xs-6 col-lg-6 mt-3" style="max-width: 320px">
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

  <!-- start work -->
  <section id="work" class="text-white pt-5">
    <div class="container" style="padding-top: 100px;">
      <h3 class="work text-center m-2" style="color: white">Works</h3>
      <div class="row text-center d-flex justify-content-center mt-5">
        <div class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0" style="max-width:250px;max-height:250px">
          <img src="https://picsum.photos/300/250/?random=1" />
          <a href="#" class="myWork_link"><span class="material-icons">link</span></a>
        </div>
        <div class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0" style="max-width: 250px">
          <img src="https://picsum.photos/300/250/?random=2" />
          <a href="#" class="myWork_link"><span class="material-icons">link</span></a>
        </div>
        <div class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0" style="max-width: 250px">
          <img src="https://picsum.photos/300/250/?random=3" />
          <a href="#" class="myWork_link"><span class="material-icons">link</span></a>
        </div>
        <div class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0" style="max-width: 250px">
          <img src="https://picsum.photos/300/250/?random=4" />
          <a href="#" class="myWork_link"><span class="material-icons">link</span></a>
        </div>
        <div class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0" style="max-width: 250px">
          <img src="https://picsum.photos/300/250/?random=5" />
          <a href="#" class="myWork_link"><span class="material-icons">link</span></a>
        </div>
        <div class="myWork col-sm-6 col-xxl-4 m-1 bg-light p-0" style="max-width: 250px">
          <img src="https://picsum.photos/300/250/?random=6" />
          <a href="#" class="myWork_link"><span class="material-icons">link</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- end work -->

  <!-- start contact -->
  <section id="contact" class="text-white pt-5">
    <div style="padding-top: 100px">
      <header class="container text-center">
        <h3 class="dmam">Contact</h3>
        
      </header>
      <article class="container py-5">
        <div class="row text-center" style="vertical-align: middle;">
          <div class="col-lg-6">
          <h5>Drop me a message!</h5>
            <form action="" class="row text-dark d-flex justify-content-center">
              <div class="form-floating mb-2 col-10 col-lg-9">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating mb-2 col-10 col-lg-9">
                <input type="name" class="form-control" id="floatingName" placeholder="Name" />
                <label for="floatingPassword">Name</label>
              </div>

              <div class="form-floating mb-2 col-10 col-lg-9">
                <input type="phone" class="form-control" id="floatingPhone" placeholder="Phone Number" />
                <label for="floatingPassword">Phone Number</label>
              </div>

              <div class="form-floating mb-2 col-10 col-lg-9">
                <textarea class="form-control" placeholder="Leave a message here" id="floatingMessage" style="height: 100px"></textarea>
                <label for="floatingMessage">Message</label>
              </div>

              <div class="col-10 col-lg-9">
                <button type="submit" class="btn btn-primary float-end">
                  Send
                </button>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
          <h5 >My Information</h5>
          <table class="m-auto"  style="background: gray;">
          <?php
            $myinfos = $Myinfo->all();

            foreach ($myinfos as $myinfo) {
              echo "<tr><td class='d-flex float-left'>Name: ".$myinfo['name']."</td></tr>";
              echo "<tr><td class='d-flex float-left'>Email: ".$myinfo['email']."</td></tr>";
            }
          ?>
          </table>


          </div>
        </div>
      </article>

      <!-- start footer -->
      <footer style="color: white">
        <small style="float: right; margin: 20px">Design by <span class="text-warning">Shiang-Yun Lin</span></small>
      </footer>
      <!-- end footer -->
    </div>
  </section>
  <!-- end contact -->

  <!-- jQuery -->
  <script src="plugin/jquery-3.5.1.min.js"></script>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>
<script>
  $(function() {
    $(document).scroll(function() {
      // var $nav = $("#mainNavbar");
      var $nav = $(".nav");
      $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
  });

  $(".navTrigger").click(function() {
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