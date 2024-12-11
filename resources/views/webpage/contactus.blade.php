@extends('webpage.master')

@section('content')


<main>
    <h1>تواصل معنا</h1>
    <!-- Contact Section -->
    <section class="contact-section">
      <div class="contact-container">
        <div class="contact-form-container">
          <p class="instructions">
            يسعدنا تواصلكم معنا للرد على استفساراتكم واستشاراتكم خلال منصات التواصل أو ترك رسالة لنا
          </p>
          <form class="contact-form">
            <input type="text" placeholder="الاسم بالكامل" />
            <input type="text" placeholder="مجال العمل" />
            <input type="tel" placeholder="رقم الهاتف" />
            <textarea placeholder="اكتب رسالتك"></textarea>
            <button type="submit" class="submit-btn">إرسال</button>
          </form>
          <div class="social-media-list">

            <img src="{{asset('web/images/whatsapp.png')}}" alt="">


            <img src="{{asset('web/images/twitter-alt-circle.png')}}" alt="">


            <img src="{{asset('web/images/instagram.png')}}" alt="">

        </div>
        <!-- Map Section -->
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509784!2d144.95373531531633!3d-37.81627917975164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5779c67338e860!2sMelbourne+VIC+3000!5e0!3m2!1sen!2sau!4v1629330663433!5m2!1sen!2sau"
            width="100%"
            height="100%"
            style="border:0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </section>
  </main>




@endsection
