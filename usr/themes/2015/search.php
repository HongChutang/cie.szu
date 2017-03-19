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
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<link media="all" type="text/css" href="<?php $this->options->themeUrl('css2/style.css'); ?>" rel="stylesheet">
<body class="home">
<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 750px; width: 1900px; z-index: -999999; position: fixed;">
<img style="position: absolute; margin: 0px; padding: 0px; border: medium none; width: 1900px; height: 750px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -145.721px;" src="<?php $this->options->themeUrl('image/background2.jpg'); ?>" class="deleteable">
<img style="position: absolute; margin: 0px; padding: 0px; border: medium none; width: 1900px; height: 750px; max-height: none; max-width: none; z-index: -999999; opacity: 0.868956; left: 0px; top: -145.721px;" src="<?php $this->options->themeUrl('image/background2.jpg'); ?>">
</div>

<div>
    <div id="wrapper" >
        <div class="container">         
            <section class="slider-container1">
                <ul id="slider" class="slider-wrapper" style="max-width: 940px;">
                    <li class="slide-current">
                        <img src="<?php $this->options->themeUrl('image/12.jpg'); ?>" alt="Slider Imagen 1">
                        <div class="caption">
                            <h3 class="caption-title">深圳大学信息工程学院</h3>                 
                        </div>
                    </li>
                    <li>
                        <img src="<?php $this->options->themeUrl('image/rigui.png'); ?>" alt="Slider Imagen 1">
                        <div class="caption">
                            <h3 class="caption-title">深大日晷</h3>                            
                        </div>
                    </li>
                    <li>
                        <img src="<?php $this->options->themeUrl('image/13.jpg'); ?>" alt="Slider Imagen 1">
                        <div class="caption">
                            <h3 class="caption-title">勇夺桂冠</h3>                            
                        </div>
                    </li>
                    <li>
                        <img src="<?php $this->options->themeUrl('image/13.jpg'); ?>" alt="Slider Imagen 1">
                        <div class="caption">
                            <h3 class="caption-title">颁奖现场</h3>                            
                        </div>
                    </li>
                </ul>           
         </section> 
            <!-- 导航条 -->
            <div class="linetitles typewriter">
                <div class="inner">                 
                     <p style="font-size:18px;">您现在所在的位置是：<a href="<?php $this->options->siteUrl(); ?>">主页</a>><?php $this->category('>'); ?></p>                 
                </div>
            </div>
            <!--end nav -->
            <!-- 文章内容 -->
            <div id="jin" style="margin-top:-5px;">
                <div class="col-mb-12 col-8 detail" id="main" role="main" style="margin-top:-px;">
                <?php if ($this->have()): ?>        <!-- 如果有文章 -->
                <?php while($this->next()): ?>      <!-- 输出每一篇 -->
                        <article class="post">
                        <h4 class="post-title" itemprop="name headline" style="display:block;float:left;">
                            <a class="post-title-a" href=""><?php $this->title() ?></a>
                        </h4>
                        <span class="post-infor" style="display:block;float:right;">    
                        <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>   <!-- 文章的发布日期， -->
                        </span>
                        </article>
                    <article class="post">
                        <h4 class="post-title" itemprop="name headline" style="display:block;float:left;">
                            <a class="post-title-a" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                        </h4>
                        <span class="post-infor" style="display:block;float:right;">   
                        </span>
                        <div class="post-content-all" itemprop="articleBody" style="clear:both">
                            <?php
                                $this->excerpt(100, "...(点击标题查看完整文章)");    /*excerpt(限制数量，最后字的提示)限制首页文章输出字数*/
                            ?> 
                        </div>
                    </article>
                <?php endwhile; ?>                                                                             <!-- 结束循环 -->
                <div class="page-navigator"><?php $this->pageNav('上一页','下一页',6,'...');?></div>
                </div><!-- end #main -->
              <?php $this->need('sidebar.php'); ?>
            </div> <!-- end #jin -->
            <?php endif; ?>     <!-- 结束真个文章的循环 -->
        </div>    
    </div> 
</div>
<?php $this->need('footer.php'); ?>
</body>
</html>
