@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        body{
           background: #fff;
        }

        .input{
            width:300px;
            height: 800px;
        }
    </style>
@endsection

@section('body')
    @parent
    <div class="row row-centered">
        <div class="well col-md-6 col-centered">
            <h1>Welcome，cyan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col"> <p><textarea class="input"></textarea></p> </div>
        <div class="col">
            <p> <input type="button" class="tools" value="md5"  /> </p>
            <p><input type="button"  class="tools" value="sha1" /></p>
            <p><input type="button"  class="tools" value="json_encode" /></p>
            <p><input type="button"  class="tools" value="json_decode" /></p>
            <p><input type="button"  class="tools" value="url_encode" /></p>
            <p><input type="button"  class="tools" value="url_decode" /></p>
            <p><input type="button"  class="tools" value="base64encode" /></p>
            <p><input type="button"  class="tools" value="base64decode" /></p>
        </div>
        <div class="col"><p><textarea class="input"></textarea></p>  </div>
    </div>


@endsection

@section('footer')
    @parent`
    <script>
        $(function(){
           $('.tools').click(function(){
               getVal($(this).val());
           });
            function getVal(type) {
                var data = {};
                var url = '/tool/getVal';
                data.type = type;
                data.val  = $('.input').val();
                $.ajax(url, data, function(res){
                    console.log(res);
                });
            }

        });
    </script>
@endsection