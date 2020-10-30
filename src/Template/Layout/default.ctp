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
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Senpai team</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <?= $this->Html->css('../assets/vendor/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('../assets/vendor/icofont/icofont.min.css') ?>
    <?= $this->Html->css('../assets/vendor/boxicons/css/boxicons.min.css') ?>
    <?= $this->Html->css('../assets/vendor/remixicon/remixicon.css') ?>
    <?= $this->Html->css('../assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>
    <?= $this->Html->css('../assets/vendor/animate.css/animate.min.css') ?>
    <?= $this->Html->css('../assets/vendor/aos/aos.css') ?>

    <!-- Vendor JS Files -->
    <?= $this->Html->script('../assets/vendor/jquery/jquery.min.js') ?>
    <?= $this->Html->script('../assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('../assets/vendor/jquery.easing/jquery.easing.min.js') ?>
    <?= $this->Html->script('../assets/vendor/php-email-form/validate.js') ?>
    <?= $this->Html->script('../assets/vendor/waypoints/jquery.waypoints.min.js') ?>
    <?= $this->Html->script('../assets/vendor/counterup/counterup.min.js') ?>
    <?= $this->Html->script('../assets/vendor/owl.carousel/owl.carousel.min.js') ?>
    <?= $this->Html->script('../assets/vendor/aos/aos.js') ?>

    <!-- Template Main JS File -->
    <?= $this->Html->script('../assets/js/main.js') ?>

    <!-- Template Main CSS File -->
    <?= $this->Html->css('../assets/css/style.css') ?>
</head>

<body>
    <?= $this->element('navbar') ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>
</body>

</html>