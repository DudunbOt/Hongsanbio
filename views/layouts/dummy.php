<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <title>.:: Klenteng Hong San Bio :: Gorontalo ::.</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="Hong San Bio, Klenteng Gorontalo, Wisata Religi Gorontalo, Budaya Cina, Pembangunan Renovasi Klenteng Hong San Bio Gorontalo">

  <meta content="" name="Pembangunan Renovasi Klenteng Hong San Bio Gorontalo">

  <!-- Favicons -->

  <link href="img/favicon.png" rel="icon">

  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">



<?php $this->head() ?>


</head>

<body>
<?php $this->beginBody() ?>

  <!--==========================

    Header

  ============================-->

  <header id="header">

    <div class="container">



      <div id="logo" class="pull-left">

        <h1><a href="#intro" class="scrollto"><img src="img/logohsbwhite.png" width="40px">&nbsp;HongSanBio</a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->

        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->

      </div>



      <nav id="nav-menu-container">

        <ul class="nav-menu">

          <li class="menu-active"><a href="#intro">Home</a></li>

          <li><a href="#about">Tentang Kami</a></li>

          <li><a href="#features">Proposal</a></li>

          <li><a href="#advanced-features">Sketsa</a></li>

          <li><a href="#team">Pengurus</a></li>

          <li><a href="#donasi">Cara Berdonasi</a></li>

          <li><a href="#contact">Hubungi Kami</a></li>

        </ul>

      </nav><!-- #nav-menu-container -->

    </div>

  </header><!-- #header -->



  <!--==========================

    Intro Section

  ============================-->

  <section id="intro">



    <div class="intro-text">

      <h2>Welcome to HSB</h2>

      <p>Klenteng Hong San Bio Gorontalo</p>

      <a href="#about" class="btn-get-started scrollto">Mulai Mengenal</a>

    </div>



    <div class="product-screens">



      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">

        <img src="img/i1.png" alt="">

      </div>

<!--

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">

        <img src="img/product-screen-2.png" alt="">

      </div>



      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">

        <img src="img/product-screen-3.png" alt="">

      </div>

    -->

    </div>



  </section><!-- #intro -->



  <main id="main">



    <!--==========================

      About Us Section

    ============================-->

    <section id="about" class="section-bg">

      <div class="container-fluid">

        <div class="section-header">

          <h3 class="section-title">Latar Belakang Hong San Bio <br>(Tentang Kami)</h3>

          <span class="section-divider"></span>

          <p class="section-description">

            Klenteng Hong San Bio/Feng Shan Miao dibangun pada tahun 2003. Pembangunan Klenteng ini merupakan partisipasi dari Umat dan Para Donatur saat itu.

            <br>



          </p>

        </div>



        <div class="row">

          <div class="col-lg-6 about-img wow fadeInLeft">

            <img src="img/aboutus.jpg" alt="">

          </div>



          <div class="col-lg-6 content wow fadeInRight">

            <h3>Sejalan dengan perkembangan dan kemajuan zaman, Klenteng Hong San Bio/Feng Shan Miao dituntut dapat memenuhi kebutuhan umat. Umat semakin kritis dalam melihat segala aspek kehidupan; disamping itu, letak Klenteng Hong San Bio/Feng Shan Miao cukup strategis untuk dikunjungi karena memiliki daya tarik pemandangan laut dan suasana alami yang indah, tepatnya terletak diatas bukit Desa Tanjung Kramat, Kecamatan Hulondalangi,  Kota Gorontalo</h3>

            <p>

              Keberadaan dan kondisi Klenteng Hong San Bio/Feng Shan Miao saat ini secara fisik cukup sederhana, karena Klenteng tidak memiliki sarana dan prasarana yang memadai.

            </p>



            <p>

              Untuk menyikapi hal ini, dan dengan melihat kondisi Klenteng saat ini yang ada, kami Umat yang ada juga merupakan Panitia Pembangunan/Pembaruan Klenteng Hong San Bio/Feng Shan Miao mempunyai keinginan untuk memenuhi kebutuhan tersebut dengan mengadakan Klenteng yang memiliki sarana dan prasarana yang memadai, yaitu dengan jalan melakukan Pembangunan kembali / Renovasi Klenteng yang kami miliki.

            </p>

          </div>

        </div>



      </div>

    </section><!-- #about -->



    <!--==========================

      Product Featuress Section

    ============================-->

    <section id="features">

      <div class="container">



        <div class="row">



          <div class="col-lg-8 offset-lg-4">

            <div class="section-header wow fadeIn" data-wow-duration="1s">

              <h3 class="section-title">Maksud dan Tujuan</h3>

              <span class="section-divider"></span>

            </div>

          </div>



          <div class="col-lg-4 col-md-5 features-img">

            <img src="img/HSB.png" alt="" class="wow fadeInLeft" width="80%">

            <br><br>

          </div>



          <div class="col-lg-8 col-md-7 ">

              <div class="wow fadeInRight">Berdasarkan latar belakang di atas,

              kami bermaksud membangun kembali Klenteng dengan konstruksi yang lebih teratur, simetris, kuat

              dan lebih layak untuk digunakan.

              Oleh karena itu,

              kami membuka kesempatan bagi Semua Pihak (Umat, Saudara/i, Simpatisan, Rekan, Sahabat dan Siapapun yang terdorong hatinya) untuk dapat mengambil bagian atau berpartisipasi dalam pembangunan kembali Klenteng Hong San Bio/Feng Shan Miao Gorontalo

              <br><br>Tujuan dari pemugaran Klenteng Hong San Bio/Feng Shan Miao  adalah:

              </div>

