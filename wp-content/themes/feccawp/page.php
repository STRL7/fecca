<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Feccawp
 */
get_header();
?>

<main>
    <div class="mb-625">
        <section class="jumbotron text-center">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-sm-12 jumbotron-header-co text-left">
                        <h2 class="jumbotron-heading h2-style"><?php the_field("main_title_1"); ?></h2>
                    </div>
                    <div class="col-md-4 col-sm-12 text-left">
                        <p class="lead text-muted"><?php the_field("description_main_1"); ?></p>
                        <a class="jumbotron-link" href="<?php the_field("description_link_main_1"); ?>"><?php the_field("description_link_text_main_1"); ?>
                            <img class="arrow-svg-img" src="<?php the_field("description_svg_link_main_1"); ?>"
                                alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="album">
            <div class="container">
                <div class="row features-my-justy">
                        <?php
                        $feature_group_1 = get_field('feature_group_1');	
                        
                        if( $feature_group_1 ): ?>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <img class="card-image" src="<?php echo $feature_group_1['feature_group_icon_1']; ?>"
                                            alt="content">
                                        <h3 class="card-h2"><?php echo $feature_group_1['feature_group_title_1']; ?></h3>
                                        <p class="card-text"><?php echo $feature_group_1['feature_group_text_1']; ?></p>
                                    </div>
                                </div>
                        <?php endif; ?>
                        <?php
                        $feature_group_2 = get_field('feature_group_2');	
                        
                        if( $feature_group_2 ): ?>
                                <div class="col-md-4">
                                    <div class="card-body">
                                    <img class="card-image" src="<?php echo $feature_group_2['feature_group_icon_2']; ?>"
                                            alt="content">
                                        <h3 class="card-h2"><?php echo $feature_group_2['feature_group_title_2']; ?></h3>
                                        <p class="card-text"><?php echo $feature_group_2['feature_group_text_2']; ?></p>
                                    </div>
                                </div>
                        <?php endif; ?>
                        <?php
                        $feature_group_3 = get_field('feature_group_3');	
                        
                        if( $feature_group_3 ): ?>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <img class="card-image" src="<?php echo $feature_group_3['feature_group_icon_3']; ?>"
                                            alt="content">
                                        <h3 class="card-h2"><?php echo $feature_group_3['feature_group_title_3']; ?></h3>
                                        <p class="card-text"><?php echo $feature_group_3['feature_group_text_3']; ?></p>
                                    </div>
                                </div>
                        <?php endif; ?>
                        <?php   
                            if( have_rows('feature_box') ): while ( have_rows('feature_box') ) : the_row(); ?>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <img class="card-image" src="<?php the_sub_field('feature_box_group_icon'); ?>"
                                            alt="content">
                                        <h3 class="card-h2"><?php echo the_sub_field('feature_box_group_title'); ?></h3>
                                        <p class="card-text"><?php the_sub_field('feature_box_group_text'); ?></p>
                                    </div>
                                </div>
                        <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-625">
        <div class="container content-container">
            <div class="pricing-header mx-auto text-center">
                <h2 class="display-4 h2-style"><?php the_field("content_title"); ?></h2>
            </div>
            <div class="row justify-content-center features-wrap features-my-justy">
                <div class="col-md-4 col-sm-12 col-md text-right">
                    <ul class="list-unstyled text-small">

                        <?php
                        $content_group_1 = get_field('content_group_1');	
                        
                        if( $content_group_1 ): ?>
                        <li class="features-list-item">
                            <div class="card border-0 h-100">
                                <div class="list-body">
                                    <h4 class="list-h4"><?php echo $content_group_1['content_group_title']; ?></h4>
                                    <p class="list-desc"><?php echo $content_group_1['content_group_text']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>

                        <?php
                        $content_group_2 = get_field('content_group_2');	
                        
                        if( $content_group_2 ): ?>
                        <li class="features-list-item">
                            <div class="card border-0 h-100">
                                <div class="list-body">
                                    <h4 class="list-h4"><?php echo $content_group_2['content_group_title']; ?></h4>
                                    <p class="list-desc"><?php echo $content_group_2['content_group_text']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>

                        <?php
                        $content_group_3 = get_field('content_group_3');	
                        if( $content_group_3 ): ?>
                        <li class="features-list-item">
                            <div class="card border-0 h-100">
                                <div class="list-body">
                                    <h4 class="list-h4"><?php echo $content_group_3['content_group_title']; ?></h4>
                                    <p class="list-desc"><?php echo $content_group_3['content_group_text']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 col-md">
                    <ul class="list-unstyled text-small">
                        <li><img class="iphone" src="<?php the_field("content_img"); ?>" alt=""></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 col-md text-left">
                    <ul class="list-unstyled text-small">

                    <?php
                        $content_group_4 = get_field('content_group_4');	
                        if( $content_group_4 ): ?>
                        <li class="features-list-item">
                            <div class="card border-0 h-100">
                                <div class="list-body">
                                    <h4 class="list-h4"><?php echo $content_group_4['content_group_title']; ?></h4>
                                    <p class="list-desc"><?php echo $content_group_4['content_group_text']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>

                        <?php
                        $content_group_5 = get_field('content_group_5');	
                        if( $content_group_5 ): ?>
                        <li class="features-list-item">
                            <div class="card border-0 h-100">
                                <div class="list-body">
                                    <h4 class="list-h4"><?php echo $content_group_5['content_group_title']; ?></h4>
                                    <p class="list-desc"><?php echo $content_group_5['content_group_text']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>

                        <?php
                        $content_group_6 = get_field('content_group_6');	
                        if( $content_group_6 ): ?>
                        <li class="features-list-item">
                            <div class="card border-0 h-100">
                                <div class="list-body">
                                    <h4 class="list-h4"><?php echo $content_group_6['content_group_title']; ?></h4>
                                    <p class="list-desc"><?php echo $content_group_6['content_group_text']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="mb-625">
            <div class="container">
                <div class="mb-625">
                    <div class="container content-container">
                        <div class="pricing-header mx-auto text-center">
                            <p class="uppercase-text"><?php the_field("testimonials_subtitle"); ?></p>
                            <h2 class="display-4 h2-style"><?php the_field("testimonials_title"); ?></h2>
                        </div>


                        <div class="row d-flex align-items-start justify-content-center features-wrap grid">




                        <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    
                                    <?php   
                                        if( have_rows('testimonials_repiter') ){
                                             while ( have_rows('testimonials_repiter') ) : the_row(); ?>
                                            <div class="swiper-slide">
                                                <div class="flipper text-small ul-null my-flipper-adaptive">
                                                    <div class="card">
                                                        <div class="front list-body-testimonial" style="background-image: url(<?php the_sub_field('testimonials_repiter_bg'); ?>);">
                                                            <div class="position-relative">
                                                                <img class="img-fluid" src="<?php the_sub_field('testimonials_repiter_img'); ?>" alt="portfolio">
                                                                <div class="portfolio-desc w-100">
                                                                    <div class="name-prof-co">
                                                                        <p class="name text-align-left "><?php the_sub_field('testimonials_repiter_name'); ?></p>
                                                                        <p class="lead name-desc text-align-left "><?php the_sub_field('testimonials_repiter_prof'); ?></p>
                                                                    </div>
                                                                    <div class="galochka">
                                                                        <img src="<?php the_sub_field('testimonials_repiter_icon_1'); ?>" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="goback">
                                                                <h4 class="portf-text"><?php the_sub_field('testimonials_repiter_quote'); ?></h4>
                                                                <div class="middle-co">
                                                                    <p class="portf-desc-name"><?php the_sub_field('testimonials_repiter_name_back'); ?></p>
                                                                    <p class="lead text-muted"><?php the_sub_field('testimonials_repiter_prof_back'); ?></p>
                                                                    <a class="jumbotron-link" href="<?php the_sub_field('testimonials_repiter_link_url'); ?>"><?php the_sub_field('testimonials_repiter_link_text'); ?>
                                                                        <img class="arrow-svg-img" src="<?php the_sub_field('testimonials_repiter_icon_back'); ?>" alt="arrow">
                                                                    </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div> 
                                    <?php endwhile; } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="mb-625">
        <div class="container">

            <div class="row">
                <div class="col-md-6 testi-margin-b">


                <?php
                    $featured_post = get_field('user_review');
                    if( $featured_post ): ?>

                    <div class="card-body card-body-no-padding">
                        <div class="quote-text row align-items-center mb-4">
                            <div class="col-md-1 col-sm-1 col-2 align-self-start">
                                <img src="<?php echo wp_get_attachment_image_url( esc_html( $featured_post->qq ) ); ?>" alt="" />
                            </div>
                            <h4 class="quote-testi col-md-11 col-sm-11 col-10"><?php echo esc_html( $featured_post->quote_feedback ); ?></h4>
                        </div>
                        <div class="quote-info row align-items-center ps-5">
                            <div class="porteit col-md-1 col-2">
                                <img src="<?php echo wp_get_attachment_image_url( esc_html( $featured_post->face_feedback ) ); ?>" alt="" />
                            </div>
                            <div class="col-md-10 col-10 ps-4">
                                <p class="quote-name p-0 m-0"><?php echo esc_html( $featured_post->name_feedback ); ?></p>
                                <p class="q-text-com p-0 m-0"><?php echo esc_html( $featured_post->position_feedback ); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                </div>
                <div class="col-md-6 testi-margin-b">

                    <?php
                        $featured_post = get_field('user_review2');
                        if( $featured_post ): ?>

                        <div class="card-body card-body-no-padding">
                            <div class="quote-text row align-items-center mb-4">
                                <div class="col-md-1 col-sm-1 col-2 align-self-start">
                                    <img src="<?php echo wp_get_attachment_image_url( esc_html( $featured_post->qq ) ); ?>" alt="" />
                                </div>
                                <h4 class="quote-testi col-md-11 col-sm-11 col-10"><?php echo esc_html( $featured_post->quote_feedback ); ?></h4>
                            </div>
                            <div class="quote-info row align-items-center ps-5">
                                <div class="porteit col-md-1 col-2">
                                    <img src="<?php echo wp_get_attachment_image_url( esc_html( $featured_post->face_feedback ) ); ?>" alt="" />
                                </div>
                                <div class="col-md-10 col-10 ps-4">
                                    <p class="quote-name p-0 m-0"><?php echo esc_html( $featured_post->name_feedback ); ?></p>
                                    <p class="q-text-com p-0 m-0"><?php echo esc_html( $featured_post->position_feedback ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
    <div class="mb-625">
        <div class="container">
            <div class="pricing-header mx-auto text-center">
                <p class="uppercase-text"><?php the_field("faq_subtitle"); ?></p>
                <h2 class="display-4 h2-style"><?php the_field("testimonials_title"); ?></h2>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php   
                if( have_rows('faq_repeater') ){
                    while ( have_rows('faq_repeater') ) : the_row(); ?>
                        <div class="accordion-item-my mb-4">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button-my collapsed accordion-title p-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="<?php the_sub_field('faq_repeter_element_id_#'); ?>" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    
                                    <?php the_sub_field('faq_repeater_title'); ?>
                                    <img class="accordion-button-img" id="image" src="<?php the_sub_field('faq_repeter_icon'); ?>" alt="icon">
                                </button>
                            </h4>
                            <div id="<?php the_sub_field('faq_repeter_element_id'); ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body accordion-body-my p-4"><?php the_sub_field('faq_repeater_text'); ?></div>
                            </div>
                        </div>
            <?php endwhile; } ?>
            </div>
        </div>

    </div>
</main>
<script src="<?php echo get_template_directory_uri (); ?>/js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 100,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                701: {
                slidesPerView: 2,
                spaceBetween: 20
                },
                // when window width is >= 480px
                1000: {
                slidesPerView: 3,
                spaceBetween: 30
                },
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>