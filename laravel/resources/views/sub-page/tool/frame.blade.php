@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        .container-fluid{
            width:90%;
            padding-top:2%;
        }

    </style>
@endsection

@section('body')
    @parent

    <h3>Hello,there has some different in this frame</h3>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>frame name</th>
                <th>advantage</th>
                <th>disadvantage</th>
                <th>apply to</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>laravel</td>
                <td>
                    <ul>
                        <li>文档简单丰富，社区庞大，更新较快，架构先进，易上手，可读性非常高</li>
                        <li>适合应用各种开发模式TDD, DDD和BDD</li>
                        <li>集合了php比较新的特性，以及各种各样的设计模式，Ioc容器，依赖注入等</li>
                        <li>强大的rest router：用简单的回调函数就可以调用，快速绑定controller和router</li>
                        <li>artisan: 命令行工具，很多手动的工作都自动化</li>
                        <li>migration: 管理数据库和版本控制</li>
                        <li>大量的第三方开源库</li>
                        <li>提供了简化的轻量级框架lumen</li>
                        <li>无重大漏洞</li>
                    </ul>

                </td>
                <td>
                    <ul>
                        <li>必须先定义路由，每一条请求都得手动定义路由</li>
                        <li>大量使用第三方开源库，导致加载稍慢，而且很臃肿，属于重量型框架</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>phalcon</td>
                <td>
                    <ul>
                        <li>C写的框架,所有函数都以PHP类的方式呈现,开发者无需学习和使用C语言</li>
                        <li>无需担心性能问题，以高性能和低消耗著称</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>yaf</td>
                <td>
                    <ul>
                        <li></li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>YII2</td>
                <td>
                    <ul>
                        <li>gii，简化开发流程，可以生成绝大数的代码，开发后台等效率高</li>
                        <li>集成度很高，很多功能都已经官方封装好了，对于上手新的项目非常的快。</li>
                        <li>Active Record比1.1版本的更强大和人性化了，底层代码很厉害</li>
                        <li>安全和性能依然一样棒</li>
                        <li>更灵活，不管是从扩展性还是从场景化来说</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>前后端完全的分离的趋势下，yii2前后端的耦合的还是有些重</li>
                        <li>说是进入了composer时代，不过这是跟1.1版本比，不跟Laravel比</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>thinkPHP5</td>
                <td>
                    <ul>
                        <li>基本面向对象， 对于开发者更加友善</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>框架社区相关的辅助工具仍然少</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>CI</td>
            </tr>
        </tbody>
    </table>
@endsection


@section('footer')
    @parent
    <script>
    </script>
@endsection
