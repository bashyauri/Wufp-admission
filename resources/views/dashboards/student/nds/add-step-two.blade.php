@extends('user_type.auth', ['parentFolder' => 'nds', 'childFolder' =>''])

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
                <button class="multisteps-form__progress-btn" type="button" title="Socials">Schools Attended</button>
                <button class="multisteps-form__progress-btn" type="button" title="Profile">SSCE Details</button>
                   <button class="multisteps-form__progress-btn" type="button" title="Profile">SSCE Grades</button>
                      <button class="multisteps-form__progress-btn" type="button" title="Profile">Jamb Details</button>
              </div>
            </div>
          </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{route('nds.validate.step.two')}}" enctype="multipart/form-data">
              @csrf
              <!--single form panel-->
              <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Address</h5>
                <div class="multisteps-form__content">
                    <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label>Nationality</label>
                            <select class="multisteps-form__select form-control" name="nationality">
                                @if (auth()->user()->nationality)
                                <option value="{{auth()->user()->nationality}}">{{auth()->user()->nationality}}</option>
                                   @endif
                                <option value="">...</option>
                                <option value="Nigerian">Nigerian</option>
                                <option value="Non Nigerian">Non Nigerian</option>
                            </select>
                            @error('nationality')
                                <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                            <label>State</label>

                            <select class="multisteps-form__select form-control" name="state" id = "state">
                                @if (auth()->user()->state_id)
                            <option value="{{ $studentState->id}}">{{$studentState->name}}</option>
                                @endif
                                <option value="">-- Select State--</option>
                                @foreach ($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                            @error('state')
                                <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                            <label>LGA</label>
                            <select class="multisteps-form__select form-control" name="lga" id = "lga">
                                @if (auth()->user()->lga_id)
                                <option value="{{ $studentLga->id}}">{{$studentLga->name}}</option>
                                    @endif

                            </select>
                            @error('lga')
                                <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>
                  <div class="row mt-3">
                    <div class="col">
                        <label>Correspondent Address</label>
                        <input class="multisteps-form__input form-control" value="{{ auth()->user()->cor_address ? auth()->user()->cor_address : old('cor_address') ?? ''}}" ?? '' type="text" name="cor_address" placeholder="eg. Street 111" />
                        @error('cor_address')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>

                  </div>
                  <div class="row mt-3">
                    <div class="col-6 col-sm-6 mt-3 mt-sm-0">
                        <label>Home Address</label>
                        <input class="multisteps-form__input form-control" value="{{ auth()->user()->home_address ? auth()->user()->home_address : old('home_address') ?? ''}}" ?? '' type="text" name="home_address" placeholder="eg. Yauri" />
                        @error('home_address')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-6 col-sm-6 mt-3 mt-sm-0">
                        <label>Home Town</label>
                        <input class="multisteps-form__input form-control" value="{{ auth()->user()->home_town ? auth()->user()->home_town : old('home_town') ?? ''}}" ?? '' type="text" name="home_town" placeholder="eg. Street 221" />
                        @error('home_town')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-6 col-sm-6 mt-3 mt-sm-0">
                        <label>Next of kin Address</label>
                        <input class="multisteps-form__input form-control" value="{{ auth()->user()->kin_address ? auth()->user()->kin_address : old('kin_address') ?? ''}}" ?? '' type="text" name="kin_address" placeholder="eg. Street 221" />
                        @error('kin_address')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-6 col-sm-6 mt-3 mt-sm-0">
                        <label>Sponsor</label>
                        <input class="multisteps-form__input form-control" value="{{ auth()->user()->sponsor ? auth()->user()->sponsor : old('sponsor') ?? ''}}" ?? '' type="text" name="sponsor" placeholder="eg. Street 221" />
                        @error('sponsor')
                            <p class="text-danger text-xs mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>


                  <div class="button-row d-flex mt-4">
                    <a href="index" class="btn bg-gradient-light mb-0 js-btn-prev">Prev</a>
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#state').change(function() {
        var stateId = $(this).val();

        $.get('get-lgas/' + stateId, function(data) {
            $('#lga').empty();
            $.each(data, function(index, lgas) {

                $('#lga').append('<option value="' + lgas.id + '">' + lgas.name + '</option>');
            });
        });
    });
});
  </script>

  @endpush
