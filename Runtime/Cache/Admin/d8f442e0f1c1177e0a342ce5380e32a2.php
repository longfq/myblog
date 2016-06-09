<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="<?php echo (JS_URL); ?>jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
    <!-- <script src="<?php echo (ADMIN_JS_URL); ?>"></script> -->
    <!-- <link rel="stylesheet" href="<?php echo (ADMIN_JS_URL); ?>add.js"> -->
    <!-- <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>add.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/font-awesome.min.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/froala_editor.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/froala_style.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/code_view.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/image_manager.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/image.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/table.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <link rel="stylesheet" href="/blog/Public/Admin/css/index.css">

  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 65%;
      margin: auto;
      text-align: left;
    }

  </style>


</head>
<body>
<div class="header">welcome</div>
<div class="logout pull-right ">
<a data-toggle="tooltip" data-placement="top" title="退出登陆" onclick="if (confirm('sure')) return true; else return false;" href="<?php echo U('logout');?>" target="_top">安全退出</a>
</div>
<div class="nav nav-pills menu">
<!-- <nav class=""> -->
  <div class="na">

    <ul class="nav nav-pills nav-stacked">
     <!-- <ul class="nav nav-tabs" role="tablist"> -->
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">主页信息</a></li>
    <li role="presentation" ><a href="#Labelclass" aria-controls="Labelclass" role="tab" data-toggle="tab">标签分类</a></li>
    <li role="presentation"><a href="#ContentsSummary" aria-controls="ContentsSummary" role="tab" data-toggle="tab">目录摘要</a></li>
    <li role="presentation"><a href="#Manageblog" aria-controls="Manageblog" role="tab" data-toggle="tab">博客管理</a></li>
    <li role="presentation"><a href="#MessageManage" aria-controls="MessageManage" role="tab" data-toggle="tab">留言管理</a></li>
    <li role="presentation"><a href="#UserInfo" aria-controls="UserInfo" role="tab" data-toggle="tab">用户信息</a></li>

     <!-- <li class=" pull-right logout" >
        <a onclick="if (confirm('sure')) return true; else return false;" href="<?php echo U('logout');?>" target="_top">安全退出</a>
    <form action="<?php echo U('logout');?>">
        <button class="btn"  onclick="if (confirm('确认退出？')) return true; else return false;" type="submit" value="" >安全退出</button>
         </form>
     </li> -->

      </ul>

<script>
//     $(function(){
//     $('.logout').click(function() {
//     $(this).load();
// });

// });
</script>
  </div>
<!-- </nav> -->
</div>

<div class="body" id="body">
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <div class="table-responsive">
            <table class="table table-striped table-bordered " >
            <div class="">
            <tr>
                <td align="right" width="200px">11</td>
                <td width="550px">22</td>
            </tr>
            <tr>
                <td align="right" width="200px">11</td>
                <td width="550px">22</td>
            </tr>
            <tr>
                <td align="right" width="200px">11</td>
                <td width="550px">22</td>
            </tr>
            </div>

  </table>
</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="Labelclass">...2</div>
    <div role="tabpanel" class="tab-pane" id="ContentsSummary">.3..</div>
    <div role="tabpanel" class="tab-pane" id="Manageblog"></div>
    <div role="tabpanel" class="tab-pane" id="MessageManage">.5..</div>
    <div role="tabpanel" class="tab-pane" id="UserInfo">..6.</div>
</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/entities.min.js"></script>
  <script>
      $(function () {
        $('#edit').froalaEditor({
            heightMin: 210,
//            heightMax: 800,

        });
    });

      // $(function(){
      //   $('#edit')
      //     .on('froalaEditor.initialized', function (e, editor) {
      //       $('#edit').parents('form').on('submit', function () {
      //         console.log($('#edit').val());
      //         return false;
      //       })
      //     })
      //     .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})

      // });
  </script>
  <!-- <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script> -->
<script>

$(function(){
  $('.nav a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
   });
$(document).ready(function() {
    $('#Manageblog').load("<?php echo U('add');?>");
});
</script>
</body>
</html>