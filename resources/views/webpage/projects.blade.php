@extends('webpage.master')

@section('content')

<div class="project-page">
    <h1 class="project-page-title">مشاريعنا</h1>
    <div class="project-page-container">
        <!-- Project 1 -->
        <div class="project-page-item">
            <div class="project-page-image">
                <img src="{{asset('web/images/Athath.png')}}" alt="مشروع الجسد الواحد">
            </div>
            <div class="project-page-text">
                <h2>مشروع الجسد الواحد</h2>
                <p>مشروع لجمع الاثاث المنزلي وترميمه وارساله للاسر المحتاجة</p>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="project-page-item reverse">
            <div class="project-page-image">
                <img src="{{asset('web/images/project-cloth.png')}}" alt="مشروع جمع الملابس">
            </div>
            <div class="project-page-text">
                <h2>مشروع جمع الملابس</h2>
                <p>جمع الملابس وتقديمها للاسر المحتاجة</p>
            </div>

        </div>

        <!-- Project 3 -->
        <div class="project-page-item">
            <div class="project-page-image">
                <img src="{{asset('web/images/paper.png')}}" alt="مشروع إعادة تدوير الورق">
            </div>
            <div class="project-page-text">
                <h2>مشروع إعادة تدوير الورق</h2>
                <p>مشروع إعادة تدوير الورق</p>
            </div>
        </div>
    </div>
</div>



@endsection
