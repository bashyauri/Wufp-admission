@extends('user_type.auth', ['parentFolder' => 'nds', 'childFolder' => ''])

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
                <button class="multisteps-form__progress-btn js-active" type="button" title="Address">Address</button>
                <button class="multisteps-form__progress-btn js-active" type="button" title="Socials">Schools Attended</button>
                <button class="multisteps-form__progress-btn js-active" type="button" title="Profile">SSCE Details</button>
                   <button class="multisteps-form__progress-btn" type="button" title="Profile">SSCE Grades</button>
                      <button class="multisteps-form__progress-btn" type="button" title="Profile">Jamb Details</button>
              </div>
            </div>
          </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{route('nds.validate.step.four')}}" enctype="multipart/form-data">
              @csrf

              <!--single form panel-->
              <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder">SSCE</h5>
                <div class="multisteps-form__content mt-3">

                  <div class="row mt-3">
                    @if($errors->any())
                    <div class="m-3  alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">
                        {{$errors->first()}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text text-white">
                        {{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Certificate</label>
                        <select class="multisteps-form__input form-control" name="ssce_certificate1" id="ssce_certificate1">
                            @if (auth()->user()->examDetail->ssce_certificate1)
                            <option value="{{auth()->user()->examDetail->ssce_certificate1}}">{{auth()->user()->examDetail->ssce_certificate1}}</option>
                            @endif
                            <option value="">--select---</option>
                          <option value="Waec">Waec</option>
                          <option value="Neco">Neco</option>
                          <option value="Gce">Gce</option>
                          <option value="Naptep">Naptep</option>
                          <option value="Others">Others</option>
                      </select>
                        @error('ssce_certificate1')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 col-sm-5 mt-3 mt-sm-0">
                        <label>Exam Number</label>
                        <input class="multisteps-form__input form-control"
                        value="{{ old('exam_number1', auth()->user()->examDetail->exam_number1 ?? '') }}"
                        type="text" id="exam_number1" name="exam_number1"
                        />
                        @error('exam_number1')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-3 col-sm-3 mt-3 mt-sm-0">
                        <label>Year obtained</label>
                        <input class="multisteps-form__input form-control"
                        value="{{ old('exam_year1', auth()->user()->examDetail->exam_year1 ?? '') }}"
                        type="text" id="exam_year1" name="exam_year1"
                        />

                        @error('exam_year1')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div id="inputField" style="display:none;">
                  <div class="row mt-3">
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0" id="myInput">
                        <label>Certificate</label>
                        <select class="multisteps-form__input form-control" name="ssce_certificate2" id="ssce_certificate2">
                            @if (auth()->user()->examDetail->ssce_certificate2)
                            <option value="{{auth()->user()->examDetail->ssce_certificate2}}">{{auth()->user()->examDetail->ssce_certificate2}}</option>
                            @endif
                            <option value="">--select---</option>
                          <option value="Waec">Waec</option>
                          <option value="Neco">Neco</option>
                          <option value="Gce">Gce</option>
                          <option value="Naptep">Naptep</option>
                          <option value="Others">Others</option>
                      </select>
                        @error('ssce_certificate2')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 col-sm-5 mt-3 mt-sm-0">
                        <label>Exam Number</label>

                        <input class="multisteps-form__input form-control"
                        value="{{ old('exam_number2', auth()->user()->examDetail->exam_number2 ?? '') }}"
                        type="text" id="exam_number2" name="exam_number2"
                        />
                        @error('exam_number2')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-3 col-sm-3 mt-3 mt-sm-0">
                        <label>Year obtained</label>
                        <input class="multisteps-form__input form-control"
                        value="{{ old('exam_year2', auth()->user()->examDetail->exam_year2 ?? '') }}"
                        type="text" id="exam_year2" name="exam_year2"
                        />
                        @error('exam_year2')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  </div>
                  <div class="button-row d-flex mt-4">

                    <button class="btn bg-gradient-success ms-auto mb-0" type = "button" id="addButton">Add another</button>
                  </div>

                  <div class="button-row d-flex mt-4">
                    <a href="{{ route('users.create.step.three') }}" class="btn bg-gradient-light mb-0 js-btn-prev">Prev</a>
                    <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">Next</button>
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
  <script>
   $(document).ready(function() {
  $('#addButton').click(function() {
    event.preventDefault();
    $('#inputField').toggle();
    var buttonText = $(this).text();
    if (buttonText === 'Add another') {
      $(this).text('Hide Field');
    } else {
      $(this).text('Toggle Field');
    }
  });
});


    </script>

  @endpush
