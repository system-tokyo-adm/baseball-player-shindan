@extends('layouts.app')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@section('content')
    <div class="container">
        <div class="col-sm-offset-8 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    あなたは、{{$type}}  <br>
                    HRは、{{$hr_type}} 
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    <!-- Title Name -->
                    <div class="col-sm-6">
                        {{$type}}
                    </div>
                    <div class="twitter">

                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="あなたは{{$type}} #野球選手タイプ診断" data-url="https://baseball-player-shindan.com" data-show-count="false" data-lang="ja">Tweet</a>
                        
                    </div>
                    <a href="https://px.a8.net/svt/ejp?a8mat=2ZTUU6+DN6MUQ+2VPC+661TT" target="_blank" rel="nofollow">
                        <img border="0" width="125" height="125" alt="" src="https://www27.a8.net/svt/bgt?aid=181111902825&wid=001&eno=01&mid=s00000013440001036000&mc=1"></a>
                        <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=2ZTUU6+DN6MUQ+2VPC+661TT" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection
