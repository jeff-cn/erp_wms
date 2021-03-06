<?php
$config['menu_config'] = array(
	"index"=>array
	(
		'管理中心首页',
		array
		(
			array(
				'管理中心首页',
				array(
					  'info,1,admin_index,管理中心首页',  //操作内容,是否隐藏,类型名称,中文菜单名称
					  'search_spuser,0,base_ajax,供应商选择窗口',
					  'web_config,1,admin_index,网站配置'
					)
				)
		)
	)
	,
	"configs"=>array
	(
		'网站管理',
		array
		(
			array(
				'权限管理',
				array(
					  'group_list,1,group,权限组', 
					  'group_add,1,group,添加权限组', 
					  'admin_list,1,user,管理员列表',  
					  'admin_add,1,user,添加管理员', 
					  'admin_pwd,1,user,修改密码', 
					)
				)
			,
			array(
				'运费管理',
				array(
					  'logistics_list,1,logistics,国外段运费模板',  
					  'logistics_list_s,1,logistics,国内段运费模板',  
					  'logistics_add,1,logistics,添加运费模板',
					  'logistics_ems,1,logistics,EMS运单号'
					)
				)
			,
			array(
				'产地及分类',
				array(
				      'cat_list,1,cat,商品类型', 
					  'cat_add_or_edit,0,cat,添加商品类型', 
					  'country_list,1,country,产地管理',
					)
				)
		)
	)
	,
	"user"=>array
	(
		'商户管理',
		array
		(
		   array(
				'商户管理',
				array(
				      'sproduct_list,1,supplier,商户商品',  
					  'sproduct_download,0,supplier,商品表下载',   //导出产品
					  'synchronize_product,0,supplier,商品同步',   //导出产品
					  'sproduct_bin_list,1,supplier,商品回收站',
					  'supplier_list,1,supplier,商户列表',  
					  'sproduct_addr,1,supplier,商户模式',  
					  'sproduct_addr_add,0,supplier,添加地址',  
					  'supplier_add_or_edit,0,supplier,添加商户'
					)
				)
		)
	)
	,
	"order"=>array
	(
		'订单管理',
		array
		(
		    array(
				'平台备案库管理',
				array(
					  'filing_list,1,filing,平台备案库',  
					  'filing_upload,1,filing,批量上传', //更新备案状态  更新海关审核状态及名称 同时加更新
					 // 'filing_list_log,1,filing,备案请求日志',
					  'filing_edit,0,filing,编辑内容'
					)
			),
			array(
				'订单管理',
				array(
					  'order_list,1,order,订单列表', 
					  'order_check,0,order,审核订单', 
                      'order_batches,0,order,选择批次'		
					)
		     ),
			 array(
				'批次管理',
				array(
					  'batches_list,1,batches,批次列表',  //指定商户UID 
					 // 'batches_add,1,batches,添加批次'
					)
		     ),
			 array(
				'包裹管理',
				array(
					  'package_list,1,package,fedex包裹列表',
					  'package2_list,1,package,海运空运包裹列表',
					  'fedex_user,1,logistics,fedex相关地址',
					  'package_status,1,package,fedex包裹状态',
					  'fedex_config,1,package,FedEx对接账号'
					)
		     )
	    )
	)
	
);

