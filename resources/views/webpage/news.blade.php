@extends('webpage.master')

@section('content')

<section class="policies">
    <h1>أخبارنا</h1>
    <div class="news-page-card-container">
 @foreach ($news as $new)


      <div class="news-page-card">
        <img src="{{ asset($new->image)}}" alt="Image description" class="card-image" />
        <div class="news-page-card-content">
          <div class="news-page-card-header">
            <span class="news-page-date">{{ $new->created_at}}</span>
            <div class="news-page-date-info">
              <span class="news-page-date-label">تاريخ النشر</span>
              <div class="news-page-icon">
                <img src="{{asset('web/images/calendar-date.png')}}" alt="Calendar Icon">
              </div>
            </div>
          </div>
          <h3 class="news-page-card-title">
            {{ $new->title}}
          </h3>
          <p class="news-page-card-description">
           {{ $new->description}}
          </p>
          <a href="#" class="news-page-read-more">إقرأ المزيد >></a>
        </div>
      </div>
      @endforeach
      <!-- Repeat the above structure for additional cards -->

    </div>
  </section>

<br><br><br><br><br>


@endsection
