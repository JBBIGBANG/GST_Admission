<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Login Form</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

        <ul class="navbar-nav">
            <li> <a class="nav-link" href="">Home </a> </li>




            <li><a class="nav-link" href="">Apply Instruction </a></li>
            <li><a class="nav-link" href="">Eligible List</a></li>
            <li><a class="nav-link" href="">Admit Card</a></li>

            <li class="nav-item ">
                <a class="nav-link" href="signup.html">Apply Now </a>
            </li>






        </ul>
    </nav>


    <div class="container">

        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title" style="margin-left: 200px">Sign Up</div>

                </div>
                <div class="panel-body">



                    <form class="form-horizontal" method="post" action="login">
                        @csrf


                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> GST Roll<span
                                    class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" name="gstroll" placeholder="GSTRoll" style="margin-bottom: 10px"
                                    type="text" required />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> GST Unit<span
                                    class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select name="gstunit" class="input-md emailinput form-control" required>
                                    <option value="">Select your Unit</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>

                            </div>
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">HSC Roll<span
                                    class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_password1"
                                    name="hscroll" placeholder="HscRoll" style="margin-bottom: 10px" type="text"
                                    required />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Passing Year<span
                                    class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select name="passingyear" class="input-md emailinput form-control" required>
                                    <option value="">Select your Passing year</option>
                                    <option>2104</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>

                                </select>
                            </div>
                        </div>

                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Board <span
                                    class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select name="board" class="input-md emailinput form-control" required>
                                    <option value="">Select your Board</option>
                                    <option>Jessore</option>
                                    <option>Dhaka</option>
                                    <option>Barisal</option>
                                    <option>Chittagong</option>
                                    <option>Rangpur</option>

                                </select>
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> SSC Roll<span
                                    class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" name="sscroll" placeholder="Choose your username"
                                    style="margin-bottom: 10px" type="text" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info"
                                    id="submit-id-signup" />

                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>

    </div>
    <script>
        $(document).ready(function() {

            var enrollType;
            //  $("#div_id_As").hide();
            $("input[name='As']").change(function() {
                memberType = $("input[name='select']:checked").val();
                providerType = $("input[name='As']:checked").val();
                toggleIndividInfo();
            });

            $("input[name='select']").change(function() {
                memberType = $("input[name='select']:checked").val();
                toggleIndividInfo();
                toggleLearnerTrainer();
            });

            function toggleLearnerTrainer() {

                if (memberType == 'P' || enrollType == 'company') {
                    $("#cityField").hide();
                    $("#providerType").show();
                    $(".provider").show();
                    $(".locationField").show();
                    if (enrollType == 'INSTITUTE') {
                        $(".individ").hide();
                    }

                } else {
                    $("#providerType").hide();
                    $(".provider").hide();
                    $('#name').show();
                    $("#cityField").hide();
                    $(".locationField").show();
                    $("#instituteName").hide();
                    $("#cityField").show();

                }
            }

            function toggleIndividInfo() {

                if (((typeof memberType !== 'undefined' && memberType == 'TRAINER') || enrollType == 'INSTITUTE') &&
                    providerType == 'INDIVIDUAL') {
                    $("#instituteName").hide();
                    $(".individ").show();
                    $('#name').show();
                } else if ((typeof memberType !== 'undefined' && memberType == 'TRAINER') || enrollType ==
                    'INSTITUTE') {
                    $('#name').hide();
                    $("#instituteName").show();
                    $(".individ").hide();
                }
            }

        });
    </script>
</body>

</html>
