@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
عرض
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
    <br>
    <div class="box-body">

    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>تفاصيل التبرع</th>
        </tr>
    </thead>

    <tbody>

        <tr>

            <td>
                اسم المتبرع :
                <br>
                <br>
                {{$donations->name}}
            </td>
        </tr>

        <tr>
            <td>
                عنوان المتبرع :
                <br>
                <br>
                {{$donations->city}}, {{$donations->address}}
            </td>
        </tr>

        <tr>
            <td>
            نوع التبرع :
                <br>
                <br>

                {{$donations->donation_type}}
            </td>
        </tr>

         <tr>
            <td>
                الصوره :
                <br>
                <br>

                <img src="{{asset($donations->image)}}" style="width: 300px" class="img-thumbnail" alt="">
            </td>

         </tr>

<tr>
    <td>
             <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


                <form action=" {{ route('donation.destroy', $donations->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>
    </td>
 </tr>

    </tbody>

    </table><!-- end of table -->


    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
