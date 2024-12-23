@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة التبرعات
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي التبرعات
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالي التبرعات <small>{{ $donations->total() }} </small></h3>

        <form action="{{ route('donation.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder=" ابحث بإسم المتبرع" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('donation_form')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($donations->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th> إسم المتبرع </th>
            <th> عنوان المتبرع </th>
            <th> تلفون المتبرع </th>
            <th> نوع التبرع  </th>
            <th> الصورة </th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($donations as $index=>$donation)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$donation->name}}</td>
            <td>{{$donation->city}}, {{$donation->address}}</td>
            <td>{{$donation->phone}}</td>
            <td>{{$donation->donation_type}}</td>
            <td><img src="{{asset($donation->image)}}" style="width: 100px" class="img-thumbnail" alt=""></td>
            <td>

             <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>

             <a href="{{ route('donation.show',$donation->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> عرض </a>


                <form action=" {{ route('donation.destroy', $donation->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $donations->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
