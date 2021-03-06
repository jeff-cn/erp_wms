<?php /* Smarty version 2.6.20, created on 2017-01-05 15:08:06
         compiled from D:%5Cphpstudy%5CWWW%5Cerp_wms%5Capplication%5Ctemplates/sp/package_order_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'site_url', 'D:\\phpstudy\\WWW\\erp_wms\\application\\templates/sp/package_order_list.htm', 162, false),)), $this); ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="utf8" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="utf8" class="ie9"> <![endif]-->

<!--[if !IE]><!-->
<html lang="utf8">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
<meta charset="utf-8" />
<title></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href=/static/css/bootstrap.min.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/bootstrap-responsive.min.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/font-awesome.min.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/style-metro.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/style.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/style-responsive.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/default.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css" id="style_color"/>
<link href=/static/css/uniform.default.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<link href=/static/css/bootstrap-modal.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href=/static/css/select2_metro.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" />
<link rel="stylesheet" href=/static/css/DT_bootstrap.css?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" />
<!-- END PAGE LEVEL STYLES -->
<link rel="shortcut icon" href="/static/favicon.ico?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" />
<!-- END FOOTER --> 

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --> 
<!-- BEGIN CORE PLUGINS --> 
<script src="/static/js/jquery-1.10.1.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<script src="/static/js/jquery-migrate-1.2.1.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --> 
<script src="/static/js/jquery-ui-1.10.1.custom.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<script src="/static/js/bootstrap.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<!--[if lt IE 9]>

  <script src="/static/js/excanvas.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script>

  <script src="/static/js/respond.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script>  

  <![endif]--> 

<script src="/static/js/jquery.slimscroll.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<script src="/static/js/jquery.blockui.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<script src="/static/js/jquery.cookie.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript"></script> 
<script src="/static/js/jquery.uniform.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript" ></script> 
<!-- END CORE PLUGINS --> 

<!-- BEGIN PAGE LEVEL PLUGINS --> 

<script type="text/javascript" src="/static/js/select2.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script> 
<script type="text/javascript" src="/static/js/jquery.dataTables.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script> 
<script type="text/javascript" src="/static/js/DT_bootstrap.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script> 

<!-- END PAGE LEVEL PLUGINS --> 

<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<!-- END CORE PLUGINS --> 
<!-- BEGIN PAGE LEVEL PLUGINS --> 
<script src="/static/js/bootstrap-modal.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript" ></script> 
<script src="/static/js/bootstrap-modalmanager.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
" type="text/javascript" ></script> 
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS --> 

<script src="/static/js/app.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script> 
<script>
function load_sub()
{
	$('body').modalmanager('loading');
	return true;
}
</script>
<style>
#span_label{width:100px; font-size:14px; font-weight: normal;line-height:34px;}
</style>
</head>
<body>
<!-- END SIDEBAR --> 
<!-- BEGIN PAGE -->
<!-- BEGIN PAGE CONTAINER--> 
<div class="modal-body" >
  <div class="tab-content">
    <div style="overflow-y:auto;" >
      <form action="" method="get" onsubmit="return load_sub();">               
        <input type="hidden" name="fedex_pakge_id" value="<?php echo $this->_tpl_vars['re']['fedex_pakge_id']; ?>
"/>
        
        <div class="row-fluid">                       
          <span class="span1" style="display:block;">
          <div id="span_label">批次ID</div>
          </span>
          <?php if ($this->_tpl_vars['re']['batches_id_index'] == 0): ?>
            <div class="span4">
              <select size="1" name="batches_id" aria-controls="sample_1" class="form_2_select2 m-wrap">                    
                <option value=''>请选择</option>
                <?php $_from = $this->_tpl_vars['re']['batches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                  <option <?php if ($_GET['batches_id'] == $this->_tpl_vars['item']['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['batches_name']; ?>
 ID:<?php echo $this->_tpl_vars['item']['id']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>             
              </select>
            </div> 
          <?php else: ?>
            <div class="span4">
              <input type="text" name="batches_id" readonly value="<?php echo $this->_tpl_vars['re']['batches_id_index']; ?>
" class="m-wrap"/>
            </div>
          <?php endif; ?>
          <span class="span1" style="display:block;">
          <div id="span_label">订单状态</div>
          </span>
          <div class="span4">
            <select size="1" name="order_status" aria-controls="sample_1" class="form_2_select2 m-wrap">                    
              <option value=''>请选择</option>
              <option <?php if ($_GET['order_status'] == '-1'): ?>selected="selected"<?php endif; ?> value="-1">未打包</option>
              <option <?php if ($_GET['order_status'] == '1'): ?>selected="selected"<?php endif; ?> value="1">已打包</option>                  
            </select>
          </div>                       
        </div>

        <div class="row-fluid" style="margin-top:20px;">
          <span class="span1" style="display:block;">
          <div id="span_label">手机号码</div>
          </span>
          <div class="input-append span4">
            <input type="text" name="consignee_mobile" value="<?php echo $_GET['consignee_mobile']; ?>
" class="m-wrap"/>
            <button class="btn green" type="submit">Search</button>
          </div>
        </div>       
      </form>
    </div>

    <div  id="product_all">       
      <form id='form_list' action="" method="post">
        <table class="table table-striped table-bordered table-hover dataTable" id='table_1' >
          <thead>
            <tr role="heading">
              <th width="20"  class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">
                <input value="0" type="checkbox" class="group-checkable list-checkable" data-set='#product_all .list-checkable'/>
              </th> 
              <th width="100" class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">订单编号</th> 
              <th width="100" class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">包裹编号</th> 
              <th width="100" class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">收货人姓名</th>          
              <th width="100" class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">收货人手机</th>
              <th width="*"   class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">收货人地址</th>
              <th width="120" class="sorting_disabled" role="columnheader" tabindex="0" aria-controls="sample_1">导入订单号</th> 
            </tr>
          </thead>
          <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php if ($this->_tpl_vars['re']['list']): ?>
            <?php $_from = $this->_tpl_vars['re']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
?>
              <tr> 
                <td>
                  <input type="checkbox" name="<?php echo $this->_tpl_vars['item']['id']; ?>
" value="<?php echo $this->_tpl_vars['item']['fedex_pakge_id']; ?>
" id="list-checkable" class="list-checkable" />
                </td>               
                <td><?php echo $this->_tpl_vars['item']['id']; ?>

                  <a href="<?php echo ((is_array($_tmp="order/order_ems_point")) ? $this->_run_mod_handler('site_url', true, $_tmp) : site_url($_tmp)); ?>
?ids=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_blank" class="btn green mini"> 打印</a>
                </td>
                <td>                  
                  <?php if ($this->_tpl_vars['item']['fedex_pakge_id'] == 0): ?>
                    未打包
                  <?php else: ?>
                    <?php echo $this->_tpl_vars['item']['fedex_pakge_id']; ?>

                  <?php endif; ?>
                </td> 
                <td><?php echo $this->_tpl_vars['item']['consignee']; ?>
</td>             
                <td><?php echo $this->_tpl_vars['item']['consignee_mobile']; ?>
</td>
                <td><?php echo $this->_tpl_vars['item']['province']; ?>
<?php echo $this->_tpl_vars['item']['city']; ?>
<?php echo $this->_tpl_vars['item']['area']; ?>
<?php echo $this->_tpl_vars['item']['consignee_address']; ?>
</td>
                <td><?php echo $this->_tpl_vars['item']['import_id']; ?>
</td> 
              </tr>
            <?php endforeach; endif; unset($_from); ?>
          <?php else: ?>
            <tr>
              <td colspan="99">暂时无数据</td>
            </tr>
          <?php endif; ?>
          </tbody>
        </table>
        <div class="row-fluid" id='act_btn'>
          <div class="input-append">
            <input value="0" type="checkbox" class="group-checkable list-checkable"  data-set='#product_all .list-checkable' />
          </div>
          <div class="input-append">
            <input type="hidden" name="fedex_pakge_id" value="<?php echo $this->_tpl_vars['re']['fedex_pakge_id']; ?>
"/> 
            <input type="hidden" name="batches_id" value="<?php echo $this->_tpl_vars['re']['batches_id']; ?>
"/> 
            <button type="button" data-type="1" class="btn green df_submit">加入包裹</button>
            <button type="button" data-type="2" class="btn red df_submit">取消包裹</button>
          </div>
          <div class="clear"></div>
          <div class="span6">
            <div class="dataTables_paginate paging_bootstrap pagination"> <?php echo $this->_tpl_vars['re']['page']; ?>
 </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END PAGE CONTAINER--> 
<div id="ajax-modal"   class="modal hide fade"   tabindex="-1"></div>
<div id="ajax-modal_1" class="modal hide fade"   tabindex="1"></div>
<div id="ajax-modal_2" class="modal hide fade"   tabindex="2"></div>
<!-- END PAGE --> 
<!-- END CONTAINER --> 
<!-- BEGIN FOOTER -->

<script>
  //close关闭窗口刷新主页
  jQuery(document).ready(function() {  
     App.init();
     try{load_ini()}catch(e){};
     $('a').bind('click',function(){
          var df=$(this).attr('href');
          if(df!='#'&&df!=''&&df!='javascript:;'&&$(this).hasClass('fancybox-button')!=true)
              load_sub();
     });
  }); 
</script> 

</body>
<!-- END BODY -->
</html>

<script type="text/javascript" src="/static/js/jquery.validate.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script> 
<script>

function load_ini()
{
  /* <?php if ($this->_tpl_vars['re']['list']): ?> */
  initTable1();
  /* <?php endif; ?> */
  checkchange();

  jQuery('.group-checkable').change(function () {
    var set = jQuery(this).attr("data-set");
    var checked = jQuery(this).is(":checked");
    jQuery(set).each(function () {
      if (checked) {
        $(this).attr("checked", true);
      } else {
        $(this).attr("checked", false);
      }
    });
    jQuery.uniform.update(set);
  }); 

}

