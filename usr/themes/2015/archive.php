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
                <?php if($this->category == "jsfc"||$this->category == "sssds"||$this->category == "bssds"): ?>
                <div style="float:right">
                    <?php if($this->category == "jsfc"): ?>
                    <div><p>(姓名按字母顺序排列)</p></div>
                    <ul id="szdw">
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/290

.html ">吉建华</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/175
    
.html ">蒙山</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/174

.html ">梁永生</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/171

.html ">徐铭</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/170

.html ">王晖</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/169

.html ">许文焕</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/168

.html ">张胜利</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/167

.html ">林晓辉</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/166

.html ">李晓滨</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/165

.html ">马君显</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/164

.html ">陈彬</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/163

.html ">王娟</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/162

.html ">田传俊</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/161

.html ">周小安</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/160

.html ">喻建平</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/159

.html ">朱明程</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/158

.html ">裴继红</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/156

.html ">张基宏</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/157

.html ">黄敬雄</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/155

.html ">蔡良伟</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/154

.html ">曹文明</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/152

.html ">张勇</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/153

.html ">刘宏伟</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/151

.html ">刘宗香</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/149

.html ">李良群</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/150

.html ">郑能恒</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/148

.html ">唐锡辉</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/146

.html ">骆剑平</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/147

.html ">代明军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/145

.html ">谢宁</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/144

.html ">黄继武</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/142

.html ">何业军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/143

.html ">孙宏元</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/138

.html ">钱恭斌</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/71

.html ">黄建军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/337

.html ">卢元元</a></li>
                    </ul>
                    <div id="sidebar"style="float:left;left:-170px;top:-350px">
                    <div id="list1">
                        <div class="widget r_comments">
                            <h3>师资队伍</h3>
                            <div id="list">
                                <ul>
                                    <li><a id="nav1_1" href="<?php $this->options->siteUrl(); ?>/index.php/category/jsfc/">教师风采</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/bssds/">博士生导师</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/sssds/">硕士生导师</a></li>
                                </ul>
                            </div>           
                        </div>
                    </div> 
                </div>
                    <?php elseif($this->category == "sssds"): ?>
                    <div><p>(姓名按字母顺序排列)</p></div>
                    <ul id="szdw">
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/293

.html ">王晖</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/334

.html">李霞</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/333

.html">谢维信</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/332

.html">黄建军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/330

.html">钱恭斌</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/325

.html">孙宏元</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/327

.html">何业军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/323

.html">黄继武</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/321

.html">谢宁</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/320

.html">代明军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/319

.html">骆剑平</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/318

.html">唐锡辉</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/316

.html">郑能恒</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/317

.html">李良群</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/314

.html">刘宗香</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/313

.html">刘宏伟</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/315

.html">张勇</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/312

.html">曹文明</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/294

.html">许文焕</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/295

.html">张胜利</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/296

.html">林晓辉</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/297

.html">李晓滨</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/298

.html">马君显</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/299

.html">陈彬</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/300

.html">王娟</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/301

.html">田传俊</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/302

.html">周小安</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/304

.html">喻建平</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/305

.html">朱明程</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/307

.html">裴继红</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/310

.html">张基宏</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/308

.html">黄敬雄</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/311

.html">蔡良伟</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/291

.html">徐铭</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/289

.html">梁永生</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/388

.html">蒙山</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/173

.html">吉建华</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/172

.html">卢元元</a></li>
                    </ul>
                    <div id="sidebar"style="float:left;left:-170px;top:-410px">
                    <div id="list1">
                        <div class="widget r_comments">
                            <h3>师资队伍</h3>
                            <div id="list">
                                <ul>
                                    <li><a id="nav1_1" href="<?php $this->options->siteUrl(); ?>/index.php/category/jsfc/">教师风采</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/bssds/">博士生导师</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/sssds/">硕士生导师</a></li>
                                </ul>
                            </div>           
                        </div>
                    </div> 
                </div>
                    <?php else: ?>
                    <div><p>(姓名按字母顺序排列)</p></div>
                    <ul id="szdw">
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/140

.html">李霞</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/141

.html">谢维信</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/331

.html">黄建军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/324

.html">孙宏元</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/326

.html">何业军</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/322

.html">黄继武</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/309

.html">张基宏</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/328

.html">裴继红</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/303

.html">喻建平</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/292

.html">王晖</a></li>
                    </ul>
                    <div id="sidebar"style="float:left;left:-170px;top:-102px">
                    <div id="list1">
                        <div class="widget r_comments">
                            <h3>师资队伍</h3>
                            <div id="list">
                                <ul>
                                    <li><a id="nav1_1" href="<?php $this->options->siteUrl(); ?>/index.php/category/jsfc/">教师风采</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/bssds/">博士生导师</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/sssds/">硕士生导师</a></li>
                                </ul>
                            </div>           
                        </div>
                    </div> 
                </div>
                    <?php endif; ?>   <!-- 结束师资队伍的条件语句 -->
                </div>
                
                <?php elseif($this->category == "kypt"): ?>
                <div class="content">
                    <ul class="contentbox">
                        <li class="con">
                            <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

