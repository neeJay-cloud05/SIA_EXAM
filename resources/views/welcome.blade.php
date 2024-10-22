<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeryll resume</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">

        <div class="resume">


            <div class="header">

                <div class="img">
                    <img src="{{ asset('img/unnamed.jpg') }}" alt="error">
                </div>
                <div class="detail">
                    @if(isset($infoRecord))
                    <div class="name">
                        <h1>{{ $infoRecord->name }}</h1>
                    </div>
                    @endif
                    <div class="more_details">
                        <span>
                        {{ $infoRecord->address }}
                        </span>
                        <br>
                        <span>
                        {{ $infoRecord->phone_number }}
                        </span>
                        <br>
                        <span>
                        {{ $infoRecord->email_address }}
                        </span>
                    </div>
                </div>

            </div>

            <hr>



            <div class="content">

                <div class="obj">
                    <div class="obj_header">
                        <h3>Objective:</h3>
                    </div>
                    <div class="obg_content">
                        <p>
                        {{ $infoRecord->obj_desc }}

                        </p>
                    </div>
                </div>

                <div class="space"></div>

                <div class="personal_info">
                    <div class="obj_personal_info_header">
                        <h3>Personal Information:</h3>
                    </div>
                    <div class="personal_info_content">

                        <div class="row">
                            <div class="title">
                                <label for="">Date of Birth: </label>
                                <div class="title_detail">
                                    <span>{{ $get -> date_of_birth}}</span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="title">
                                <label for="">Place of Birth: </label>
                                <div class="title_detail">
                                    <span>{{ $get -> place_of_birth}}</span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="title">
                                <label for="">Age: </label>
                                <div class="title_detail">
                                    <span>{{ $get -> age}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="title">
                                <label for="">Religion: </label>

                                <div class="title_detail">
                                    <span>{{ $get -> religion}}</span>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="title">
                                <label for="">Citizenship: </label>

                                <div class="title_detail">
                                    <span>{{ $get -> cit}}</span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="title">
                                <label for="">Civil Status: </label>

                                <div class="title_detail">
                                    <span>{{ $get -> relationship}}</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="space"></div>

                <div class="personal_info">
                    <div class="obj_personal_info_header">
                        <h3>Educational Background:</h3>
                    </div>
                    <div class="personal_info_content">

                        <div class="row">
                            <div class="title">
                                <label for="">College: </label>
                                <div class="title_detail">
                                    <span>{{ $get_ -> college_ay}}</span>
                                    <br><br>
                                    <span>{{ $get_ -> c_course}}</span>
                                    <br><br>
                                    <span>{{ $get_ -> college_where}}</span>
                                    
                                    <br><br>
                                    <span>{{ $get_ -> c_at}}</span>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="title">
                                <label for="">Secondary Level: </label>
                                <div class="title_detail">
                                    <span>{{ $get_ -> secondary_sy}}</span>
                                    <br><br>
                                    <span>{{ $get_ -> s_course}}</span>
                                    <br><br>
                                    <span>{{ $get_ -> secondary_where}}</span>

                                    <br><br>
                                    <span>{{ $get_ -> s_at}}</span>
                                    <br><br>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="title">
                                <label for="">Primary Level: </label>
                                <div class="title_detail">
                                    <span>{{ $get_ -> primary_sy}}</span>
                                    <br><br>
                                    <span>{{ $get_ -> primary_where}}</span>
                                    <br><br>
                                    <span>{{ $get_ -> p_at}}</span>
                                    <br><br>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="space"></div>


            </div>



        </div>

    </div>
</body>

</html>