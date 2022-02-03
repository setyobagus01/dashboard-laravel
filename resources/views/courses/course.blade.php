@extends('layouts.app')

@section('content')
    <div class="row-fluid d-flex flex-row">
        <div class="col w-20 d-flex justify-content-center position fixed vh-100 bg-white">
            <!--Sidebar content-->
            <livewire:sidenav>
    
        </div>

        <div class="col-10">

            @if($course)
            @include('livewire.course-detail', $course)

            @else

            <livewire:courses>
            @endif
            
           
        </div>
    </div>
@endsection