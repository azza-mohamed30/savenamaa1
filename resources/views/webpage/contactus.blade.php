@extends('webpage.master')

@section('content')


<br>



<!-- Contact Section -->
<section class="contact-section">
  <h1 class="section-title">تواصل معنا</h1>
  <div class="contact-container">
    <div class="contact-form-container">
      <p class="instructions">
        يسعدنا تواصلكم معنا للرد على استفساراتكم واستشاراتكم خلال منصات التواصل أو ترك رسالة لنا
      </p>

        @include('partials._errors')

        <form class="contact-form" action="{{ route('contact_us.store')}}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('post') }}

        <input type="text" name="name" placeholder="الاسم بالكامل" />
        <input type="text" name="work_field" placeholder="مجال العمل" />
        <input type="tel" name="phone" placeholder="رقم الهاتف" />
        <textarea name="message" placeholder="اكتب رسالتك"></textarea>
        <button type="submit" class="submit-btn">إرسال</button>

      </form>
      <div class="social-media-list">

       <a href="https://wa.me/0535691080"> <div class="social-icon" ><img src="{{asset('web/images/whatsapp.png')}}" alt=""></div></a>
       <a href="https://twitter.com/inaammkw"><div class="social-icon" ><img src="{{asset('web/images/twitter-alt-circle.png')}}" alt=""></div></a>
       <a href="https://snapchat.com/inaam1080"> <div class="social-icon" ><img src="{{asset('web/images/snapchat (1).png')}}" alt=""></div></a>
      </div>
    </div>
    <!-- Map Section -->
    <div class="map-container">

      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15019.775295694906!2d41.433127!3d19.7575412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e5f9005ef399e1%3A0x1b9277c56e22b768!2z2KzZhdi52YrYqSDYp9mE2YXYrdin2YHYuNipINi52YTZiSDYp9mE2YbYudmF2Kkg2YjYqtix2LTZitiv2YfYpyDYqNin2YTZhdiu2YjYp9ip!5e0!3m2!1sar!2ssa!4v1733925760289!5m2!1sar!2ssa"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>



@endsection
