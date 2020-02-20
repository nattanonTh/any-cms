<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
{{--    <link href="https://fonts.googleapis.com/css?family=K2D:200&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('any-cms.project_header') }}</title>

    <style>
        body {
            line-height: 1.5;
            color: #555;
            font-family: 'Prompt', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #444;
            font-weight: 600;
            line-height: 1.5;
            margin: 0 0 30px 0;
            font-family: 'Prompt', sans-serif;
        }

        h5,
        h6 { margin-bottom: 20px; }

        h1 { font-size: 36px; }

        h2 { font-size: 30px; }

        h3 { font-size: 24px; }

        h4 { font-size: 18px; }

        h5 { font-size: 14px; }

        h6 { font-size: 12px; }

        h4 { font-weight: 600; }

        h5,
        h6 { font-weight: bold; }

        h1 > span:not(.nocolor):not(.badge),
        h2 > span:not(.nocolor):not(.badge),
        h3 > span:not(.nocolor):not(.badge),
        h4 > span:not(.nocolor):not(.badge),
        h5 > span:not(.nocolor):not(.badge),
        h6 > span:not(.nocolor):not(.badge) { color: #1ABC9C; }

        p,
        pre,
        ul,
        ol,
        dl,
        dd,
        blockquote,
        address,
        table,
        fieldset,
        form { margin-bottom: 30px;font-family: 'Prompt', sans-serif; }

        small { font-family: 'Prompt', sans-serif; }

        #suit-with li {
            display: inline;
            list-style-type: circle;
        }

        footer * {
            color: white!important;
        }

    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T85Q3R9');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="stretched">

<!-- Document Wrapper ============================================= -->
<div id="wrapper" class="clearfix">
    <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>
    <header id="header" class="full-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="#" class="standard-logo" data-dark-logo="{{ asset('landing/clinic/logo.png') }}"><img src="{{ asset('landing/clinic/logo.png') }}" alt="Canvas Logo"></a>
                    <a href="#" class="retina-logo" data-dark-logo="{{ asset('landing/clinic/logo.png') }}"><img src="{{ asset('landing/clinic/logo.png') }}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li>
                            <a href="https://line.me/R/ti/p/%40450lfeyk">
                                <div>
                                    <i style="font-size: 30px;margin-right: 10px;" class="icon-line"></i>
                                    @24THCLINIC
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tel:0642932424">
                                <div>
                                    <i style="font-size: 30px;margin-right: 10px;" class="icon-phone-square"></i>
                                    064-293-2424
                                </div>
                            </a>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 800px;width: 100%">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('landing/clinic/banner/6.png') }}');">
                </div>

                <div class="swiper-slide" style="background-image: url('{{ asset('landing/clinic/banner/2.png') }}');">
                </div>

                <div class="swiper-slide" style="background-image: url('{{ asset('landing/clinic/banner/4.png') }}');">
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('landing/clinic/banner/5.png') }}');">
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('landing/clinic/banner/1.png') }}');">
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        </div>
    </section>

    <section id="content">

        <div class="content" style="background-image: url('{{ asset('landing/clinic/bg_2.png') }}');">

            <div class="clearfix">
                <div class="row clearfix">

                    <div class="col-xl-12">
                        <div class="heading-block topmargin-lg center">
                            <h3 style="color: #c1836c;">ลบรอยสัก ที่ไหน <strong style="color: black"> "ไม่จาง" </strong> ให้มาหา <strong style="color: black"> "เรา" </strong> ด้วย</h3>
                        </div>
                        <div class="container">
                            <div class="text-center">
                                <h1 style="color: #c1836c">PICOSECOND LASER</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-11 col-offset-sm-1">
                        <div class="text-center mt-5">
                            <img src="{{ asset('landing/clinic/pic_Tattoo.jpg') }}" alt="" class="image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-11 col-offset-sm-1">
                        <div class="text-center">
                            <small>** ผลลัพธ์ที่ได้แตกต่างกันไป ขืนอยู่กับผิวและขนาดของรอยสักแต่ละบุคคล</small>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center mt-5">
                                <h1>ทำไมต้องที่ <span style="color: #c1836c;font-size: 70px;">24 CLINIC ?</span></h1>
                                <hr>
                                <h4><span style="color: #c1836c">จากประสบการณ์ในการลบรอยสักมากกว่า</span> <span style="font-size: 35px;color: black">"1000 เคส"</span> </h4>
                                <h4><span style="color: #c1836c">โดยใช้เครื่อง</span> <span style="font-size: 35px;color: black">"PICO LASER"</span></h4>
                                <h4><span style="color: #c1836c">ซึ่งเป็น</span> <span style="font-size: 35px;color: black">"นวัตกรรมล่าสุด"</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h1 style="color: #c1836c"><strong>จึงทำให้มั่นใจได้ว่า เราสามารถดูแลให้ท่านอย่างตอบโจทย์ที่สุด</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ asset('landing/clinic/group_5.png') }}" alt="" class="image">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <img src="{{ asset('landing/clinic/laser_2.png') }}" class="img img-circle" alt="">
                        </div>
                        <div class="col-sm-6 text-center">
                            <div style="padding-top: 100px">
                                <h1 style="font-size: 3em">PICOSECOND LASER</h1>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4><span style="color: #c1836c">เป็นนวัตกรรมที่ใหม่ล่าสุด </span> <span style="font-size: 35px;color: black">แห่งแรกของเมืองไทย</span> </h4>
                                        <h4 style="color: #c1836c;">สามารถลบรอยสักได้เร็วกว่าเลเซอร์ <span style="color: black; font-size: 37px;color: black">Q-Switch</span> ถึงหลายเท่า</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <div style="padding-top: 100px">
                                <h1 style="font-size: 3em">ลบได้ทุกเฉดสี</h1>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 style="color: #c1836c">ด้วยแหล่งกำเนิดพลังงานเลเซอร์ที่มีให้เลือกถึง</h3>
                                        <h4 style="font-size: 3em;">5 ความยาวคลื่น</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-left">
                            <img src="{{ asset('landing/clinic/laser_1.png') }}" class="img img-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5 text-center">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span style="color:black; font-size: 3em;">1064</span> NM</h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <p style="font-size: 1.3em">สำหรับรอยสัก</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p style="font-size: 1.3em">สีดำ สีน้ำตาล</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <img src="{{ asset('landing/clinic/group_6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                    <h4><span style="color:black; font-size: 3em;">755</span> NM</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <p style="font-size: 1.3em">สำหรับรอยสัก</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <p style="font-size: 1.3em">ทุกสี ยกเว้นสีแดง</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <img src="{{ asset('landing/clinic/rectangle_6.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                    <h4><span style="color:black; font-size: 3em;">660</span> NM</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <p style="font-size: 1.3em">สำหรับรอยสัก</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <p style="font-size: 1.3em">สีเขียว</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <img src="{{ asset('landing/clinic/ellipse.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-12">
                            <h4><span style="color:black; font-size: 3em;">595</span> NM</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <p style="font-size: 1.3em">สำหรับรอยสัก</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <p style="font-size: 1.3em">สีน้ำเงิน ม่วง ฟ้า</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <img src="{{ asset('landing/clinic/group_8.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-12">
                            <h4><span style="color:black; font-size: 3em;">532</span> NM</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <p style="font-size: 1.3em">สำหรับรอยสัก</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <p style="font-size: 1.3em">สีน้ำแดง ส้ม เหลือง</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <img src="{{ asset('landing/clinic/group_9.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-4 pb-5">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('landing/clinic/flag.png') }}" class="image" style="width: 300px" alt="">
                    </div>
                    <div class="col-sm-8 text-center">
                        <h1>ดูแลโดยทีมแพทย์ผู้มากประสบการณ์</h1>
                        <div class="text-center">
                            <h3 style="color: #c1836c">ผ่านการฝึกอบรมเกี่ยวกับพิคโคเลเซอร์จากประเทศสหรัฐอเมริกาโดยเฉพาะ</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('landing/clinic/group_10.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-sm-12 text-center">
                                <h3>มีความปลอดภัยสูง</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('landing/clinic/group_11.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-sm-12 text-center">
                                <h3>ลดผลข้างเคียงที่อาจเกิดขึ้น</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('landing/clinic/group_12.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-sm-12 text-center">
                                <h3>ไม่ทิ้งรอยแผลเป็น</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="container pt-5">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 style="color: #c1836c">เราใช้เครื่อง</h3>
                        <h1>PICO LASER ORIGINAL</h1>
                        <h3 style="color: #c1836c">ผ่าน อย. ไทย และ อย. สหรัฐอเมริกา</h3>
                    </div>

                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <img class="img" src="{{ asset('landing/clinic/device.png') }}" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-5" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>เหมาะกับ</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <ul class="list list-inline" style="list-style-type: circle">
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> ส่วนราชการ</li>
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> ทหาร ตำรวจ</li>
                            <li class="list-inline-item" style="font-size: 1.8em;"><i class="icon-circle2"></i> สายอาชีพต่างๆ เช่น แอร์โฮสเตส์</li>
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> แก้ไขคิ้วถาวร</li>
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> ลบรอยเก่าเพื่อลืมอดีต</li>
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> ลบออกไป เพื่อไม่ให้ใครเห็น</li>
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> ความมั่นใจเติมเต็ม</li>
                            <li class="list-inline-item" style="font-size: 1.8em"><i class="icon-circle2"></i> แก้ไขรอยสักส่วนเกิน</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: white;">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <img src="{{ asset('landing/clinic/dr_yin.png') }}" style="width: 500px;" alt="">
                    </div>
                    <div class="col-sm-7 text-center">
                        <div class="row pt-5">
                            <div class="col-sm-4 text-left">
                                <img src="{{ asset('landing/clinic/logo.png') }}" style="min-width: 250px" alt="">
                            </div>
                            <div class="col-sm-8">
                                <div class="row text-left">
                                    <div class="col-sm-12">
                                        <p  style="color: #c1836c;font-size: 1.3em;">
                                            <span style="font-size: 2em;color: black;">ดูแลโดยแพทย์ทุกเคส</span><br>
                                            แพทย์หญิง ฐิติธัญญ์ มหาสิริวัฒนธาดา<br>
                                            (คุณหมอหยิน)
                                        </p>
                                        <p  style="font-size: 1.3em;">
                                            ผู้ก่อตั้ง & กรรมการบริหาร 24 CLINIC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-sm-9" style="font-size: 1.3em;color: #c1836c;">
                                <p>จบการศึกษาจาก คณะแพทย์ศาสตร์สิริราชพยาบาล<br>มหาวิทยาลัยมหิดล (ปี 2552)</p>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-sm-9"  style="font-size: 1.3em;color: #c1836c;">
                                <p>วุฒิบัตรเฉพาะทาง เวชศาสตร์ชะลอวัยและฟื้นฟู<br>จากประเทศสหรัฐอเมริกา (ปี 2557)</p>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-sm-9" style="font-size: 1.3em;color: #c1836c;">
                                <p>
                                    วุฒิบัตร อนุปริญญาสาขา ตจวิทยา<br>จากมหาวิทยาลัย ตาร์ดิฟ ประเทศสหราชอาณาจักร<br>
                                    (PRACTICAL DERMATOLOGY, CARDIFF UNIVERSITY, UK)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7 text-center">
                        <div class="row pt-5">
                            <div class="col-sm-12">
                                <div class="row text-left">
                                    <div class="col-sm-12">
                                        <p  style="color: #c1836c;font-size: 1.3em;">
                                            <span style="font-size: 2em;color: black;">รับรองโดย รางวัลอันทรงเกียรติจาก ประเทศสหรัฐอเมริกา</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-sm-12" style="font-size: 1.3em;color: #c1836c;">
                                <p>
                                    คุณหมอหยินได้ตั้งใจคัดสรรหาเลเซอร์ที่ใหม่ล่าสุด ตอบโจทย์ปัญหาลบรอยสักมากที่สุด
                                    จึงได้บินไปทดลองประสิทธิภาพเครื่อง PicoSecond Laser ที่ต่างประเทศด้วยตัวเอง
                                    เพื่อเปรียบเทียบผลลัพธ์ของแต่ละแบรนด์ และพบว่า "Picosure" และ "Picoplus"
                                    เป็นเครื่องเลเซอร์ที่มีประสิทธิภาพยอดเยี่ยมที่สุด
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center">
                        <img src="{{ asset('landing/clinic/reward.png') }}" style="width: 500px;" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <!-- Footer ============================================= -->
    <footer id="footer" style="background-color: #C29383;">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>*** ปรึกษาฟรี ทักสอบถาม รับราคาพิเศษ ***</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a href="https://line.me/R/ti/p/%40450lfeyk" class="button button-border button-rounded button-green button-xlarge" style="color: #444;border-color: white;">
                                    <i class="icon-line" style="font-size: 1.3em;margin-right: 15px;"></i>Add Friend
                                </a>
                                <a href="tel:0642932424" class="button button-border button-rounded button-red button-xlarge" style="color: #444;border-color: white;">
                                    <i class="icon-call" style="font-size: 1.3em;margin-right: 15px;"></i>064-293-2424
                                </a>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-12">
                                <p style="font-size: 1.5em;">315/41 โครงการพรีเมี่ยมเพลส์ เกษตร-นวมินทร์ ถนนสุคนธสวัสดิ์ 11<br>ตรงข้าม ซอย ถนนสุคนธสวัสดิ์ 22 เขตลาดพร้าว กรุงเทพมหานคร 10230</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('landing/clinic/qRCode.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p><a class="btn btn-link" href="https://line.me/R/ti/p/%40450lfeyk">LINE: @24THCLINIC</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .footer-widgets-wrap end -->

        </div>

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T85Q3R9"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Go To Top ============================================= -->
{{--<div id="gotoTop" class="icon-angle-up"></div>--}}

<!-- External JavaScripts ============================================= -->
<link rel="stylesheet" href="{{ asset('/landing/css/responsive.css') }}" type="text/css" />

<script src="{{ asset('/landing/js/jquery.js') }}"></script>
<script src="{{ asset('/landing/js/plugins.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('/landing/js/functions.js') }}"></script>

</body>
</html>
