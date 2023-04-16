@extends('user_type.auth', ['parentFolder' => 'nds', 'childFolder' => 'none'])

@section('content')
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card mb-4">
        <div class="card-header p-3 pb-0">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6>Remita Details</h6>
              <p class="text-sm mb-0">
                Remita no. <b>{{'Wufpbk'}}</b> from <b>23.02.2021</b>
              </p>
              <p class="text-sm">
                Amount: <b>N{{config('services.remita.ADMISSION_FEES')}}</b>
              </p>
            </div>
            <a href="javascript:;" class="btn bg-gradient-secondary ms-auto mb-0">Invoice</a>
          </div>
        </div>
        <div class="card-body p-3 pt-0">
          <hr class="horizontal dark mt-0 mb-4">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="d-flex">
                <div>
                  <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" class="avatar avatar-xxl me-3" alt="product image">
                </div>
                <div>
                  <h6 class="text-lg mb-0 mt-2">NDS Admission Fees</h6>
                  <p class="text-sm mb-3">Order was delivered 2 days ago.</p>
                  <span class="badge badge-sm bg-gradient-success">Delivered</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto text-end">
              <a href="javascript:;" class="btn bg-gradient-info mb-0">Proceed To Remita</a>
              <p class="text-sm mt-2 mb-0">Do you like the product? Leave us a review <a href="javascript:;">here</a>.</p>
            </div>
          </div>
          <hr class="horizontal dark mt-4 mb-4">
          <div class="table-responsive p-0">
            <form action="" method="POST">
                @csrf
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2">

                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Transaction ID:</h6>
                                    </div>
                                </div>
                            </td>
                            <td>


                                <p class="text-sm font-weight-bold mb-0">{{$transactionId}} </p>
                                <input id="transactionId" name="transactionId" value="{{$transactionId}}"
                                    type="hidden" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">

                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Service:</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0"></p>
                                <input name="transactionId" value="" type="hidden" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">

                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Amount:</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">N{{config('services.remita.ADMISSION_FEES')}}</p>
                                <input name="amount" value="{{config('services.remita.ADMISSION_FEES')}}" type="hidden" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">

                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Name:</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">
                                    {{auth()->user()->last_name . ' ' . auth()->user()->first_name . ' ' . auth()->user()->middle_name}}
                                </p>
                                <input id="payerName" name="payerName"
                                    value="{{auth()->user()->last_name . ' ' . auth()->user()->first_name . ' ' . auth()->user()->middle_name}}"
                                    type="hidden" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">

                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Email:</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">{{auth()->user()->email}} </p>
                                <input id="payerEmail" name="payerEmail" value="{{auth()->user()->email}}"
                                    type="hidden" />
                            </td>


                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">

                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Phone:</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">{{auth()->user()->phone_no}}</p>
                                <input name="payerPhone" value="{{auth()->user()->phone_no}}" type="hidden" />
                                <input name="paymenttype" value="RRRGEN" type="hidden" />

                            </td>


                        </tr>
                        <tr>
                            <td>
                                <input class="btn btn-success" type="submit" name="" value="Continue">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
