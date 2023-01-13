<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Nathan - 王者荣耀个性语音包</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/Layui/libs/layui/css/layui.css" />
    <link rel="stylesheet" href="./assets/frame/module/admin.css?v=318" />
    <style>
        body{
            background:linear-gradient(to right,#c9c,#ccf);
            font-family:微软雅黑
        }
        .imgc{
            background-size:100% 100%;
            background-repeat:repeat;
            top:0;
            position:fixed;
            left:0;
            width:100%;
            height:100%;
            z-index:-33;
        }
    </style>
</head>
<body layadmin-themealias="dark-blue" style="margin-top: 1em;">
<div class="imgc"></div>
<div class="layui-fluid">
    <div class="a layui-anim layui-anim-fadein">
        <div class="layui-row layui-col-space15">
            <div class="text-center">
                <img src="logo.png">
            </div>
            <div class="layui-col-sm8 layui-col-sm-offset2 layui-col-md6  layui-col-md-offset3 layui-col-lg6 layui-col-xs12  layui-col-lg-offset3">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-card-header">英雄个性语音</div>
                            <div class="layui-card-body">
                                <div class="layui-form" wid100 lay-filter="">
                                    <div class="layui-form-item">
                                        <input type="text" id="msg" name="msg" class="layui-input" lay-verType="tips" lay-tips="英雄名称！" placeholder="请输入需要查询的英雄名称" />
                                    </div>
                                    <div class="layui-form-item">
                                        <d id="state"><button class="layui-btn layui-btn-normal layui-btn-fluid" id="Query">立即查询</button></d>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-col-md12" id="show" style="display: none">
                            <div class="layui-card">
                                <div class="layui-card-header"><p align="left" style="float:left" id="name"></p><p align="right"><button class="layui-btn layui-btn-xs" id="Img">查看图像</button></p></div>
                                <div class="layui-card-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div id="links">
                                                <table class="layui-table" lay-size="sm" lay-skin="nob">
                                                    <tbody id="table"></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <blockquote class="layui-elem-quote">王者荣耀英雄个性语音包</blockquote>
                <div class="layui-card">
                    <div class="layui-card-header" style="font-size: 1.5em;text-align: center;">
                        友情链接
                    </div>
                    <div class="layui-card-body">
                        <div class="site-text">
                            <div class="layui-btn-container">
                                <a class="layui-btn layui-btn-normal" href="http://auth.nanyinet.com/" target="_blank">Nathan_Auth官网</a>
                                <a class="layui-btn layui-btn-normal" href="http://www.nanyinet.com/" target="_blank">南逸博客</a>
                                <a class="layui-btn layui-btn-normal" href="http://api.nanyinet.com/" target="_blank">NanYi-API</a>
                                <a class="layui-btn layui-btn-normal" href="http://php.nanyinet.com/" target="_blank">NanYi-PHP</a>
                                <a class="layui-btn layui-btn-normal" href="http://nathan.com" target="_blank">Auth机器人授权官网</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./assets/jQuery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="./assets/frame/libs/layui/layui.js"></script>
<script type="text/javascript" src="./assets/frame/js/common.js?v=318"></script>
<script type="text/javascript" src="./assets/frame/js/Nathan.js"></script>
</body>
</html>