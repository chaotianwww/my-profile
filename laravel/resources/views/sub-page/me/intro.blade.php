@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        body{
            //background-image: url("https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1283206969,1813033469&fm=27&gp=0.jpg");
            background-repeat:no-repeat;
            background-attachment:fixed;
            //color:#fff;
            vertical-align: middle;
            max
        }
        .main-header{
            min-height:50px;
        }
        .main-body1{
            border:1px solid;
            padding:20px;
            margin-bottom: 100px;
            max-height: 800px;
            overflow-y: scroll;
        }
        .intro{
            font-size:14px;
        }
    </style>

@endsection


@section('body')
    @parent
    <div class="row">
        <div class="col-12">
            <div class="main-header"></div>
            <!--startprint-->
            <div class="main-body">
                <h3>青山（cyan）</h3>
                <p>身份证名：李超</p>
                <p>性别：男</p>
                <p>联系方式（手机）：18616964357</p>
                <p>联系方式（邮箱）：uncle.cyan@gmail.com</p>
                <p>学历：本科</p>
                <p>政治面貌：党员</p>
                <p>工作年限：6年</p>
                <p>期望职位：技术总监/技术经理</p>
                </br>
                </br>
                <h4>简介</h4>
                <p class="intro">大二出来工作至今已6年，玩过php，html，js，java，lua等各种编程语言及mysql，redis，mq等各种工具。</p>
                <p class="intro">带过实习生，也管理过项目组。制定过项目计划，也分配过项目任务。能写API也能凑合做前端。</p>
                <p class="intro">做过第三方工具，独立写过crm。web,h5,公众号,小程序各种编写等等等等</p>
                </br>
                </br>
                <h4>项目经验</h4>
                <p>2017.10-至今</p>
                <p>海外拼团h5电商网站---friendeal.net</p>
                <p>工作职责</p>
                <p>项目架构->项目计划->第三方api研究->项目api编写->服务器搭建->项目上线</p>
                </br>
                <p>2017.5-2017.10</p>
                <p>公众号互推平台--实时推---rtpush.com</p>
                <p>工作职责</p>
                <p>项目页面api编写->项目CRM管理后台开发->公众号数据抓取->项目小程序开发->制定小程序方向及开发</p>
                </br>
                <p>2015.4-2017.4</p>
                <p>医疗电商平台--51jk----51jk.com</p>
                <p>工作职责</p>
                <p>项目CRM管理后台开发->项目公众号开发->项目重构->云通迅开发</p>
                </br>
                <p>2014.10-2015.4</p>
                <p>金融电商平台--企易贷----71dai.com</p>
                <p>工作职责</p>
                <p>项目CRM管理后台开发->项目api编写->数据报表导出->各种维护</p>
                </br>
                <p>2011.10-2014.4</p>
                <p>爱用数据、爱用商品--千牛</p>
                <p>工作职责</p>
                <p>整个爱用数据项目的开发，发布及维护，爱用商品部分模板的开发</p>
                </br>
                <p>2011.10-2014.4</p>
                <p>客户CRM短信营销系统--crm----已下线</p>
                <p>工作职责</p>
                <p>整个项目的开发，发布及维护</p>
                </br>
                </br>
                <h4>工作经验</h4>
                <p>2017.5-至今</p>
                <p>上海寅诺管理咨询有限公司（php高级开发）</p>
                <p>主要工具：php（laravel）mysql redis mq</p>
                <p>第三方api：facebook paypal aws-s3</p>
                <p>工作职责：</p>
                <p>1、项目架构设计</p>
                <p>2、项目计划</p>
                <p>3、项目api</p>
                <p>4、项目发布与维护</p>
                <p>5、服务器搭建</p>
                </br>
                <p>2015.4-2017.4</p>
                <p>上海银路投资管理有限公司（技术经验/项目经理）</p>
                <p>主要工具：php（phalcon）mysql redis </p>
                <p>第三方api：微信公众号 微信支付 支付宝支付</p>
                <p>工作职责：</p>
                <p>1. 负责组织并制定相关技术体系的技术标准和技术规范。</p>
                <p>2. 负责公司的团队建立。</p>
                <p>3. 负责10人左右的团队管理。</p>
                <p>4. 负责对产品可行性评估。</p>
                <p>5. 负责项目的方案设计及资源分配。</p>
                <p>6. 负责项目的核心代码编写。</p>
                <p>7. 负责项目发布及代码审核。</p>
                <p>8. 负责实习生的培训。</p>
                <p>9. 负责部门内外的协调工作。</p>
                </br>
                <p>2014.10-2017.4</p>
                <p>上海镭驰金融信息服务股份有限公司（php开发）</p>
                <p>主要工具：php（thinkPHP）mysql memcache </p>
                <p>工作职责：</p>
                <p>1、项目迭代与维护</p>
                <p>2、项目报表导出</p>
                <p>3、crm后台维护</p>
                </br>
                <p>2011.12-2014.4</p>
                <p>上海爱用宝股份有限公司（php开发）</p>
                <p>主要工具：php（CI）mysql redis mq ttserver httpsqs 等</p>
                <p>第三方api：淘宝api</p>
                <p>1、项目开发</p>
                <p>2、实习生培训</p>
            </div>
            <!--endprint-->
            <div class="main-footer">
                <button onclick="doPrint()">打印简历</button>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    <script>
        function doPrint() {
            bdhtml=window.document.body.innerHTML;
            sprnstr="<!--startprint-->";
            eprnstr="<!--endprint-->";
            prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr)+17);
            prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
            window.document.body.innerHTML=prnhtml;
            window.print();
        }
    </script>
@endsection