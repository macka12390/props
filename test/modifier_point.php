<?php
namespace App;
require __DIR__ . '../../bootstrap.php';
$zones=$entityManager->getRepository(Zone::class)->findAll();
if(isset($_GET["idm"])){
    extract($_GET);
    $point=$entityManager->getRepository(Point::class)->find($idm);
   
   $entityManager->flush();
}  

if(isset($_POST["MPoint"])){
    extract($_POST);
    $zoneid = $entityManager->getRepository(Zone::class)->find($zone);
    $point = new Point();
    $point=$entityManager->getRepository(Point::class)->find($id);
     
    $point->setNom_point($nom);
    $point->setZone($zoneid);
  
    $entityManager->flush();
}

?>
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
  </head>
  <body>
  <div class="container-scroller">
  <?php  include_once "sidebar.php"?>



      <div class="container-fluid page-body-wrapper">
     <?php include_once "topbar.php" ?>
        <div class="col-md-12 grid-margin stretch-card mt-5">
                <div class="card mt-5">
                  <div class="card-body">
                    <h4 class="card-title">MODIFIER POINT</h4>
                   
                    <form class="forms-sample" method="POST">
                        <input type="text" name="id" value="<?=$point->getId()?>" hidden>
                      <div class="form-group">
                        <label for="exampleInputUsername1">NOM POINT</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="PAYS" name="nom" value="<?= $point->getNom_point() ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">PAYS</label>
                        <select name="zone" class="js-example-basic-single" style="width:100%">
                            <option value="">Selectionnez...</option>
                            <?php foreach($zones as $z) { ?>
                                <option value="<?= $z->getId()?>"
                                    <?php if ($z->getId() == $point->getZone()->getId()) echo 'selected'; ?>>
                                    <?= $z->getNom_zone() ?>
                                </option>
                            <?php } ?>
                            </select>
                      </div>
                     
                      <button type="submit" name="MPoint" class="btn btn-primary mr-2">MODIFIER</button>
                      <button class="btn btn-dark">ANNULER</button>
                    </form>
                  </div>
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