<?php
	//1.应用名称
	define('APP_NAME','Home');
	//2.应用路径
	define('APP_PATH','./Home/');
	//4.开启调试模式
	define('APP_DEBUG',true);
	//3.引入核心文件
	//require 致命错误，引入重要文件；include一般引用
	require './ThinkPHP/ThinkPHP.php'
?>