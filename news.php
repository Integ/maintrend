<?php
/**
 * 自定义页面模板
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="row" style="margin:0;">
    <div class="col-mb-8 col-8 col-push-2 news-board" id="main" role="main">
		<h1 class="news-board-title" itemprop="name headline">资讯观点</h1>
		<ul class="news">
			<?php $this->widget('Widget_Contents_Post_Recent')
				->parse('<li><a class="news-title" href="{permalink}">{title}</a><span class="news-dotted"></span><span class="news-date">3 天前</span></li>'); ?>
		</ul>
    </div><!-- end #main-->
</div>

<?php $this->need('footer.php'); ?>