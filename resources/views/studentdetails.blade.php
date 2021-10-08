@include('Layout.navbar')
@section('form')


    <div class="container">

        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Students Details</div>

                </div>
                <div class="panel-body">



                    <form class="form-horizontal" method="POST" action="{{ route('subjectchoice',$data->appid) }}">
                        @csrf


                         <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Name<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->name }}"  style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Father name<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->fname }}"  style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Mother Name<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->mname }}"  style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> DOB<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->dob }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Gender<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->gender }}"  style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">H.S.C Roll<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->hsc_roll }}"  style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> S.S.C Roll<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username"
                                    maxlength="30" value="{{ $data->ssc_roll }}"  style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required" >

                            <label for="id_username" class="control-label col-md-6  requiredField">Marks<span
                                    class="asteriskField"></span> </label>



                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Bangla<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->Bangla }}" style="margin-bottom: 10px" style="border: none"
                                    type="text" readonly  />
                            </div>
                        </div>
                         <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">English<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->English }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Mathematics<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->Math }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Physics<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->Physics }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Chemistry<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->Chemistry }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Biology<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->Biology }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">ICT<span
                                    class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control"
                                value="{{ $data->ICT }}" style="margin-bottom: 10px"
                                    type="text" readonly  />
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Next" class="btn btn-primary btn btn-info"
                                    id="submit-id-signup" />

                            </div>
                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>


@endsection
