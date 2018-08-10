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
   <h1 style="white-space: normal;">
    迪士尼<br/>
</h1>
<p style="white-space: normal;">
    票价：携程推出一款8折家庭票（2大一小） 1264（更多票价可参照携程）
</p>
<p style="white-space: normal;">
    地铁：11号线上海迪士尼站
</p>
<p style="white-space: normal;">
    居住：11号线秀沿路附近酒店 （此处有很多夜市）
</p>
<p style="white-space: normal;">
    建议游玩时间：2天（主要看自己）
</p>
<p style="white-space: normal;">
    开放时间：8.1-8.26（8:00-22:00）8.27-8.31（8:00-8:30）
</p>
<p style="white-space: normal;">
    游玩：下载迪士尼乐园的官方APP（显示每个项目的等待时间和定位你在园中的位置，对合理安排游玩项目和时间超级有帮助）
</p>
<h3 style="white-space: normal;">
    上海海洋水族馆
</h3>
<p style="white-space: normal;">
    票价：成人票155，儿童票105（更多请参考携程）
</p>
<p style="white-space: normal;">
    位置：浦东新区陆家嘴环路1388号
</p>
<p style="white-space: normal;">
    地铁：2号线陆家嘴站
</p>
<p style="white-space: normal;">
    居住：不建议住太近（偏贵），可住稍偏一点的地方，比如宝山区，虹口等地铁站酒店或者airbnb上预订
</p>
<p style="white-space: normal;">
    建议时间：1-3小时
</p>
<p style="white-space: normal;">
    营业时间：9:00-18:00
</p>
<p style="white-space: normal;">
    建议吃完午饭再去，玩完可上东方明珠/外滩等地继续逛夜景
</p>
<h3 style="white-space: normal;">
    上海野生动物园
</h3>
<p style="white-space: normal;">
    票价：成人票125，儿童票65，家庭票（2大1小）280 参考携程（各种活动的套票票价都不一样）
</p>
<p style="white-space: normal;">
    地铁：16号线野生动物园站
</p>
<p style="white-space: normal;">
    居住：建议16号线周边找酒店居住（16号线底站滴水湖也可游玩）
</p>
<p style="white-space: normal;">
    建议时间：0.5-1天
</p>
<p style="white-space: normal;">
    营业时间：7.1-8.31（8:00-18:00）
</p>
<p style="white-space: normal;">
    <br/>
</p>
<h3 style="white-space: normal;">
    上海科技馆
</h3>
<p style="white-space: normal;">
    票价：成人票60，学生票30
</p>
<p style="white-space: normal;">
    地铁：2号线上海科技馆
</p>
<p style="white-space: normal;">
    建议时间：一天（周二到周四9：00-17：15）
</p>
<p style="white-space: normal;">
    其它行程：老城隍庙旅游区(2小时) → 豫园(1小时) → 南京路步行街(3小时) → 外滩(1小时) → &nbsp;中华艺术宫(4小时) → 田子坊(2小时) → 新天地(2小时) &nbsp;→ 上海杜莎夫人蜡像馆(3小时) → 陆家嘴(2小时) → 东方明珠广播电视塔(2小时)
</p>
<h1>
    <br/>
</h1>
    <p>
        <img src="{{env("APP_URL")}}/img/map.png" />
    </p>
@endsection

@section('footer')
    @parent
@endsection