<br>

            <div class="row">



              <div class="col-lg-6 col-md-6 box wow fadeInRight">

                <div class="icon"><img src="img/iconaman.png" width="10%"></div>

                <p class="description">Menyediakan Klenteng yang aman dan nyaman bagi umat yang ada</p>

              </div>

              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">

                <div class="icon"><img src="img/iconsumberdaya.png" width="10%"></div>

                <p class="description">Meningkatkan kualitas sumber daya manusia (SDM) yang berdasarkan pada keyakinan terhadap ajaran kebenaran hakiki</p>

              </div>

              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">

                <div class="icon"><img src="img/iconajaran.png" width="10%"></div>

                <p class="description">Memperlancar kegiatan umat beragama <br> dan Melestarikan generasi umat terhadap ajaran kebenaran</p>

              </div>

              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">

                <div class="icon"><img src="img/iconbudaya.png" width="10%"></div>

                <p class="description">Menjadikan Klenteng Hong San Bio/Feng Shan Miao salah satu Ikon Budaya khususnya Tionghoa di daerah Gorontalo dalam ragam budaya nusantara.</p>

              </div>

            </div>



          </div>



        </div>



      </div>



    </section><!-- #features -->



    <!--==========================

      Product Advanced Featuress Section

    ============================-->

    <section id="advanced-features">



      <div class="features-row section-bg">

        <div class="container">

          <div class="row">

            <div class="col-12">



              <div class="wow fadeInLeft">

                <h2>Tahapan Renovasi (Pembangunan Kembali)</h2>

                <p>Berhubung terbatasnya ketersediaan dana, kami membagi proses renovasi ini dalam 3 tahap.

                </p>

              </div>



              <div class="wow fadeInLeft">

                  <pre>

                Tahap Pertama : Proses Cut and Fill dan Pembongkaran bangunan lama

                Tahap Kedua   : Pembangunan dimulai dari Bangunan Utama, kemudian Bangunan Pendamping

                Tahap Ketiga  : Finishing, yaitu penyesuaian dan penambahan ornament – ornament interior maupun exterior.

                </pre>

              </div>

              <div class="wow fadeInUp">Kami menyadari dana yang terkumpul saat ini hanya dapat melakukan pembangunan pada tahap awal, untuk itu, Kami Panitia mengharapkan kebijaksanaan dan kemurahan hati para Donatur untuk membantu pelaksanaan renovasi Klenteng Hong San Bio/Feng Shan Miao</div>



            </div>

          </div>

        </div>

      </div>





      <div class="features-row">

        <div class="container">

          <div class="row">



          <div class="col-12">

                <div class="section-header wow fadeIn" data-wow-duration="1s">

                  <h2 class="section-title">Dokumentasi Progres Pembangunan Klenteng</h2>

                  <span class="section-divider"></span>

          <p class="section-description">

           Acara Pelaksanaan Peletakan Batu Pertama untuk Pembangunan/Renovasi Klenteng Pada Tanggal 4 Oktober 2018, Pukul 11.00 WITA.



          </p>





                </div>

            </div>

          </div>



