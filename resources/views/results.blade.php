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

                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="あなたは{{$type}} #野球バッタータイプ診断" data-url="https://baseball-player-shindan.com" data-show-count="false" data-lang="ja">Tweet</a>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
