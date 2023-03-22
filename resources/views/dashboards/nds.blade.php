
@extends('user_type.auth', ['parentFolder' => 'dashboards', 'childFolder' => 'none'])

@section('content')

<div class="row">
    <div class="col-12">
      <div class="multisteps-form mb-5">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto my-6">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                <span>User Info</span>
              </button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Adress</button>
              <button class="multisteps-form__progress-btn" type="button" title="Socials">Academic</button>
              <button class="multisteps-form__progress-btn" type="button" title="Profile">Profile</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">

          <div class="col-12 col-lg-8 m-auto">
            <!--single form panel-->
            <div class="card card-body my-3 py-3 d-flex flex-column" id="profile">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-auto col-4">
                        <div class="avatar avatar-xxl position-relative">
                            <div>
                            <label for="file-input" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image"></i>
                                <span class="sr-only">Edit Image</span>
                            </label>
                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <img src="{{ URL::asset('assets/img/users/'.auth()->user()->file) }}" class="avatar-xxl" id="imgDisplay" alt="Profile Photo">
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto col-8 my-auto">
                        <div class="h-100">
                        <h5 class="mb-1 font-weight-bolder">
                          {{auth()->user()->first_name .' ' . auth()->user()->last_name. ' ' . auth()->user()->middle_name}}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                        {{$programs->name}}
                        </p>
                        </div>
                    </div>
                    <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                        <label class="form-check-label mb-0">

                        </label>
                        {{-- <div class="form-check form-switch ms-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked onchange="visible()">
                        </div> --}}
                    </div>
                    </div>
                </div>
            <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{route('users.validate.step.one')}}" enctype="multipart/form-data">
              @csrf


              <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="parsley-form" data-animation="FadeIn">
                <div class="multisteps-form__content">
                  <input class="multisteps-form__input form-control field"  type="file" name="user_img" id="" value="{{ old('user_img') ?? ''}}" ?? '' placeholder="eg. Michael"/>
                  <div class="row mt-3">
                    <div class="col-12 col-sm-6">

                        <label>Department</label>
                        <select class="multisteps-form__input form-control" id="department" name = "department">
                            <option value="">-- Select Department--</option>

                            @foreach ($programs->departments as $department)
                            <option value="{{ $department->id}}">{{$department->name}}</option>


                          @endforeach
                        </select>
                        @error('department')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Course</label>
                        <select class="multisteps-form__input form-control field" id="courses" name="courses">


                        </select>
                        @error('courses')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-sm-6">

                        <label>Phone Number</label>
                        <input class="multisteps-form__input form-control field"  type="text" name="phone_no" id="phone_no" value="{{ auth()->user()->phone_no ? auth()->user()->phone_no : old('phone_no') ?? ''}}" ?? '' placeholder="eg. 08038272560"/>
                        @error('phone_no')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Email</label>
                        <input class="multisteps-form__input form-control" value="{{  auth()->user()->email ? auth()->user()->email : old('email') ?? ''}}" ?? '' type="text" id="email" type="email" name="email" placeholder="eg. basharu@screening.com" />
                        @error('email')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <label>Gender</label>
                        <select class="multisteps-form__input form-control field" name="gender">
                            @if (auth()->user()->gender)
                            <option value="{{auth()->user()->gender}}">{{auth()->user()->gender}}</option>
                            @else
                            <option value="">-- Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            @endif
                        </select>
                        @error('gender')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Marital Status</label>
                        <select class="multisteps-form__input form-control field" name="marital_status">
                            @if (auth()->user()->marital_status)
                            <option value="{{auth()->user()->marital_status}}">{{auth()->user()->marital_status}}</option>
                            @else
                            <option value="">--Marital Status--</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            @endif

                        </select>
                        @error('marital_status')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4 col-4">
                        <label class="form-label mt-3">Birth Date</label>
                        <select class="multisteps-form__input form-control" name="choices-day" id="choices-day">
                            <option value="">Day</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-4">
                        <label class="form-label mt-3">&nbsp;</label>

                        <select class="multisteps-form__input form-control" name="choices-month" id="choices-month">
                            <option value="">Month</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-4">
                        <label class="form-label mt-4">&nbsp;</label>
                        <select class="multisteps-form__input form-control" name="choices-year" id="choices-year">
                            <option value="">Year</option>
                        </select>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <label>Next of Kin</label>
                        <input class="multisteps-form__input form-control"
                         value="{{  auth()->user()->email ? auth()->user()->email : old('next_of_kin') ?? ''}}" ?? '' type="text" name="next_of_kin" placeholder="eg. Umar" />
                        @error('next_of_kin')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Next of Kin Phone</label>
                        <input class="multisteps-form__input form-control field" type="text" value="{{ old('next_of_kin_phone') ?? ''}}" ?? '' id="next_of_kin_phone" name="next_of_kin_phone" placeholder="eg. your Dad"/>
                        @error('next_of_kin_phone')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  {{-- <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <label>Password</label>
                        <input class="multisteps-form__input form-control field password" value="{{ old('password') ?? ''}}" ?? '' type="password" name="password" id="password" placeholder="******"/>
                        @error('password')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Repeat Password</label>
                        <input class="multisteps-form__input form-control field password_confirmation" name="password_confirmation" type="password" placeholder="******" data-parsley-equalto="#password"/>
                        @error('password_confirmation')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div> --}}
                  <div class="button-row d-flex mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0" id="next" type="submit" title="Next">Next</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- <div class="row">
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
</div> --}}
@endsection
@push('js')
    <script src="{{ URL::asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var birthdayArray = <?PHP echo (!empty($birthdayArray) ? json_encode($birthdayArray) : '"0"'); ?>;
    var selectedYear = birthdayArray["year"];
    var selectedMonth = Math.floor(birthdayArray["month"]);
    var selectedDay = birthdayArray["day"];

    if (document.getElementById('choices-gender')) {
      var gender = document.getElementById('choices-gender');
      const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
      var language = document.getElementById('choices-language');
      const example = new Choices(language);
    }
    if (document.getElementById('choices-year')) {
      var year = document.getElementById('choices-year');
      setTimeout(function() {
        const example = new Choices(year);
      }, 1);

      for (y = 1900; y <= 2020; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if(selectedYear > 0)
        {
            if (y == selectedYear) {
          optn.selected = true;
        }
        }
        year.options.add(optn);
      }
    }

    if (document.getElementById('choices-day')) {
      var day = document.getElementById('choices-day');
      setTimeout(function() {
        const example = new Choices(day);
      }, 1);


      for (y = 1; y <= 31; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;
        if(selectedDay > 0){
            if (y == selectedDay) {
            optn.selected = true;
            }
        }
        day.options.add(optn);
      }

    }

    if (document.getElementById('choices-month')) {
      var month = document.getElementById('choices-month');
      setTimeout(function() {
        const example = new Choices(month);
      }, 1);

      var d = new Date();
      var monthArray = new Array();
      monthArray[0] = "January";
      monthArray[1] = "February";
      monthArray[2] = "March";
      monthArray[3] = "April";
      monthArray[4] = "May";
      monthArray[5] = "June";
      monthArray[6] = "July";
      monthArray[7] = "August";
      monthArray[8] = "September";
      monthArray[9] = "October";
      monthArray[10] = "November";
      monthArray[11] = "December";
      for (m = 0; m <= 11; m++) {
        var optn = document.createElement("OPTION");
        optn.text = monthArray[m];
        // server side month start from one
        optn.value = (m + 1);
        if(selectedMonth > 0){
            if (optn.value == selectedMonth) {
            optn.selected = true;
            }
        }
        month.options.add(optn);
      }
    }

    function visible() {
      var elem = document.getElementById('profileVisibility');
      if (elem) {
        if (elem.innerHTML == "Switch to visible") {
          elem.innerHTML = "Switch to invisible"
        } else {
          elem.innerHTML = "Switch to visible"
        }
      }
    }
    </script>
    <script>
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgDisplay').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-input").change(function(){
        readURL(this);
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#alert-success").delay(3000).slideUp(300);

        });
    </script>
@endpush




