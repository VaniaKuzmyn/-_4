<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" >
    <title><?php the_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="краткое описание страницы">

    <?
        wp_head();
    ?>

</head>
<body>
    
    <!-- Hood fixed bar-->
    <div class="hood">
        
        <!-- Logo -->
        <div class="logo">
            <img class="logo-img" src="<?php the_field('logo');?>" alt="Logo">
        </div>

        <div class="hood-content">

            <!-- Top -->
            <div class="top">
                <!-- Menu -->
                <menu class="menu-wrap">
                    <ul class="menu">
                        <li class="menu-item"><a href="#" class="menu-item-just">Про нас</a></li>
                        <li class="menu-item"><a href="#" class="menu-item-just">Оплата</a></li>
                        <li class="menu-item"><a href="#" class="menu-item-just">Контакти</a></li>
                    </ul>
                </menu>

                <!-- Address -->
                <address class="address address_top">
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
            </div>
            <div class="bottom">
                <div class="burger">
                    <div class="burger-item burger-item_1"></div>
                    <div class="burger-item burger-item_2"></div>
                    <div class="burger-item burger-item_3"></div>
                </div>
                <nav class="nav">
                    <ul class="share">
                        <li class="share-item"><a href="#" class="share-item-just">Головна</a></li>
                        <li class="share-item"><a href="#" class="share-item-just">Автобусом в Європу</a></li>
                        <li class="share-item share-item_select">
                            <i class="share-item-i fas fa-chevron-down"></i>
                            <select class="share-item-just select_country">
                                <option value="country" disabled selected hidden>Країни</option>
                                <option value="ukraine">Україна</option>
                                <option value="england">Англія</option>
                            </select>
                        </li>
                        <li class="share-item"><a href="#" class="share-item-just">Круїзи</a></li>
                        <li class="share-item"><a href="#" class="share-item-just">Тури Україною</a></li>
                        <li class="share-item"><a href="#" class="share-item-just">Раннє бронювання</a></li>
                        <li class="share-item"><a href="#" class="share-item-just">Акція одного дня</a></li>
                        <li class="share-item"><a href="#" class="share-item-just">Акція на вікенд</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- End hood -->
    </div>