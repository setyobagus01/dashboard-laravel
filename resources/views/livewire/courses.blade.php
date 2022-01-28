@foreach ($courses as $course)
<div class="card col-6 col-md-4 p-3 w-50">
    <span class="text-primary font-weight-bold">{{$course->category}}</span>
    <h4>{{$course->title}}</h4>
    <img class="rounded card-img-top w-100" src="{{ asset('/images') }}/{{$course->img_url}}" alt="test" />
    <div class="d-flex justify-content-between mt-2">
        <span>{{$course->currentlesson}} of {{$course->totallesson}} lessons</span>
        <div class="bg-light total-progress">
            <div class="current-progress" style="width: {{($course->currentlesson / $course->totallesson) * 100}}%"></div>
        </div>
    </div>
</div>
@endforeach
