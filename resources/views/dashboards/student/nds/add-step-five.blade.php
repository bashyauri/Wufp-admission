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
            <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{route('users.validate.step.five')}}" enctype="multipart/form-data">
              @csrf

              <!--single form panel-->
              <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <div class="multisteps-form__content mt-3">
                    @for ($i = 0; $i < 8; $i++)
                  <div class="row">
                    <div class="col-4 col-sm-40">
                        <label>Exam Details</label>
                        <select class="multisteps-form__input form-control" name="name[]" id="name">
                            @if (isset(auth()->user()->ExamGrades[$i]->name))
                            <option value="{{auth()->user()->ExamGrades[$i]->name}}">{{auth()->user()->ExamGrades[$i]->name}}</option>
                            @endif
                            <option value="">--select---</option>
                          <option>{{ old('name', auth()->user()->examDetail->ssce_certificate1.' '.auth()->user()->examDetail->exam_number1 ?? '') }}</option>
                          <option>{{ old('name', auth()->user()->examDetail->ssce_certificate2.' '.auth()->user()->examDetail->exam_number2 ?? '') }}</option>

                      </select>
                        @error('name')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 col-sm-5">
                        <label>Subject</label>
                        <select class="multisteps-form__input form-control" name="subject[]" id="subject">
                            @if (isset(auth()->user()->ExamGrades[$i]->subject))
                            <option value="{{auth()->user()->ExamGrades[$i]->subject}}">{{auth()->user()->ExamGrades[$i]->subject}}</option>
                            @endif
                            <option value="">--select---</option>
                            @foreach ($subjects as $subject)
                            <option>{{$subject->name}}</option>
                            @endforeach
                      </select>
                        @error('subject')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-3 col-sm-3">
                        <label>Grade</label>
                        <select class="multisteps-form__input form-control" name="grade[]" id="grade">
                            @if (isset(auth()->user()->ExamGrades[$i]->grade))
                            <option value="{{auth()->user()->ExamGrades[$i]->grade}}">{{auth()->user()->ExamGrades[$i]->grade}}</option>
                            @endif
                            <option value="">--select---</option>
                            @foreach ($grades as $grade)
                            <option>{{$grade->name}}</option>
                            @endforeach
                      </select>

                        @error('grade')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  @endfor
                  <div class="button-row d-flex mt-4">
                    <a href="{{ route('users.create.step.four') }}" class="btn bg-gradient-light mb-0 js-btn-prev">Prev</a>
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
