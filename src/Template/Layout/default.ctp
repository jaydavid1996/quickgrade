<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('fontawesome-free/css/all.min') ?>
    <?= $this->Html->css('dataTables.bootstrap4.css') ?>
    <?= $this->Html->css('sb-admin.css') ?>


</head>

  <body id="page-top">

  <?= $this->element('top_nav') ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?= $this->element('side_nav') ?>
      

      <div id="content-wrapper">
        <?= $this->fetch('content') ?>
      
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?= $this->element('logout') ?>



    <!-- Demo scripts for this page-->
    <?php echo $this->Html->script([
      'jquery.min',
      'bootstrap.bundle.min',
      'jquery.easing.min',
      'datatables/jquery.dataTables',
      'datatables/dataTables.bootstrap4',
      'sb-admin',
    ]); ?>
    
    <?php echo $this->fetch('scriptBottom'); ?>

  </body>
  
</html>
