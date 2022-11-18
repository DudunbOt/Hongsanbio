<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap5\Html;

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
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hongsanbio - Admin</title>
  <?php $this->head() ?>
</head>

<body id="page-top">
  <?php $this->beginBody() ?>
  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= \yii\helpers\Url::to(['/admin/']) ?>">
              <div class="sidebar-brand-text mx-3">Hongsanbio <sup>Admin</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">


          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="<?= \yii\helpers\Url::to(['/admin/content/']) ?>">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Contents</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="<?= \yii\helpers\Url::to(['/admin/image/']) ?>">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Content Images</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                              <?= Html::img('@web/img/undraw_profile.svg', ['alt'=>'some', 'class'=>'img-profile rounded-circle']);?>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="userDropdown">
                              <?= Html::beginForm(['/site/logout'])
                              . Html::submitButton(
                                  'Logout (' . Yii::$app->user->identity->username . ')',
                                  ['class' => 'dropdown-item text-danger']
                              )
                              . Html::endForm() ?>
                              <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a> -->
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                  <!-- Page Heading -->
                  <?= $content ?>

              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Hongsanbio | Pineda Prima Yoga @ <?= date('Y') ?></span>
                  </div>
              </div>
          </footer>
          <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
          </div>
      </div>
  </div>


  <?php $this->endBody() ?>
  </body>
  </html>
  <?php $this->endPage() ?>
