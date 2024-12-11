@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
إضافة السياسات واللوائح
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
إضافة
@endsection
@section('content')

<div class="card">



                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('policie.store')}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}


                        <input type="hidden" name="user_id" value="{{ $users->id }}" >


                        <div class="form-group">
                            <label> الهيكل التنظيمي </label>
                            <input type="text" name="frame_title" class="form-control" value="{{ old('frame_title') }}">
                        </div>
                        <div class="form-group">

                            <input type="file" name="frame" class="form-control image">
                        </div>


                        <div class="form-group">
                            <label> السياسات واللوائح </label>
                            <input type="text" name="policies_title" class="form-control" value="{{ old('policies_title') }}">
                        </div>
                        <div class="form-group">

                            <input type="file" name="policies" class="form-control image">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> أضف </button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>



@endsection

