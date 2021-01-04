<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>
{{--顶部导航--}}
<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img alt="Brand" src=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
{{--                    <li class="active"><a href="#">今日推荐 <span class="sr-only">(current)</span></a></li>--}}
                    <li class="active"><a href="#">热门菜谱</a></li>
                    <li><a href="#">最新菜谱</a></li>
                    <li><a href="#">随机菜谱</a></li>
                    <li><a href="#">推荐排行</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">分类 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($categories as $cate)
                            <li><a href="#">{{$cate->name}}</a></li>
                            <li role="separator" class="divider"></li>
                            @endforeach
                            <li><a href="#">查看全部分类</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">难度 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($levels as $l)
                                <li><a href="#">{{$l->name}}</a></li>
                                <li role="separator" class="divider"></li>
                            @endforeach
                            <li><a href="#">随机难度</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="查找">
                    </div>
                    <button type="submit" class="btn btn-default">查找</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
{{--                    游客--}}
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('登录') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('注册') }}</a>
                            </li>
                        @endif
                    @else
{{--                    用户--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('menu.create')}}">
{{--                                <button type="button" class="btn btn-default" aria-label="Left Align">--}}
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
{{--                                </button>--}}
                            </a>
                        </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">个人详情</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">我的菜谱</a></li>
                            <li><a href="#">我的收藏</a></li>
                            <li><a href="#">我的消息</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

{{--导航条--}}
{{--主视图--}}
<div>
    @yield('content')
</div>
{{--底部--}}
</body>
</html>
