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
                        <a href="https://px.a8.net/svt/ejp?a8mat=2ZTUU6+DN6MUQ+2VPC+661TT" target="_blank" rel="nofollow">
                        <img border="0" width="125" height="125" alt="" src="https://www27.a8.net/svt/bgt?aid=181111902825&wid=001&eno=01&mid=s00000013440001036000&mc=1"></a>
                        <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=2ZTUU6+DN6MUQ+2VPC+661TT" alt="">
                </div>
            </div>
            </div>
    </div>
@endsection
