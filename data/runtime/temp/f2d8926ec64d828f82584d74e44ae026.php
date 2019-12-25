<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"./application/admin/template/guestbook\attribute_edit.htm";i:1573115083;s:58:"D:\WWW\haiwei\application\admin\template\public\layout.htm";i:1571728724;s:58:"D:\WWW\haiwei\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>编辑留言属性</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Guestbook/attribute_edit'); ?>" method="post" onsubmit="return false;">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="typeid"><em>*</em>所属栏目</label>
                </dt>
                <dd class="opt"> 
                    <?php echo $select_html; ?>
                    <input type="hidden" name="typeid" id="typeid" value="<?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:''); ?>">
                    <span class="err" id="err_typeid" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="ac_name"><em>*</em>属性名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="attr_name" value="<?php echo $field['attr_name']; ?>" id="attr_name" class="input-txt">
                    <span class="err" id="err_attr_name" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="attr_input_type"><em>*</em>属性类型</label>
                </dt>
                <dd class="opt">
                    <select name="attr_input_type" id="attr_input_type">
                    <?php if(is_array($attrInputTypeArr) || $attrInputTypeArr instanceof \think\Collection || $attrInputTypeArr instanceof \think\Paginator): $i = 0; $__LIST__ = $attrInputTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $key; ?>" <?php if($field['attr_input_type'] == $key): ?>selected="true"<?php endif; ?>><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err" id="err_attr_input_type" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row attr_input_type2 <?php if(!in_array(($field['attr_input_type']), explode(',',"1,3,4"))): ?>none<?php endif; ?>">
                <dt class="tit">
                    <label for="attr_values"><em>*</em>可选值列表</label>
                </dt>
                <dd class="opt">
                    <textarea rows="10" cols="30" name="attr_values" id="attr_values" class="input-txt" style="height:100px;" placeholder="一行代表一个可选值" onkeyup="this.value=this.value.replace(/[\|]/g,'');" onpaste="this.value=this.value.replace(/[\|]/g,'');"><?php echo $field['attr_values']; ?></textarea>
                    <span id="err_attr_values" class="err" style="color:#F00; display:none;"></span>
                    <p class="notic">一行代表一个可选值</p>
                </dd>
            </dl>
            <div class="bot">
                <input type="hidden" name="attr_id" value="<?php echo $field['attr_id']; ?>">
                <a href="JavaScript:void(0);" onclick="check_submit('post_form');"  class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $('select[name=attr_input_type]').click(function(){
            var val = parseInt($(this).val());
            if (-1 < $.inArray(val, [1,3,4])) {
                $('.attr_input_type2').show();
            } else {
                $('.attr_input_type2').hide();
            }
        });
    });

    /**
    * ajax 提交属性 到后台去验证然后回到前台提示错误
    * 验证通过后,再通过 form 自动提交
    */
    function check_submit(form_id)
    {
        if ($('#typeid').val() == 0) {
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        if($.trim($('input[name=attr_name]').val()) == ''){
            showErrorMsg('属性名称不能为空！');
            $('input[name=attr_name]').focus();
            return false;
        }
        var attr_input_type = parseInt($('#attr_input_type').val());
        if (-1 < $.inArray(attr_input_type, [1,3,4]) && $.trim($('#attr_values').val()) == '') {
            showErrorMsg('可选值列表不能为空！');
            $('#attr_values').focus();
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            type : "POST",
            url  : "<?php echo url('Guestbook/attribute_edit', ['_ajax'=>1]); ?>",
            data : $('#'+form_id).serialize(),// 你的formid
            dataType: "JSON",
            error: function(request) {
                layer.closeAll();
                layer.alert(ey_unknown_error, {icon: 5, title:false});
                return false;
            },
            success: function(v) {
                layer.closeAll();
                if(v.status == 1)
                {                   
                    if(v.hasOwnProperty('data')){
                        if(v.data.hasOwnProperty('url')){
                            location.href = v.data.url;
                        }else{
                            location.href = location.href;
                        }
                    }else{
                        location.href = location.href;
                    }
                    return true;
                } else {     
                    showErrorMsg(v.msg);                       
                    return false;
                }
            }
        });   
    }
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>