var initTable1 = function() 
{        
  /*
   * Insert a 'details' column to the table
   */     
  var oTable = $('#table_1').dataTable( {
    "aoColumnDefs": [
      {"bSortable": false, "aTargets": [ 0 ] }
    ],
    "aaSorting": [[1, 'asc']],
    "aLengthMenu": [
       [5, 15, 20, -1],
        [5, 15, 20, "All"] // change per page values here
    ],
    "oLanguage": {
      "sProcessing": "正在加载中......",
      "sLengthMenu": "每页显示 _MENU_ 条记录",
      "sZeroRecords": "正在加载中......",
      "sEmptyTable": "查询无数据！",
      "sInfo": "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录",
      "sInfoEmpty": "显示0到0条记录",
      "sInfoFiltered": "数据表中共为 _MAX_ 条记录",
      "sSearch": "当前页数据搜索",
      "oPaginate": {
       "sFirst": "首页",
       "sPrevious": "上一页",
       "sNext": "下一页",
       "sLast": "末页"
      }
    },
    "bSort":false,
    "bInfo":false,
    "bPaginate":false,
    "bAutoWidth":true,
    "bStateSave":false,
    "sScrollX":'100%',
    //"sScrollY":"300px",
    // set the initial value
    "iDisplayLength": 10,
    //'sScrollXInner':true,
    //"bSortCellsTop":true,
  });   

  /* Formating function for row details */
  function fnFormatDetails ( oTable, nTr )
  {
    var aData = oTable.fnGetData( nTr );
    var sOut = aData[15];
    return sOut;
  }

  $('#table_1').on('click', ' tbody td .row-details', function () 
  {
    var nTr = $(this).parents('tr')[0];
    if ( oTable.fnIsOpen(nTr) )
    {
      /* This row is already open - close it */
      $(this).addClass("row-details-close").removeClass("row-details-open");
      oTable.fnClose( nTr );
    }
    else
    {
      /* Open this row */                
      $(this).addClass("row-details-open").removeClass("row-details-close");
      oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
    }
  });    
}

