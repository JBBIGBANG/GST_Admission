<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        real="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Main CSS-->
    <link href="style.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



    <title> Admission System</title>
</head>

<body style='margin:30px'>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

        <ul class="navbar-nav">
            <li> <a class="nav-link" href="">Home </a> </li>




            <li><a class="nav-link" href="">Apply Instruction </a></li>
            <li><a class="nav-link" href="">Eligible List</a></li>
            <li><a class="nav-link" href="">Admit Card</a></li>

            <li class="nav-item ">
                <a class="nav-link" href="signup.html">Apply Now </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="">Login </a>
            </li>




        </ul>
    </nav>


    <div class="file_upload">
        <label class="control-label"> File Uploader</label>
        <input id="input-b5" name="input-b5[]" type="file" multiple>
        <script>
            $(document).ready(function() {
                $("#input-b5").fileinput({
                    showCaption: false,
                    dropZoneEnabled: false
                });
            });
        </script>
    </div>

    <br>
    <br>

    <form class="form-horizontal" method="POST" action="{{ route('subjectchoice', $data->appid) }}">
        @csrf
    <div class="container" style="margin: left 0 ; margin-right: 0; border: 1px solid #111;">

        <section class="testimonial" id="testimonial">

                <div class="personal-info" style="margin: left 0 ; margin-right: 0;" style="text-align:center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 style="text-align:center">Personal Information</h2> <br>

                                <div class="personal-info">
                                    <label for="FirstName" class="col-xs-2"> Name: </label>
                                    <input type="text" value="{{ $data->name }}"
                                        style="border-top: none;border-left:none ;border-right: none;">
                                </div>
                                <div class="personal-info">
                                    <label for="FirstName" class="col-xs-2">Father Name: </label>
                                    <input type="text" value="{{ $data->fname }}"
                                        style="border-top: none;border-left:none ;border-right: none;">
                                </div>
                                <div class="personal-info">
                                    <label for="FirstName" class="col-xs-2">Mother Name: </label>
                                    <input type="text" value="{{ $data->mname }}"
                                        style="border-top: none;border-left:none ;border-right: none;">
                                </div>

                                <div class="personal-info">
                                    <label for="FirstName" class="col-xs-2">Date of Birth: </label>
                                    <input type="text" value="{{ $data->dob }}"
                                        style="border-top: none;border-left:none ;border-right: none;">
                                </div>
                                <div class="personal-info">
                                    <label for="FirstName" class="col-xs-2">Gender: </label>
                                    <input type="text" value="{{ $data->gender }}"
                                        style="border-top: none;border-left:none ;border-right: none;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <br>
        <br>

        <section class="testimonial" id="testimonial">
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Academic Info</h2> <br>

                            <div class="item">
                                <label for="hscroll" class="col-xs-5">HSC Roll:</label>
                                <input type="text" value="{{ $data->hsc_roll }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>

                            <div class="item">
                                <label for="hscboard" class="col-xs-5">HSC Gpa: </label>
                                <input type="text" value="{{ $data->hsc_gpa }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>
                            <div class="item">
                                <label for="hsc passing year" class="col-xs-5">HSC Passing Year: </label>
                                <input type="text" value="{{ $data->hsc_pass_year }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>

                            <div class="item">
                                <label for="sscroll" class="col-xs-5">SSC Roll: </label>
                                <input type="text" value="{{ $data->ssc_roll }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>
                            <div class="item">
                                <label for="sscreg" class="col-xs-5">SSC Gpa: </label>
                                <input type="text" value="{{ $data->ssc_gpa }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>

                            <div class="item">
                                <label for="ssc passing year" class="col-xs-5">SSC Passing Year: </label>
                                <input type="text" value="{{ $data->ssc_pass_year }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>GST Result Info</h2> <br>
                            <div class="item">
                                <label for="bangla" class="col-xs-3">Bangla :</label>
                                <input type="text" value="{{ $data->Bangla }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>
                            <div class="item">
                                <label for="english" class="col-xs-3">English :</label>
                                <input type="text" value="{{ $data->English }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>
                            <div class="item">
                                <label for="physics" class="col-xs-3">Physics :</label>
                                <input type="text" value="{{ $data->Physics }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>

                            <div class="item">
                                <label for="chemistry" class="col-xs-3">Chemistry</label>
                                <input type="text" value="{{ $data->Chemistry }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>

                            <div class="item">
                                <label for="math" class="col-xs-3">Math :</label>
                                <input type="text" value="{{ $data->Math }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>

                            <div class="item">
                                <label for="biology" class="col-xs-3">Biology :</label>
                                <input type="text" value="{{ $data->Biology }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>
                            <div class="item">
                                <label for="ict" class="col-xs-3">ICT :</label>
                                <input type="text" value="{{ $data->ICT }}"
                                    style="border-top: none;border-left:none ;border-right: none;">
                            </div>




                        </div>
                    </div>
                </div>
            </div>

        </section>
        <br>

        <div class="heading">
            <button class="btn round" type="submit">Next</button>
        </div>
    </div>
    </form>

    </div>
    <br> <br>
    <footer class="copyright">
        <p>&copy; 2021, University Of Barishal, Allrights reserved</p>
    </footer>



</body>

</html>











</body>

</html>
