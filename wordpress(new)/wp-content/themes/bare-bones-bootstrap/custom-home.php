<?php /* Template Name: Custom Home Page Template */ ?>
    <?php get_header(); ?>


<div class="wrapper">


        <div class="container-fluid background-home">

            <div class="row" id="background-home-text">

                <div class="col-sm-12 col-md-12 com-lg-12">

                    <h1 class="text-center"> BELIEVE IN</h1>

                    <h2 class="text-center">what you know </h2>

                    <p class="text-center">HTML <samp>-</samp> | <samp>-</samp> CSS <samp>-</samp> | <samp>-</samp> JAVASCRIPT<samp>-</samp> |<samp>-</samp> ANIMATION<samp>-</samp> |<samp>-</samp> DESIGN
                        <br>
                        <br>
                        <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        <br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>

                </div>

            </div>

            <div class="row" id="scroll">

                <a class="mouse-scroll" href="#">
                    <span class="mouse">
    <span class="mouse-movement">
    </span>
                    </span>
                    <span class="mouse-message fadeIn">scroll</span>
                </a>

            </div>



        </div>
        <!--end of background-->



        <div class="container-fluid">

            <div class="row" id="home-description">

                <div class="col-sm-12 col-md-7 col-lg-7" id="intro-img" style="">
                    <img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-intro.png" alt="home-intro" width="600" height="400">

                </div>

                <div class="col-sm-12 col-md-5 col-lg-5" id="writing" style="">
                    <h1>Portfolio of <br> Mohammed Shajib</h1>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                </div>

            </div>
            <!-- end row-->

        </div>
        <!-- end container-->


        <div class="container">

            <div class="row" style="margin-top: 3%; margin-bottom: 3%">

                <div class="text-center" id="home-works-intro">
                    <h1> My latest works</h1>
                    <h4> class & outside</h4>
                </div>


                <div class="col-sm-12 col-md-12 col-lg-12" id="query-post">

                                            <?php
// the query
$the_query = new WP_Query( array( 'cat' => 4 ) ); ?>

                            <?php if ( $the_query->have_posts() ) : ?>

                                <!-- pagination here -->

                                <!-- the loop -->
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <!-- check if the post has a Post Thumbnail assigned to it. -->
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php  the_post_thumbnail( 'post-featured', array( 'class' => 'img-responsive' ) );?>
                                        </a>
                                        <?php endif; ?>
                                            <?php endwhile; ?>
                                                <!-- end of the loop -->

                                                <!-- pagination here -->

                                                <?php wp_reset_postdata(); ?>

                                                    <?php else : ?>
                                                        <p>
                                                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                                                        </p>
                                                        <?php endif; ?>



                </div>
                <!--***********End of Query Post******-->




                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <h1>Web Design</h1>
                    <p>HTML, CSS, JavaScript
                        <br> Bootstrap, P5JS</p>
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/08/web-projects/" target="_blank"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/experiment-img.jpg" alt="" /> </a>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <h1> Animation</h1>
                    <p>Adobe Flash & After Effect</p>
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/15/animations/" target="_blank"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work1.jpg" alt="" /> </a>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <h1>Game</h1>
                    <p>JavScript, P5JS</p>
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/02/24/game/" target="_blank"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work3-2.jpg" alt="" /> </a>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <h1>Graphis</h1>
                    <p>Adobe Photoshop,
                        <br>Illustrator, inDesign</p>
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/15/graphis/" target="_blank"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work4-1.jpg" alt="" /> </a>

                </div>

            </div>
            <!-- end row-->

        </div>
        <!-- end container-->

        <div class="container-fluid">
            <div class="row before-footrer">
                <div class="col-sm-4 col-md-4 col-lg-4">dsds</div>
                <div class="col-sm-4 col-md-4 col-lg-4">dsdsds</div>
                <div class="col-sm-4 col-md-4 col-lg-4">dsdsds</div>
            </div>
        </div>

</div>   <!-- end of wrapper -->

        <?php get_footer(); ?>
