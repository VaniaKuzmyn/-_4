
    <?php get_header(); ?>


    <!-- Header -->
    <header class="header section" style=" background: url('<?php the_field('mainbg'); ?>') center center no-repeat; background-size: cover;">

            <!-- Slick Title-->
            <div class="slick-wrap">

            <?php foreach(getMainTitle() as $review): ?>
                <div class="slick-item">
                    <h1 class="slick-title"><?php echo $review['slick-title'] ?></h1>
                    <p class="slick-content"><?php echo $review['slick-content'] ?></p>
                </div>
            <?php endforeach ?>

            </div>
    </header>
    
    <!-- Main First section-->
    <main class="main section">

        <div class="container">
            <!-- Title -->
            <h1 class="main-title">
                <?php the_field('main-title'); ?>
            </h1>
            <h3 class="main-subtitle">
                <?php the_field('main-subtitle'); ?>
            </h3>
        </div>

        <!-- Cards -->
        <div class="card-outer">

        <?php foreach(getMainCard() as $review): ?>
            <div class="card-item">
                <div class="card-top">
                    <div class="rating">
                        <div class="star">
                            <i class="star-i fas fa-star"></i>
                            <i class="star-i fas fa-star"></i>
                            <i class="star-i fas fa-star"></i>
                            <i class="star-i fas fa-star"></i>
                            <i class="star-i fas fa-star"></i>
                        </div>
                        <div class="rating-sum">
                            <span class="peple">
                                    <i class="peple-i fas fa-user"></i>
                                    <span class="people-number"><?php echo $review['people-number'] ?></span>
                                </span>
                                <span class="like">
                                    <i class="like-i fas fa-heart"></i>
                                    <span class="like-number"><?php echo $review['like-number'] ?></span>
                                </span>
                        </div>
                    </div>
                    <img class="card-img" src="<?php echo $review['card-img'] ?>" alt="Card image">
                </div>

                <div class="card-bottom">
                    <h4 class="card-title">
                        <?php echo $review['card-title'] ?>
                    </h4>
                    <p class="card-country">
                        <?php echo $review['card-country'] ?>
                    </p>
                    <div class="card-price">
                        <i class="card-price-i fab fa-gripfire"></i>
                        Від
                        <span class="card-price-number">
                        <?php echo $review['card-price'] ?>
                        </span>
                        $
                    </div>
                    <div class="card-wrapper">
                        <div class="card-inner">
                            <p class="card-count"><span class="upppercase">Особи - </span><?php echo $review['card-count'] ?></p>
                            <p class="card-date">
                                від
                                <time class="card-time-from" datetime="2018-03-15"><?php echo $review['card-time-from'] ?></time>
                                - 
                                <time class="card-time-to" datetime="2018-04-15"><?php echo $review['card-time-to'] ?></time>
                            </p>
                        </div>
                        <button class="btn btn_transparent">
                            Забронювати
                        </button>
                    
                    </div>
                </div>
            </div>

            <?php endforeach ?>

        </div>

        <button class="btn btn_card btn_transparent">
            Показати більше пропозицій
            <i class="btn_card-i fas fa-chevron-right"></i>
        </button>

        
        <div class="form-outer">
            <!-- Form -->
            <form class="form">

                <!-- Form head -->
                <div class="head form-inner">
                    <label class="form-item head-item">
                        <span class="form-text">Звідки</span>
                        <select class="form-elem select select_from">
                            <option value="ukraine">Україна</option>
                            <option value="england">Англія</option>
                        </select>
                    </label>
                    <label class="form-item head-item">
                        <span class="form-text">Країна</span>
                        <select class="form-elem select select_to">
                            <option value="spanish">Іспанія</option>
                            <option value="england">Англія</option>
                        </select>
                    </label>
                    <label class="form-item head-item">
                        <i class="fas fa-bars appearancenone-i"></i>
                        <span class="form-text">Курорт</span>
                        <select class="form-elem select select_resort appearancenone">
                            <option value="all">Будь-який</option>
                            <option value="england">На городі</option>
                        </select>
                    </label>
                </div>

                <!-- Form middle -->
                <div class="middle form-inner">
                    <div class="middle-wrapper">
                        <label class="form-item middle-item">
                            <i class="date-i fa fa-calendar" aria-hidden="true"></i>
                            <span class="form-text">Виліт з</span>
                            <input type='text' class='form-elem datepicker-here date date-from' placeholder="17/17/2019"/>
                        </label>
                        <span class="line">|</span>
                        <label class="form-item middle-item">
                                <i class="date-i fa fa-calendar" aria-hidden="true"></i>
                                <span class="form-text">по</span>
                                <input type='text' class='form-elem datepicker-here date date-to' placeholder="17/28/2019"/>
                        </label>
                    </div>
                    <div class="middle-wrapper">
                        <label class="form-item middle-item select-day-wrap">
                            <span class="form-text">Ночей від</span>
                            <select class="form-elem select-day select-day-from">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="7" selected>7</option>
                                <option value="10">10</option>
                            </select>
                        </label>
                        <span class="line">|</span>
                        <label class="middle-item select-day-wrap">
                            <span class="form-text">до</span>
                            <select class="form-elem form-item select-day select-day-to">
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                    <option value="14" selected>14</option>
                                    <option value="28">18</option>
                                    <option value="21">21</option>
                                    <option value="24">24</option>
                                    <option value="27">27</option>
                                    <option value="31">31</option>
                                </select>
                        </label>
                    </div>
                    <label class="form-item middle-item">
                            <span class="form-text">Дорослих</span>
                            <select class="form-elem select-adult">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </label>
                        <label class="form-item middle-item">
                            <span class="form-text">Дітей</span>
                            <select class="form-elem select-child">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </label>
                        <label class="form-item middle-item">
                            <span class="form-text">Вік дітей</span>
                            <select class="form-elem select-child">
                                <option value="1">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12" selected>12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                            </select>
                        </label>
                </div>

                <!-- Foot -->
                <div class="foot head form-inner">
                        <label class="form-item head-item">
                                <i class="fas fa-bars appearancenone-i"></i>
                                <span class="form-text">Категорія</span>
                                <select class="form-elem select-category appearancenone">
                                       <option value="" selected disabled hidden>Будь-яка</option>
                                       <option value="first">Перша</option>
                                       <option value="second">Друга</option>
                                    </select>
                            </label>
                            <label class="form-item head-item">
                                <span class="form-text">Рейтинг готелю</span>
                                <select class="form-elem select-rating">
                                       <option value="" selected disabled hidden>Будь-який</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                    </select>
                            </label>
                            <label class="form-item head-item">
                                    <i class="fas fa-bars appearancenone-i"></i>
                                    <span class="form-text">Харчування</span>
                                    <select class="form-elem select-feed appearancenone">
                                           <option value="" selected disabled hidden>Будь-яке</option>
                                           <option value="all">Все включено</option>
                                           <option value="off">Все виключено</option>
                                        </select>
                                </label>
                </div>

                <!-- Find -->
                <div class="find form-inner">

                    <div class="toddler" id="slider-range"></div>

                    <div class="form-item price-wrap">
                            <input class="form-elem price-item price-from"  type="number" value="7" id="price-from">
                            <span class="line">|</span>
                            <input class="form-elem price-item price-to" type="number" value="45600" id="price-to">
                    </div>
                    <label class="select-ticket-wrap">
                    <select class="form-elem select-ticket">
                            <option value="withTicket" >З квитком</option>
                            <option value="withoutTicket">Без квитка</option>
                    </select>
                    </label>
                    <button class="form-close">
                        <i class="fas fa-times"></i>
                    </button>
                    <label class="form-item form-btn">
                            <span class="form-btn-text">Розширена форма пошуку</span>
                            <button class="btn btn_red">
                                Знайти тур
                            </button>
                        </label>
                </div>


                
                
            </form>
        </div>
    </main>


    <?php get_footer(); ?>
