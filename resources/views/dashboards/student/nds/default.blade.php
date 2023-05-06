@extends('user_type.auth', ['parentFolder' => 'dashboards', 'childFolder' => 'none'])

@section('content')
  <div class="row">
    <div class="col-lg-7 position-relative z-index-2">
      <div class="card card-plain mb-4">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                <h2 class="font-weight-bolder mb-0">Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <div class="row mt-4">

    <div class="col-lg-10">
        <div class="card mb-4">
            <div class="card-header p-3 pb-0">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6>Remita Details</h6>
                  <p class="text-sm mb-0">
                    Remita no. <b>241342</b> from <b>23.02.2021</b>
                  </p>
                  <p class="text-sm">
                    transaction Code: <b>KF332</b>
                  </p>
                </div>
                <a href="{{route('nds.invoice')}}" class="btn bg-gradient-secondary ms-auto mb-0">Invoice</a>
              </div>
            </div>
            <div class="card-body p-1 pt-0">
              <hr class="horizontal dark mt-0 mb-4">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="d-flex">
                    <div>
                        <img src="{{ URL::asset('assets/img/users/'.auth()->user()->file) }}" class="avatar-xxl" id="imgDisplay" alt="Profile Photo">
                    </div>
                    <div class="m-3">
                      <h6 class="text-lg mb-0">{{auth()->user()->first_name. ' ' . auth()->user()->last_name.' '. auth()->user()->middle_name }}</h6>
                      <p class="text-sm mb-3">{{$programs->name}}</p>
                      <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                    </div>
                  </div>
                </div>
                @can('printAdmissionForm', App\Models\User::class)
                <div class="col-lg-6 col-md-6 col-12 my-auto text-end">
                    <a href="{{route('nds.print.form')}}" class="btn bg-gradient-info mb-0">Print Form</a>
                  </div>
                @endcan
                <div class="col-lg-6 col-md-6 col-12 my-auto text-end">
                  <a href="{{route('nds.validate.step.one')}}" class="btn bg-gradient-info mb-0">Go to profile</a>
                </div>
              </div>
              <hr class="horizontal dark mt-4 mb-4">
              <div class="table-responsive p-0">

                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Department</th>
                                <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7 ps-2">Course</th>
                                <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7 ps-2">Admission Status</th>
                                <th></th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                    <div class="d-flex px-2">

                                        <div class="my-auto">
                                          <h6 class="mb-0 text-xs">{{$studentDepartment->name}}</h6>
                                        </div>
                                      </div>

                                </td>
                                <td>
                                    <p class="text-xs font-weight-normal mb-0">{{$studentCourse->name}}</p>

                                </td>

                                    <td>
                                        <span class="badge badge-dot me-4">
                                          <i class="bg-info"></i>
                                          <span class="text-dark text-xs">Pending</span>
                                        </span>
                                      </td>
                                      <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0">
                                          <span class="material-icons">
                                          Generate Invoice
                                          </span>
                                        </button>
                                      </td>
                                    <tr>

                        </tbody>
                    </table>
            </div>
            </div>
          </div>
    </div>


  </div>
  <div class="d-flex flex-column h-100">
    <h6>Transactions</h6>
  </div>
  <div class="col-lg-10 mb-lg-0 mb-4">

    <div class="card">


        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">RRR</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
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
                @endif
                @if (!empty($studentPayments))
                @foreach ($studentPayments as $payment)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">

                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">{{$payment->transaction_id}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$payment->RRR}}</p>

                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-secondary">{{$payment->status}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-normal">{{$payment->amount}}</span>
                  </td>
                  <td class="align-middle">
                    <a href="{{route('nds.screening.status',['rrr'=>$payment->RRR])}}" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Check Status
                    </a>
                  </td>
                </tr>
                @endforeach
                @else
                <h6 class="mb-0 text-xs">No Record Found</h6>
                @endif

            </tbody>
          </table>
        </div>
      </div>
</div>
  </div>
@endsection

@push('js')
  <script src="{{ URL::asset('assets/js/plugins/chartjs.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/plugins/threejs.js') }}"></script>
@endpush
