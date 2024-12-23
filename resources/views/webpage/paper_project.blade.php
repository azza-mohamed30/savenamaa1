@extends('webpage.master')

@section('content')

<div class="project-donation">
    <div class="image-overlay">
      <img src="{{asset('web/images/peper-project.png')}}" alt="Main Image" class="main-image">
      <div class="overlay-content">
        <h1>مشروع إعادة تدوير الورق</h1>
        <p>ساهم في خلق بيئة ومجتمع مستدام</p>
        <a href="/donation_form"> <button class="donate-button">تبرع</button> </a>
      </div>
    </div>

    <div class="details-section">
      <h2>عن المشروع</h2>
      <p>
        يهدف مشروع اعادة تدوير الورق لخلق بيئة مستدامة...
      </p>
  <br>
      <h2>آلية العمل</h2>
      <div class="steps">
        <div class="step">
          <img src="{{asset('web/images/delivery-service.png')}}" alt="Icon 1">
          <p>استلام التبرع</p>
        </div>
        <div class="step">
          <img src="{{asset('web/images/recycle-sign.png')}}" alt="Icon 2">
          <p>اعادة التدوير</p>
        </div>
        <div class="step">
          <img src="{{asset('web/images/delivery.png')}}" alt="Icon 3">
          <p>توزيعه </p>
        </div>
      </div>

      <p class="call-to-action">
        اضغط على زر "تبرع الآن" وابدأ رحلتك في العطاء.
      </p>
      <a href="/donation_form"> <button class="donate-button">تبرع</button> </a>
    </div>
  </div>




<br><br>



@endsection
