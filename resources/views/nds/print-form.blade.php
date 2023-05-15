<!DOCTYPE html>
<html lang="en">

<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
<link  href="assets/css/form-wizard.css" rel="stylesheet" />
<style type="text/css">
    body {
        /*padding: 2% 1% 2% 1%;
  color: #111111;
    background-image:url(image/bg2.jpg);
    background-repeat:repeat;
         width: 210mm;
         height: 297mm;*/
        margin-left: auto;
        margin-right: auto;
        padding: 0px;;
        color: #111111;
        background-image: url(image/bg2.jpg);
        background-repeat: repeat;
    }

</style>
</head>
<body>
    <div class="main"
      >

                 <div class="top-container container-fluid border-bottom border-dark row">
            <div class="log0-container col-2 border-right border-dark text-center mb-3 mt-3">
                    {{-- <img src="" alt="logo-image"  height = "100px"/> --}}
            </div>

            <div class="top-container-title col-8 text-center">
                <h5 class="mb-4 font-weight-bolder" >WAZIRI UMARU FEDERAL POLYTECHNIC, BIRNIN KEBBI</h5>
                <h5 class="mb-4 font-weight-bold">ADMISSION SCREENING FORM</h5>
                <h6 class = "font-weight-bold">{{config('services.school.ACADEMIC_SESSION')}} ACADEMIC SESSION </h6>
            </div>

            <div class="log0-container col-2 border-left border-dark text-center mb-3 p-3">

                    {{-- {!! QrCode::size(100)->generate($fullName.' Remita:'.$rrr) !!} --}}

            </div>
        </div>

        <div class="row" style="margin:0% 3% 0% 3%; width:95%">
            <div class="span12">
                <div class="row">
                    <div class="span6" style="">
                        <table class="table table-condensed">
                            <tr>
                                <td>
                                    <p class="h6">
                                        If your application is successful you will be <br>invited to present the
                                        original copies of all your credentials for screening on a specified date:
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                    <h2 style="color:red;">Note!!!</h2>
                                    Any discrepancy between your online form and the original credentials will
                                    disqualify you. THANKS!!!.
                                    </p>
                                </td>
                            </tr>

                        </table>

                    </div>
                    <div class="span12" style="">

                        <table width="504" class="table table-condensed">
                            <tbody>
                                <tr>
                                    <th>Application Number</th>
                                    <td rowspan="4"> <img src="{{ URL::asset('assets/img/users/'.auth()->user()->file) }}" height = "100px" class="avatar-xxl" id="imgDisplay" alt="Profile Photo"></td>
                                </tr>
                                <tr>
                                    <td><Strong></Strong></td>
                                </tr>
                                <tr>
                                    <th>Remita Number</th>
                                </tr>
                                <tr>
                                    <td><Strong></Strong></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row-fluid" style="padding-right:4px">
                    <div  >
                        <table class="table table-condensed">
                            <h4><Strong>SECTION A: PERSONAL DETAILS</Strong></h4>
                            <tbody>
                                <tr>
                                    <th >Name in Full: </th>
                                    <td style="width:15%;">{{auth()->user()->last_name
                                    .' '.auth()->user()->first_name.' '.auth()->user()->middle_name}}</td>
                                    <th style="width:20%;">Date of Birth:</th>
                                    <td>{{ auth()->user()->birthday }}</td>
                                    <th style="width:20%;">Gender:</th>
                                    <td>{{ auth()->user()->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Home Town:</th>
                                    <td>{{ auth()->user()->home_town }}</td>
                                    <th>L/Govt. Area:</th>



                                    {{-- <td>{{ $lga }}</td> --}}
                                    <th >State of Origin:</th>
                                    {{-- <td>{{ $state }}</td> --}}
                                </tr>
                                <tr>
                                    <th>Nationality:</th>
                                    <td>{{ auth()->user()->nationality }}</td>
                                    <th>Marital Status:</th>
                                    <td>{{ auth()->user()->marital_status }}</td>
                                    <th>Phone Number:</th>
                                    <td>{{ auth()->user()->phone_no }}</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Permanent Home Address:</th>
                                    <td colspan="4">{{ auth()->user()->home_address }}</td>

                                </tr>
                                <tr>
                                    <th colspan="2">Correspondence Home Address:</th>
                                    <td colspan="4">{{ auth()->user()->cor_address }}</td>
                                </tr>

                                <tr>
                                    <th>Sponsor:</th>
                                    <td>{{ auth()->user()->sponsor }}</td>
                                    <th>Next of Kin Name:</th>
                                    <td>{{ auth()->user()->kin_name }}</td>
                                    <th>Phone NO. of Next of Kin:</th>
                                    <td>{{ auth()->user()->kin_gsm }}</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Next of Kin Address:</th>
                                    <td colspan="4">{{ auth()->user()->kin_address }}</td>

                                </tr>
                                <tr>
                                    <th colspan="2" style="color:red;">PROGRAMME APPLIED FOR:</th>


                                    <td colspan="4" style="color:red;">{{ auth()->user()->program->name }}</td>
                                </tr>
                            </tbody>
                            <table>
                                <hr />
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <table class="table table-condensed">
                            <h4><b>SECTION B: SCHOOLS/COLLEGES ATTENDED</b></h4>
                            <tr>
                                <th rowspan="2">S/N</th>
                                <th rowspan="2">Schools/Colleges Attended</th>
                                <th colspan="2">Date</th>
                            </tr>
                            <tr>
                                <th>Start Date [From]</th>
                                <th>End Date [TO]</th>
                            </tr>




                                <tr>
                                    <td>{{ auth()->user()->attendedSchool->primary_school_name }}</td>
                                    <td>{{ auth()->user()->attendedSchool->secondary_school_name }}</td>
                                    <td>{{ auth()->user()->attendedSchool->primary_year }}</td>
                                    <td>{{ auth()->user()->attendedSchool->secondary_school_year }}</td>
                                </tr>

                        </table>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <table class="table table-condensed">
                            <h4><b>SECTION C: 'O' LEVEL RESULT DETAILS</b></h4>



                            <tr>
                                <th colspan="2">Exam Name</th>
                                <th colspan="2">Exam Number</th>
                                <th colspan="2">Exam Date</th>



                            </tr>
                            <tr>
                                <td colspan="2"> {{auth()->user()->examDetail->ssce_certificate1}}</td>
                                <td colspan="2"> {{auth()->user()->examDetail->exam_number1}}</td>
                                <td colspan="2">{{auth()->user()->examDetail->exam_year1}}</td>

                            </tr>
                            <tr>
                                <td colspan="2"> {{auth()->user()->examDetail->ssce_certificate2}}</td>
                                <td colspan="2"> {{auth()->user()->examDetail->exam_number2}}</td>
                                <td colspan="2">{{auth()->user()->examDetail->exam_year2}}</td>

                            </tr>



                            <tr>
                                <th>S/N</th>
                                <th>Subject</th>
                                <th>Exam</th>
                                <th>Grade</th>
                            </tr>
                            @php
                             $subjectCount = 1;
                            @endphp
                            @foreach (auth()->user()->Examgrades as $subject)
                                <tr>



                                    <td>{{ $subjectCount = $subjectCount + 1 }}</td>
                                    <td>{{$subject->subject }}</td>
                                    <td>{{ $subject->name }}</td>
                                    <td><strong>{{ $subject->grade }}</strong></td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="span6">

                        <table class="table table-condensed">

                            <tr>
                                <td colspan="5">
                                    <h4><b>JAMB RESULTS DETAILS</b></h4>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">JAMB Number</th>
                                <th colspan="1">JAMB Score</th>
                            </tr>

                            <td colspan="2">{{ auth()->user()->jambDetails->jamb_no }}</td>
                            <td colspan="2">{{ auth()->user()->jambDetails->score }}</td>

                            </tr>
                            <tr>
                                <th>S/N</th>
                                <th colspan="3"><h4> Course of Study</h4></th>

                            </tr>
                            <tr>
                                <td>{{ 1 }}</td>
                                <td colspan="3"><h6>{{ auth()->user()->course->name }}</h6></td>

                            </tr>




                        </table>


                    </div>
                </div>

            </div>
        </div>


        <!-- /Content -->
    </div>


    <!-- /container -->

</body>
<script>
    window.print();
</script>
</html>


