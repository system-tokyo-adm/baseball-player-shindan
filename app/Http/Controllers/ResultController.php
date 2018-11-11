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


    public function fix_top_number($arr,$value){

        $m_aves_index = 0;
        $m_aves_value = 100000;

        foreach ($arr as $k=>$v) {
          $diff = abs($v - $value);
          if($diff < $m_aves_value){
              $m_aves_value = $diff;
              $m_aves_index = $k;
          }
        }

        return $m_aves_index;

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
        $tpa   = $request->input('tpa');
        $bats  = $request->input('bats');
        $hits  = $request->input('hits');
        $hr    = $request->input('hr');
        $rbi   = $request->input('rbi');
        $score = $request->input('score');
        $steal = $request->input('steal');
        $basep = $request->input('basep');

        // 日本代表 WBC キューバ戦 http://www.japan-baseball.jp/jp/team/topteam/score/wbc/game2017032211/table.html
        // 1番 山田 哲人 http://npb.jp/bis/players/91895133.html
        // 2番 菊池 涼介 http://npb.jp/bis/players/61565135.html 
        // 3番 青木 宣親 http://npb.jp/bis/players/31135119.html
        // 4番 筒香 嘉智 http://npb.jp/bis/players/41945131.html 
        // 5番 中田 翔 http://npb.jp/bis/players/61065116.html
        // 6番 坂本 勇人 http://npb.jp/bis/players/51955114.html
        // 7番 松田 宣浩 http://npb.jp/bis/players/51655112.html
        // 8番 秋山 翔吾 http://npb.jp/bis/players/31135133.html
        // 9番 小林 誠司 http://npb.jp/bis/players/91795139.html

        $num_deci = array(0,0,0,0,0,0,0,0,0);

        //打率
        if(!is_null($ave)){
            $m_aves   = array(0.301,0.272,0.329,0.287,0.254,0.291,0.271,0.300,0.215);
            $m_ave_index = $this->fix_top_number($m_aves,$ave);
            $num_deci[$m_ave_index] += 1;
        }

        //打席
        if(!is_null($tpa)){
            $m_tpas       = array(3627,4076,4998,3443,4883,6615,6059,4648,1539);
            $m_tpa_index = $this->fix_top_number($m_tpas,$tpa);
            $num_deci[$m_tpa_index] += 1;
        }

        //打数
        if(!is_null($bats)){
            $m_bats   = array(3078,3576,4395,2962,4378,5885,5522,4084,1328);
            $m_bat_index = $this->fix_top_number($m_bats,$bats);
            $num_deci[$m_bat_index] += 1;
        }

        //安打
        if(!is_null($hits)){
            $m_hits   = array(927,974,1446,851,1111,1711,1499,1226,285);
            $m_hit_index = $this->fix_top_number($m_hits,$hits);
            $num_deci[$m_hit_index] += 1;
        }

        //HR
        if(!is_null($hr)){
            $m_hrs    = array(167,72,94,176,202,183,244,96,12);
            $m_hr_index = $this->fix_top_number($m_hrs,$hr);
            $num_deci[$m_hr_index] += 1;
        }

        //打点
        if(!is_null($rbi)){
            $m_rbis   = array(485,331,452,534,749,706,815,451,115);
            $m_rbi_index = $this->fix_top_number($m_rbis,$rbi);
            $num_deci[$m_rbi_index] += 1;
        }

        //得点
        if(!is_null($score)){
            $m_scores = array(591,504,749,441,532,880,759,657,105);
            $m_score_index = $this->fix_top_number($m_scores,$score);
            $num_deci[$m_score_index] += 1;
        }

        //盗塁
        if(!is_null($steal)){
            $m_steals = array(135,93,167,5,13,147,123,100,6);
            $m_steal_index = $this->fix_top_number($m_steals,$steal);
            $num_deci[$m_steal_index] += 1;
        }

        //出塁率
        if(!is_null($basep)){
            $m_baseps = array(0.401,0.315,0.403,0.381,0.320,0.355,0.325,0.373,0.290);
            $m_baseps_index = $this->fix_top_number($m_baseps,$basep);
            $num_deci[$m_baseps_index] += 1;
        }

        $m_aves_index = 0;
        $m_aves_value = 100000;

        $max_index = -100;
        $max_v = -100;
        foreach ($num_deci as $k=>$v) {
          if($max_v < $v){
              $max_index = $k;
              $max_v = $v;
          }
        }
        $res = $max_index + 1;
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