<!-- GALLERY  -->

        <div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href="">Pembukaan Peletakan Batu</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/1.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href="">Sembayang</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/2.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href="">Sembayang</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/3.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href="">Peletakan Batu Pertama</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/4.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href="">Pembangunan Turap</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/5.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href="">Peletakan Batu Turap</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/6.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href="">Lokasi Pembangunan Turap</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/7.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href="">Persiapan Pekerjaan Turap</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/8.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 12 November 2018</strong></u></center>

<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href="">Turap A Tahap 1</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/9.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href="">Turap B Tahap 1</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/10.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href="">Turap A selesai sekitar 6m</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/11.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href="">Turap B persiapan pengecoran</a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/12.jpg" width="90%"></div>

                  </div>

              </div>





        </div>



        <hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 09 Desember 2018</strong></u><a href=""><br>Pembangunan Lanjutan Turap B</a></center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/13.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/14.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/15.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/16.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 24 Desember 2018</strong></u><a href=""><br>Pembangunan Lanjutan Turap B</a></center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/17.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/19.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start; background-color: #dedede; " >

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/20.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/18.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 19 Maret 2019</strong></u><a href=""><br>Pembongkaran Bangunan Lama & Cutting Lahan Belakang </a></center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/20a.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/22.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/23.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/24.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/25.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/26.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/27.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/28.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 07 Maret 2020</strong></u><a href=""><br>Pembongkaran Bangunan Lama & Cutting Lahan Belakang </a></center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>



                  </div>

                  <div class="box wow fadeInLeft">

                  <div style="align-content:flex-start; background-color: #dedede; " >

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/29.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                      </div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>



                  </div>

                  <div class="box wow fadeInLeft">

                  <div style="align-content:flex-start; background-color: #dedede; " >

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/30.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                      </div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>



                  </div>

                  <div class="box wow fadeInLeft">

                  <div style="align-content:flex-start; background-color: #dedede; " >

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/31.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                      </div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>



                  </div>

                  <div class="box wow fadeInLeft">

                  <div style="align-content:flex-start; background-color: #dedede; " >

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/32.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                      </div>

                  </div>

              </div>

        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/33.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/34.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/35.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/36.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->







<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 7 April 2020</strong></u><a href=""><br>Pembongkaran Bangunan Lama & Cutting Lahan Belakang </a></center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/37.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/38.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/39.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/40.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/41.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/42.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/43.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/44.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->







<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 19 April 2020</strong></u><a href=""><br>Persiapan Pembangunan Bangunan Utama </a>

<br>Gambar Letak Bangunan Utama [Penggalian Pondasi] dan Pengadaan Material Bahan Bangunan

</center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/45.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/46.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/47.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/48.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/49.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/50.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/51.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/52.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 9 Agustus 2020</strong></u><a href=""><br>Pembangunan Bangunan Utama </a>

<br>Peletakan Batu Bangunan Utama dan Pembangunan Fondasi Bangunan

</center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/53.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/54.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/55.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/56.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/57.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/58.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/59.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/60.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 26 Agustus 2020</strong></u><a href=""><br>Pembangunan Bangunan Utama </a>

<br>Pembangunan Fondasi Bangunan dan Lantai Dasar

</center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/61.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/62.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start" >

                      <img src="img/gallery/progress/63.jpg" width="90%">

                      </div>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/64.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/65.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/66.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/67.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>







                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/68.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->









<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 12 September 2020</strong></u><a href=""><br>Pembangunan Bangunan Utama </a>

<br>Pembangunan Lantai Dasar, Dinding dan Tiang Bangunan

</center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/69.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/70.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/71.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <video width="90%" height="166px" controls>

                        <source src="img/gallery/progress/72.mp4" type="video/mp4">

                        Your browser does not support HTML5 video.

                      </video>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/73.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/74.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/75.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/76.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->







<hr><hr><br>

<center><u><strong>Progres Pembangunan Sampai 31 Desember 2020</strong></u><a href=""><br>Pembangunan Bangunan Utama dan Bangunan Pendaming Kiri </a>

<br>Pembangunan Tiang Rangka Penutup Bangunan Utama dan Pembangunan Dinding Bangunan Pendamping

</center>



<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/77.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/78.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/79.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/80.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->





<!-- GALLERY  -->

