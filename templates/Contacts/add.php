<!-- Carousel Start -->
<?php

$text1 = [
    'ct1'=> __('一站托付,'),
    'ct2'=> __('快人一步.'),
    'cp'=> __('速度就是金钱，时间就是效率，WLS帮您创造精彩， 让您省心更放心，效率增效益。')
];

$text2 = [
    'ct1'=> __('WLS Phoenix海外仓,'),
    'ct2'=> __('全球若比邻.'),
    'cp'=> __('地球村时代，世界就在每一个人的面前，有了WLS Phoenix让您即使足不出户， 世界也“淘”不出您的手心。')
];

$text3 = [
    'ct1'=> __('仓储新理念,'),
    'ct2'=> __('完美无极限.'),
    'cp'=> __('WLS Phoenix提供不仅仅是仓库，更是完善的服务，速度是创新的，服务是温馨的，陪护更是贴心的。')
];

$cb1 = __('进入海外仓');
$cb2 = __('了解更多');

$carousel = [
    'b2.jpg'=> $text1,
    'b6.jpg'=> $text2,
    'b7.jpg'=> $text3,
];

$notice =  __('重要通知：因为托盘费用大幅涨价，欧标托盘费会相应提高，请各位客户悉知。具体价格会根据时价而定，在15欧左右。');
?>
<div id = "home" class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <?php foreach($carousel as $k=>$v):?>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="<?=$webName?>img/<?=$k?>" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1><?=$v['ct1']?><span> <?=$v['ct2']?></span></h1>
                        <p> <?=$v['cp']?></p>

                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="http://oms.wlsphoenix.de"><?=$cb1?></a>
                            <a class="btn custom-btn" href="#menu"><?=$cb2?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Feature Start -->
