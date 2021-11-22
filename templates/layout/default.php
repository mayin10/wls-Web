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

$cakeDescription = __('WLS Phoenix');
//$webName = '/wls/';
$GmbH = 'WLS Phoenix';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="WLS Phoenix">
        <meta content="Free Website Template" name="WLS Phoenix 海外仓">

        <meta name="author" content="Wiewind Studio"/>
        <meta name="description" content="WLS Phoenix"/>
        <meta name="keywords" content="WLS Phoenix"/>
        <meta name="publisher" content="WLS Phoenix"/>
        <meta name="copyright" content="WLS Phoenix"/>
    <title>
        <?= $cakeDescription ?>

    </title>

    <!-- Favicon -->
    <link href="<?=$webName?>img/core/icon.png" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?=$webName?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=$webName?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=$webName?>lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?=$webName?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- Template Stylesheet -->
    <?= $this->Html->css(['style']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>

<!-- Nav Bar Start -->
<?php
$menu=[
    'home'=>__('主页'),
    'food'=>__('企业特点'),
    'about'=>__('关于我们'),
    'menu'=>__('服务内容'),
    'contact'=>__('联系我们'),
];

$add = 'add'==$this->request->getParam('action');
//$navColor = $add?'':'style="color:  #666666"';
$navSticky  = !$add?'nav-sticky':'';
?>
<div class="navbar navbar-expand-lg bg-light navbar-light <?=$navSticky?>">
    <div class="container-fluid">
        <a href="#home" class="navbar-brand"> <div style="background-color: white; padding: 5px; border-radius: 5px"><img src ="<?=$webName?>img/core/logo.png"></div></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <?php foreach ($menu as $k=>$v):?>
                   <?php $activ =  $k == 'home'? 'active':''?>
                    <a href="<?=$webName?>#<?=$k?>" class="nav-item nav-link <?=$activ?>" ><?=$v?></a>
                <?php endforeach;?>


                <?Php if(in_array('zh_CN',$this->request->getParam('pass'))):?>
                <a href="<?=$webName?>contacts/add/de_DE" class="nav-item nav-link">
                    <?=$this->Html->image('flagde.png')?>
                </a>
                <?Php else:?>
                <a href="<?=$webName?>contacts/add/zh_CN" class="nav-item nav-link">
                    <?=$this->Html->image('flagcn.png')?>
                </a>
                <?Php endif;?>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->

<?= $this->fetch('content') ?>

<!-- Footer Start -->
<?php
//Our Address
$ourAddress = __('地址');
$quickLinks = __('其他链接');
$AGB = 'AGB';
$privacyPolicy = __('数据保护');
$werbung  =__('企业宣传册');
$Cookies= 'Cookies';
$help = '帮助';
$fQAs = '常见问题';

$scannen = __('扫一扫');

$fname = 'WLS Phoenix GmbH';
$tel = '0176 301 777 18';
$tel_01 = '02102 7398866';
$email = 'info@wlsphoenix.de';
$address = 'Stadionring 28, 40878 Ratingen Deutschland';
?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-contact">
                    <h2><?=$ourAddress?></h2>
                    <p><i class="fa fa-phone-alt"></i><?=$tel_01?></p>
                    <p><i class="fa fa-phone-alt"></i><?=$tel?></p>
                    <p><i class="fa fa-envelope"></i><?=$email?></p>
                    <p><i class="fa fa-map-marker-alt"></i><?=$address?> </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-link">
                    <h2><?=__($quickLinks)?></h2>
                    <a href="<?=$webName?>contacts/agb"><?=$AGB?></a>
                    <a href="<?=$webName?>contacts/privacyPolicy"><?=$privacyPolicy?></a>
                    <a href="<?=$webName?>pdf/w1.pdf"><?=$werbung?> <img src ="<?=$webName?>img/pdf.jpg" width="20px"></a>

                </div>
            </div>
            <div class="col-md-2 ">
                <div class="footer-link">
                    <h2><?=__('扫一扫')?></h2>
                    <div>
                        <img src ="<?=$webName?>img/core/qrcode.png" width="100px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; <a href="#"><?=$GmbH?></a>, All Right Reserved.</p>
    </div>
</div>

<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$webName?>lib/easing/easing.min.js"></script>
    <script src="<?=$webName?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=$webName?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?=$webName?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?=$webName?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?=$webName?>mail/jqBootstrapValidation.min.js"></script>


    <!-- Template Javascript -->
    <script src="<?=$webName?>js/main.js"></script>


    <script type="text/javascript">
    <?php if($add) { ?>
    // Sticky Navbar
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('.navbar').addClass('nav-sticky');
            } else {
                $('.navbar').removeClass('nav-sticky');
            }
        });
        <?php } ?>
    </script>

</body>
</html>

