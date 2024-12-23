@extends('webpage.master')

@section('content')


    <!-- big image Section -->
<!-- Container for the image gallery -->
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    @foreach ($images as $index=>$image)

    <div class="mySlides fade">
        <div class="numbertext">{{$index + 1}} / 3</div>
        <a href="/donation_form">  <button class="image-button">تبرع الأن</button> </a>
        <img src="{{asset($image->main_image)}}" style="width:100%">

    </div>

    @endforeach

 {{-- <!--
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="{{asset('web/images/second-image.png')}}" style="width:100%">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="{{asset('web/images/home-image.png')}}" style="width:100%">

    </div>
     --> --}}

    <!-- Next and previous buttons -->
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

      <br><br><br>

   <!-- Vision, Mission, Goals Section -->

        <div class="info-box-container">
      <div class="info-box">
          <img src="{{asset('web/images\lock.png')}}" alt="Icon 1" class="info-icon">
          <h2>رؤيتنا</h2>
          <p> تمكين الشباب لإحداث أثر مجتمعي من خلال التكافل</p>
      </div>

      <div class="info-box">
          <img src="{{asset('web/images\no-message.png')}}" alt="Icon 2" class="info-icon">
          <h2>رسالتنا</h2>
          <p>مجتمع يتعامل مع النعم بمسؤولية وينبذ التبذير والاسراف</p>
      </div>

      <div class="info-box">
          <img src="{{asset('web/images\target.png')}}" alt="Icon 3" class="info-icon">
          <h2>هدفنا</h2>
          <p>حفظ الفائض من الملابس والأدوات المكتبية والأثاث المنزلي</p>
      </div>
  </div>

  <br>



      <!-- Fields Section -->
      <section class="fields-section"  id="fields-section">
          <h2>مجالاتنا</h2>
          <p>جمع الملابس والاثاث وإعادة تدويرها لتوزيعها على المستفيدين</p>
          <div class="fields-container">
              <div class="field">
                  <div class="fields-icon2"><img src="{{asset('web/images/living.png')}}" alt="field 1" /></div>
             </div>

              <div class="field"><div class="fields-icon2"><img src="{{asset('web/images/clothes.png')}}" alt="field 1" /></div>
  </div>
              <div class="field"><div class="fields-icon2"><img src="{{asset('web/images/charity.png')}}" alt="field 1" /></div></div>

          </div>

      </section>

      <br><br>

      <!-- Projects Section -->
      <section class="projects-section">
          <h2>مشاريعنا</h2>
  <div class="project-cards-container">
      <a href="/clothes_project" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('web/images/project-cloth.png')}}');">
          <div class="project-card-title">مشروع جمع الملابس</div>

        </div>
      </a>
      <a href="/athath" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('web/images/Athath.png')}}');">
          <div class="project-card-title">مشروع الجسد الواحد</div>
        </div>
      </a>
      <a href="/paper_project" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('web/images/paper.png')}}');">
          <div class="project-card-title">مشروع إعادة تدوير الورق</div>
        </div>
      </a>
     <!-- <a href="page4.html" class="project-card">
        <div class="project-card-image" style="background-image: url('images/project44.jpg');">
          <div class="project-card-title">المشروع الرابع</div>
        </div>
      </a>
      <a href="page5.html" class="project-card">
        <div class="project-card-image" style="background-image: url('project55.jpg');">
          <div class="project-card-title">المشروع الخامس</div>
        </div>
      </a>  -->
    </div>
      </section>

      <!-- News Section -->
      <section class="news-section">
    <h2>اخبارنا</h2>

    <ul class="cards">
         @foreach ($news as $new)



              <li>
                <a href="" class="cardx">
                  <img src="{{asset($new->image)}}" class="cardx__image" alt="" />
                  <div class="cardx__overlay">
                    <div class="cardx__header">


                      <div class="cardx__header-text">
                        <h3 class="cardx__title">{{$new->title}}</h3>
                        <span class="cardx__status">{{$new->created_at}}</span>
                      </div>
                    </div>
                    <p class="cardx__description"> {{$new->description}} </p>
                  </div>
                </a>
              </li>

            @endforeach
        </ul>
              {{-- <li>
                <a href="" class="cardx">
                  <img src="{{asset('web/images/news2.jpeg')}}" class="cardx__image" alt="" />
                  <div class="cardx__overlay">
                    <div class="cardx__header">


                      <div class="cardx__header-text">
                        <h3 class="cardx__title">انطلاق المشروع الثاني</h3>
                        <span class="cardx__status">قبل اسبوع</span>
                      </div>
                    </div>
                    <p class="cardx__description">نص هنا</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="" class="cardx">
                  <img src="{{asset('web/images/news3.jpeg')}}" class="cardx__image" alt="" />
                  <div class="cardx__overlay">
                    <div class="cardx__header">


                      <div class="cardx__header-text">
                        <h3 class="cardx__title">انطلاق المشروع الثالث</h3>
                        <span class="cardx__status">قبل يومين</span>
                      </div>
                    </div>
                    <p class="cardx__description">نص هنا</p>
                  </div>
                </a>
              </li> --}}


    <a href="/our_news"><button class="more-news">للمزيد من الأخبار</button></a>
  </section>


      <!-- <section class="statistics-section">
    <div class="stat">
      <h3>1402</h3>
      <p>الفعاليات</p>
    </div>
    <div class="stat">
      <h3>1402</h3>
      <p>اعداد المتطوعين</p>
    </div>
    <div class="stat">
      <h3>1402</h3>
      <p>المستفيدين</p>
    </div>
    <div class="stat">
      <h3>25</h3>
      <p>المشاريع</p>
    </div>
  </section> -->


  <section class="statistics-section">
@foreach ($statistics as $statistic)


    <div class="wrapper">
      <div class="container">
          <span class="num" data-val="{{$statistic->events}}">000</span>
          <span class="text"> الفعاليات</span>
      </div>

      <div class="container">
          <span class="num" data-val="{{$statistic->volunteers}}">000</span>
          <span class="text">المتطوعين</span>
      </div>

      <div class="container">
          <span class="num" data-val="{{$statistic->recipients}}">000</span>
          <span class="text">المستفيدين</span>
      </div>

      <div class="container">
          <span class="num" data-val="{{$statistic->projects}}">000</span>
          <span class="text">المشاريع</span>
      </div>
  </div>

  @endforeach
  </section>



  @endsection
