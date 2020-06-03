<?php
require_once('logincheck.php');
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/images/favicon.ico" rel="icon">
    <title>CBC internal system</title>
    <link rel="stylesheet" href="assets/libs/layui/css/layui.css"/>
    <link rel="stylesheet" href="assets/module/admin.css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">
            <img src="assets/images/logo.png"/>
            <cite>CBC Information management system</cite>
        </div>
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="flexible" title="Sidebar"><i class="layui-icon layui-icon-shrink-right"></i></a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="refresh" title="Refresh"><i class="layui-icon layui-icon-refresh-3"></i></a>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="message" title="Message">
                    <i class="layui-icon layui-icon-notice"></i>
                    <span class="layui-badge-dot"></span>
                </a>
            </li>
            <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a ew-event="fullScreen" title="Full screen"><i class="layui-icon layui-icon-screen-full"></i></a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a>
                    <img src="assets/images/head.jpg" class="layui-nav-img">
                    <cite>Administrators</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd lay-unselect><a href="logout.php" >Logout</a></dd>
                </dl>
            </li>
        </ul>
    </div>
 <div class="layui-side">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree arrow2" lay-filter="admin-side-nav" lay-shrink="all">
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-home"></i><cite>Dashboard</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a lay-href="page/console/console.html">Dashboard</a></dd>
                    </dl>
                </li>
<li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-set"></i><cite>Ticket management</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a lay-href="addticket.php">Addticket</a></dd>
                        <dd><a lay-href="ticket.php">Ticket</a></dd>
                    </dl>
                </li>
                 <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-template"></i><cite>Bus management</cite></a>
                    <dl class="layui-nav-child">
                                <dd><a lay-href="bus.php">Bus</a></dd>
                                <dd><a lay-href="customer.php">Customer</a></dd>
                                <dd><a lay-href="meal.php">Meal</a></dd>
                            </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-template"></i><cite>Overview</cite></a>
                    <dl class="layui-nav-child">
                                <dd><a lay-href="help.php">Overview</a></dd>
                            </dl>
                </li>
            </ul>
     </div>
    </div>
                 <div class="layui-body"></div>
    <div class="layui-footer layui-text">
        Chengdu Consultancy Law firm
        <span class="pull-right">Information system</span>
    </div>
    </div>
                <div class="page-loading">
    <div class="ball-loader">
        <span></span><span></span><span></span><span></span>
    </div>
</div>
<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="./assets/js/common.js?v=317"></script>
    <script>
    layui.use(['index'], function () {
        var $ = layui.jquery;
        var index = layui.index;

        index.loadHome({
            menuPath: 'page/console/console.html',
            menuName: '<i class="layui-icon layui-icon-home"></i>'
        });

    });
</script>
</body>
</html>