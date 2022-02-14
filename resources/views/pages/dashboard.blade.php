@extends("layouts.master") 

@section("title")
:: RUN Result - Dashboard ::
@endsection

@section("content")
    <div id="mytask-layout" class="theme-indigo">
        @include("partials.sidebar")
        <div class="main px-lg-4 px-md-4">
            @include("partials.navbar")   

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                                        <div class="flex-fill ms-4">
                                            <div class="">Approved Courses</div>
                                            <h5 class="mb-0 ">0</h5>
                                        </div>
                                        <a href="task.html" title="view-members" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="bi bi-list-check fs-4"></i></div>
                                        <div class="flex-fill ms-4">
                                            <div class="">Pending Courses</div>
                                            <h5 class="mb-0 ">0</h5>
                                        </div>
                                        <a href="task.html" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="bi bi-clipboard-data fs-4"></i></div>
                                        <div class="flex-fill ms-4">
                                            <div class="">Add Course(s)</div>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addCourse" title="Add course" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-md-12 col-lg-8 col-xl-7 col-xxl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-5 col-lg-6 order-md-2 ">
                                            <div class="text-center p-4">
                                                <img src="assets/images/task-view.svg" alt="..." class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7 col-lg-6 order-md-1 px-4">
                                            <h3 class="fw-bold ">Dylan Hunter</h3>
                                            <p class="line-height-custom">...</p>
                                            <a class="btn bg-secondary text-light btn-lg lift" href="#">My Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-5 col-xxl-5">
                            <div class="alert alert-primary p-3 mb-0 w-100">
                                <h6 class="fw-bold mb-1">Roles</h6>
                                <p class="small mb-4">Check the box</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="lecturer" checked disabled>
                                    <label class="form-check-label" for="lecturer">
                                        Lecturer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="adviser">
                                    <label class="form-check-label" for="adviser">
                                        Level Adviser
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="officer">
                                    <label class="form-check-label" for="officer">
                                        Exam Officer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="hod">
                                    <label class="form-check-label" for="hod">
                                        HOD
                                    </label>
                                </div>
                                <button class="btn btn-primary mt-2">Update Role</button>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>             
            </div>
        </div>
    </div>
    <!-- Plugin Js-->
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="js/template.js"></script>
    <script src="js/page/index.js"></script>
@endsection