<div class="row" align="center">

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/81.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                  <br>

                    <center>  <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/82.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/83.jpg" width="90%"></div>

                  </div>

              </div>

              <div class="col-lg-3">

              <br>

                  <div class="box wow fadeInRight">

                    <center>    <h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start"><img src="img/gallery/progress/84.jpg" width="90%"></div>

                  </div>

              </div>





        </div>

<!-- END GALERRY  -->









        </div>

     </div>















    <div class="features-row section-bg">

        <div class="container">

          <div class="row">

            <div class="col-12">

          <hr>

          </div>

          </div>

        </div>

     </div>





      <div class="features-row">

        <div class="container">

          <div class="row">

            <div class="col-12">





                <div class="section-header wow fadeIn" data-wow-duration="1s">

                  <h2 class="section-title">Gambar Arsitek Bangunan Utama</h2>

                  <span class="section-divider"></span>

                </div>



            </div>

          </div>





          <div class="row">



              <div class="col-lg-6">

                <div class="box wow fadeInLeft">

                  <h4 class="title"><a href="">Tampak Atas (Transparan)</a></h4>

                  <div style="align-content:flex-start"><img src="img/bangunan/bangunanutama.png" width="90%"></div>

                  <br>

                </div>

              </div>



              <div class="col-lg-6">

                <div class="box wow fadeInRight">

                  <h4 class="title"><a href="">Tampak Depan</a></h4>

                  <div style="align-content:flex-start"><img src="img/bangunan/utamaDepan.png" width="99%"></div>



                </div>

              </div>







              <div class="col-lg-6">

                <div class="box wow fadeInLeft">

                    <hr>

                  <h4 class="title"><a href="">Tampak samping (Transparan)</a></h4>

                  <div style="align-content:flex-start"><img src="img/bangunan/utamaSamping.png" width="99%"></div>

                  <br>

                </div>

              </div>



              <div class="col-lg-6">

                <div class="box wow fadeInRight">

                    <hr>

                  <h4 class="title"><a href="">Tampak samping</a></h4>

                  <div style="align-content:flex-start"><img src="img/bangunan/utamaSamping2.png" width="99%"></div>

                </div>

              </div>



              <div class="col-lg-6">

                  <div class="box wow fadeInLeft">

                    <hr>

                    <h4 class="title"><a href="">Tampak Atas (Atap)</a></h4>

                    <div style="align-content:flex-start"><img src="img/bangunan/atasa.png" width="99%"></div>

                    <br><br>

                  </div>

                </div>



                <div class="col-lg-6">

                  <div class="box wow fadeInRight">

                      <hr>

                    <h4 class="title"><a href="">Tampak Belakang</a></h4>

                    <div style="align-content:flex-start"><img src="img/bangunan/belakang.png" width="99%"></div>

                  </div>

                </div>







            </div>



            <div class="row">

                <div class="col-12">





                    <div class="section-header wow fadeIn" data-wow-duration="1s">

                        <hr>

                      <h2 class="section-title">Gambar Arsitek Bangunan Pendamping</h2>

                      <span class="section-divider"></span>

                    </div>



                </div>

              </div>





              <div class="row">



                  <div class="col-lg-6">

                    <div class="box wow fadeInLeft">

                      <h4 class="title"><a href="">Tampak Atas (Transparan)</a></h4>

                      <div style="align-content:flex-start"><img src="img/bangunan/pendaming_atas.png" width="90%"></div>

                      <br>

                    </div>

                  </div>



                  <div class="col-lg-6">

                    <div class="box wow fadeInRight">

                      <h4 class="title"><a href="">Tampak Depan</a></h4>

                      <div style="align-content:flex-start"><img src="img/bangunan/pendaming_depan.png" width="99%"></div>



                    </div>

                  </div>







                  <div class="col-lg-6">

                    <div class="box wow fadeInLeft">

                        <hr>

                      <h4 class="title"><a href="">Tampak Samping</a></h4>

                      <div style="align-content:flex-start"><img src="img/bangunan/pendaming_samping.png" width="99%"></div>

                      <br>

                    </div>

                  </div>



                  <div class="col-lg-6">

                    <div class="box wow fadeInRight">

                        <hr>

                      <h4 class="title"><a href="">Tampak Belakang</a></h4>

                      <div style="align-content:flex-start"><img src="img/bangunan/pendaming_belakang.png" width="99%"></div>

                    </div>

                  </div>







                </div>





        </div>

      </div>





      <div class="features-row section-bg">

        <div class="container">

          <div class="row">

            <div class="col-12">

                <div class="section-header wow fadeIn" data-wow-duration="1s">

                    <hr>

                  <h2 class="section-title">PREVIEW 3D HSB</h2>

                  <span class="section-divider"></span>

                </div>



                <div class="box wow fadeInUp">

                <div style="text-align: center"><img src="img/bangunan/RENCANA-HSB.png" width="96%"></div>

                </div>



            </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- #advanced-features -->



    <!--==========================

      Call To Action Section

    ============================-->

    <section id="call-to-action">

      <div class="container">

        <div class="row">

          <div class="col-lg-9 text-center text-lg-left">

            <h3 class="cta-title">Call To Action</h3>

            <p class="cta-text"> Jika Anda merasa terpanggil untuk memberikan donasi/sumbangan dalam bentuk apapun untuk Klenteng ini, Silahkan klik Tombol "Call To Action"</p>

          </div>

          <div class="col-lg-3 cta-btn-container text-center">

            <a class="cta-btn align-middle" href="#donasi">Call To Action</a>

          </div>

        </div>



      </div>

    </section><!-- #call-to-action -->



    <!--==========================

      More Features Section

    ============================-->



    <!--==========================

      Clients

    ============================-->

    <section id="clients">

      <div class="container">



        <div class="row wow fadeInUp">



          <hr>

        </div>

      </div>

    </section><!-- #more-features -->



    <!--==========================

      Pricing Section

    ============================-->

    <section id="pricing" class="section-bg">

      <div class="container">



        <div class="section-header">

          <h3 class="section-title">Gambaran Luas dan Besaran Turap</h3>

          <span class="section-divider"></span>

          <p class="section-description">Sketsa Gambaran Luas & Besaran Turap yang akan dibuat (Rencana)</p>

        </div>



        <div class="row">



          <div class="col-lg-4 col-md-6">

            <div class="box wow fadeInLeft">



                <div style="text-align: center"><img src="img/bangunan/all1.jpg" width="100%"></div>



            </div>

          </div>



          <div class="col-lg-4 col-md-6">

            <div class="box wow fadeInUp">

                <div style="text-align: center"><img src="img/bangunan/all2.png" width="100%"></div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6">

            <div class="box wow fadeInRight">

                <div style="text-align: center"><img src="img/bangunan/all3.png" width="100%"></div>

            </div>

          </div>



        </div>

      </div>



      <div class="row">

        <div class="col-12">

            <div class="box wow fadeInUp">

                Letak/Posisi Klenteng Hong San Bio dari Digital Globe 2018<hr>



                <center><img src="img/bangunan/atasHSB1.png" width="90%"></center> <hr>

                <center><img src="img/bangunan/atasHSB2.png" width="90%"></center> <hr>

                <center><img src="img/bangunan/atasHSB3.png" width="90%"></center>





              </div>



        </div>

      </div>



    </section><!-- #pricing -->





    <!--==========================

      posisi / Frequently Asked Questions Section

    ============================-->

    <section id="faq">

      <div class="container">



        <div class="section-header">

          <h3 class="section-title">Hong San Bio on Digital Globe</h3>

          <span class="section-divider"></span>

          <p class="section-description">Letak/Posisi Klenteng Hong San Bio dilihat dari atas (Aerial/Satellite)</p>

        </div>



        <div style="width: 100%">

            <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=0.49460392812929216,123.04799079895021&amp;q=Kel.%20Tanjung%20Kramanat%2C%20Gorontalo+(Klenteng%20Hong%20San%20Bio)&amp;ie=UTF8&amp;t=k&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />



      </div>

    </section><!-- #faq -->









    <section class="section">

      <hr>

    </section>

    <!--==========================

      Our Team Section

    ============================-->

    <section id="team" class="section-bg">

      <div class="container">

        <div class="section-header">

          <h3 class="section-title">Yayasan Tanjung Naga</h3>

          <span class="section-divider"></span>

          <p class="section-description">Perangkat Yayasan Tanjung Naga (Payung Hukum Klenteng)</p>

        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/henks.png" alt="" height="96%"></div>

              <h4>Henk Sampouw</h4>

              <span>Pembina Yayasan</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/tatangw.png" alt="" height="96%"></div>

              <h4>Tatang Wuisana</h4>

              <span>Pembina Yayasan</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/liangg.png" alt="" height="96%"></div>

              <h4>Liang Gin Lung</h4>

              <span>Ketua Yayasan</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/arys.png" alt="" height="96%"></div>

              <h4>Ary Sungkono</h4>

              <span>Sekretaris Yayasan</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/tonit.png" alt="" height="96%"></div>

              <h4>Toni Tankilisan</h4>

              <span>Bendahara Yayasan</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/jansenl.png" alt="" height="96%"></div>

              <h4>Jansen Leuw</h4>

              <span>Pengawas Yayasan</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/erwing.png" alt="" height="96%"></div>

              <h4>Erwin Giasi</h4>

              <span>Pengawas Yayasan</span>

            </div>

          </div>



        </div>

