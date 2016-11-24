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
                <input type="text" name="add_time" />
            </p>
            <p>
                <label>内容</label>
                <textarea>

                </textarea>
            </p>
            <p>
                <label>是否显示</label>
                <input type="text" name="status" />
            </p>
            <p>
                <label>排序</label>
                <input type="text" name="ord" />
            </p>
            <p>　　　　　　　　　　　　　　　　　　　　
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