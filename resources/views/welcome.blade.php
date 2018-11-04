<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background: url("../img/top_image.jpg") no-repeat center center;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    新しい問題集を追加する
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                    <!-- New Title Form -->
                    <form action="{{ url('/results')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Title Name -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">タイトル</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="title-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-name" class="col-sm-3 control-label">概要</label>

                            <div class="col-sm-6">
                                <input type="text" name="detail" id="detail-name" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <!-- Title Description -->
                        <div class="form-group">
                            <label for="title-status" class="col-sm-3 control-label">公開ステータス</label>

                            <div class="col-sm-6">
                                <select name="status" id="status" class="form-control">
                                    <option value=1>公開</option>
                                    <option value=2>非公開</option>
                                </select>
                            </div>
                        </div>

                        <!-- Add Title Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>問題集を追加
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