<br>

        <div class="section-header">

            <h3 class="section-title">Klenteng Hong San Bio</h3>

          <span class="section-divider"></span>

          <p class="section-description">Kepengurusan Inti Klenteng</p>

        </div>





        <div class="row wow fadeInUp">







          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/vanriaf.png" alt="" height="96%"></div>

              <h4>Fanria Vana</h4>

              <span>Ketua Klenteng</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/martins.png" alt="" height="96%"></div>

              <h4>Martin Sampouw</h4>

              <span>Wakil Ketua 1</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/juliantih.png" alt="" height="96%"></div>

              <h4>Juliyanti  Halieludin</h4>

              <span>Wakil Ketua 2</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/meilianah.png" alt="" height="96%"></div>

              <h4>Meilina Horatian</h4>

              <span>Sekretaris</span>

            </div>

          </div>



          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="img/team/imelda.png" alt="" height="96%"></div>

              <h4>Imelda</h4>

              <span>Bendahara</span>

            </div>

          </div>









        </div>



    </section><!-- #team -->









    <div class="box wow fadeInUp">

        <hr>

     </div>









    <!--==========================

      Cara Donasi

    ============================-->

    <section id="donasi" class="section-bg">

      <div class="container">



        <div class="section-header">



          <h3 class="section-title">Cara Donasi</h3>

          <span class="section-divider"></span>

          <p class="section-description">Kami menerima bantuan dalam bentuk apapun, baik itu dalam bentuk materi maupun barang – barang keperluan Klenteng atau Bahan Bangunan. <br>Kami telah membuka beberapa Rekening Pembangunan agar Donatur dapat mentransfer Donasi/Bantuan Dana atau dapat menghubungi Penanggung Jawab untuk memberikan Bantuan lainnya.</p>

        </div>



        <div class="row">



          <div class="col-lg-6">

            <div class="box wow fadeInLeft">

              <div class="icon"><img src="img/bca.png" width="70%"></div>

              <h4 class="title"><a href="">Rekening BCA</a></h4>

              <p class="description">No.Rek.  797.602.8456 <br>

                  A/N         YAY TANJUNG NAGA GORONTALO

                  </p>

            </div>

          </div>



          <div class="col-lg-6">

            <div class="box wow fadeInRight">

              <div class="icon"><img src="img/bni.png" width="70%"></div>

              <h4 class="title"><a href="">Rekening BNI</a></h4>

              <p class="description">No. Rek.  071.708.6156 <br>

                  A/N         TANJUNG NAGA GORONTALO

                  </p>

            </div>

          </div>



          <div class="col-lg-6">

            <div class="box wow fadeInLeft">

              <div class="icon"><img src="img/mandiri.png" width="70%"></div>

              <h4 class="title"><a href="">Rekening Bank MANDIRI</a></h4>

              <p class="description">No.Rek.   150.00.135856.3.1 <br>

                  A/N          YAYASAN TANJUNG NAGA <br>

                  </p>

            </div>

          </div>



          <div class="col-lg-6">

            <div class="box wow fadeInRight">

              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>

              <h4 class="title"><a href="">Bantuan Material/Bahan, Dsb</a></h4>

              <p class="description">



