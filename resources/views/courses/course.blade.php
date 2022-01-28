@extends('layouts.app')

@section('content')
    <div class="row-fluid d-flex flex-row">
        <div class="col w-20 d-flex justify-content-center position fixed vh-100 bg-white">
            <!--Sidebar content-->
            <livewire:sidenav>
    
        </div>

        <div class="col-10">
            <form action="{{ route('courses')}}" class="bg-white p-5 rounded m-5" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                        placeholder="Enter Title">
                </div>
                <div class="form-group mb-2">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Category">
                </div>

                <div class="form-group mb-2">
                    <label for="currentlesson">Current Lesson</label>
                    <input type="number" class="form-control" id="currentlesson" name="currentlesson" placeholder="Current Lesson">
                </div>

                <div class="form-group mb-2">
                    <label for="totallesson">Total Lesson</label>
                    <input type="number" class="form-control" id="totallesson" name="totallesson" placeholder="Total Lesson">
                </div>

                <div class="form-group mb-2">
                    <label for="img_url">Thumbnail course</label>
                    <input type="file" class="form-control-file" id="img_url" name="img_url">
                </div>

                <button type="submit" class="btn btn-primary rounded">Submit</button>
            </form>
        </div>
    </div>
@endsection