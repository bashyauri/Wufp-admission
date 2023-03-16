
@extends('user_type.auth', ['parentFolder' => 'dashboards', 'childFolder' => 'none'])

@section('content')
<div class="row">
    <div class="col-lg-7 position-relative z-index-2">
        <div class="card card-plain mb-4">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <h2 class="font-weight-bolder mb-0">Select Course</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
<div class="row mt-4">
    <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2">
            <div class="card-body p-3">

                <div class="container border-radius-lg">
                    <form action="">

                        <div class="form-group">
                            <label for="departments">Select Department</label>
                            <select class="form-control" id="department">
                                <option value="">-- Select Department--</option>
                                @foreach ($departments as $department)
                                <option value="{{ $department->id}}">{{$department->name}}</option>


                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="courses">Select Course</label>
                            <select class="form-control" id="courses">


                            </select>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"
                                title="Next">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card z-index-2">
            <div class="card-header pb-0">

                <a href="{{route('hnd.invoice')}}" class="btn bg-gradient-secondary ms-auto mb-0">Generate Invoice</a>

            </div>
            <div class="card-body p-3">
                <img src="{{ URL::asset('assets/img/logos/mastercard.png')}}" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
            <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
        </div>
    </div>
</div>
@endsection




