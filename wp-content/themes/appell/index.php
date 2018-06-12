<?php get_header(); ?>

<main>
        <div class="appell">
            <div class="appell__slider slider">

                <?php
                $images = get_field('image');

                if( $images ): ?>
                    <div class='slider__items'>
                        <?php foreach( $images as $image ): ?>
                            <div class='slider__item'>
                                 <div class="slider__overlay"></div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="slider__wrapper">
                    <div class="slider__title">
                        <p><?php the_field('title1'); ?></p>
                        <p><?php the_field('title2'); ?></p>
                        <p><?php the_field('title3'); ?></p>
                    </div>
                    <div class="slider__text">
                        <span><?php the_field('text1'); ?></span>
                        <span><?php the_field('text2'); ?></span>
                        <span><?php the_field('text3'); ?></span>
                    </div>
                    <div class="slider__btn"></div>
                    <div class="appell__btn">
                        <a href="" class="appell__learn">learn more</a>
                        <a href="" class="appell__get">get a quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="info__wrapper">
                <div class="intro">
                    <div class="intro__title title">our <span>complete</span> solution</div>
                    <div class="intro__wrapper">
                        <div class="intro__text">Professional Service. Personalized Attention.</div>
                        <div class="intro__img">
                            <img src="<?php bloginfo('template_directory'); ?>//assets/img/intro1.jpg" />
                        </div>
                        <div class="intro__info">
                            <p>Changing the pavement maintenance industry, one parking lot at a time.</p>
                            <a href="">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="services">

                    <div class="services__title title"><span>INDIVIDUAL</span> SERVICES</div>
                    <div class="services__items">
                        <div class="services__text">Setting High Standards</div>

                         <?php
                            // параметры по умолчанию
                            $args = array(
                                'numberposts' => 3,
                                'post_type'   => 'services',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            );

                            $posts = get_posts( $args );

                            foreach($posts as $post){ setup_postdata($post);
                               ?>
                               <div class="services__item item">
                                   <div class="item__img">
                                       <?php the_post_thumbnail(); ?>
                                   </div>
                                   <div class="item__info">
                                       <a href=""><?php the_title(); ?></a>
                                       <p><?php the_excerpt(); ?></p>
                                   </div>
                               </div>
                               <?php
                            }

                            wp_reset_postdata(); // сброс
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>