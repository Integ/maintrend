<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="container" id="contact">
    <div class="row">
        <div class="col-md-4 col-4 col-push-2 contact">
            <span class="contact-icon"><i class="ion-ios-telephone"></i></span>
            <div>
                <span class="text-muted">联系电话</span>
                <br>
                <strong>010 - 5169 0300</strong>
            </div>
        </div>
        <div class="col-md-4 col-4 col-push-2 contact">
            <span class="contact-icon"><i class="ion-email"></i></span>
            <div>
                <span class="text-muted">联系邮箱</span>
                <br>
                <strong>bp@maintrendcap.com</strong>
            </div>
        </div>
    </div>
</div>

<footer id="footer" role="contentinfo">
    <img width="100" style="margin: -83px 0 20px; background-color: #FFF; padding: 0 10px;" src="<?php $this->options->themeUrl('img/logo-icon.png'); ?>">
    <br>
    &copy; 2016 名川资本. <a style="color:#999;" href="http://www.miibeian.gov.cn/" target="_blank">京ICP备16018170号</a>
</footer><!-- end #footer -->

<script>
    function scrollDown() {
        window.scrollTo(0, window.innerHeight);
    }
</script>

<?php $this->footer(); ?>
</body>
</html>