93.html"><img src="<?php $this->options->themeUrl('images/5.jpg'); ?>" alt="con1"/></a>
                            <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

93.html">
                                <div class="txt">
                                <h3>ATR国防</h3>
                                <p>深圳大学ATR国防科技重点实验室</p>
                                </div>
                            </a>
                        </li>
                        <li class="con">
                            <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

94.html"><img src="<?php $this->options->themeUrl('images/6.jpg'); ?>" /></a>
                            <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

94.html">
                                <div class="txt">
                                <h3>通信与信息处理</h3>
                                <p>深圳市现代通信与信息处理重点实验室</p>
                                </div>
                            </a>
                        </li>
                        <li class="con">
                            <img src="<?php $this->options->themeUrl('images/3.jpg'); ?>"/>
                            <a href="<?php $this->options->siteUrl(); ?>">
                                <div class="txt">
                                <h3>平台三</h3>
                                <p>深圳大学ATR国防科技重点实验室</p>
                                </div>
                            </a>
                        </li>
                        <li class="con">
                            <img src="<?php $this->options->themeUrl('images/4.jpg'); ?>"/>
                            <a href="<?php $this->options->siteUrl(); ?>">
                                <div class="txt">
                                <h3>平台四</h3>
                                <p>深圳大学ATR国防科技重点实验室</p>
                                </div>
                            </a>
                        </li>
                        <li class="con">
                            <img src="<?php $this->options->themeUrl('images/bp14.jpg'); ?>"/>
                            <a href="<?php $this->options->siteUrl(); ?>">
                                <div class="txt">
                                <h3>平台五</h3>
                                <p>深圳大学ATR国防科技重点实验室</p>
                                </div>
                            </a>
                        </li>
                        <li class="con">
                            <img src="<?php $this->options->themeUrl('images/bp1.jpg'); ?>"/>
                            <a href="<?php $this->options->siteUrl(); ?>">
                                <div class="txt">
                                <h3>平台六</h3>
                                <p>深圳大学ATR国防科技重点实验室</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="sidebar"style="float:left;left:-170px;top:-528px">
                    <div id="list1">
                        <div class="widget r_comments">
                            <h3>师资队伍</h3>
                            <div id="list">
                                <ul>
                                    <li><a id="nav1_1" href="<?php $this->options->siteUrl(); ?>/index.php/category/kydt/">科研动态</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/kypt/">科研平台</a></li>
                                    <li><p id="kycg">科研成果>></p>
                                    <ul style="display:none;" id="zhankai">
                                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/hjcg/">获奖成果</a></li>
                                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/lw/">论文</a></li>
                                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/zz/">著作</a></li>
                                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/zl/">专利</a></li>
                                        <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/rjzzq/">软件著作权</a></li>
                                    </ul> 
                                    </li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>/index.php/category/xsjl/">学术交流</a></li>
                                </ul>
                            </div>           
                        </div>
                    </div> 
                </div>
                <?php else:?>
                <?php if ($this->have()): ?>        <!-- 如果有文章 -->
                <?php while($this->next()): ?>      <!-- 输出每一篇 -->
                    <?php if($this->category == "zl"||$this->category == "rjzzq"): ?>   <!-- 一些列表 -->
                        <article class="post">
                        <h4 class="post-title" itemprop="name headline" style="display:block;float:left;">
                            <a class="post-title-a" href=""><?php $this->title() ?></a>
                        </h4>
                        <span class="post-infor" style="display:block;float:right;">    
                        <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>   <!-- 文章的发布日期， -->
                        </span>
                        </article>
                    <?php elseif($this->category == "kypt"): ?> <!-- 如果是科研平台 -->
                    <div class="postlist">
                        <ul class="post">
                                <li>
                                    <div class="thumb"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><img src="<?php Thumbnail_Plugin::show($this); ?>" /></a></div>
                                    <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                                    <div class="clear"></div>
                                </li>
                        </ul>
                        <div class="page-navigator"><?php $this->pageNav('上一页','下一页',7,'...');?></div>
                    </div>
                    <?php else:?><!-- 除了列表和科研平台-->
                    <article class="post">
                        <h4 class="post-title" itemprop="name headline" style="display:block;float:left;">
                            <a class="post-title-a" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                        </h4>
                        <span class="post-infor" style="display:block;float:right;">   
                        <?php if($this->category == "zyjs"||$this->category == "zyjsx"): ?>
                        <?php else:?>
                        <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>   <!-- 文章的发布日期， -->
                        <?php endif; ?>
                        </span>
                        <div class="post-content-all" itemprop="articleBody" style="clear:both">
                            <?php
                                $this->excerpt(100, "...(点击标题查看完整文章)");    /*excerpt(限制数量，最后字的提示)限制首页文章输出字数*/
                            ?> 
                        </div>
                    </article>
                    <?php endif; ?>  <!-- 结束无需文章的列表 -->
                <?php endwhile; ?>                                                                             <!-- 结束循环 -->
                <div class="page-navigator"><?php $this->pageNav('上一页','下一页',6,'...');?></div>
                <?php endif; ?>    <!-- 结束师资队伍的大循环 --> 
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
