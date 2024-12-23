@extends('webpage.master')

@section('content')


<div class="project-donation">
    <div class="image-overlay">
      <img src="{{asset('web/images/Athat-proj.png')}}" alt="Main Image" class="main-image">
      <div class="overlay-content">
        <h1>مشروع التبرع بالملابس </h1>
        <p>تبرع بالملابس لاسعاد غيرك من المحتاجين</p>
        <a href="/donation_form"> <button class="donate-button">تبرع</button> </a>
      </div>
    </div>

    <div class="details-section">
      <h2>عن المشروع</h2>
      <p>
        يهدف مشروع التبرع بالملابس لدعم الأسر المحتاجة وتقديم المساعدات العينية لتعزيز التكافل الاجتماعي...
      </p>
  <br>
      <h2>آلية العمل</h2>
      <div class="steps">
        <div class="step">
          <img src="{{asset('web/images/delivery-service.png')}}" alt="Icon 1">
          <p>استلام التبرع</p>
        </div>
        <div class="step">
          <img src="{{asset('web/images/product-quality.png')}}" alt="Icon 2">
          <p>التأكد من الجودة</p>
        </div>
        <div class="step">
          <img src="{{asset('web/images/delivery.png')}}" alt="Icon 3">
          <p>توزيعه للمحتاجين</p>
        </div>
      </div>

      <p class="call-to-action">
        اضغط على زر "تبرع الآن" وابدأ رحلتك في العطاء.
      </p>
     <a href="/donation_form"> <button class="donate-button">تبرع الآن</button></a>
    </div>
  </div>




<br><br>


@endsection
