@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-6">
        <h1>
        <font color="darkbrown">打順決めに困ってない？ </br> 成績を入力して打順タイプを診断しよう!</font>
        </h1>
        </div>
        <div class="col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    成績を入力する 
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    <!-- New Title Form -->
                    <form action="{{ url('result')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Title Name -->
                        <div class="form-group">
                            <label for="ave-name" class="col-sm-3 control-label">打率</label>

                            <div class="col-sm-6">
                                <input type="number" name="ave" id="ave-name" class="form-control" step=0.001 value="{{ old('ave') }}">
                            </div>
                        </div>

                        <!-- TPA -->
                        <div class="form-group">
                            <label for="tpa-name" class="col-sm-3 control-label">打席</label>

                            <div class="col-sm-6">
                                <input type="number" name="tpa" id="tpa-name" class="form-control" value="{{ old('tpa') }}">
                            </div>
                        </div>

                        <!-- Bats -->
                        <div class="form-group">
                            <label for="bats-name" class="col-sm-3 control-label">打数</label>

                            <div class="col-sm-6">
                                <input type="number" name="bats" id="bats-name" class="form-control" value="{{ old('bats') }}">
                            </div>
                        </div>

                        <!-- Hits  Description -->
                        <div class="form-group">
                            <label for="hits-name" class="col-sm-3 control-label">安打</label>

                            <div class="col-sm-6">
                                <input type="number" name="hits" id="hits-name" class="form-control" value="{{ old('hits') }}">
                            </div>
                        </div>


                        <!-- HR -->
                        <div class="form-group">
                            <label for="hr-name" class="col-sm-3 control-label">本塁打</label>

                            <div class="col-sm-6">
                                <input type="number" name="hr" id="hr-name" class="form-control" value="{{ old('hr') }}">
                            </div>
                        </div>


                        <!-- RBI  -->
                        <div class="form-group">
                            <label for="rbi-name" class="col-sm-3 control-label">打点</label>

                            <div class="col-sm-6">
                                <input type="number" name="rbi" id="rbi-name" class="form-control" value="{{ old('rbi') }}">
                            </div>
                        </div>

                        <!-- score -->
                        <div class="form-group">
                            <label for="score-name" class="col-sm-3 control-label">得点</label>

                            <div class="col-sm-6">
                                <input type="number" name="score" id="score-name" class="form-control" value="{{ old('score') }}">
                            </div>
                        </div>

                        <!-- steal -->
                        <div class="form-group">
                            <label for="steal-name" class="col-sm-3 control-label">盗塁</label>

                            <div class="col-sm-6">
                                <input type="number" name="steal" id="steal-name" class="form-control" value="{{ old('steal') }}">
                            </div>
                        </div>

                        <!-- basep -->
                        <div class="form-group">
                            <label for="basep-name" class="col-sm-3 control-label">出塁率</label>

                            <div class="col-sm-6">
                                <input type="number" name="basep" id="basep-name" class="form-control" step=0.001 value="{{ old('basep') }}">
                            </div>
                        </div>

                        <!-- Add Title Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>診断する
                                </button>
                            </div>
                        </div>
                    </form>
                      <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=bps0de-22&m=amazon&o=9&p=8&l=as1&IS1=1&offerlisting=1&asins=B076FVHH19&linkId=b5916c9a5a691d6e13fd99173624fbe0&bc1=ffffff&lt1=_blank&fc1=333333&lc1=0066c0&bg1=ffffff&f=ifr">
    </iframe>
                </div>
            </div>
            </div>
    </div>
@endsection
