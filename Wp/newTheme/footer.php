
    <!-- Footer -->
    <footer class="footer section" style=" background: url('<?php echo NEWTHEME_IMG_DIR; ?>bg/footerbg.png') center center no-repeat; background-size: cover;">
        <div class="footer-wrapper">
            <div class="footer-item footer-item_round">
                <ul class="round">
                    <li class="round-item"><a href="#" class="round-item-just">Головна</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Автобусом в Європу</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Країни</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Круїзи</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Тури Україною</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Раннє бронювання</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Акція одного дня</a></li>
                    <li class="round-item"><a href="#" class="round-item-just">Акція на вікенд</a></li>
                </ul>
            </div>
            <div class="footer-item footer-item_address">
                <address class="address">
                    <div class="address-item address-info">
                        <i class="address-i fas fa-map-marker-alt"></i>
                        Адреса: <br />
                        <?php the_field('address-info'); ?>
                    </div>
                    <div class="address-item address-skype">
                        <i class="address-i fab fa-skype"></i>
                        Skype: <br />
                        <?php the_field('address-skype'); ?>
                    </div>
                    <div class="address-item address-phone">
                        <i class="address-i address-i_phone fas fa-phone"></i>
                        <?php the_field('address-phone');?><br />
                        <?php the_field('address-phone-second');?>
                    </div>
                </address>

                <div class="manager">
                    <img src="<?php the_field('manager-photo');?>" alt="Photo" class="manager-img">
                    <div class="manager-wrapper">
                        <div class="manager-title">Директор:</div>
                        <div class="manager-name"><?php the_field('manager-name');?></div>
                    </div>
                </div>
            </div>
            <div class="footer-item footer-item_social social-wrap">
                <div class="social-title"><?php the_field('social-title');?></div>
                <p class="social-text"><?php the_field('social-text');?></p>
                <ul class="social">
                    <li class="social-item"><a class="social-item-just" href="<?php the_field('social-odnoklassniki');?>"><i class="social-i fa fa-odnoklassniki-square"></i></a></li>
                    <li class="social-item"><a class="social-item-just" href="<?php the_field('social-google-plus');?>"><i class="social-i fab fa-google-plus-square"></i></a></li>
                    <li class="social-item"><a class="social-item-just" href="<?php the_field('social-facebook');?>"><i class="social-i fab fa-facebook-square"></i></a></li>
                    <li class="social-item"><a class="social-item-just" href="<?php the_field('social-vk');?>"><i class="social-i social-i_vk fab fa-vk"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">&copy; <small><?php the_field('copyright-year');?></small> <?php the_field('copyright-text');?>
            </div>
    </footer>



    <?
        wp_footer();
    ?>        
</body>
</html>