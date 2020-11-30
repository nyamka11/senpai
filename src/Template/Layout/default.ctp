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
        <title>Senpai.mn | Япон дахь монголчуудын сайт</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> -->
    
        <!-- CSS Files -->
        <?= $this->Html->css('normalize.css') ?>
        <?= $this->Html->css('main.css') ?>
         <?= $this->Html->css('bootstrap.min.css') ?> 
        <?= $this->Html->css('animate.min.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('../vendor/OwlCarousel/owl.carousel.min.css') ?>
        <?= $this->Html->css('../vendor/OwlCarousel/owl.theme.default.min.css') ?>
        <?= $this->Html->css('meanmenu.min.css') ?>
        <?= $this->Html->css('magnific-popup.css') ?>
        <?= $this->Html->css('hover-min.css') ?>
        <?= $this->Html->css('ie-only.css') ?>
        <?= $this->Html->css('senpai.css') ?>
        <?= $this->Html->css('../style.css') ?>
        
        <?= $this->Html->script('modernizr-2.8.3.min.js') ?>
        <?= $this->Html->script('jquery-2.2.4.min.js') ?>
        
    </head>

    <body>
        <div id="preloader"></div>
        <div id="wrapper" class="wrapper">
            <?= $this->element('header') ?> 
            <?= $this->element('topStories') ?> 
            <?= $this->element('statusInfo') ?> 
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <?= $this->element('footer') ?>
            <?= $this->element('loginModal') ?>
            <?= $this->element('rightMenu') ?>
        </div>

        <!-- Vendor JS Files -->
       
        <?= $this->Html->script('plugins.js') ?>
        <?= $this->Html->script('popper.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('wow.min.js') ?>
        <?= $this->Html->script('../vendor/OwlCarousel/owl.carousel.min.js') ?>
        <?= $this->Html->script('jquery.meanmenu.min.js') ?>
        <?= $this->Html->script('jquery.scrollUp.min.js') ?>
        <?= $this->Html->script('jquery.counterup.min.js') ?>
        <?= $this->Html->script('waypoints.min.js') ?>
        <?= $this->Html->script('isotope.pkgd.min.js') ?>
        <?= $this->Html->script('jquery.magnific-popup.min.js') ?>
        <?= $this->Html->script('ticker.js') ?>
        <?= $this->Html->script('main.js?v=10') ?>
        <?= $this->Html->script('senpai.js') ?>
        

        <?= $this->Html->css('bootstrap-toggle.css') ?>
         <?= $this->Html->script('bootstrap-toggle.js') ?>
         
    </body>

</html>