LIANG GIN LUNG	 0812.431.0074 (TELP/WA/SMS)	<br>

TONI TANKILISAN  0812.431.0261 (TELP/WA/SMS)



              </p>

            </div>

          </div>





<div class="col-lg-12">

            <div class="box wow fadeInRight">

             <table border="0" width="100%" bgcolor="#ff6666">

              <tr>

                <td align="center" width="10%"><img src="img/kamsiah.png" width="50%"></td>

                <td style="vertical-align:middle; font-weight:bold; color : #ffffff;">Terima Kasih atas Partisipasinya</td>

              </tr>

             </table>







<table style="background-size: cover;

background-repeat: no-repeat;background-position: center;color:#000000;" border="0" width="100%" background="img/db2.png">

  <tr>

     <td>

    <br>

     KAMI UCAPKAN BANYAK TERIMA KASIH KEPADA SEMUA YANG TELAH BERPARTISIPASI

DAN MENGAMBIL BAGIAN DALAM PEMBANGUNAN KLENTENG HONG SAN BIO GORONTALO.<br><br>

SEMOGA TUHAN YANG MAHA KUASA, PARA MAHADEWA/i DAN DEWA/i

MEMBERKAHI SAUDARA/i DENGAN KESEHATAN, KEBAHAGIAAN,

