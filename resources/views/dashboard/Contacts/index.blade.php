@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة بيانات المرسلة بواسة زوار الموقع
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي صفحة تواصل معنا
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="col-md-4">


            <a href="{{ route('contactus')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


<br>
    <div class="box-body">
    @if ($contact->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th> اسم الزائر </th>
            <th> مجال العمل </th>
            <th> التلفون </th>
            <th> الرسالة </th>
            <th> الحدث </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($contact as $index=>$contac)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$contac->name}}</td>
            <td>{{$contac->work_field}}</td>
            <td>{{$contac->phone}}</td>
            <td>{{$contac->message}}</td>
            <td>

                <form action=" {{ route('contact_us.destroy', $contac->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->

    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
