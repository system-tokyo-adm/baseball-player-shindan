@extends('layouts.app')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@section('content')
    <div class="container">
        <div class="col-sm-offset-8 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    あなたは、{{$type}}  
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
                       <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=bps0de-22&m=amazon&o=9&p=8&l=as1&IS1=1&offerlisting=1&asins=B076FVHH19&linkId=b5916c9a5a691d6e13fd99173624fbe0&bc1=ffffff&lt1=_blank&fc1=333333&lc1=0066c0&bg1=ffffff&f=ifr">
    </iframe>
                </div>

            </div>
        </div>
    </div>
@endsection
