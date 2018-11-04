@extends('layouts.app')

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
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
