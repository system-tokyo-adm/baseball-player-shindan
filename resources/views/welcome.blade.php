@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-8 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    成績を入力する 
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    <!-- New Title Form -->
                    <form action="{{ url('results')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Title Name -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">打率</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="title-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">打席</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">打数</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">安打</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>


                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">本塁打</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>


                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">打点</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">得点</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">盗塁</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">出塁率</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
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
                </div>
            </div>
        </div>
    </div>
@endsection
