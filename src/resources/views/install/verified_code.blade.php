<!DOCTYPE html>
<html lang="">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="{{asset('backEnd/')}}/img/favicon.png" type="image/png"/>
    <title>School Management System</title>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/jquery-ui.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/jquery.data-tables.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/themify-icons.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/flaticon.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/nice-select.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/magnific-popup.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/fastselect.min.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/software.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/toastr.min.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/fullcalendar.print.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/js/select2/select2.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/style.css"/>
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/infix.css"/>
    <style>
        h2,h5{color: whitesmoke}
        .card-body {
            padding: 5.25rem;
        }

        .single-report-admit .card-header {
            background-position: right;
            margin-top: -5px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 20px;
        }

    </style>
</head>


<body class="admin">
<div class="container">
    <div class="col-md-6 offset-3  mt-40">


        <div class="card">
            <div class="single-report-admit">
                <div class="card-header">
                    <h2 class="text-center text-uppercase">VERIFICATION</h2>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('message-danger'))
                    <p class="alert alert-danger">{{ Session::get('message-danger') }}</p>
                @endif



               <form method="post" action="{{url('verified-code')}}">
                   {{csrf_field()}}
                   <div class="form-group">
                       <label for="user">Envato Username :</label>
                       <input type="text" class="form-control" name="envatouser" value="">
                   </div>
                   <div class="form-group">
                       <label for="purchasecode">Envato Purchase Code:</label>
                       <input type="text" class="form-control" name="purchasecode" value="">
                   </div>
                   <div class="form-group">
                       <label for="domain">Installation Domain:</label>
                       <input type="text" class="form-control" name="installationdomain" value="">
                   </div>
                   <input type="submit" value="Next" class="offset-3 col-sm-6 primary-btn fix-gr-bg" style="background-color: rebeccapurple;color: whitesmoke">
               </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>
