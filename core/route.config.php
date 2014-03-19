<?php

if (!defined('IN_PX'))
	exit;
/**
 * 路由配置
 * 本地缓存
 */
return array(
	'root' => '/'
	, 'suffix' => '' //自定义动态文件后缀，如 .php .html .phtm 等
	, 'taglib' => '.php' //模板文件标签域(即模板标签文件后缀，以便于正确使用模板标签)
	, 'domain' => '' //cookie使用的域
	, 'view' => 'templates' //视图文件目录
	, 'caseSensitive' => false
	, 'packageMappingPaths' => array(
		//包默认为第一项，例如首页['物理路径' => '类的包指向']
		//如果与 view 视图文件目录相同，说明是模板文件，类的指向会替换成物理路径
		//模板文件按照逻辑顺序对应数据库的语言版本，会自动生成语言配置
		'zh-CN' => 'templates'
		, 'pop' => 'admin'
	)
	, 'utils' => array(
		'__CFG__' => 'data/config.cache.php'
		, '__DSN__' => 'data/dsn.cache.php'
		, 'setting' => 'data/setting.cache.php'
		, 'version' => 'data/version.cache.php'
	)
	, 'injects' => array(
		'db' => 'PXPDO_Decorator'
		, 'cache' => 'Phoenix_Cache'
		, 'session' => 'Phoenix_Session'
	)
//	, 'sysPlugins' => array(
//		'SysPlugin_Named'
//	)
//	, 'aspectps' => array(//声明aop，必须指定具体的类名
//		'Admin_Aop_ManagerLog'
////		'Chs_Aop_IndexLog'
//	)
	, 404 => '404.html'
//	, 500 => '500.html'
);
