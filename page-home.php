<?php
/**
 *	Template name: Home Page
 */

get_header(); ?>
<main class="main">
    <div class="main__container first_one">
        <div class="main__left">
            <section class="profile-card-section">
                <div class="profile-card">
                    <div class="clipped-gradient"></div>
                    <div class="profile-card__user">
                        <div class="profile-card__image">
                            <img src="/webtask/wp-content/uploads/2024/12/Ellipse-2.png" alt="User Avatar" width="80">
                        </div>
                        <div class="profile-card__details">
                            <h3 class="profile-card__name">X @Name</h3>
                            <p class="profile-card__wallet">Wallet</p>
                            <p class="profile-card__other">Other</p>
                        </div>
                    </div>
                    <div class="profile-card__level">
                        <p class="profile-card__points">Total Points: <span
                                class="profile-card__points-value">0.125</span></p>
                        <div class="profile-card__progress">
                            <span class="profile-card__level-bar">
                                <span class="profile-card__level-bar-fill"></span>
                            </span>
                            <div class="profile-card__levels">
                                <span class="profile-card__level-progress">LVL 1</span>
                                <span class="profile-card__level-progress">LVL 2</span>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <div class="main__right">
            <?php
            if (have_rows('section_one')):
                while (have_rows('section_one')):
                    the_row(); ?>
                    <section class="tasks-section">
                        <?php if (have_rows('section_top')):
                            while (have_rows('section_top')):
                                the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description'); ?>
                                <div class="tasks-section__heading">
                                    <h2 class="section-title"><?php echo $title; ?></h2>
                                    <p class="section-description"><?php echo $description; ?></p>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                        <?php if (have_rows('follow_blocks')): ?>
                            <div class="tasks">
                                <?php
                                $counter = 1;

                                while (have_rows('follow_blocks')):
                                    the_row();
                                    $extra_num = get_sub_field('extra_num');
                                    $block_title = get_sub_field('title');
                                    $block_description = get_sub_field('description');
                                    $formatted_index_number = str_pad($counter, 3, '0', STR_PAD_LEFT);
                                    ?>
                                    <div class="tasks__task">
                                        <div class="tasks__task-points">
                                            <span class="task-points__number"><?php echo $formatted_index_number; ?></span>
                                            <span class="task-points__point">
                                                <?php if ($extra_num): ?>
                                                    <?php echo $extra_num; ?>
                                                <?php else: ?>
                                                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.54998 13L0.849976 7.29998L2.27498 5.87498L6.54998 10.15L15.725 0.974976L17.15 2.39998L6.54998 13Z"
                                                            fill="#1BCA95" />
                                                    </svg>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                        <div class="task__content">
                                            <h3 class="tasks__task-title"><?php echo $block_title; ?></h3>
                                            <p class="tasks__task-description"><?php echo $block_description; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    $counter++;
                                endwhile;
                                ?>
                            </div>
                        <?php endif; ?>
                    </section>
                    <?php
                endwhile;
            endif;
            ?>
            <?php
            if (have_rows('section_two')):
                while (have_rows('section_two')):
                    the_row(); ?>
                    <section class="follow-section">
                        <?php if (have_rows('section_top')):
                            while (have_rows('section_top')):
                                the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description'); ?>
                                <div class="follow-section__heading">
                                    <h2 class="section-title"><?php echo $title; ?></h2>
                                    <p class="section-description"><?php echo $description; ?></p>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                        <?php if (have_rows('information')):
                            while (have_rows('information')):
                                the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                                $img = get_sub_field('image_background'); ?>
                                <div class="follow">
                                    <div class="follow__information-side">
                                        <div class="follow__information">
                                            <h1 class="follow__information-title"><?php echo $title; ?></h1>
                                            <p class="follow__information-description"><?php echo $description; ?></p>
                                        </div>
                                        <div class="follow__cta">
                                            <?php
                                            if ($link):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                ?>
                                                <a href="<?php echo esc_url($link_url); ?>" class="follow__cta-link">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SideLeft.svg"
                                                        alt="Side Left Button">
                                                    <span><?php echo esc_html($link_title); ?></span>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SideRight.svg"
                                                        alt="Side Right Button">
                                                </a>
                                            <?php endif; ?>
                                            <span>0,12</span>
                                        </div>
                                    </div>
                                    <div class="follow__image-side" style="background-image: url( <?php echo $img; ?> )" ;>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                    </section>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <?php
    if (have_rows('section_three')):
        while (have_rows('section_three')):
            the_row();
            $title = get_sub_field('title'); ?>
            <div class="main__container">
                <div class="main__left">
                </div>
                <div class="main__right">
                    <div class="follow-slider-first__heading">
                        <h2 class="section-title"><?php echo $title; ?></h2>
                        <div class="section-description">
                            <button class="slick-prev-first not-active" aria-label="Previous" type="button"><span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.05749 1.5575L2.62249 5L6.0575 8.4425L5 9.5L0.499995 5L4.99999 0.5L6.05749 1.5575Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </button>
                            <button class="slick-next-first" aria-label="Next" type="button"><span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.942505 8.4425L4.3775 5L0.942505 1.5575L2 0.5L6.5 5L2 9.5L0.942505 8.4425Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (have_rows('slider')): ?>
                <div class="main__second-container">
                    <section class="follow-slider-first m45">
                        <div class="follow-slider-first__slides">
                            <?php
                            $counter = 1;

                            while (have_rows('slider')):
                                the_row();
                                $number = get_sub_field('number');
                                $slide_text = get_sub_field('slide_text');
                                $formatted_index_slide_one = str_pad($counter, 3, '0', STR_PAD_LEFT); ?>
                                <div class="follow-slider-first__slide">
                                    <div class="clipped-gradient-slider-one"></div>
                                    <div class="follow-slider-first__slide-container">
                                        <div class="follow-slider-first__index">
                                            <span class="follow-slider-first__number"><?php echo $formatted_index_slide_one; ?></span>
                                            <span class="follow-slider-first__cof">
                                                <?php if ($number): ?>
                                                    <?php echo $number; ?>
                                                <?php else: ?>
                                                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.54998 13L0.849976 7.29998L2.27498 5.87498L6.54998 10.15L15.725 0.974976L17.15 2.39998L6.54998 13Z"
                                                            fill="#1BCA95" />
                                                    </svg>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                        <div class="follow-slider-first__description">
                                            <?php echo $slide_text; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $counter++;
                            endwhile; ?>
                        </div>
                    </section>
                </div>
            <?php endif;
        endwhile;
    endif; ?>
    <?php
    if (have_rows('section_fourth')):
        while (have_rows('section_fourth')):
            the_row();
            $title = get_sub_field('title'); ?>
            <div class="main__container">
                <div class="main__left">
                </div>
                <div class="main__right">
                    <div class="follow-slider-second__heading">
                        <h2 class="section-title"><?php echo $title; ?></h2>
                        <div class="section-description">
                            <button class="slick-prev-second not-active" aria-label="Previous" type="button"><span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.05749 1.5575L2.62249 5L6.0575 8.4425L5 9.5L0.499995 5L4.99999 0.5L6.05749 1.5575Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </button>
                            <button class="slick-next-second" aria-label="Next" type="button"><span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.942505 8.4425L4.3775 5L0.942505 1.5575L2 0.5L6.5 5L2 9.5L0.942505 8.4425Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (have_rows('slider')): ?>
                <div class="main__second-container">
                    <section class="follow-slider-second m45">
                        <div class="follow-slider-second__slides">
                            <?php
                            $counter = 1;

                            while (have_rows('slider')):
                                the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $earn_number = get_sub_field('earn_number');
                                $formatted_index_slide_second = str_pad($counter, 3, '0', STR_PAD_LEFT); ?>
                                <div class="follow-slider-second__slide">
                                    <div class="follow-slider-second__slide-content">
                                        <div class="slide-content__information">
                                            <div class="slide-content__top">
                                                <h3 class="slide-content__title"><?php echo $title; ?></h3>
                                                <p class="slide-content__description"><?php echo $description; ?></p>
                                            </div>
                                            <div class="slide-content__points">
                                                <span class="slide-content__points-title">Earn</span>
                                                <span class="slide-content__point"><?php echo $earn_number; ?></span>
                                            </div>
                                        </div>
                                        <div class="slide-content__index">
                                            <div class="cliped-gradient-slider"></div>
                                            <div class="slide-content__index-number"><?php echo $formatted_index_slide_second; ?></div>
                                            <div class="slide-content__img-bottom">
                                                <?php
                                                $img = get_sub_field('image');
                                                if (!empty($img)): ?>
                                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $counter++;
                            endwhile; ?>
                        </div>
                    </section>
                </div>
                <?php
            endif;
        endwhile;
    endif;
    ?>
</main>
<?php get_footer();