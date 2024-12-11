@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
تعديل السياسات واللوائح
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
تعديل
@endsection
@section('content')

<div class="card">



                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('policie.update', $policies->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}





                        <input type="hidden" name="user_id" value="{{ $users->id }}" >


                        <div class="form-group">
                            <label> الهيكل التنظيمي </label>
                            <input type="text" name="frame_title" class="form-control" value="{{ $policies->frame_title }}">
                            <input type="file" name="frame" class="form-control image">
                        </div>


                        <div class="form-group">
                            <label> السياسات واللوائح </label>
                            <input type="text" name="policies_title" class="form-control" value="{{ $policies->policies_title }}">
                            <input type="file" name="policies" class="form-control image">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> تعديل </button>
                        </div>


                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>



@endsection

