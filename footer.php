
                <!-- Back to Top -->
                <a href="#top" id="back_to_top-a">
                    <button id="back_to_top" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--6dp">
                        <!-- For modern browsers. -->
                        <i class="material-icons">expand_less</i>
                        <!-- For IE9 or below. -->
                        <i class="material-icons">&#xE5CE;</i>
                    </button>
                </a>

                <!--Footer-->
                <footer class="mdl-mini-footer">
                    <!--mdl-mini-footer-left-section-->
                    <div class="mdl-mini-footer--left-section">
                        <?php if ( !empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns) ) : ?>
                            <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-twitter.png'); ?>);">
                                <span class="visuallyhidden">Twitter</span>
                            </button></a>
                        <?php endif;?>

                        <?php if ( !empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns) ) : ?>
                            <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__facebook" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-facebook.png'); ?>);">
                                <span class="visuallyhidden">Facebook</span>
                            </button></a>
                        <?php endif;?>

                        <?php if ( !empty($this->options->footersns) && in_array('ShowGooglePlus', $this->options->footersns) ) : ?>
                            <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-gplus.png'); ?>);">
                                <span class="visuallyhidden">Google Plus</span>
                            </button></a>
                        <?php endif;?>

                        <?php if ( !empty($this->options->footersns) && in_array('ShowWeibo', $this->options->footersns) ) : ?>
                            <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-weibo.png'); ?>);">
                                <span class="visuallyhidden">Sina Weibo</span>
                            </button></a>
                        <?php endif;?>
                    </div>
                    <!--copyright-->
                    <div id="copyright">Copyright &copy; 2016 <?php $this->options->title(); ?></div>

                    <!--mdl-mini-footer-right-section-->
                    <div class="mdl-mini-footer--right-section">
                        <div>
                            <div class="footer-develop-div">Powered by <a href="http://typecho.org" target="_blank" class="footer-develop-a">Typecho</a></div>
                            <div class="footer-develop-div">Theme by <a href="https://viosey.com" target="_blank" class="footer-develop-a">Viosey</a></div>
                        </div>
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>

        <!--Analysis code-->
        <?php $this->options->analysis(); ?>
    </body>


    <script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/js.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>

    <?php if( !empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch) ): ?>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css'); ?>" />
        <script src="<?php $this->options->themeUrl('js/nprogress.js'); ?>"></script>
        <script type="text/javascript">
            NProgress.configure({ showSpinner: true });
            NProgress.start();
            $('#nprogress .bar').css({'background': '<?php $this->options->loadingcolor(); ?>'});
            $('#nprogress .peg').css({'box-shadow': '0 0 10px <?php $this->options->loadingcolor(); ?>, 0 0 15px <?php $this->options->loadingcolor(); ?>'});
            $('#nprogress .spinner-icon').css({'border-top-color': '<?php $this->options->loadingcolor(); ?>', 'border-left-color': '<?php $this->options->loadingcolor(); ?>'});
            setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, <?php $this->options->loadingbuffer(); ?>);
        </script>
    <?php endif; ?>

    <?php if( !empty($this->options->switch) && in_array('SmoothScroll',$this->options->switch) ): ?>
        <script src="<?php $this->options->themeUrl('js/smoothscroll.js'); ?>"></script>
    <?php endif; ?>

    <?php if( !empty($this->options->switch) && in_array('atargetblank',$this->options->switch) ): ?>
        <script>
                //Add target="_blank" to a tags
                $(document).bind('DOMNodeInserted', function(event) {
                  $('a[href^="http"]').each(
                        function(){
                          if (!$(this).attr('target')) {
                              $(this).attr('target', '_blank')
                          }
                        }
                    );
                });
        </script>
    <?php endif; ?>

    <?php $this->footer(); ?>
</html>
