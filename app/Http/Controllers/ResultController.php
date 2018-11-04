<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
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

         $ave   = $request->input('ave');
         $tpa   = $request->input('ave');
         $bats  = $request->input('bats');
         $hits  = $request->input('hits');
         $hr    = $request->input('hr');
         $rbi   = $request->input('rbi');
         $score = $request->input('score');
         $steal = $request->input('steal');
         $basep = $request->input('basep');

         $m_aves = array(0.301);
         $m_tpabs = array(3627);

         $m_aves_index = 0;
         $m_aves_value = 1.2;
         foreach ($m_aves as $k=>$v) {
           $diff = abs($v - $ave);
           if($diff < $m_aves_value){
               $m_aves_value = $diff;
               $m_aves_index = $k;
           }
         }

         $res = $m_aves_index + 1;
         $type = $res."番バッタータイプです";

         return view('results', [
                                    'type' => $type
         ]);
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
