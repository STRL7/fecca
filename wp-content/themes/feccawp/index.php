<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Feccawp
 */
wp_nav_menu()
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
                            <a class="jumbotron-link" href="#"><?php the_field("description_link_main_1"); ?>
                                <img class="arrow-svg-img" src="<?php the_field("description_link_main_1"); ?>" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="album">
                <div class="container">
                    <div class="row features-my-justy">
                        <div class="col-md-4">
                            <div class="box-shadow">
                                <div class="card-body">
                                    <img class="card-image" src="img/Icon.svg" alt="content">
                                    <h3 class="card-h2">Easy Reminder</h3>
                                    <p class="card-text">No longer do you have to worry about missing an
                                        appointment, your
                                        anniversary or your cat’s birthday. We got your back</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-shadow">
                                <div class="card-body">
                                    <img class="card-image" src="img/Icon2.svg" alt="content">
                                    <h3 class="card-h2">Share Content</h3>
                                    <p class="card-text">We understand you have a lot of people to meet. That is why
                                        we
                                        allow you to share your schedule with them</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-shadow">
                                <div class="card-body">
                                    <img class="card-image" src="img/Icon3.svg" alt="content">
                                    <h3 class="card-h2">Quick Communication</h3>
                                    <p class="card-text">The best virtual assistant powered by state of the art
                                        artificial
                                        intelligence at your disposal, just a few taps away</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-625">
            <div class="container content-container">
                <div class="pricing-header mx-auto text-center">
                    <h2 class="display-4 h2-style">Full-featured scheduling in a snap</h2>
                </div>
                <div class="row justify-content-center features-wrap features-my-justy">
                    <div class="col-md-4 col-sm-12 col-md text-right">
                        <ul class="list-unstyled text-small">
                            <li class="features-list-item">
                                <div class="card border-0 h-100">
                                    <div class="list-body">
                                        <h4 class="list-h4">Auto-thumbnail Generation</h4>
                                        <p class="list-desc">With our massive database of pictures, we choose the
                                            right
                                            thumbnail for you</p>
                                    </div>
                                </div>
                            </li>
                            <li class="features-list-item">
                                <div class="card border-0 h-100">
                                    <div class="list-body">
                                        <h4 class="list-h4">Read Receipts</h4>
                                        <p class="list-desc">Fecca can scan and analyze the reciepts you gave, so
                                            all the
                                            data can be stored</p>
                                    </div>
                                </div>
                            </li>
                            <li class="features-list-item">
                                <div class="card border-0 h-100">
                                    <div class="list-body">
                                        <h4 class="list-h4">User-to-User Blocking</h4>
                                        <p class="list-desc">We eliminate the need for a third party service, so you
                                            can get
                                            your work done</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 col-md">
                        <ul class="list-unstyled text-small">
                            <li><img class="iphone" src="img/Apple iPhone X Silver.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 col-md text-left">
                        <ul class="list-unstyled text-small">
                            <li class="features-list-item">
                                <div class="card border-0 h-100">
                                    <div class="list-body">
                                        <h4 class="list-h4">Auto-thumbnail Generation</h4>
                                        <p class="list-desc">With our massive database of pictures, we choose the
                                            right
                                            thumbnail for you</p>
                                    </div>
                                </div>
                            </li>
                            <li class="features-list-item">
                                <div class="card border-0 h-100">
                                    <div class="list-body">
                                        <h4 class="list-h4">Read Receipts</h4>
                                        <p class="list-desc">Fecca can scan and analyze the reciepts you gave, so
                                            all the
                                            data can be stored</p>
                                    </div>
                                </div>
                            </li>
                            <li class="features-list-item">
                                <div class="card border-0 h-100">
                                    <div class="list-body">
                                        <h4 class="list-h4">User-to-User Blocking</h4>
                                        <p class="list-desc">We eliminate the need for a third party service, so you
                                            can get
                                            your work done</p>
                                    </div>
                                </div>
                            </li>
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
                            <p class="uppercase-text">TESTIMONIALS</p>
                            <h2 class="display-4 h2-style">Hear what people says</h2>
                        </div>
                        <div class="row d-flex align-items-start justify-content-center features-wrap grid">
                            <ul class="list-unstyled text-small ul-null col-md-4 col-sm-7 col-10">
                                <li class="features-list-item-2">
                                    <div class="list-body list-body-testimonial">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/1.png" alt="portfolio">
                                            <div class="portfolio-desc w-100">
                                                <div class="name-prof-co">
                                                    <p class="name text-align-left ">Andy Kruner</p>
                                                    <p class="lead name-desc text-align-left ">iOS Developer at
                                                        Facebook</p>
                                                </div>
                                                <div class="galochka">
                                                    <img src="img/galochka.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled text-small ul-null pad-middle col-md-4 col-sm-7 col-10 text-left ">
                                <li class="features-list-item-2">
                                    <div class="list-body">
                                        <h4 class="portf-text">“I was always struggling with time managment for
                                            almost
                                            my entire life. That effected my work <br> performance and also my
                                            personal
                                            life.
                                            With Fecca, though, that went away”</h4>
                                        <div class="middle-co">
                                            <p class="portf-desc-name">James Bob</p>
                                            <p class="lead text-muted">iOS Developer at Facebook</p>
                                            <a class="jumbotron-link" href="#">Read full story
                                                <img class="arrow-svg-img" src="img/arrow.svg" alt="arrow">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled text-small ul-null col-md-4 col-sm-7 col-10">
                                <li class="features-list-item-2">
                                    <div class="list-body list-body-testimonial">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/3.png" alt="portfolio">
                                            <div class="portfolio-desc w-100">
                                                <div class="name-prof-co">
                                                    <p class="name text-align-left ">Vikaas Crane</p>
                                                    <p class="lead name-desc text-align-left ">iOS Developer at
                                                        Facebook</p>
                                                </div>
                                                <div class="galochka">
                                                    <img src="img/galochka.png" alt="galochka">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-625">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">

                        <div class="card-body">
                            <div class="quote-text row align-items-center mb-4">
                                <div class="col-md-1 col-sm-1 col-2 align-self-start">
                                    <img src="img/qq.png" alt="#">
                                </div>
                                <h4 class="quote-testi col-md-11 col-sm-11 col-10">Without Fecca, our company would
                                    not be
                                    in a
                                    good place right now</h4>
                            </div>
                            <div class="quote-info row align-items-center ps-5">
                                <div class="porteit col-md-1 col-2">
                                    <img src="img/Oval.jpg" alt="">
                                </div>
                                <div class="col-md-6 col-10 ps-4">
                                    <p class="quote-name p-0 m-0">Frank Gilbert</p>
                                    <p class="q-text-com p-0 m-0">Head of Design at Facebook</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="card-body">
                            <div class="quote-text row align-items-center mb-4">
                                <div class="col-md-1 col-sm-1 col-2 align-self-start">
                                    <img src="img/qq.png" alt="#">
                                </div>
                                <h4 class="quote-testi col-md-11 col-sm-11 col-10">Fecca has made sharing our story
                                    and
                                    building
                                    our
                                    brand on social media so much easier than ever</h4>
                            </div>
                            <div class="quote-info row align-items-center ps-5">
                                <div class="porteit col-md-1 col-2">
                                    <img src="img/Oval.jpg" alt="">
                                </div>
                                <div class="col-md-6 col-10 ps-4">
                                    <p class="quote-name p-0 m-0">Frank Gilbert</p>
                                    <p class="q-text-com p-0 m-0">Head of Design at Facebook</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mb-625">
            <div class="container">
                <div class="pricing-header mx-auto text-center">
                    <p class="uppercase-text">frequently asked questions</p>
                    <h2 class="display-4 h2-style">Find out why we do what we do</h2>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is Fecca?
                            </button>
                        </h4>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Placeholder content for this
                                accordion, which
                                is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Why Fecca?
                            </button>
                        </h4>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Placeholder content for this
                                accordion, which
                                is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What can Fecca do?
                            </button>
                        </h4>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Fecca is the more versatile and
                                flexible
                                productivity app on the
                                market for now, and forever. We commit to always adapt our product to the user’s
                                need, so no
                                matter what year it is, Fecca will always be relevant to your daily activity.
                                <br><br>

                                We can do anything that the user wanted, because our app is built on feedback.
                                Ranging from
                                doing colaboration to asking recomendation to powerfull AI that is packed in Fecca,
                                the
                                possibility is endless</div>
                        </div>
                    </div>
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What makes us different from other calender app?
                            </button>
                        </h4>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Placeholder content for this
                                accordion, which
                                is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Are we on IOS and android?
                            </button>
                        </h4>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Placeholder content for this
                                accordion, which
                                is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Can I colaborate with Fecca?
                            </button>
                        </h4>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Placeholder content for this
                                accordion, which
                                is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item-my mb-4">
                        <h4 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed accordion-title p-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                How can I cancel or upgrade my Fecca subscription?
                            </button>
                        </h4>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body accordion-body-my p-4">Placeholder content for this
                                accordion, which
                                is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php
