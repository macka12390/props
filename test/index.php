<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
     <link rel="stylesheet" href="style.css">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
    video::-webkit-media-controls {
      display: none !important; /* Pour Chrome, Safari */
    }

    video::-moz-media-controls {
      display: none !important; /* Pour Firefox */
    }

    video {
      width: 100%; /* Rendre la vidéo responsive */
      height: auto;
    }

    /* Pour masquer complètement la barre de progression */
    .video-container {
      position: relative;
      overflow: hidden;
    }
    </style>
  </head>
  <body>
  <div class="container-scroller">
  <?php include_once "sidebar.php"   ?>
  <div class="container-fluid page-body-wrapper video">
  <?php include_once "topbar.php" ?>
<div class="main-panel video">
   
    <div class="container video">
    
    <div class="video-container">

      <video autoplay muted loop class="video">
        <source src="assets/images/coro.mp4" type="video/mp4">
       
      </video>
  
  </div>
    </div>
</div>
  </div>

   <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
