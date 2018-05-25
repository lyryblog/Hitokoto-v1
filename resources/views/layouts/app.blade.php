<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hitokoto - 一言</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite@1.3.0/dist/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/daneden/animate.css/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@9.12.0/styles/solarized-dark.min.css">
    <link rel="stylesheet" href="/css/hitokoto.css">
</head>

<body id="app-layout" style="font-family: 'Lato',sans-serif;">
    <div class="hitokoto-layout mdl-layout mdl-js-layout mdl-color--grey-100">
        <header class="mdl-layout__header mdl-layout__header--scroll">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title" href="/">Hitokoto - 用户中心</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/">首页</a>
                    <a class="mdl-navigation__link" href="/api">API</a>
                    <a class="mdl-navigation__link" href="/status">状态</a>

                    @if (Auth::guest())
                    <a class="mdl-navigation__link" href="/login">登录</a>
                    <a class="mdl-navigation__link" href="/register">注册</a>
                    @else
                    <a class="mdl-navigation__link" href="/home">{{ Auth::user()->name }}</a>
                    <a class="mdl-navigation__link" href="/logout">登出</a>
                    @endif
                    <a class="mdl-navigation__link" href="/about">关于一言...</a>
                </nav>
            </div>
        </header>

        <!--sidebar-->
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Hitokoto</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="/">首页</a>
                <a class="mdl-navigation__link" href="/api">API</a>
                <a class="mdl-navigation__link" href="/status">状态</a>
                @if (Auth::guest())
                <a class="mdl-navigation__link" href="/login">登录</a>
                <a class="mdl-navigation__link" href="/register">注册</a>
                @else
                <a class="mdl-navigation__link" href="/home">{{ Auth::user()->name }}（用户中心）</a>
                <a class="mdl-navigation__link" href="/tickets">提交工单</a>
                <a class="mdl-navigation__link" href="/logout">登出</a>
                @endif
                <a class="mdl-navigation__link" href="/about">关于一言...</a>
            </nav>
        </div>
        <div class="hitokoto-ribbon"></div>
		<main class="hitokoto-main mdl-layout__content">
            <div class="page-content">@yield('content')</div>
            <!--
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer--left-section">
                    萌创团队 版权所有
                </div>
            </footer>
            -->
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/material-design-lite@1.3.0/material.min.js"></script>
    <!--[if IE]>
    <script src="https://cdn.jsdelivr.net/npm/es-promise@1.0.3/dist/promise.umd.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.4/fetch.js" integrity="sha256-VpQSBEw4wr6j5/6GsK33LrAE6Eq6+/Tq3JUbcCak6XY=" crossorigin="anonymous"></script>
@yield('scripts')
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/highlight.min.js"></script>
<script>
$(document).ready(function() {
  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
</script>
</body>
</html>
