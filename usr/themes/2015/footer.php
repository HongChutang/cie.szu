<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

 <div class="footer">
        <div id="border"></div>
        <div id="bottom_ul" style="margin:0 auto;text-align:center;width:1100px;">
            <ul>
                <li class="top_nav"><a href="" style="font-size:17px">学院概况</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/

38.html">学院介绍</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/

49.html">学院沿革</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/

50.html">学院建设</a></li>
            </ul>
            <ul>
                <li class="top_nav"><a href="" style="font-size:17px">学院通知</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/bkjx/">本科教学</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xssw/">学生事务</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/yjssw/">研究生事务</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/jssw/">教师事务</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/dytz">党员通知</a></li>
            </ul>
            <ul>
                <li class="top_nav"><a href="" style="font-size:17px">科学研究</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/kydt/">科研动态</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/kypt/">科研平台</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/kycg/">科研成果</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xsjl/">学术交流</a></li>
            </ul>
            <ul>
                <li class="top_nav"><a href="" style="font-size:17px">师资队伍</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/jsfc/">教师风采</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/sssds/">硕士生导师</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/bssds/">博士生导师</a></li>
            </ul>
            <ul>
                <li class="top_nav"><a href="" style="font-size:17px">人才培养</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/bkspy/">本科生培养</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/qrzyjs/">全日制研究生</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/fqrzyjs/">非全日制研究生</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/crjy/">成人教育</a></li>
            </ul>
            <ul>
                <li class="top_nav"><a href="" style="font-size:17px">校友之窗</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>/index.php/archives/

65.html">校友去向</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/byzp/">毕业照片</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xyjz/">校友讲座</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xyjz/">校友捐赠</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xyzp/">校友招聘</a></li>
            </ul>
        </div> 
        <div id="contect" style="clear:both;width:950px;height:auto;margin:0 auto;margin-top:80px;position:relative">
            <ul style="text-align: left;">
                <li>地址：深圳大学南校区信息工程学院(深圳市南山区南海大道3688号)&nbsp;&nbsp;邮政编码：518060</li>
                <li></li>
                <li>联系电话：0755-26536122; &nbsp;&nbsp;  传真号码：0755-26536198</li>
                <li></li>
                <li>电子邮箱：cie@szu.edu.cn</li>
                <li>版权所有：深圳大学信息工程学院</li>
            </ul>
        </div>
            <label id="theme_url" style="display:none"><?php $this->options->themeUrl(); ?></label> 
    </div>
<script src="<?php $this->options->themeUrl('js/list.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-2.1.4.js'); ?>"></script>
    
<!-- logo-->
<script>
  theme_url = $("#theme_url").text();
$(document).ready(function(){
     $('.logo').hover(function(){          
         $(".logo").attr("src",theme_url+"image/szu_logo.png"); 
        }, function(){
            $(".logo").attr("src",theme_url+"image/logo.png");          
        });
        });    
</script>
    <script type="text/javascript"> 
$(document).ready(function(){
    $("#kycg").click(function(){
    $("#zhankai").slideToggle(5); 
  });
    $("#bkspy").click(function(){
    $("#zhankai1").slideToggle(5);  
  });
    $("#qrzyjs").click(function(){
    $("#zhankai2").slideToggle(5);  
  });
    $("#fqrzyjs").click(function(){
    $("#zhankai3").slideToggle(5);  
  });
    $("#crjy").click(function(){
    $("#zhankai4").slideToggle(5);  
  });
    $("#center_img1").click(function(){
    self.location='index.php/archives/253.html'; 
  });
    $("#center_img2").click(function(){
    self.location='index.php/archives/253.html'; 
  });
    $("#center_img3").click(function(){
    self.location='index.php/archives/253.html';
  });
     
});
</script>
<?php $this->footer(); ?>
</body>
</html>