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
              <button class="multisteps-form__progress-btn js-active" type="button" title="Profile">SSCE</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{route('users.validate.step.four')}}" enctype="multipart/form-data">
              @csrf

              <!--single form panel-->
              <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Grades</h5>
                <div class="multisteps-form__content mt-3">

                  <div class="row mt-3">
                    <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                        <label>Exam Details</label>
                        <select class="multisteps-form__input form-control" name="ssce_certificate1" id="ssce_certificate1">
                            <option value="">--select---</option>
                          <option value="Waec">{{ old('exam_number1', auth()->user()->examDetail->ssce_certificate1.' '.auth()->user()->examDetail->exam_number1 ?? '') }}</option>
                          <option value="Neco">{{ old('exam_number1', auth()->user()->examDetail->ssce_certificate2.' '.auth()->user()->examDetail->exam_number2 ?? '') }}</option>

                      </select>
                        @error('ssce_certificate')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 col-sm-5 mt-3 mt-sm-0">
                        <label>Subject</label>
                        <input class="multisteps-form__input form-control"
                        value="{{ old('exam_number1', auth()->user()->examDetail->exam_number1 ?? '') }}"
                        type="text" id="exam_number1" name="exam_number1"
                        />
                        @error('exam_number1')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-3 col-sm-3 mt-3 mt-sm-0">
                        <label>Grade</label>
                        <input class="multisteps-form__input form-control"
                        value="{{ old('exam_year1', auth()->user()->examDetail->exam_year1 ?? '') }}"
                        type="text" id="exam_year1" name="exam_year1"
                        />

                        @error('exam_year1')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
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

  @endpush
