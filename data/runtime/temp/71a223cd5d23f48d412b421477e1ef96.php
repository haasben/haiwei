<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"./application/admin/template/system\customvar_index.htm";i:1573115083;s:58:"D:\WWW\haiwei\application\admin\template\public\layout.htm";i:1571728724;s:58:"D:\WWW\haiwei\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<script type="text/javascript" src="/public/static/admin/js/clipboard.min.js"></script>
<body class="bodystyle" style="overflow-y: scroll; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width: auto;">
    <div class="flexigrid">
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w20" axis="col0">
                            <div class="tc"></div>
                        </th>
                        <th abbr="article_time" axis="col4" class="w250">
                            <div class="tl">变量名称</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="">表单类型</div>
                        </th>
                        <th axis="col1" class="w120">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto; min-height: auto;">
            <form id="PostForm">
                <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                    <table style="width: 100%">
                        <tbody id="tbody">
                        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="50">
                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的数据
                                </td>
                            </tr>
                        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                            <tr class="tr">
                                <td class="sign">
                                    <div class="w20 tc">
                                        <input type="hidden" name="attr_id[]" value="<?php echo $vo['attr_id']; ?>">
                                    </div>
                                </td>
                                <td>
                                    <div class="w250 tl">
                                        <input type="text" name="attr_name[]" value="<?php echo $vo['attr_name']; ?>" style="width: 200px;" >
                                    </div>
                                </td>
                                <td style="width: 100%">
                                    <div style="">
                                        <select name="attr_input_type[]">
                                            <option value="0" <?php if($vo['attr_input_type'] == '0'): ?>selected<?php endif; ?>>单行文本</option>
                                            <option value="2" <?php if($vo['attr_input_type'] == '2'): ?>selected<?php endif; ?>>多行文本</option>
                                            <option value="3" <?php if($vo['attr_input_type'] == '3'): ?>selected<?php endif; ?>>上传图片</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="w120 tl">
                                        <?php if(is_check_access('System@customvar_del') == '1'): if($main_lang == $admin_lang): ?>
                                            <a class="btn red" href="javascript:void(0);" data-id="<?php echo $vo['id']; ?>" onClick="customvar_del(this);"><i class="fa fa-trash-o"></i>删除</a>
                                            <?php endif; endif; ?>
                                        <a class="btn blue <?php echo $vo['attr_var_name']; ?>" href="javascript:void(0);" onclick="showtext('<?php echo $vo['attr_var_name']; ?>');" data-clipboard-text="{<?php  echo 'eyou:global name=\''; ?><?php echo $vo['attr_var_name'];  echo '\' /'; ?>}">标签调用</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <?php if($main_lang == $admin_lang): ?>
                <div class="fbutton">
                    <a href="javascript:void(0);" onclick="customvar_add();">
                        <div class="add" title="新增">
                            <span class="red"><i class="fa fa-plus"></i>新增</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
                <div class="fbutton">
                    <a href="javascript:void(0);" data-url="<?php echo url('System/customvar_save', ['_ajax'=>1]); ?>" onclick="customvar_save(this);">
                        <div class="add" title="保存">
                            <span class=""><i class="fa fa-save"></i>保存</span>
                        </div>
                    </a>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
    </div>
</div>
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });
    });

    function showtext(classname){
        var clipboard1 = new Clipboard("."+classname);clipboard1.on("success", function(e) {layer.msg("复制成功");});clipboard1.on("error", function(e) {layer.msg("复制失败！请手动复制", {icon:2});}); 
    }

    function customvar_add(){
        var line = $('#tbody tr').length + 1;
        var html = '';
        html += '<tr class="tr" id="tr_'+line+'">';
        html += '    <td class="sign">';
        html += '      <div class="w20 tc"> ';
        html += '      </div>';
        html += '    </td>';
        html += '    <td>';
        html += '      <div class="w250 tl"> ';
        html += '        <input type="text" name="attr_name[]" value="" style="width: 200px;">';
        html += '      </div>';
        html += '    </td>';
        html += '    <td style="width: 100%">';
        html += '      <div style="">';
        html += '        <select name="attr_input_type[]">';
        html += '            <option value="0">单行文本</option>';
        html += '            <option value="2">多行文本</option>';
        html += '            <option value="3">上传图片</option>';
        html += '        </select>';
        html += '      </div>';
        html += '    </td>';
        html += '    <td class="">';
        html += '       <div class="w120 tl">';
        html += '          <a href="javascript:void(0);" class="btn red" onclick="$(\'#tr_'+line+'\').remove();"><i class="fa fa-trash-o"></i>删除</a> ';
        html += '          <a class="btn blue" href="javascript:void(0);" style="color:#ccc;    cursor:not-allowed!important;">标签调用</a>';
        html += '       </div>';
        html += '    </td>';
        html += '</tr>';

        if ($('input[name*=attr_name]').length == 0) {
            $('#tbody').html(html);
        } else {
            $('#tbody').append(html);
        }
    }

    // 提交
    function customvar_save(obj){
        if ($('input[name*=attr_name]').length == 0) {
            layer.alert('至少新增一个自定义变量！', {icon: 2, title:false});
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            type : 'post',
            url : $(obj).attr('data-url'),
            data : $('#PostForm').serialize(),
            dataType : 'json',
            success : function(res){
                layer.closeAll();
                if(res.code == 1){
                    layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                        parent.gourl(res.url);
                    });
                }else{
                    showErrorMsg(res.msg);
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(ey_unknown_error, {icon: 2, title:false});
            }
        });
    }

    function customvar_del(obj) {
        layer.confirm('删除到回收站，确认删除？', {
                title: false,
                btn: ['确定','取消'] //按钮
            }, function(){
                // 确定
                layer_loading('正在处理');
                $.ajax({
                    type : 'post',
                    url : "<?php echo url('System/customvar_del'); ?>",
                    data : {del_id:$(obj).attr('data-id'),_ajax:1},
                    dataType : 'json',
                    success : function(data){
                        layer.closeAll();
                        if(data.code == 1){
                            layer.msg(data.msg, {icon: 1});
                            window.location.reload();
                            // $('#dl_'+$(obj).attr('data-attr_var_name')).remove();
                        }else{
                            layer.msg(data.msg, {icon: 2,time: 2000});
                        }
                    }
                });
            }, function(index){
                layer.close(index);
                return false;// 取消
            }
        );
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