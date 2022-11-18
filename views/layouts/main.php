<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;
use app\modules\admin\models\content\Contents;
use app\modules\admin\models\image\Images;

//banner
$banner = Contents::findOne(['id' => 1]);
$banner_img = Images::findOne(['id' => 1]);

//about
$about = Contents::findOne(['id' => 2]);
$about_img = Images::findOne(['id' => 2]);

//about
$about = Contents::findOne(['id' => 2]);
$about_img = Images::findOne(['id' => 2]);

//goal
$goal = Contents::findOne(['id' => 3]);
$goal_img = Images::findOne(['id' => 3]);

//restoration
$restoration = Contents::findOne(['id' => 4]);

//documentation
$doc_1 = Contents::findOne(['id' => 5]);
$doc_img1 = Images::find()->where(['content_id' => 5])->all();

$doc_2 = Contents::findOne(['id' => 6]);
$doc_img2 = Images::find()->where(['content_id' => 6])->all();

$doc_3 = Contents::findOne(['id' => 7]);
$doc_img3 = Images::find()->where(['content_id' => 7])->all();

$doc_4 = Contents::findOne(['id' => 8]);
$doc_img4 = Images::find()->where(['content_id' => 8])->all();

$doc_5 = Contents::findOne(['id' => 9]);
$doc_img5 = Images::find()->where(['content_id' => 9])->all();

$doc_6 = Contents::findOne(['id' => 10]);
$doc_img6 = Images::find()->where(['content_id' => 10])->all();

$doc_7 = Contents::findOne(['id' => 11]);
$doc_img7 = Images::find()->where(['content_id' => 11])->all();

$doc_8 = Contents::findOne(['id' => 12]);
$doc_img8 = Images::find()->where(['content_id' => 12])->all();

$doc_9 = Contents::findOne(['id' => 13]);
$doc_img9 = Images::find()->where(['content_id' => 13])->all();

$doc_10 = Contents::findOne(['id' => 14]);
$doc_img10 = Images::find()->where(['content_id' => 14])->all();

$doc_11 = Contents::findOne(['id' => 15]);
$doc_img11 = Images::find()->where(['content_id' => 15])->all();

$doc_12 = Contents::findOne(['id' => 16]);
$doc_img12 = Images::find()->where(['content_id' => 16])->all();

$doc_13 = Contents::findOne(['id' => 17]);
$doc_img13 = Images::find()->where(['content_id' => 17])->all();

$doc_14 = Contents::findOne(['id' => 18]);
$doc_img14 = Images::find()->where(['content_id' => 18])->all();

$view_3d = Contents::findOne(['id' => 19]);
$view_3d_img = Images::findOne(['content_id' => 19]);

$cta = Contents::findOne(['id' => 20]);

$gmbr_luas = Contents::findOne(['id' => 21]);
$gmbr_luas_img = Images::find()->where(['content_id' => 21])->all();

$digi = Contents::findOne(['id' => 22]);
$digi_img = Images::find()->where(['content_id' => 22])->all();

$map = Contents::findOne(['id' => 23]);

$payung = Contents::findOne(['id' => 24]);
$payung_img = Images::find()->where(['content_id' => 24])->all();

$inti = Contents::findOne(['id' => 25]);
$inti_img = Images::find()->where(['content_id' => 25])->all();

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

      <h2><?= $banner->title ?></h2>

      <p><?= $banner->title ?></p>

      <a href="#about" class="btn-get-started scrollto">Mulai Mengenal</a>

    </div>



    <div class="product-screens">



      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">

        <img src="<?= Url::to(['@web/uploads/'.$banner_img->image.'']) ?>" alt="">

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

          <h3 class="section-title"><?= $about->title ?></h3>

          <span class="section-divider"></span>

          <p class="section-description">

            <?= $about->subtitle ?>

            <br>



          </p>

        </div>



        <div class="row">

          <div class="col-lg-6 about-img wow fadeInLeft">

            <img src="<?= Url::to(['@web/uploads/'.$about_img->image.'']) ?>" alt="">

          </div>



          <div class="col-lg-6 content wow fadeInRight">

            <?= $about->text ?>

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

              <h3 class="section-title"><?= $goal->title?></h3>

              <span class="section-divider"></span>

            </div>

          </div>



          <div class="col-lg-4 col-md-5 features-img">

            <img src="<?= Url::to(['@web/uploads/'.$goal_img->image.'']) ?>" alt="" class="wow fadeInLeft" width="80%">

            <br><br>

          </div>



          <div class="col-lg-8 col-md-7 ">

              <?= $goal->text ?>

          </div>



        </div><br><br>



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

                <h2><?= $restoration->title?></h2>

                <p><?= $restoration->text ?>

                </p>

              </div>


            </div>

          </div>

        </div>

      </div>





      <div class="features-row">

        <div class="container">

          <div class="row">



          <div class="col-12">

                <div class="section-header wow fadeIn" data-wow-duration="1s">

                  <h2 class="section-title"><?= $doc_1->title ?></h2>

                  <span class="section-divider"></span>

          <p class="section-description">

           <?= $doc_1->subtitle ?>

          </p>

                </div>

            </div>

          </div>



