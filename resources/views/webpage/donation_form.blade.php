@extends('webpage.master')


@section('content')

<style>

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.text-right {
  text-align: right !important;
}


</style>

<div class="wrapper-news">

    <div class="form-container">
        @if(Session::has('error'))
        <div class="alert alert-danger text-right" role="alert">
        {{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success text-right" role="alert">
        {{ Session::get('success') }}
        </div>
        @endif
      <h1>تسجيل التبرع</h1>
      <form action="{{ route('donation.store')}}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{ method_field('post') }}

        <div class="form-row">
          <div class="form-group">
            <label for="full-name">الاسم بالكامل</label>
            <input type="text" name="name" id="full-name" placeholder="الاسم بالكامل" required>
          </div>
          <div class="form-group">
            <label for="city">المدينة</label>
            <select id="city" name="city" required>
              <option value="" disabled selected>اختر المدينة</option>
              <option value="المخواه">المخواه</option>
              <option value="الباحة">الباحة</option>
              <option value="بيشة">بيشة</option>
              <option value="خميس مشيط">خميس مشيط</option>
              <option value="الرياض">الرياض</option>
              <option value="جدة">جدة</option>
              <option value="الدمام">الدمام</option>
              <option value="مكة">مكة</option>
              <option value="المدينة المنورة">المدينة المنورة</option>
              <option value="الخبر">الخبر</option>
              <option value="أبها">أبها</option>
              <option value="تبوك">تبوك</option>
              <option value="الطائف">الطائف</option>
              <option value="جيزان">جيزان</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="phone-number">رقم الهاتف</label>
            <input type="tel" name="phone" id="phone-number" placeholder="رقم الهاتف" required>
          </div>
          <div class="form-group">
            <label for="address">العنوان</label>
            <input type="text" name="address" id="address" placeholder="اسم الحي" required>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group">
              <label for="type">نوع التبرع</label>
              <select id="type" name="donation_type" required>
                <option value="" disabled selected>اختر النوع</option>
                <option value="أثاث">أثاث</option>
                <option value="ملابس">ملابس</option>
                <option value="ورق">ورق</option>
              </select>
            </div>
          </div>
        <div class="form-group">
          <label for="upload">قم برفع صورة لقطعة الأثاث المراد التبرع بها</label>
          <input type="file" name="image" id="upload" class="upload-input" accept="image/*" >
        </div>
        <button type="submit" class="submit-button">إرسال</button>
      </form>
    </div>
  </div>

  @if (session('success'))

    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif


@endsection
