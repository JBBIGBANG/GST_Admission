<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Login Form</title>
</head>

<body>


    <div class="container">

        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink"
                            href="/accounts/login/">Sign In</a></div>
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
