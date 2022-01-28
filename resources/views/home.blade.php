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
                    <div class="row">
                        <livewire:courses>
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
