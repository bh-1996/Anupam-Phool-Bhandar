@extends("Website.layouts.main")
@section('content')

 <!-- gallery section -->
 <section class="gallery_section layout_padding">

<div class="heading_container justify-content-center">
  <h2>
    Our Gallery
  </h2>
</div>
<div class="container">
  <div class="img_container">
    <div class="box-1">
      <div class="box-1-container">
        <div class="b-1">
          <div class="img-box">
            <img src="images/g-1.jpg" alt="">
          </div>
          <div class="img-box">
            <img src="images/g-4.jpg" alt="">
          </div>
        </div>
        <div class="b-2">
          <div class="img-box">
            <img src="images/g-2.jpg" alt="">
          </div>
          <div class="img-box">
            <img src="images/g-5.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="b-3">
        <div class="img-box">
          <img src="images/g-7.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box-2">
      <div class="img-box">
        <img src="images/g-3.jpg" alt="">
      </div>
      <div class="img-box">
        <img src="images/g-6.jpg" alt="">
      </div>
      <div class="img-box flex-grow-1">
        <img src="images/g-8.jpg" alt="">
      </div>
    </div>
  </div>
</section>
<!-- end gallery section -->
@endsection