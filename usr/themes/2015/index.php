<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho Replica Theme 
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title></title>
 </head>
 <body>
     <section id="rt-showcase-surround">
    <div id="rt-showcase" class="slider-container rt-overlay-dark">
        <div class="rt-container slider-container">
            <div class="rt-grid-12 rt-alpha rt-omega">
                <div class="csslider1 autoplay">
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_0" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_1" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_2" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_play1" type="radio" class="cs_anchor" checked>
                    <input name="cs_anchor1" autocomplete="off" id="cs_pause1" type="radio" class="cs_anchor" >
                    <ul>
                        <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;height: 500px;min-height: 500px;">
                            <a href="#" style="cursor:default"><img src="<?php $this->options->themeUrl('image/banner/banner2.jpg'); ?>" style="width: 100%;height: 500px;min-height: 500px;"></a>
                        </div>
                        <li class="num0 img">
                            <a href="#" style="cursor:default"><img src="<?php $this->options->themeUrl('image/banner/banner2.jpg'); ?>" alt="信工楼" title="信工楼" /></a>
                        </li>
                        <li class="num1 img">
                            <a href="#" style="cursor:default"><img src="<?php $this->options->themeUrl('image/banner/banner1.jpg'); ?>" alt="文科楼" title="文科楼" /></a>
                        </li>
                        <li class="num2 img">
                            <a href="#" style="cursor:default"><img src="<?php $this->options->themeUrl('image/banner/banner3.jpg'); ?>" alt="南图书馆" title="南图书馆" /></a>
                        </li>
                    </ul>
                    <div class="cs_description">
                        <label class="num0">
                            <span class="cs_title"><span class="cs_wrapper">深圳大学-信息工程学院</span></span>
                    </div>
                    
                    <div class="cs_arrowprev">
                        <label class="num0" for="cs_slide1_0"></label>
                        <label class="num1" for="cs_slide1_1"></label>
                        <label class="num2" for="cs_slide1_2"></label>
                    </div>
                    <div class="cs_arrownext">
                        <label class="num0" for="cs_slide1_0"></label>
                        <label class="num1" for="cs_slide1_1"></label>
                        <label class="num2" for="cs_slide1_2"></label>
                    </div>
                    
                    <div class="cs_bullets">
                        <label class="num0" for="cs_slide1_0">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num1" for="cs_slide1_1">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num2" for="cs_slide1_2">
                            <span class="cs_point"></span>
                        </label>
                    </div>  
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section> <!-- /slider -->
<div id="float"style="z-index:1500;position:fixed;top:488px;height:110px;width:165px;right:5px;border:0px solid green;">
    <a href="<?php $this->options->siteUrl(); ?>/index.php/category/rczp/"><img src="<?php $this->options->themeUrl('image/zhaoping.jpg'); ?>" alt=""></a>
</div>
<div class="article" style="padding:0">
    <div class="article-left" style="margin:0">
        <!-- start Basic Jquery Slider -->
        <div id="banner-fade" style="margin:0;top:0;">
        <ul class="bjqs" style="display:block;border-radius: 5px;">
          <li><img id="center_img1" src="<?php $this->options->themeUrl('image/1.png'); ?>" title="深圳大学信息工程学院开学典礼"></li>
          <li><img id="center_img2" src="<?php $this->options->themeUrl('image/2.png'); ?>" title="学生们认真听讲"></li>
          <li><img id="center_img3" src="<?php $this->options->themeUrl('image/3.png'); ?>" title="深圳大学信息工程学院老师致辞"></li>
        </ul>
    </div>
        <!-- end Basic jQuery Slider -->
      <!-- End outer wrapper -->
      <script class="secret-source">
        jQuery(document).ready(function($) {
          $('#banner-fade').bjqs({
            height      : 357,
            width       : 642,
            responsive  : true
          });
        });
      </script>
    </div>
    <div class="article-right">
        <h4>学院新闻</h4>
        <span class="article-right-more">
        <a target="_blank" href="<?php $this->options->siteUrl(); ?>index.php/category/news/">更多...</a>
        </span>
        <hr size="0.05" noshade="" color="#E9DCDC" style="margin-top: 0px;">
        <ul>
            <?php $this->widget('Widget_Archive@news','pageSize=8&type=category', 'slug=news')->parse('<li><a href="{permalink}"><span class="limit0" title="{title}">{title}</span></a><span class="time">{year}-{month}-{day}</span></li>'); ?>
        </ul>
    </div>
</div>
<div class="body">
        <div class="list"style="margin-left:0;">
            <div class="list-title">
                <h4>学院通知</h4>
                <span class="list-title-more">
                <a target="_blank" href="<?php $this->options->siteUrl(); ?>/index.php/category/info/">更多...</a>
                </span>
            </div>
            <div class="list-body">
                <ul>
                     <?php $this->widget('Widget_Archive@info','pageSize=6&type=category', 'slug=info')->parse('<li><a class="list_1" href="{permalink}"><span class="limit1" title="{title}">{title}</span></a><span class="time2">{year}-{month}-{day}</span></li>'); ?>
                </ul>
            </div>
        </div>
        <div class="list">
            <div class="list-title">
            <h4>科学研究</h4>
                <span class="list-title-more">
                <a target="_blank" href="<?php $this->options->siteUrl(); ?>/index.php/category/kxyj/">更多...</a>
                </span>
            </div>
            <div class="list-body">
                <ul>
                     <?php $this->widget('Widget_Archive@kxyj','pageSize=6&type=category', 'slug=kxyj')->parse('<li><a class="list_2" href="{permalink}"><span class="limit2" title="{title}">{title}</span></a></li>'); ?>
                </ul>
            </div>
            </div>
            
        <div class="list">
            <div class="list-title">
                <h4>人才培养</h4>
                <span class="list-title-more">
                <a target="_blank" href="<?php $this->options->siteUrl(); ?>/index.php/category/rcpy/">更多...</a>
                </span>
            </div>
            <div class="list-body">
                <ul>
                      <?php $this->widget('Widget_Archive@rcpy','pageSize=6&type=category', 'slug=rcpy')->parse('<li><a class="list_3" href="{permalink}"><span class="limit3" title="{title}">{title}</span></a></li>'); ?>   
                </ul>
            </div>
        </div>
        <div style="clear:both"></div>
</div>
 </body>
 </html>

<?php $this->need('footer.php'); ?>



