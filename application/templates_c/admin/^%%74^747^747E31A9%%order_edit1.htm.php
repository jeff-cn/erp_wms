<?php /* Smarty version 2.6.20, created on 2017-05-19 09:47:54
         compiled from order_edit1.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'site_url', 'order_edit1.htm', 166, false),)), $this); ?>
<div class="container-fluid">
<div class="row-fluid">
  <div class="span12">
    <div class="form"> 
      <!-- BEGIN FORM-->
      <form action="" id="form_order_eidt" class="form-horizontal" method="post" >
        <table class="table table-bordered table-hover dataTable" id="table_1">
                    <div id='alert-error_1' class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>提交失败</span> </div>
          <div id='alert-success_1' class="alert alert-success hide">
            <button class="close" data-dismiss="alert"></button>
            <span>提交成功</span> </div>
          <thead>
            <tr>
              <th bgcolor="#E2EEFE" colspan="99">订单信息</th>
            </tr>
          </thead>
          <tr>
            <th width="250px">订单编号：<?php echo $this->_tpl_vars['re']['id']; ?>
</th>
            <th width="*">会员ID：<?php echo $this->_tpl_vars['re']['userid']; ?>
</th>
          </tr>
          
          <?php if ($this->_tpl_vars['re']['status'] > 0 && $this->_tpl_vars['re']['status'] < 4): ?>
            
            <thead>
              <tr>
                <th bgcolor="#E2EEFE" colspan="99">收货信息修改</th>
              </tr>
            </thead>
            <tr>
              <td colspan="99"> 
                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">收获人姓名<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="consignee" value="<?php echo $this->_tpl_vars['re']['consignee']; ?>
" class="m-wrap small" > 
                  </div>
                </div> 

                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">身份证<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="card_no" value="<?php echo $this->_tpl_vars['re']['card_no']; ?>
" class="m-wrap" > 
                  </div>
                </div>  

                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">收获人手机<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="consignee_mobile" value="<?php echo $this->_tpl_vars['re']['consignee_mobile']; ?>
" class="m-wrap small" > 
                  </div>
                </div> 

                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">省<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="province" value="<?php echo $this->_tpl_vars['re']['province']; ?>
" class="m-wrap small" > 
                  </div>
                </div>  

                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">市<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="city" value="<?php echo $this->_tpl_vars['re']['city']; ?>
" class="m-wrap small" > 
                  </div>
                </div>  

                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">区<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="area" value="<?php echo $this->_tpl_vars['re']['area']; ?>
" class="m-wrap small" > 
                  </div>
                </div>  

                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">收获人地址<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="consignee_address" value="<?php echo $this->_tpl_vars['re']['consignee_address']; ?>
" class="m-wrap span5" > 
                  </div>
                </div>   
          
          <?php else: ?>
            
            <thead>
              <tr>
                <th bgcolor="#E2EEFE" colspan="99">订单状态修改</th>
              </tr>
            </thead>
            <tr>
              <td colspan="99"> 
                <div class="control-group" style="margin-top:20px;">
                  <label class="control-label">订单状态<span class="required">*</span></label>
                  <div class="controls">
                    <?php if ($this->_tpl_vars['re']['status'] == 4): ?> 
                      <span class="btn yellow mini">已发货</span>
                    <?php elseif ($this->_tpl_vars['re']['status'] == 5): ?> 
                      <span class="btn green mini">国内已通关</span>
                    <?php elseif ($this->_tpl_vars['re']['status'] == -2): ?> 
                      <span class="btn black mini">通关失败</span>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['re']['status'] == 4): ?>
                      <select name="status_modify" aria-controls="sample_1"  class="form_2_select2 m-wrap span2">
                        <option selected="selected" value="choose">修改状态</option>
                        <option value="5">国内已通关</option>
                        <option value="-2">通关失败</option>
                      </select>
                    <?php elseif ($this->_tpl_vars['re']['status'] == 5): ?>
                      <select name="status_modify" aria-controls="sample_1"  class="form_2_select2 m-wrap span2">
                        <option selected="selected" value="choose">修改状态</option>
                        <option value="-2">通关失败</option>
                      </select>
                    <?php elseif ($this->_tpl_vars['re']['status'] == -2): ?> 
                      <select name="status_modify" aria-controls="sample_1"  class="form_2_select2 m-wrap span2">
                        <option selected="selected" value="choose">修改状态</option>
                        <option value="5">国内已通关</option>
                      </select>
                    <?php endif; ?>
                  </div>
                </div>
         
          <?php endif; ?>
              
              <div class="control-group" style="margin-top:20px;">
                <label class="control-label">备注<span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="return_con" value="<?php echo $this->_tpl_vars['re']['return_con']; ?>
" class="m-wrap span5" > 
                </div>
              </div>                   
            </td>
          </tr>
      
          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['re']['id']; ?>
"/>
          <input type="hidden" name="status" value="<?php echo $this->_tpl_vars['re']['status']; ?>
"/>
        </table>
        <div class="form-actions">
          <button type="button" id='submit_order_eidt' class="btn red">提交</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="/static/js/jquery.validate.min.js?v=<?php echo $this->_tpl_vars['vsersion']; ?>
"></script> 
<script>

function load_ini()
{

  modify_states();
  
}

var modify_states = function()
{  
  var error1=$('#alert-error_1'); 
  var success1=$('#alert-success_1'); 
  var form1 = $('#form_order_eidt');
  $("#submit_order_eidt").click(function(){
    if(form1.valid()==true)
    {
      $modal=$('#ajax-modal');
      error1.hide();
      success1.show();
      success1.find('span').html('正在提交...........');
      $('body').modalmanager('loading');
      $.post('<?php echo ((is_array($_tmp="order/order_edit")) ? $this->_run_mod_handler('site_url', true, $_tmp) : site_url($_tmp)); ?>
',form1.serialize(),function(msg)
      {
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
            //提交成功
            error1.hide();
            success1.show();
            success1.find('span').html('提交成功');
            location.reload();
          }
          else if(str.type==3)
          {
            //刷新主页面
            f_main_index();
            return true;
          }
          setTimeout(modal_msg(str.msg),300);
        }
        catch(e)
        { 
          $('body').modalmanager('removeLoading');
          success1.hide();
          error1.find('span').html('系统异常');
          error1.show();
          setTimeout(modal_msg('系统异常'),300);
        };
      });
    }
  }); 
}

</script>