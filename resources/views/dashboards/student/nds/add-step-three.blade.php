@extends('user_type.auth', ['parentFolder' => 'nds', 'childFolder' => ''])

@section('content')

<div class="row">
    <div class="col-12">
      <div class="multisteps-form mb-5">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto my-5">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                <span>User Info</span>
              </button>
              <button class="multisteps-form__progress-btn js-active" type="button" title="Address">Address</button>
              <button class="multisteps-form__progress-btn js-active" type="button" title="Socials">Socials</button>
              <button class="multisteps-form__progress-btn" type="button" title="Profile">Profile</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{route('users.validate.step.three')}}" enctype="multipart/form-data">
              @csrf
              <!--single form panel-->
              <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Academic Details</h5>
                <div class="multisteps-form__content">
                  <div class="row mt-3">
                    <div class="col-8 col-sm-6 mt-3 mt-sm-0">
                        <label>Primary School Attended</label>
                        <input class="multisteps-form__input form-control" value="{{ old('primary_school') ?? ''}}" ?? '' type="text" name="primary_school" placeholder="e. Salama model Pri school" />
                        @error('primary_school')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Year</label>
                        <input class="multisteps-form__input form-control" value="{{ old('primary_school_year') ?? ''}}" ?? '' type="text" name="primary_school_year" placeholder="e.g 2016" />
                        @error('primary_school_year')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-8 col-sm-6 mt-3 mt-sm-0">
                        <label>Secondary School Attended</label>
                        <input class="multisteps-form__input form-control" value="{{ old('secondary_school') ?? ''}}" ?? '' type="text" name="secondary_school" placeholder="e. Salama model Pri school" />
                        @error('secondary_school')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Year</label>
                        <input class="multisteps-form__input form-control" value="{{ old('secondary_school_year') ?? ''}}" ?? '' type="text" name="secondary_school_year" placeholder="e.g 2016" />
                        @error('secondary_school_year')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Exam Type</label>
                        <input class="multisteps-form__input form-control" value="{{ old('exam_type') ?? ''}}" ?? '' type="text" name="exam_type" placeholder="e. Salama model Pri school" />
                        @error('exam_type')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Exam Number</label>
                        <input class="multisteps-form__input form-control" value="{{ old('exam_number') ?? ''}}" ?? '' type="text" name="exam_number" placeholder="e.g 2016" />
                        @error('exam_number')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Year</label>
                        <input class="multisteps-form__input form-control" value="{{ old('exam_year') ?? ''}}" ?? '' type="text" name="twitter" placeholder="e.g 2016" />
                        @error('exam_year')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Exam Type(optional)</label>
                        <input class="multisteps-form__input form-control" value="{{ old('exam_type2') ?? ''}}" ?? '' type="text" name="exam_type2" placeholder="e. Salama model Pri school" />
                        @error('exam_type2')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Exam Number</label>
                        <input class="multisteps-form__input form-control" value="{{ old('exam_number2') ?? ''}}" ?? '' type="text" name="exam_number2" placeholder="e.g 2016" />
                        @error('exam_number2')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Year</label>
                        <input class="multisteps-form__input form-control" value="{{ old('twitter') ?? ''}}" ?? '' type="text" name="twitter" placeholder="e.g 2016" />
                        @error('exam_year2')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <a href="{{ route('users.create.step.two') }}" class="btn bg-gradient-light mb-0 js-btn-prev">Prev</a>
                      <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

  @push('js')
    <script src="{{ URL::asset('assets/js/plugins/choices.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script>
    if (document.getElementById('choices-role')) {
      var gender = document.getElementById('choices-role');
      const example = new Choices(gender);
    }
    if (document.getElementById('role_id')) {
      var country = document.getElementById('role_id');
      const example = new Choices(country);
      }

    var upload = document.getElementById('imgDisplay');
    var imgInp = document.getElementById('file-input');
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            upload.src = URL.createObjectURL(file)
        }
    }
  </script>
  @endpush

