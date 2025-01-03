<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>جمعية المحافظة على النعمة وترشيدها</title>
    <link rel="stylesheet" href="{{asset('web/style.css')}}">
</head>


    <!-- Header -->


	    <header class="header">
		 <!-- Hamburger Menu Icon -->

	    <div class="top-bar">
       <div class="hamburger" onclick="toggleMenu()" >☰</div>
	     <!--    <div class="social-media">
        <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
        <a href="#"><img src="images/twitter-alt-circle.png" alt="Twitter"></a>
        <a href="#"><img src="images/whatsapp.png" alt="WhatsApp"></a>
      </div> -->
      <div class="account">

        <a href="https://wa.me/0535691080">
            <img src="{{asset('web/images/whatsapp.png')}}" alt="">
        </a>
        <a href="https://twitter.com/inaammkw">
            <img src="{{asset('web/images/twitter-alt-circle.png')}}" alt="Twitter">
        </a>
        <a href="https://snapchat.com/inaam1080">
            <img src="{{asset('web/images/snapchat2 (2).png')}}" alt="Snapchat">
        </a>

      </div>
    </div>

 </header>
<section class="Search-section">

   <!-- <div class="search">
        <input type="text" class="searchTerm" placeholder="اكتب النص للبحث">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>-->
	    <div class="logo">
        <img src="{{asset('web/images/logo-with-text.png')}}" alt="شعار الصفحة">
    </div>
</section>

<nav>




    <!-- Navigation Menu -->
    <ul>
        <!-- Close Icon (X) -->
        <li class="close-menu" style="text-align: right; cursor: pointer;">X</li>

        <!-- Navigation Links -->
        <li><a href="/index">الرئيسية</a></li>
        <li class="dropdown">
          <a href="/aboutus">من نحن <span class="arrow">⮟ </span> </a>
            <ul class="dropdown-menu">
                <li><a href="/members">أعضاء الجمعية العمومية</a></li>
                <li><a href="/aboutus">عن الجمعية</a></li>
            </ul>
        </li>
        <li><a href="/index#fields-section">مجالاتنا</a></li>
        <li><a href="/projects">مشاريعنا</a></li>
        <li><a href="/our_news">اخبارنا</a></li>
        <li class="dropdown">
          <a href="#">الحوكمة<span class="arrow">⮟ </span> </a>
            <ul class="dropdown-menu">
                <li><a href="/policies">السياسات واللوائح</a></li>
                <li><a href="/financial">التقارير المالية</a></li>
                <li><a href="/meeting"> محاضر الإجتماعات </a></li>
            </ul>
        </li>
        <li><a href="/contactus">تواصل معنا</a></li>
    </ul>
</nav>

<body>

   <!-- {{-- *******************//end of header**************** --}} -->







   @yield('content')








<!-- Footer Section -->
<section class="footer">
    <div class="footer-row">







  <div class="footer-col">
        <h4>جمعية المحافظه على النعمة وترشيدها</h4>
        <ul class="links">
          <li><a href="/policies">السياسات و اللوائح</a></li>
          <li><a href="/contactus">تواصل معنا</a></li>
          <li><a href="/members">مجلس اللإدارة</a></li>
        </ul>
      </div>
          <div class="footer-col">
        <h4>روابط سريعة</h4>
        <ul class="links">
          <li><a href="/index">الرئيسية</a></li>
          <li><a href="/our_news">أخبارنا</a></li>
          <li><a href="/projects">مشاريعنا</a></li>
          <li><a href="/projects"> فرص التبرع </a></li>
          <li><a href="/donation_form"> تبرع </a></li>
        </ul>
      </div>

   <div class="footer-col">

      </div>
      <div class="footer-col">
          <h4>إشترك ليصلك كل جديد</h4>
          <p>
            ابق على تواصل
          </p>
          <form action="#">
            <input type="text" placeholder=" أدخل البريد الإلكتروني " required>
            <button type="submit">إشترك</button>
          </form>

          <div class="icons">
            <a href="https://wa.me/0535691080">
                  <img src="{{asset('web/images/whatsapp.png')}}" alt="">
            </a>
            <a href="https://twitter.com/inaammkw">
                  <img src="{{asset('web/images/twitter-alt-circle.png')}}" alt="">
            </a>
            <a href="https://snapchat.com/inaam1080">
                  <img src="{{asset('web/images/instagram.png')}}" alt="">
            </a>
          </div>

        </div>

    </div>
  </section>

  <script src="{{asset('web/script.js')}}"></script>
  </body>
  </html>

  <!-- {{-- ******************* //end of footer ****************   --}} -->
