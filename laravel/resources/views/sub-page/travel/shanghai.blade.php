@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        body{
            background-image: url("https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1514869112463&di=a30586e399a5416da34bca639c6eedfd&imgtype=0&src=http%3A%2F%2Fwww.pp3.cn%2Fuploads%2F201701%2F2017040606.jpg");
            color:#fff;
            vertical-align: middle;
        }
    </style>

@endsection


@section('body')
    @parent
    <h1>上海黄SIR旅行功略（仅供参考）：</h1>
    <h3>迪士尼</h3>
    <p>票价：携程推出一款7.5折四人套餐 277/人（更多票价可参照携程）</p>
    <p>地铁：11号线上海迪士尼站</p>
    <p>居住：11号线秀沿路附近酒店 （此处有很多夜市）</p>
    <p>建议游玩时间：2天（主要看自己）</p>
    <p>游玩：下载迪士尼乐园的官方APP（显示每个项目的等待时间和定位你在园中的位置，对合理安排游玩项目和时间超级有帮助）</p>

    <h3>上海海洋水族馆</h3>
    <p>票价：成人票155，亲子票1大1小335（更多请参考携程）</p>
    <p>位置：浦东新区陆家嘴环路1388号</p>
    <p>地铁：2号线陆家嘴站</p>
    <p>居住：不建议住太近（偏贵），可住稍偏一点的地方，比如宝山区，虹口等地铁站酒店或者airbnb上预订</p>
    <p>建议时间，一整天</p>
    <p>建议吃完午饭再去，玩完可上东方明珠/外滩等地继续逛夜景</p>

    <h3>上海野生动物园</h3>
    <p></p>
  <p>其它行程：老城隍庙旅游区(2小时) → 豫园(1小时) → 南京路步行街(3小时) → 外滩(1小时) →  中华艺术宫(4小时) → 田子坊(2小时) → 新天地(2小时)  → 上海杜莎夫人蜡像馆(3小时) → 陆家嘴(2小时) → 东方明珠广播电视塔(2小时)</p>
@endsection

@section('footer')
    @parent`
@endsection