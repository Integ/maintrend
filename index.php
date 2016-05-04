<?php
/**
 * 这是 Typecho 名川资本的模板
 * 
 * @package MainTrend
 * @author SegmentFault
 * @version 1.0
 * @link http://sf.gg
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script defer src="<?php $this->options->themeUrl('material.min.js'); ?>"></script>

    <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="banner"></div>
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php if ($this->options->logoUrl): ?>
            <img height="40" src="<?php $this->options->themeUrl('img/logo.png'); ?>" alt="<?php $this->options->title() ?>" />
            <?php endif; ?>
        </a>
      </span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link current" href="/">投资理念</a>
        <a class="mdl-navigation__link " href="/index.php/news.html" title="资讯观点">资讯观点</a>
        <a class="mdl-navigation__link " href="#case" title="投资案例">投资案例</a>
        <a class="mdl-navigation__link " href="#team" title="投资团队">投资团队</a>
        <a class="mdl-navigation__link " href="#contact" title="联系我们">联系我们</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
    <div class="page-content">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--8-col">            
            <h2 class="description text-center" style="margin-top: 120px; margin-bottom: 30px;"><?php $this->options->description() ?></h2>
            <p class="description text-center">
            对卓越品质和极致体验的追求往往能创造出独具影响的产品、对极致追求的过程甚于结果。<br>
            情怀、梦想、勇敢、正义、公益、大爱的极致之人生；专业、勤奋、谦卑、敬畏，以我们的创业之心真诚的对待创业者，理解、尊重、陪伴、分享，互相成就彼此。
            </p>
            </div>
            <div class="mdl-cell mdl-cell--2-col"></div>            
        </div>
    </div>
  </main>
  <button id="scrollDown" onClick="scrollDown();" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" style="margin: 70px auto; background-color:#F6402C;">
      <i class="material-icons">keyboard_arrow_down</i>
  </button>
</div>

<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-mb-8 col-push-2">
                <h4 class="text-center board-title">关于我们</h4>
                <p class="text-center board-text">名川资本， 由赛富投资基金合伙人王求乐于2016年5月创立，主要专注于Pre-A及A轮阶段的TMT投资，团队成员均来自于业内一线基金，拥有丰富的投资经验和专业知识。秉承赛富基金专业、严谨、卓越的态度， 名川资本以“ 极致追求、用心成就 ”为创业理念！ 我们在用心成就创业者、成就我们自己的同时，也通过丰厚收益回报我们的LP及合作伙伴。</P>
            </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->

<div id="body" class="bg-gray">
	<div id="main" role="main" class="row">
		<h4 class="text-center board-title">资讯观点</h4>
		<?php while($this->next()): ?>
		<div class="news card col-md-4 col-4 col-push-2">
			<div class="calendar-wrap">
				<div class="calendar">
					<span class="month"><?php $this->date('M'); ?></span>
					<span class="day"><?php $this->date('j'); ?></span>
				</div>
			</div>
			<div class="col-md-6 col-6" itemscope itemtype="http://schema.org/BlogPosting">
				<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
			</div>
		</div>
		<?php endwhile; ?>
	</div><!-- end #main-->
</div>

<div class="container" id="case">
    <div class="row">
        <div class="col-10 col-push-1">
            <h4 class="text-center board-title">投资案例</h4>
            <div class="text-center logos">
                <img src="<?php $this->options->themeUrl('img/logo/chukouyi.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/dongling.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/getui.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/appo.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/norelsys.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/linekong.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/segmentfault.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/liweijia.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/tianshihui.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/yuemei.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/jinchengxin.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/longxun.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/shangu.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/tanghushi.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/ayla.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/orvibo.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/leke.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/wisers.png'); ?>" height="76">
                <img src="<?php $this->options->themeUrl('img/logo/lifesmart.png'); ?>" height="76">
            </div>
        </div>
    </div>
</div>

<div class="bg-gray" id="team">
    <div class="container">
        <h4 class="text-center board-title">投资团队</h4>
        <div class="row">
            <div class="card col-2 col-push-2" style="margin-left: -30px;">
                <img src="<?php $this->options->themeUrl('img/albert.png'); ?>" width="100%">
                <div class="text-center">
                    <h5>Albert Wang</h5>
                    <p class="text-muted">创始合伙人</p>
                </div>
            </div>
            <div class="card col-2 col-push-2">
                <img src="<?php $this->options->themeUrl('img/kelvin.png'); ?>" width="100%">
                <div class="text-center">
                    <h5>Kelvin Zhou</h5>
                    <p class="text-muted">执行董事</p>
                </div>
            </div>
            <div class="card col-2 col-push-2">
                <img src="<?php $this->options->themeUrl('img/david.png'); ?>" width="100%">
                <div class="text-center">
                    <h5>David Lee</h5>
                    <p class="text-muted">投资副总裁</p>
                </div>
            </div>
            <div class="card col-2 col-push-2">
                <img src="<?php $this->options->themeUrl('img/james.png'); ?>" width="100%">
                <div class="text-center">
                    <h5>James Hou</h5>
                    <p class="text-muted">投资副总裁</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>
