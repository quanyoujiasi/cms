<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商城管理后台</title>
    <link rel="stylesheet" href="/Public/css/reset.css">
    <link rel="stylesheet" href="/Public/css/admin/init.css">
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/admin_menu.js"></script>
</head>
<body>
    <div class="content">
        <div class="title">
            添加文章
        </div>
        <div class="mess">
            <span>请按照格式添加!</span>
        </div>
        <form action="<?php echo U('Admin/Article/addAction');?>" method="post" >
            <p>
                <label>文章标题</label>
                <input type="text" name="title" />
            </p>
            <p>
                <label>所属栏目</label>
                <select name="cate">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cid"]); ?>"><?php echo ($vo["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </p>
            <p>
                <label>文章简介</label>
                <input type="text" name="description" />
            </p>
            <p>
                <label>作者</label>
                <input type="text" name="author" />
            </p>
            <p>
                <label>添加时间</label>
                <input type="text" name="add_time" value="<?php echo ($currentTime); ?>"/>
            </p>
            <p>
                <label>内容</label>
                    <!-- 加载编辑器的容器 -->
<script id="container" name="content" type="text/plain" cols="10" rows="20">
点击这里开始编辑你的文章...
</script>
<!-- 配置文件 -->
<script type="text/javascript" src="../../../../Public/js/ue/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="../../../../Public/js/ue/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>

            </p>
            <!--<p>-->
                <!--<label>是否显示</label>-->
                <!--<input type="radio" name="status"  value="1" checked="checked"/> 显示-->
                <!--<input type="radio" name="status" value="0"/> 屏蔽-->
            <!--</p>-->
            <!--<p>-->
                <!--<label>排序</label>-->
                <!--<input type="text" name="ord" value="0"/>-->
            <!--</p>-->
            <p>　　　　　　　　　　　　　　　　　　　　<!--此处有十个实体空格-->
                <input type="submit" value="提交" />
            </p>
        </form>
    </div>
    <script type="text/javascript">
        $(function(){
            $('.cate-list li:even').css({background:'#fff'});
            $('.cate-list li:odd').css({background:'#ddd'});


            $('td > img').hover(
                function(e){
                    $this = $(this);
                    var pos = $this.position();
                    obj = $this.after('<div class="big-img"><img src="<?php echo WEB_PATH; ?>'+$this.attr('src')+'"></div>');
                    obj.css({top:pos.top,left:pos.left});
                },
                function(){
                    obj.next('.big-img').remove();
                }
            );

            //标签选择
            $('input[name=but]').on('click' , function(){
                var sval = $('select[name=tags] option:selected').val();
                var stext = $('select[name=tags] option:selected').text();

                var html = '<div class="tag-list">'+stext+' <input type="hidden" name="tids[]" value='+sval+'><span>X</span></div>';
                var i = 0;

                $('#tags input').each(function(){
                    if($(this).val() == sval)
                    {
                        i++;
                        return false;
                    }
                });

                if(i == 0)
                {
                    $('#tags').css('display','block');
                    $('.clear').before(html);
                }else{
                    alert('当前标签已经被选中!');
                }
            });

            $('#tags').on( 'click' , 'span' ,function(){
                $(this).parent().remove();
                var len = $('#tags').children('.tag-list').length;
                if(len == 0)
                {
                    $('#tags').css('display','none');
                }
            });

        });
    </script>
    </body>
</html>