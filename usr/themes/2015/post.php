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
</head>
<body class="home">
<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 700px; width: 1900px; z-index: -999999; position: fixed;">
<img style="position: absolute; margin: 0px; padding: 0px; border: medium none; width: 1900px; height: 700px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -145.721px;" src="<?php $this->options->themeUrl('image/background.jpg'); ?>" class="deleteable">
<img id="background" style="position: absolute; margin: 0px; padding: 0px; border: medium none; width: 1900px; height: 700px; max-height: none; max-width: none; z-index: -999999; opacity: 0.868956; left: 0px; top: -145.721px;" src="<?php $this->options->themeUrl('image/background1.jpg'); ?>">
</div>
<div>
    <div id="wrapper">
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
                        <img src="<?php $this->options->themeUrl('image/14.jpg'); ?>" alt="Slider Imagen 1">
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
                     <p style="font-size:18px;">您现在所在的位置是：<a href="<?php $this->options->siteUrl(); ?>">主页</a>><?php $this->category(','); ?></p>                 
                </div>
            </div>
            <!--end nav -->
            <div id="frame">
                <div id="wenzhang">
                    <div class="detail">                        
                        <div class="post-content" itemprop="articleBody">
                            <?php $this->content(); ?>
                        </div>
                    </div>
                    <?php $this->need('sidebar.php'); ?>
                    <div class="last_page">
                    上一篇：<?php $this->thePrev('%s','没有了'); ?>
                </div>
                <div class="next_page">
                    下一篇：<?php $this->theNext('%s','没有了'); ?>
                </div>         
                </div>
                
            </div>
        </div>
    </div>  
    <?php $this->need('footer.php'); ?>
</div>
</body>
</html>
