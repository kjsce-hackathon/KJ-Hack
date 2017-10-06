<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Preference;

class PreferenceController extends Controller
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
        return view('user_pref');
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
        // $user = Auth::user();
        // $id = $user->id;

        // $preference = new Preference;
        // $preference->uid = $id;
        // $preference->Family = $request->preference1;
        // $preference->password = bcrypt($request->password) ;

        $json_encode_pref1 = null;
        $json_encode_pref2 = null;

            if(isset($request->preference1)) {
                $family = array('NA' => $request->NA,
                'ADV' => $request->ADV,
                'EDU' => $request->EDU,
                'RP' => $request->RP,
                'HP' => $request->HP,
                'S' => $request->S,
                'ENT' => $request->ENT,
                'F' => $request->F,
                'NL' => $request->NL,
                'SS' => $request->SS);

                $json_encode_pref1 = json_encode($family);
            }
            if(isset($request->preference2)){
                $friends = array('NA' => $request->NA_,
                'ADV' => $request->ADV_,
                'EDU' => $request->EDU_,
                'RP' => $request->RP_,
                'HP' => $request->HP_,
                'S' => $request->S_,
                'ENT' => $request->ENT_,
                'F' => $request->F_,
                'NL' => $request->NL_,
                'SS' => $request->SS_);
                $json_encode_pref2 = json_encode($friends);
            }

        $user = Auth::user();
        $id = $user->id;

        $preference = new Preference;
        $preference->uid = $id;
        $preference->Family = $json_encode_pref1;
        $preference->friends = $json_encode_pref2 ;

            
        $preference->save();

        // return 'sucesss';  
        return redirect('/pref-profile')->with('status', 'Preferences sucesssfully updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
