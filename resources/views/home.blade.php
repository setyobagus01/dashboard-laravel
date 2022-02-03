@extends('layouts.app')

@section('content')
    <div class="row-fluid d-flex flex-row">
        <div class="col w-20 d-flex justify-content-center position fixed mh-100 bg-white">
            <!--Sidebar content-->
            <livewire:sidenav>

        </div>


        <div class="col-7">
            <div class="bg-light p-5 rounded mt-2">
                <div class="mt-2">
                    <h2 class="font-weight-bold">Course you're taking</h2>
                    <div class="d-flex flex-column">

                        @foreach ($courses as $course)
                        <div class="card p-3">
                            
                            <div class="d-flex">
                                <img class="rounded img-thumbnail w-25" src="{{ url('storage/images/'.$course->img_url) }}" alt="test" />
                                <div class="d-flex flex-column ms-3 w-100">
                                    <span class="font-weight-bold">{{$course->category}}</span>
                                    <h4 class="mb-4"><a class="text-primary text-decoration-none" href="{{ url('/courses', ['id' => $course->id])}}"><strong>{{$course->title}}</strong></a></h4>
                                    <span>Overall Progress: </span>
                                    <div class="d-flex justify-content-between">
                                        <div class="bg-light total-progress w-75">
                                            <div class="current-progress" style="width: {{($course->currentlesson / $course->totallesson) * 100}}%">
                                            </div>

                                        </div>
                                        <span>{{number_format((float)(($course->currentlesson / $course->totallesson) * 100), 2, '.', '');}}%</span>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-2">
                                <span>{{$course->currentlesson}} of {{$course->totallesson}} lessons</span>
                                
                            </div>
                        </div>
                        @endforeach
                        
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col">
                        <h2 class="font-weight-bold">Local Groups Near You</h2>
                        <div class="card rounded">
                            <div class="d-flex flex-column">
                                <span>IDF Design System</span>
                                <h4>Emotion and Experience</h4>
                                <span>3 months ago By Dai Jiang</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-secondary rounded">Join Group</button>
                                <img src="awd" alt="awd">
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <h2 class="font-weight-bold">Latest Articles</h2>
                        <div class="card rounded p-2">
                            <img class="rounded card-img-top w-100" src="{{ asset(" /images/genshin_2.jpg")}}" alt="test" />
                            <div>
                                <span>By Mandy Illesc</span>
                                <h4>Best practice for adding mobile payments to your E-Commerce app</h4>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-3">
            <livewire:sidebar>
        </div>
    </div>
@endsection
