<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-tb-8 col-tb-offset-2">

        <div class="error-page">
            <img src="<?php $this->options->themeUrl('image/404.png'); ?>" srcset="<?php $this->options->themeUrl('image/404@2x.png'); ?> 2x">
            <br>
            <a href="<?php $this->options->siteUrl(); ?>" class="backtoindex">返回首页</a>
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