<?php
$feature01 =__('我们的优势');
$feature02 =__('放心托付，精诚守护');
$feature03 =__('WLS Phoenix专业的团队，有丰富的行业经验，向客户提供安全、卓有成效的商业机会。我们的各项服务皆以客户为中心，
涵盖您拓展欧洲市场所需要的各个方面。无论客户大小，我们都珍惜您的每一次委托。');


$f_Text1 = [
    'title' => __('专业'),
    'text' => __('WLS Phoenix是跨境电商的物流专家，服务是透明稳定的，产品是稳定全面的，价格更是具有竞争力的，获取广大跨境电商卖家的认可。'),
];
$f_Text2 = [
    'title' => __('创新'),
    'text' => __('WLS Phoenix有不断创新的服务追求，让服务精益求精，追求完善和创新的服务理念，适应万变市场，积极拓展创新，以满足市场各项需求。'),
];
$f_Text3 = [
    'title' => __('诚信'),
    'text' => __('WLS Phoenix是值得信赖的长期合作伙伴。公司以诚信为企业之根本，以创新为企业之灵魂，以共赢为企业之追求。愿与大家一起携手乘风破浪。'),
];

$f_content=[
    'f1.svg'=> $f_Text1,
    'f2.svg'=> $f_Text2,
    'f3.svg'=> $f_Text3
];


?>
<div id="food" class="food">
    <?php if (date('Ymd') < '20220101') { ?>
        <div class="container">
            <div>
                <marquee behavior="scroll" direction="left">
                    <img  src="<?=$webName?>img/laba.png" width="25px">
                    <text style="font-size: larger; color: #EF3159"><?= $notice ?></text>
                </marquee>
            </div>
        </div>
        <br />
        <br />
    <?php } ?>
    <div class="container">
        <div class="about-content text-center">
            <div class="section-header">
                <p><?=$feature01?></p>
                <h3><?=$feature02?></h3>
            </div>
            <div class="about-text">
                <p><?=$feature03?></p>
            </div>
        </div>

        <div class="row align-items-center">

            <?php foreach ($f_content as $k=>$v): ?>
                <div class="col-md-4">
                    <div class="food-item ">
                        <div style="padding-bottom: 30px">
                            <img  src="<?=$webName?>img/svg/<?=$k?>" width="60px">
                        </div>

                        <h3><strong><?= $v['title']?></strong></h3>
                        <p><?= $v['text']?></p>
                        <a href="<?=$webName?>pdf/w1.pdf"><?=__('了解更多...')?></a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- About Start -->
<?php
$about1 =__('关于我们');
$about2 =__('效率成就品牌，诚信铸就未来');
$about21 =__('精益求精，不断完善');
$about3 =__('WLS Phoenix GmbH是坐落于德国杜塞尔多夫附近的一家拥有雄厚实力的综合型公司，提供多种海外投资和咨询业务。
依托于透明稳定的服务、稳定全面的产品和具有竞争力的价格优势，WLS Phoenix不断丰富、优化公司业务覆盖面，是欧洲领先的一站式多功能综合型公司。');

$about4 =__('WLS Phoenix GmbH提供的服务有海外仓服务、VAT税务申报及欧洲代注册公司、欧盟授权代表、亚马逊、eBay、OTTO运营、自媒体服务，为各行业客户提供专业的仓储、税务、法律支持。');

$about5 =__('WLS Phoenix自成立以来，以持续提升运转效率和客户体验为宗旨，专注于跨境电商海外仓储解决方案，注重供应链整合创新，不断优化操作流程，降低物流成本。');
$about6 ='公司以业内具有竞争力的物流解决方案和优质的服务水准赢得了广大客户的信任及赞誉，降低了跨境电商的从业门槛，
提升中国跨境电商卖家在当地市场的竞争力，助力中国卖家扬帆出海，乘风破浪。';

?>

<!-- About End -->

<!-- Feature Start -->
<div id="about" class="feature">
    <div class="container" style="padding-top: 30px">
        <div class="row">

            <?php
            $aboutImg=[
                1 => 'a10.jpg',
                2 => 'a11.jpg',
                3 => 'a8.jpg',
                4 => 'a9.jpg',
            ];

            ?>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <p><?=$about1?></p>
                        <h3><?=$about2?></h3>
                    </div>
                    <div class="about-text">
                        <p><?=$about3?></p>
                        <p><?=$about4?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-text">
                    <div class="feature-img" >
                        <div class="row">
                            <?php foreach ($aboutImg as $k=>$v): ?>
                                <div class="col-6" >
                                    <img src="<?=$webName?>img/<?=$v?>" alt="Image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row">


            <?php
            $aboutImg=[
                1 => 'a1.jpg',
                2 => 'a2.jpg',
                3 => 'a3.jpg',
                4 => 'a4.jpg',
            ];

            ?>
            <div class="col-lg-6">
                <div class="feature-text">
                    <div class="feature-img" >
                        <div class="row">
                            <?php foreach ($aboutImg as $k=>$v): ?>
                                <div class="col-6" >
                                    <img src="<?=$webName?>img/<?=$v?>" alt="Image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <h3><?=$about21?></h3>
                    </div>
                    <div class="about-text">
                        <p><?=$about5?></p>
                        <p><?=$about6?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->




<!-- Service Start -->
<?php

$service1 =__('我们的服务');
$service2=__('没有最好，只有更好');
$service02 ='帮助广大跨境卖家有效降低物流运营成本，提升物流响应时间,缩短订单周期，
还能进行实时的库存管理与监测，缩短到货时间，提升海外买家满意度，为电商突破销售额瓶颈，更上一个台阶提供强力支撑。';
$service03 ='联系我们';

$serviceContent =[
    's1'=> __('一站式的海外仓仓储服务'),
    's2'=>  __('一件精准代发全程可控'),
    's3'=>  __('换标贴标及包装定制'),
    's4'=>  __('FBA退货及转运服务'),
    's5'=>  __('售后退换货处理服务'),
    's6'=>  __('仓库专区服务支持'),
];

$ecrep1 =__('优质的欧盟授权代表');
$ecrep2=__('未来之道， 携手共赢');

$service03 ='联系我们';

$ecrepContent =[
    'e1'=> __('提供全方位的辅导和技术支持'),
    'e2'=>  __('提供欧盟成员国的法规和销售信息'),
    'e3'=>  __('充当对欧盟主管当局的法律实体'),
    'e4'=>  __('提供后续的产品注册等增值服务'),
    'e5'=>  __('处理各类突发事故、不良事件以及召回等工作')
];

?>

<!-- Menu Start -->
<div id="menu" class="menu">
    <div class="container">
        <div class="section-header text-center">
            <p><?=$service1?></p>
            <h3><?=$service2?></h3>
        </div>
        <div class="menu-tab">
            <div class="tab-content">
                <div id="burgers" class="container tab-pane active">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">

                            <?php foreach ($serviceContent as $k=>$v):?>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img  src="<?=$webName?>img/svg/<?= $k?>.svg">
                                    </div>

                                    <div class="service">
                                        <h5 class="service-item"><?= $v?></h5>
                                    </div>
                                </div>
                            <?php endforeach;?>

                        </div>
                        <div class="col-lg-7 col-md-7">
                            <img src="<?=$webName?>img/s2.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-header text-center">
            <p><?=$ecrep1?></p>
            <h3><?=$ecrep2?></h3>
        </div>
        <div class="menu-tab">
            <div class="tab-content">
                <div id="burgers" class="container tab-pane active">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="<?=$webName?>img/s1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="offset-md-1 col-md-5">

                            <?php foreach ($ecrepContent as $k=>$v):?>
                                <div style="padding-left: 0px" class="menu-item">
                                    <div class="menu-img">
                                        <img  src="<?=$webName?>img/svg/<?= $k?>.svg" alt ="<?= $k?>">
                                    </div>

                                    <div  class="service">
                                        <h5 class="service-item"><?= $v?></h5>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Contact Start -->
<?php
$contactl1 = __('联系我们');
$contactl2 = __('随时随地都欢迎');
$addressl = __('地址');
$tell = __('电话号码');
$emaill = __('邮箱地址');
$followl = __('关注我们');

$fname = 'WLS Phoenix GmbH';
$tel = '0176 301 777 18';
$tel_01 = '02102 7398866';
$email = 'info@wlsphoenix.de';
$address = 'Stadionring 28, 40878 Ratingen Deutschland';

//Please enter your name
//Please enter your email
//Please enter a subject
//Please enter your message
//Send Message

$enter1 = '请输入您的姓名:';
$enter2 = '请输入您的Email地址:';
$enter3 = '请输入一个主题:';
$enter4 = '请输入消息:';
$enter5 = '发送消息';
?>
<div id = "contact"  class="contact" style="padding-top: 100px">
    <div class="container">
        <div class="section-header text-center">
            <p><?=$contactl1?></p>
            <h3><?=$contactl2?></h3>
        </div>
        <div class="row align-items-center contact-information">
            <div class="col-md-6 col-lg-4">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3><?=$addressl?></h3>
                        <p><?=$address?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3><?=$tell?></h3>
                        <p><?=$tel_01?></p>
                        <p><?=$tel?></p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3><?=$emaill?></h3>
                        <p><?=$email?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact-form">
            <div class="col-md-6">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="<?=__($enter1)?>">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group has-danger">
                        <input type="email" class="form-control is-invalid" id="email" placeholder="<?=__($enter2)?>" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="<?=__($enter3)?>" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="<?=__($enter4)?>" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn custom-btn" type="button" id="sendMessageButton"><?=__($enter5)?></button>
                    </div>
                </form>
            </div>

            <div class="col-md-6" >
                <div style="padding: 20px">
                    <img  src="<?=$webName?>img/contact.jpg" class="img-fluid rounded" alt="contact">
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
$token = $this->request->getAttribute('csrfToken');
?>

<script type="text/javascript">

    $('document').ready(function(){
        $('#sendMessageButton').click(function() {
            $name = $('#name').val().trim();
            $email = $('#email').val().trim();
            $subject = $('#subject').val().trim();
            $message = $('#message').val().trim();

            if ($name.length == 0) {
                $('#name').css('background-color', 'lightpink');
            }
            if($email.length == 0){
                $('#email').css('background-color', 'lightpink');
            }

           if($name.length>0 && $email.length >0){
               $.ajax({
                   url: "<?php echo $this->Url->build( [ 'controller' => 'Contacts', 'action' => 'sendmail' ] ) ?>",
                   type: "GET",
                   data: {
                       name:  $name,
                       email: $email,
                       subject: $subject,
                       message: $message
                   },
                   cache: false,
                   success: function (response) {
                       $('#success').html("<div class='alert alert-success'>");
                       $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                           .append("</button>");
                       $('#success > .alert-success')
                           .append("<strong><?=__('您的消息已经成功被发送。') ?></strong>");
                       $('#success > .alert-success')
                           .append('</div>');
                       $('#contactForm').trigger("reset");
                       $('#name').css('background-color', '#ffffff');
                       $('#email').css('background-color', '#ffffff');
                   },
                   error: function (response) {
                       $('#success').html("<div class='alert alert-danger'>");
                       $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                           .append("</button>");
                       $('#success > .alert-danger').append($("<strong>").text("<?=__('消息已发送失败') ?>"));
                       $('#success > .alert-danger').append('</div>');
                       $('#contactForm').trigger("reset");
                       $('#name').css('background-color', '#ffffff');
                       $('#email').css('background-color', '#ffffff');
                   },
               });
           }
        });
    });




</script>

