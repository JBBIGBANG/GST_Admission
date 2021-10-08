<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public $data;
    public $subject;
    public $listOfSubject;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
    public function checkdata(Request $request)
    {


        // $data = DB::table('studentinfo')->where('name','appid');
        $data = DB::table('studentinfo')->where('appid',$request->input('gstroll'))->first();
        // $variable =
        //$this->setchoice($data);



        //echo $this->listOfSubject;

        if ($data) {
           return view('StudentInformation', compact('data'));
        } else {
           dd("Sorry");
        }

    }

    // public function subjectchoice()
    // {
    //     dd($this->listOfSubject);
    // }

    public function subjectchoice($appid){

        $data = DB::table('studentinfo')->where('appid',$appid)->first();



         $listOfSubject = $this->subList($data);


        return view("subjectchoice",compact('listOfSubject'));

    }


    public function subList($data){

        $subject = array();
         if($data->Chemistry > 10){
          array_push($subject,"Soil & Environmental Science");

         }
         if($data->Biology >10){
            array_push($subject,"Botany");
         }
         if($data->Physics >10 && $data->Chemistry>10){
            array_push($subject,"Costal Department");
         }
         if($data->Chemistry >10 && $data->Biology > 10){
            array_push($subject,"Biochemistry");
         }
         if($data->Math >10){
            array_push($subject,"Mathematics");
         }
         if($data->Chemistry >10 ){
            array_push($subject,"Chemistry");
         }
         if($data->Physics >10 && $data->Math > 10){
            array_push($subject,"Physics");
         }
         if($data->Physics >10 && $data->Math > 10){
            array_push($subject,"CSE");
         }
         if($data->Physics >10 || $data->Math > 10 || $data->Chemistry > 10){
            array_push($subject,"Geology & Mining");
         }

         return $subject;

    }














}
