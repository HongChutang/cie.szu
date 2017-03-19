<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s '),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- 使用url函数转换相关路径 -->
     <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
     <script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
     <script type="text/javascript" src="<?php $this->options->themeUrl('js/ie.js'); ?>"></script>
     <script type="text/javascript" src="<?php $this->options->themeUrl('js/list.js'); ?>"></script>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/mycommon.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/my.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/banner.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/index.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/detail.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/archive.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/templatemo-style.css'); ?>">
    <!--[if IE]><link rel="stylesheet" href="<?php $this->options->themeUrl('css/ie.css'); ?>"><![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
    <div id="wrapper-header">
        <div id="header">
            <a href="<?php $this->options->siteUrl(); ?>">
                <img class="logo" src="<?php $this->options->themeUrl('image/logo.png'); ?>" >
            </a>
            <div class="controls">
                <ul class="links"> 
                    <?php if($this->user->hasLogin()): ?>
                        <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> </a></li>
                        <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                    <?php else: ?>
                        <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                    <?php endif; ?>
                </ul>
                <div id="search">
                <form id="searchform" class="search" method="post" action="./" role="search" >
                    <label for="s" class="hide"><?php _e('搜索关键字'); ?></label>
                    <input type="text" name="s" id="s" class="search_text" placeholder="<?php _e('Search.....'); ?>" />
                    <button type="submit" id="button" class="search_submit"><img src="<?php $this->options->themeUrl('image/search.png'); ?>" alt=""></button>
                </form>
    </div>
            </div>

            <div id="menu-wrap">
                <ul id="menu">
                    <li><a href="#" target="_blannk">学院概况</a>
                         <ul>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

38.html ">学院介绍</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

49.html">学院沿革</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/archives/

50.html">学科建设</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="#">学院通知</a>
                        <ul>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/bkjx/">本科教学</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/xssw/">学生事务</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/yjssw/">研究生事务</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/jssw/">教师事务</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/dytz">党员通知</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="#">科学研究</a>
                        <ul>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/kydt/">科研动态</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/kypt/">科研平台</a>
                            </li>
                            <li> <a href="#">科研成果</a>
                                <ul>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/hjcg/">获奖成果</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/lw/">论文</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/

285.html">著作</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/

113.html">专利</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/archives/

112.html">软件著作权</a></li>
                                </ul>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/xsjl/">学术交流</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="#">师资队伍</a>
                       <ul>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/jsfc/">教师风采</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/sssds/">硕士生导师</a>
                            </li>
                            <li> <a href="<?php $this->options->siteUrl(); ?>index.php/category/bssds/">博士生导师</a>
                            </li>
                        </ul> 
                    </li>
                    <li><a href="#">人才培养</a>
                        <ul>
                            <li><a href="#">本科生培养</a>
                                <ul>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/zyjs/">专业介绍</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/sjhj/">实践环节</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/bysj/">毕业设计</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/jxwj/">教学文件</a></li>
                                </ul>
                            </li>
                            <li><a href="#">全日制研究生</a>
                                <ul>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/yjszs/">研究生招生</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/yjsdt/">研究生动态</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/cgyhj/">成果与获奖</a></li>
                                </ul>
                            </li>
                            <li><a href="#">非全日制研究生</a>
                                <ul>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/zsxx/">招生信息</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/pyxx/">培养信息</a></li>
                                </ul>
                            </li>
                            <li><a href="#">成人教育</a>
                                <ul>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/zyjsx/">专业介绍</a></li>
                                    <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/zsxxx/">招生信息</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">校友之窗</a>
                        <ul>
                            <li><a href="<?php $this->options->siteUrl(); ?>/index.php/archives/

65.html">校友去向</a></li>
                            <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/byzp/">毕业照片</a></li>
                            <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xyjz/">校友讲座</a></li>
                            <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xyjz/">校友捐赠</a></li>
                            <li><a href="<?php $this->options->siteUrl(); ?>index.php/category/xyzp/">校友招聘</a></li>
                        </ul>
                    </li>
                </ul>
            </div>           
        </div>
    </div> 
</body>



