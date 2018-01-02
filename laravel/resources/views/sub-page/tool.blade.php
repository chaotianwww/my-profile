@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        body{
           background: #fff;
        }

        .input,.output{
            width:300px;
            height: 800px;
            padding:10px;
        }
        .center-div{
            padding-top:50px;
        }
        .center-div p{
            text-align: center;
            cursor: pointer;
        }
        .tools{
            width:300px;
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
        <div class="col">before <p><textarea class="input" placeholder="please input some text..."></textarea></p> </div>
        <div class="col center-div">
            <p> <input type="button" class="tools btn btn-outline-secondary" value="md5"  /> </p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="sha1" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="json_encode" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="json_decode" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="url_encode" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="url_decode" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="base64encode" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="base64decode" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="strtotime" /></p>
            <p><input type="button"  class="tools btn btn-outline-secondary" value="timetostr" /></p>
        </div>
        <div class="col">after<p><textarea class="output" placeholder="Text will show here after transfer"></textarea></p>  </div>
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
                var url = 'tool/getVal';
                data.type = type;
                data.val  = $('.input').val();
                if(!data.val){
                    return false;
                }
                $.post(url, data, function(res){
                    if(res.data){
                        $(".output").val(res.data.val);
                    }
                });
            }

        });
    </script>
@endsection