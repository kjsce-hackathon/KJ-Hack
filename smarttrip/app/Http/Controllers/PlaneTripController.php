<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Preference;
use App\Place;
use App\Hotel;

class PlaneTripController extends Controller
{
    public function __construct() {
        $this->middleware('auth'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Plane.index');
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
        $user = Auth::user();
        $id = $user->id;
        

        $preferenceData = null;
        if($request->preference=="family"){
            $prefAll = Preference::all()->where('uid','=',$id);
            $familyPref = null;
            foreach ($prefAll as $pref) {
                $familyPref = $pref->Family;
            }

            $preferenceData = $familyPref;
        }
        else if($request->preference=="friends"){
            $prefAll = Preference::all()->where('uid','=',$id);
            $familyPref = null;
            foreach ($prefAll as $pref) {
                $familyPref = $pref->Friends;
            }

            $preferenceData = $familyPref;
        }

        $p = $preferenceData."";
        $p = str_replace("\"", "\\\"", $p);

        exec("java -cp java/ -jar java/Try.jar ".$p." ".$request->noDays,$result);
        

        $tripdata = str_replace("\\","", $result[0]);
        
        $tripData = json_decode($tripdata);

        $arr = array();
        $hotels = array();

        foreach ($tripData as $key => $temp) {
            if($key!="hotels"){
                    foreach ($temp as  $data) {
                        
                        if($data->type == "place"){
                            
                            $idVal = $data->id;
                            // return $data->id." ".$data->type;
                            $arr[] = Place::all()->where('id','=',$idVal);

                        }
                    }
            }
            else{
                    $hotels = $temp;
                    $h = array();
                    foreach ($hotels as $value) {
                            $h[] = Hotel::all()->where('id','=',$value);                            
                    }      
                    

            }
        }

        // $temp = array();
        // foreach ($arr as $key => $value) {
        //     $temp[$value->id] = $value;
        // }
        // return $temp;
        return view('Plane.edit_plane',compact('preferenceData','tripdata','arr','h'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Plane.edit_plane');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