KESUKSESAN DAN UMUR PANJANG

<img src="img/kamsiah2.png" width="3%">

<img src="img/kamsiah2.png" width="3%">

<img src="img/kamsiah2.png" width="3%">

<br><br>

     </td>

  </tr>

</table>





            </div>

          </div>





        </div>

      </div>

    </section><!-- #more-cara donasi -->





    <!--==========================

      Contact Section

    ============================-->

    <section id="contact">

      <div class="container">

        <div class="row wow fadeInUp">



          <div class="col-lg-4 col-md-4">

            <div class="contact-about">

              <h3>Hong San Bio</h3>

              <p>Klenteng yang terletak di atas Gunung Kel. Tanjung Kramat Kec. Hulondalangi Propinsi Gorontalo</p>

              <div class="social-links">

                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>

                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>

                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>

                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>

                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="info">

              <div>

                <i class="ion-ios-location-outline"></i>

                <p>Kel. Tanjung Kramat<br>Kota Gorontalo</p>

              </div>



              <div>

                <i class="ion-ios-email-outline"></i>

                <p>yayasantanjungnaga@gmail.com</p>

              </div>



              <div>

                <i class="ion-ios-telephone-outline"></i>

                <p>	+62 812 431 0074 </p>

              </div>



            </div>

          </div>



          <div class="col-lg-5 col-md-8">

            <u>Formulir Kontak atau Donasi</u> <br><br>

            <div class="form">

              <div id="sendmessage">Your message has been sent. Thank you!</div>

              <div id="errormessage"></div>

              <form action="send.php" method="post">

                <div class="form-row">

                  <div class="form-group col-lg-6">

                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                    <div class="validation"></div>

                  </div>

                  <div class="form-group col-lg-6">

                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />

                    <div class="validation"></div>

                  </div>

                </div>

                <div class="form-group">

                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                  <div class="validation"></div>

                </div>

                <div class="form-group">

                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan Anda (Bentuk Donasi Anda atau Dukungannya. Cantumkan Nomor Telp atau HP/WA)"></textarea>

                  <div class="validation"></div>

                </div>

                <div class="text-center"><button type="submit" title="Kirim Pesan Sekarang">Kirim Pesan/Dukungan Sekarang</button></div>



                </form>



               <?php

                  if (isset($hasil)) {

                    if ($hasil == "ok") {

                         echo "Pesan/Dukungan Berhasil dikirim.";

                       }

                       else {

                        echo "Pesan/Dukungan Gagal dikirim. Coba lagi atau hubungi via SMS/WA +62 812 431 0074 (Liang Gin Lung)";

                       }

                  }

                ?>





            </div>

          </div>



        </div>



      </div>

    </section><!-- #contact -->



  </main>



  <!--==========================

    Footer

  ============================-->

  <footer id="footer">

    <div class="container">

      <div class="row">

        <div class="col-lg-6 text-lg-left text-center">

          <div class="copyright">

            &copy; Copyright <strong>Hong San Bio</strong>. All Rights Reserved

          </div>

          <div class="credits">

            <!--

              All the links in the footer should remain intact.

              You can delete the links only if you purchased the pro version.

              Licensing information: https://bootstrapmade.com/license/

              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon

            -->

            Powered by <a href="#">ransamtech</a>

          </div>

        </div>



      </div>

    </div>

  </footer><!-- #footer -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <?php $this->endBody() ?>
  </body>
  </html>
  <?php $this->endPage() ?>
