

<section class="policies">
    <h1>محاضر الاجتماعات</h1>
    <br><br>
    <div class="policy-grid">
        @foreach ($meetings as $meeting)


        <div class="policy-item">
            <p> {{$meeting->file}} </p>
            <a href="{{route('meeting_show',$meeting->id)}}"><button class="download-btn">تحميل</button></a>

        </div>

        @endforeach

    </div>
    </section>
