@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>เกี่ยวกับเรา</h1>
        </div>
    </section>
    <section id="content">

        <div class="content-wrap">


            <div class="container clearfix">

                <div class="col_two_fifth nobottommargin" style="min-height: 350px;">
                    <img src="{{ asset('images/landing/aboutus.png') }}" alt="">
                </div>

                <div class="col_three_fifth nobottommargin col_last">

                    <div class="heading-block">
                        <h3><strong>ด็อกเตอร์บิ๊ก คลินิก (Dr.Big clinic)</strong></h3>
                        <h3><strong>ดโดย นายแพทย์ อำนาจ รัตนวิภาพงศ์ (หมอบิ๊ก).</strong></h3>
                        <span>เลขใบอนุญาตประกอบการ 30101007362</span>
                    </div>

                    <p>คลินิกศัลยกรรมตกแต่งและเลเซอร์ผิวพรรณ พร้อมให้บริการความงาม โดยทีมแพทย์ผู้เชี่ยวชาญเฉพาะทางและทีมงานมากประสบการณ์ที่จะให้การดูแล วิเคราะห์สภาพปัญหาต่างๆ และให้คำแนะนำ อย่างตรงไปตรงมาในการรักษาโดยละเอียดแพทย์ผู้มีประสบการณ์ ทางด้านความงามในการปรับรูปหน้าด้วย Botox (Botulinum Toxin Type A), Filler (สารเติมเต็ม), การร้อยไหม ยกกระชับใบหน้า (ด้วยไหมละลาย PDO, ไหม Brab เงี่ยงก้างปลาและไหมกรวย) และการสลายไขมันส่วนเกิน ควบคู่กับการใช้เลเซอร์ชนิดต่างๆ เพื่อรักษาสิว ฝ้า กระ ลดริ้วรอย ยกกระชับใบหน้า เป็นต้น</p>

                    <p>เพื่อให้ความสวยของคุณเป็นไปได้ดั่งที่ใจต้องการ เครื่องมือทางการแพทย์ที่ได้มาตรฐานสากล ปลอดภัย ได้มาตรฐาน</p>
                </div>

            </div>


        </div>

        <div class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('images/landing/IMG_7820.png') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('images/landing/DSCF4875.png') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('images/landing/DSCF7565.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
@endsection
