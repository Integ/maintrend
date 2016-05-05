<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="row" style="margin: 0;">
    <div class="col-mb-10 col-8 col-push-2 post-article" id="main" role="main">
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <h1 class="article-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
            <div class="article-date">
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>发布
            </div>
        </article>
    </div><!-- end #main-->
</div>
<?php $this->need('footer.php'); ?>