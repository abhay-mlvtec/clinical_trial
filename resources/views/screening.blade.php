
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Software-Screening Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Enter your details to book appoimtment</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">New User</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Fill this Screening Form</h3>
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                <form class ="" method="post" action="{{ route('screening.store') }}">
                                    <!-- CROSS Site Request Forgery Protection -->
                                    @csrf
                                    <div class="row register-form">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <!--<input type="text" class="form-control" placeholder="First Name *" value="" />-->
                                            <label class="control-label" for="first_name">First Name</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="dob">Date of Birth</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="frequency">Frequency</label>
                                        </div>
                                        <div class="form-group divDailyFrequency" style="display: none;">
                                            <label class="control-label" for="daily_frequency">Daily Frequency</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control {{ $errors->has('first_name') ? 'error' : '' }}" placeholder="Your First Name *" value="" required/>
                                             <!-- Error -->
                                             @if ($errors->has('first_name'))
                                            <div class="error">
                                                {{ $errors->first('first_name') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="date" min="1900-01-01" max="{{ date('Y-m-d')}}" name="dob" id="dob" class="form-control {{ $errors->has('dob') ? 'error' : '' }}" placeholder="Enter Date of Birth *" value="" required/>
                                             <!-- Error -->
                                             @if ($errors->has('dob'))
                                            <div class="error">
                                                {{ $errors->first('dob') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <select name="frequency" id="frequency" class="form-control {{ $errors->has('frequency') ? 'error' : '' }}" required>
                                                <option class="hidden"  selected disabled>Please select how often you experience Migraine</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Daily">Daily</option>
                                            </select>
                                             <!-- Error -->
                                             @if ($errors->has('frequency'))
                                            <div class="error">
                                                {{ $errors->first('frequency') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group divDailyFrequency" style="display: none;"> 
                                        <select name="daily_frequency" id="daily_frequency" class="form-control {{ $errors->has('daily_frequency') ? 'error' : '' }}" required>
                                                <option class="hidden"  selected disabled>Please select daily frequency of Migraine</option>
                                                <option value="1-2">1-2</option>
                                                <option value="3-4">3-4</option>
                                                <option value="5+">5+</option>
                                            </select>
                                        </div>
                                         <!-- Error -->
                                         @if ($errors->has('daily_frequency'))
                                            <div class="error">
                                                {{ $errors->first('daily_frequency') }}
                                            </div>
                                            @endif
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
</body>
<script src="{{ asset('js/script.js')}}"></script>    
</html>