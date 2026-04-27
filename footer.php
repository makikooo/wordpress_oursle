            <footer class="footer">
                <div class="footer-nav">

                    <div class="footer-nav__row">
                        <?php wp_nav_menu([
                            'theme_location' => 'footer_top_left',
                            'container'      => false,
                            'menu_class'     => 'footer-menu',
                            'depth'          => 2,
                            'fallback_cb'    => false,
                        ]); ?>

                        <?php wp_nav_menu([
                            'theme_location' => 'footer_top_right',
                            'container'      => false,
                            'menu_class'     => 'footer-menu',
                            'depth'          => 2,
                            'fallback_cb'    => false,
                        ]); ?>
                    </div>

                    <hr class="footer-nav__line">

                    <div class="footer-nav__row">
                        <?php wp_nav_menu([
                            'theme_location' => 'footer_bottom_left',
                            'container'      => false,
                            'menu_class'     => 'footer-menu',
                            'depth'          => 2,
                            'fallback_cb'    => false,
                        ]); ?>

                        <?php wp_nav_menu([
                            'theme_location' => 'footer_bottom_right',
                            'container'      => false,
                            'menu_class'     => 'footer-menu',
                            'depth'          => 2,
                            'fallback_cb'    => false,
                        ]); ?>
                    </div>

                </div>

            </footer>
            <p class="copy">&copy;2021-<?php echo date('Y'); ?> わたしたちのSLE. ALL RIGHTS RESERVED.</p>
            </div>
            <p class="copy">This site is protected by reCAPTCHA and the Google
                <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                <a href="https://policies.google.com/terms">Terms of Service</a> apply.
            </p>
            <?php wp_footer(); ?>
            </body>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPDVZ44N"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->

            </html>