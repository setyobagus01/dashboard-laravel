<div class="d-flex flex-column container-fluid bg-white p-5 bg-light h-100">
    <div class="d-flex justify-content-between bg-light w-100 p-5">
        <span class="fs-2">{{$course->title}}</span>
        <button class="btn btn-danger">Start Course</button>
    </div>
    <button type="button" class="btn btn-outline-danger align-self-lg-end mt-5" data-bs-toggle="collapse" data-bs-target="#collapseExample, #collapseExample1">Expand All</button>
    <div class="d-flex flex-column p-5">

        <div class="course-item mb-2">
            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <i class="bi bi-caret-right"></i>Getting Started
            </a>

            <div class="collapse" id="collapseExample">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Overview and logistics</li>
                        <li class="list-group-item">Using the edx platform</li>
                        <li class="list-group-item">Choose your calculus adventure</li>
                        <li class="list-group-item">Syllabus and schedule</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="course-item mb-2">
            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                aria-expanded="false" aria-controls="collapseExample1">
                <i class="bi bi-caret-right"></i>Unit 0: Limits
            </a>

            <div class="collapse" id="collapseExample1">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Introduction to limits</li>
                        <li class="list-group-item">Continuity</li>
                        <li class="list-group-item">Limits of quotient</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>