var checkchange = function()
{
  $('.df_submit').bind('click',function()
  {
    $modal=$('#ajax-modal');
    $('body').modalmanager('loading');
    $.fn.modal.defaults.width='';
    $.fn.modal.defaults.height='';
    var type = $(this).attr('data-type');
    $.post('<?php echo ((is_array($_tmp='package/package_fedex_pakge_id')) ? $this->_run_mod_handler('site_url', true, $_tmp) : site_url($_tmp)); ?>
?type='+type,$('#form_list').serialize(),function(msg){
      try
      {
        eval("var str="+msg);
        //操作成功
        if(str.type==1)
        {
          //错误提示
          error1.show();
          success1.hide();
          error1.find('span').html(str.msg);
        }
        else if(str.type==2)
        {

        }
        else if(str.type==3)
        {
          location.reload();
        }
        setTimeout(function(){
          $modal.load('<?php echo ((is_array($_tmp="product/error_msg")) ? $this->_run_mod_handler('site_url', true, $_tmp) : site_url($_tmp)); ?>
?msg='+encodeURI(str.msg),'', function()
          {
            $modal.modal();
          });
        }, 300);
      }
      catch(e)
      { 
        $('body').modalmanager('removeLoading');
        setTimeout(function(){
          $modal.load('<?php echo ((is_array($_tmp="product/error_msg")) ? $this->_run_mod_handler('site_url', true, $_tmp) : site_url($_tmp)); ?>
?msg='+encodeURI('系统异常'),'', function()
          {
            $modal.modal();
          });
        }, 300);
      };
    });
  });
};

</script>

