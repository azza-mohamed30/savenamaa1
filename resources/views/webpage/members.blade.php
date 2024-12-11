@extends('webpage.master')

@section('content')



<div class="member-page">

    <div class="hierarchy">
      <!-- Main Box -->
          <h1 class="title">أعضاء الجمعية العمومية</h1>
      <img class="icon" src="{{asset('web/images/pepicons-print_people.png')}}" alt="Icon">
      <div class="level">
        <div class="box">
          <h3>الرئيس</h3>
          <p>عبدالرحمن صالح الزهراني</p>
        </div>
      </div>

      <!-- Connector -->
      <div class="connector">
        <div class="vertical-line"></div>
        <div class="horizontal-line"></div>
      </div>

      <!-- Second Level -->
      <div class="level">
        <div class="box">
          <h3> نائب الرئيس</h3>
          <p>حليمة إبراهيم العمري</p>

        </div>
        <div class="box">
          <h3>المشرف المالي</h3>
          <p>جمعان أحمد العمري</p>

        </div>
      </div>

      <!-- Connector -->
      <div class="connector">
        <div class="vertical-line"></div>
        <div class="horizontal-line"></div>
      </div>

      <!-- Third Level -->
      <div class="level">
        <div class="box">
          <h3>عضو مجلس</h3>
          <p>محمد مشرف الزهراني</p>

        </div>
        <div class="box">
          <h3>عضو مجلس</h3>
          <p>بدر حسن العمري</p>

        </div>
        <div class="box">
          <h3>عضو مجلس</h3>
          <p>حنان غرم الله العمري</p>

        </div>
      </div>
    </div>


      <!-- fourth Level -->
          <div class="level">
        <div class="box">
          <h3>عضو مجلس</h3>
          <p>رحمه عطية الزهراني</p>

        </div>
        <div class="box">
          <h3>عضو مجلس</h3>
          <p>مريم عبدالقادر الغامدي</p>

        </div>
        <div class="box">
          <h3>عضو مجلس</h3>
          <p>عبدالله سعيد العمري</p>

        </div>
      </div>
    </div>
  <br><br>








@endsection
