@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        body{
            background-image: url("{{env("APP_URL")}}/img/bg.jpg");
            color:#fff;
            vertical-align: middle;
        }
        .container{
            display:table;
            height:949px;
        }

        .row{
            display: table-cell;
            vertical-align: middle;
        }
        /* centered columns styles */
        .row-centered {
            text-align:center;
        }
        .col-centered {
            display:inline-block;
            float:none;
            margin-right:-4px;

        }
        .next-page{
            text-decoration:underline;
            cursor: pointer;
        }
    </style>
@endsection

@section('body')
    @parent
    <div class="row row-centered">
        <div class="well col-md-6 col-centered">
            <h1>Welcome，cyan</h1>
            <h3><span class="now-time"></span></h3>
            <h3 class="next-page">Let Begin Your Travel</h3>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    <script>
        $(function(){

            show_time();

            $(".next-page").click(function(){
               location.href="/tool";
            });
        });
        function show_time()
        {
            var now_time = get_now_time();
            $('.now-time').html(now_time);
            setInterval("show_time()",1);
        }

        function get_now_time()
        {
            var Week = ['日','一','二','三','四','五','六'];
            var now_time = '';
            var date = new Date();
            var now_time = "" + date.getFullYear() + "/";
            now_time += (date.getMonth()+1) + "/";
            now_time += date.getDate() + "/　";

            now_time += date.getHours()+":"; //获取当前小时数(0-23)
            now_time += date.getMinutes()+":"; //获取当前分钟数(0-59)
            now_time += date.getSeconds(); //获取当前秒数(0-59)

            now_time += " 星期"+Week[date.getDay()];

            return now_time;
        }
    </script>
@endsection