<!-- GALLERY  -->

        <div class="row" align="center">

          <?php foreach($doc_img1 as $img){ ?>
            <div class="col-lg-3">
                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""><?= $img->img_title ?></a></h7></center>

                      <br>

                  </div>


                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

        </div>


<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong><?= $doc_2->title ?></strong></u></center>

<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach ($doc_img2 as $img) { ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""><?= $img->img_title ?></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

        </div>



        <hr><hr><br>

<center><u><strong><?= $doc_3->title ?></strong></u><a href=""><br><?= $doc_3->subtitle ?></a></center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach ($doc_img3 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->

<hr><hr><br>

<center><u><strong><?= $doc_4->title ?></strong></u><a href=""><br><?= $doc_4->subtitle ?>/a></center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach ($doc_img4 as $img) { ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                      <div style="align-content:flex-start">
                        <?php if(substr($img->image,-3) == 'mp4'){ ?>
                          <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                          </video>
                        <?php }else{ ?>
                        <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                        <?php } ?>
                      </div>

                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->





<hr><hr><br>

<center><u><strong><?= $doc_5->title ?></strong></u><a href=""><br><?= $doc_5->subtitle?></a></center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img5 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>

                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong><?= $doc_6->title ?></strong></u><a href=""><br><?= $doc_6->subtitle?></a></center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img6 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>

                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong><?= $doc_7->title ?></strong></u><a href=""><br> <?= $doc_7->subtitle ?> </a></center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img7 as $img){ ?>

            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>

                  </div>

              </div>
            <?php } ?>



        </div>

<!-- END GALERRY  -->







<hr><hr><br>

<center><u><strong><?= $doc_8->title ?></strong></u><a href=""><br> <?= $doc_8->subtitle ?> </a></center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img8 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>


        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong><?= $doc_9->title ?></strong></u><a href=""><br> <?= $doc_9->subtitle ?></a>

<br><?= $doc_9->text ?>

</center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img9 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->


<hr><hr><br>

<center><u><strong><?= $doc_10->title ?></strong></u><a href=""><br><?= $doc_10->subtitle ?> </a>

<br><?= $doc_10->text ?>

</center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img10 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong><?= $doc_11->title ?></strong></u><a href=""><br><?= $doc_11->subtitle ?> </a>

<br><?= $doc_11->text ?>

</center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach($doc_img11 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

        </div>

<!-- END GALERRY  -->



<hr><hr><br>

<center><u><strong><?= $doc_12->title ?></strong></u><a href=""><br><?= $doc_12->subtitle ?> </a>

<br><?= $doc_12->text ?>

</center>



<!-- GALLERY  -->

<div class="row" align="center">
          <?php foreach ($doc_img12 as $img){ ?>
            <div class="col-lg-3">

                  <div class="box wow fadeInRight">

                      <br>

                      <center><h7 class="title"><a href=""></a></h7></center>

                      <br>

                  </div>

                  <div class="box wow fadeInLeft">

                    <div style="align-content:flex-start">
                      <?php if(substr($img->image,-3) == 'mp4'){ ?>
                        <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                        </video>
                      <?php }else{ ?>
                      <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                      <?php } ?>
                    </div>
                  </div>

              </div>
            <?php } ?>

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

                  <h2 class="section-title"><?= $doc_13->title ?></h2>

                  <span class="section-divider"></span>

                </div>



            </div>

          </div>





          <div class="row">


            <?php foreach ($doc_img13 as $img){ ?>
              <div class="col-lg-6">

                <div class="box wow fadeInLeft">

                  <h4 class="title"><a href=""><?= $img->img_title ?></a></h4>

                  <div style="align-content:flex-start">
                    <?php if(substr($img->image,-3) == 'mp4'){ ?>
                      <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                      </video>
                    <?php }else{ ?>
                    <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                    <?php } ?>
                  </div>
                  <br>

                </div>

              </div>
            <?php } ?>

            </div>

            <div class="row">

                <div class="col-12">


                    <div class="section-header wow fadeIn" data-wow-duration="1s">

                        <hr>

                      <h2 class="section-title">$doc_14->title</h2>

                      <span class="section-divider"></span>

                    </div>



                </div>

              </div>





              <div class="row">


                <?php foreach ($doc_img14 as $img) { ?>
                  <div class="col-lg-6">

                    <div class="box wow fadeInLeft">

                      <h4 class="title"><a href=""><?= $img->img_title ?></a></h4>

                      <div style="align-content:flex-start">
                        <?php if(substr($img->image,-3) == 'mp4'){ ?>
                          <video src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" controls width="90%">

                          </video>
                        <?php }else{ ?>
                        <img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%">
                        <?php } ?>
                      </div>
                      <br>

                    </div>

                  </div>
                <?php } ?>

                </div>

        </div>

      </div>


      <div class="features-row section-bg">

        <div class="container">

          <div class="row">

            <div class="col-12">

                <div class="section-header wow fadeIn" data-wow-duration="1s">

                    <hr>

                  <h2 class="section-title"><?= $view_3d->title ?></h2>

                  <span class="section-divider"></span>

                </div>



                <div class="box wow fadeInUp">

                <div style="text-align: center"><img src="<?= Url::to(['@web/uploads/'.$view_3d_img->image.'']) ?>" width="96%"></div>

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

            <h3 class="cta-title"><?= $cta->title ?></h3>

            <p class="cta-text"><?= $cta->text ?></p>

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

          <h3 class="section-title"><?= $gmbr_luas->title ?></h3>

          <span class="section-divider"></span>

          <p class="section-description"><?= $gmbr_luas->tag ?></p>

        </div>



        <div class="row">


          <?php foreach ($gmbr_luas_img as $img) { ?>
          <div class="col-lg-4 col-md-6">

            <div class="box wow fadeInLeft">

                <div style="text-align: center"><img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="100%"></div>

            </div>

          </div>
        <?php } ?>



        </div>

      </div>



      <div class="row">

        <div class="col-12">

            <div class="box wow fadeInUp">

                <?= $digi->title ?><hr>


                <?php foreach ($digi_img as $img): ?>


                <center><img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" width="90%"></center> <hr>
                <?php endforeach; ?>


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

          <h3 class="section-title"><?= $map->title ?></h3>

          <span class="section-divider"></span>

          <p class="section-description"><?= $map->tag ?></p>

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

          <h3 class="section-title"><?= $payung->title ?></h3>

          <span class="section-divider"></span>

          <p class="section-description">><?= $payung->tag ?></p>

        </div>

        <div class="row wow fadeInUp">

          <?php foreach ($payung_img as $img): ?>
          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" alt="" height="96%"></div>

              <h4><?= $img->img_title ?></h4>

              <span>$img->img_subtitle</span>

            </div>

          </div>
          <?php endforeach; ?>

        </div>

<br>

        <div class="section-header">

            <h3 class="section-title"><?= $inti->title ?></h3>

          <span class="section-divider"></span>

          <p class="section-description">$inti->subtitle</p>

        </div>

        <div class="row wow fadeInUp">

          <?php foreach ($inti_img as $img): ?>
          <div class="col-lg-3 col-md-6">

            <div class="member">

              <div class="pic"><img src="<?= Url::to(['@web/uploads/'.$img->image.'']) ?>" alt="" height="96%"></div>

                <h4><?= $img->img_title ?></h4>

              <span>$img->img_subtitle</span>

            </div>

          </div>
          <?php endforeach; ?>



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
