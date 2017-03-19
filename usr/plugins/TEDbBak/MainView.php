<?php
include 'common.php';
include 'header.php';
include 'menu.php';
?>
<style type="text/css">
   .DbBak_KGSOFT {
       padding-bottom:20px;
   }
   .DbBak_KGSOFT .btna {
       display:inline-block;
       width:100px;height:100px;margin:0 auto;
       margin-bottom:20px;border:1px dashed #999;
   }
   .DbBak_KGSOFT .subArea {
       min-height:300px;
   }
   .DbBak_KGSOFT .subArea .tips {
       display:inline-block;width:150px;float:right;margin-right:20px;font-size:12px;
       border:1px solid #999;padding:5px;
   }
   .DbBak_KGSOFT .subArea .history ul {
       margin:0;padding:0;
   }
   .DbBak_KGSOFT .subArea .history ul li {
       list-style:none;margin-top:10px;width:100%;clear:both;
   }
   .DbBak_KGSOFT .subArea .history input[type="button"] {
       margin-left:20px;
   }
</style>
<div class="main">
    <div class="body container">
        <?php include 'page-title.php'; ?>
        <div class="colgroup typecho-page-main" role="main">
            <div class="col-mb-12">
                <div class="DbBak_KGSOFT">
                    <fieldset class="col-mb-5">
                        <legend>备份数据库</legend>
                        <div class="subArea">
                            <button id="btnBakup" class="btna" type="button">立即备份</button>
                            <div class="history">
                                <div>历史备份</div>
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-mb-5">
                        <legend>恢复数据库</legend>
                        <div class="subArea">
                            <button id="btnRestore" class="btna" type="button">一键恢复</button>
                            <span class="tips">你可以选择‘一键恢复’直接恢复最近一次的备份，也可以从下面的备份列表里选择某个日期的备份进行恢复</span>
                            <div class="history" id="restoreDiv">
                                <div>历史备份</div>
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <footer class="col-mb-12">
                    <p>本插件由<a href="http://www.blog.kgsoft.cn" target="_blank">一介码农</a>提供，感谢使用!</p>
                    <p>如有问题或建议请发<a href="mailto:rushi_wowen@163.com">邮件</a></p>
                </footer>
            </div>
        </div>
    </div>
</div>

<?php
include 'copyright.php';
include 'common-js.php';
include 'footer.php';
?>

<script>
    (function () {
        var toggleELem = function(e) {
            if(!e){return false};
            if (e[0].style.display != "block") {
                e[0].style.display = "block";
            } else {
                e.get(0).style.display = "none";
            }
        }

        var restore = function(filename) {
            if (! confirm("确认恢复？")) {
                return;
            }
            var url = "<?php $options->index('/action/kgsoft_dbbak'); ?>";
            $.ajax({
                url:url,
                type:"GET",
                data:{"opt":"restore", "file":filename},
                success:function(data) {
                    alert("恭喜你，恢复成功");
                },
                error:function(xhr, status) {
                    alert("还原失败，请检查备份的文件，或者导入 phpMyAdmin 进行恢复");
                }
            });
        };

        var createHisList = function(data) {
            if (! data || data.length == 0) {
                return;
            }
            var xhtmlDown = "";
            var xhtmlBak = "";

            for (var i = 0; i < data.length; i++) {
                var item = data[i];
                var baseUrl = "<?php $options->index('/action/kgsoft_dbbak'); ?>";
                var actionDown = baseUrl + "?opt=down&file=" + item;
                xhtmlDown += '<li><a href="' + actionDown + '" target="_blank">' + item + '【点击下载此文件】</a></li>';
                xhtmlBak += '<li><a href="javascript:void(0);" val="' + item + '">' + item + '【还原此备份】</a></li>';
            }
            $(".DbBak_KGSOFT .history ul").eq(0).empty().html(xhtmlDown);
            $(".DbBak_KGSOFT .history ul").eq(1).empty().html(xhtmlBak);
            $(".DbBak_KGSOFT #restoreDiv ul li a").click(function() {
                restore($(this).attr("val"));
            });
        };
        var showBaklist = function() {
            var url = "<?php $options->index('/action/kgsoft_dbbak'); ?>";
            $.ajax({
                url:url,
                type:"GET",
                dataType:"json",
                data:{"opt":"history"},
                success:function(data) {
                    createHisList(data);
                },
                error:function(xhr, status) {
                    alert(status);
                }
            });
        };
        showBaklist();
        $(".DbBak_KGSOFT #btnBakup").click(function() {
            var url = "<?php $options->index('/action/kgsoft_dbbak'); ?>";
            $.ajax({
                url:url,
                type:"GET",
                data:{"opt":"bak"},
                success:function(data) {
                    showBaklist();
                    alert("备份成功");
                },
                error:function(xhr, status) {
                    alert(status);
                }
            });
        });
        $(".DbBak_KGSOFT #btnRestore").click(function() {
            var links = $(".DbBak_KGSOFT #restoreDiv ul li a");
            if (links.length <= 0) {
                alert("你还没有备份文件，先备份撒！");
                return;
            }
            restore(links.eq(0).attr("val"));
        });
        
    })();
</script>