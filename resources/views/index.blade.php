@extends('layouts.master')

@section('stylesheet')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<style>
.swiper-container {
	width: 100%;
	height: 500px;
}
.swiper-slide {
	padding-top: 180px; /* 画像位置の調整用 */
	text-align: center;
	color: #fff;
	font-size: 30px;
}
</style>
@endsection

@section('content')
    <!-- Slider main container -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" style="
                background-image: url('/img/slide1.jpg');
				background-repeat: no-repeat;
				width: 1261px;
				background-size: cover;
                background-position: center center;">
        学内での交流を円滑にします
        </div>
        <div class="swiper-slide" style="
				background-image: url('/img/slide1.jpg');
				background-repeat: no-repeat;
				width: 1261px;
				background-size: cover;
                background-position: center center;">
        年内の行事を確認できます
        </div>
        <div class="swiper-slide" style="
				background-image: url('/img/slide1.jpg');
				background-repeat: no-repeat;
				width: 1261px;
				background-size: cover;
				background-position: center center;">
        先生からの連絡を一択確認
        </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

<!-- About -->
<div class="py-5">
    <h1 class="text-center mb-5">About</h1>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
    <p class="text-center">3C32sが作成したSNSサイトです。hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge. hoge.</p>
</div>

<!-- できること -->
<section class="bg-light text-center py-5">
    <h2 class="mb-5">できること</h2>
    <div class="container">
    <table class="table table-hover">
        <thead>
            <tr><th>Student <i class="fas fa-user"></i></th><th>Teacher <i class="fas fa-user"></i></th></tr>
        </thead>
        <tbody>
            <tr><td>チャット</td><td>チャット</td></tr>
            <tr><td>年間行事の確認</td><td>ユーザーの削除</td></tr>
            <tr><td>なんか</td><td>年間行事の編集</td></tr>
        </tbody>
    </table>
    </div>
</section>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
      effect: "flip",
      loop: true,
      pagination: '.swiper-pagination',
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
    })
</script>
@endsection