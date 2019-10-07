<?php
    get_header();
?>

        
    <main id="main">
        <div class="main-left">
            <div class="about">
                <div class="about__bar">
                    <nav>
                        <p class="about__bar_about">О СЕБЕ</p>
                        <p class="about__bar_projects">ПРОЕКТЫ</p>
                        <a class="about__bar_download">СКАЧАТЬ <span>PDF</span></a>
                        <p class="about__bar_contacts">КОНТАКТЫ</p>
                    </nav>
                    <div class="about__bar_tel-mail">
                        <a href="tel:+71966137272">+7 (916) 613 72 72</a>
                        <a href="mailto:6137272@mail.ru">6137272@mail.ru</a>
                    </div>
                </div>

                <div class="about__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/01_ХАЧАТУРЯН Л.Г (фото автора)портрет.jpg" alt="photo portret">
                </div>
            </div>

            <div class="slider-wrapper">
                <ul class="slider">
                    <li class="slider__item">
                        <div class="slider__item_img"><img src="" alt=""></div>
                        <div class="slider__item_text">
                            <p></p>
                            <span></span>
                        </div>
                    </li>
                    <li class="slider__item">
                        <div class="slider__item_img"><img src="" alt=""></div>
                        <div class="slider__item_text">
                            <p></p>
                            <span></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-right">
            <div id="gallery" class="active">
                <div class="gallery-row1">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/gallery1.jpg" alt="gallery image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/gallery2.jpg" alt="gallery image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/gallery3.jpg" alt="gallery image">
                </div>

                <div class="gallery-row2">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/gallery4.jpg" alt="gallery image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/gallery5.jpg" alt="gallery image">
                </div>
            </div>

            <div id="about">
                about
            </div>

            <div id="projects">
                projects
            </div>

            <div id="contacts">
                contacts
            </div>
        </div>
    </main>

</div>
</body>
</html>