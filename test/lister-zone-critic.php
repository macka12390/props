<?php
namespace App;
require __DIR__ . '../../bootstrap.php';

$zones=$entityManager->getRepository(Zone::class)->findBy(['status' => 'rouge']);


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
      <?php include_once "sidebar.php" ?>



      <div class="container-fluid page-body-wrapper">
           <?php   include_once "topbar.php"?>
        <div class="col-lg-12 grid-margin stretch-card mt-4">
                <div class="card mt-4">
                  <div class="card-body mt-4">
                    <h4 class="card-title alert alert-success text-center">LISTE ZONE CRITIQUE</h4>
                   
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Nom </th>
                            <th>Status</th>
                            <th>Nb positif</th>
                            <th>Nb Contamine</th>
                            <th>Nb habitant</th>
                            <th>Pays</th>
                           

                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($zones as $z){?>
                          <tr>
                            <td> <?=$z->getId() ?> </td>
                            <td> <?=$z->getNom_zone() ?></td>
                            <td><?=$z->getStatus() ?>  </td>
                            <td><?=$z->getNb_positif() ?>  </td>
                            <td><?=$z->getNb_contamines() ?>  </td>
                            <td><?=$z-> getNb_habitants() ?>  </td>
                            <td><?=$z->getPays()->getNom_pays() ?></td>
                           
                          </tr>
                          
                          <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
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

