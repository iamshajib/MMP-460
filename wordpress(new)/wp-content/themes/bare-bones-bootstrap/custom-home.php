<?php /* Template Name: Custom Home Page Template */ ?>
    <?php get_header(); ?>









        <div class="row">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>


                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                        <div class="col-sm-4">
                            <p>
                                <!-- check if the post has a Post Thumbnail assigned to it. -->
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php  the_post_thumbnail( 'post-medium', array( 'class' => 'img-responsive' ) );?>
                                    </a>
                                    <?php endif; ?>

                            </p>
                            <!-- show the title as h3 element-->

                        </div>
                    </div>

                    <?php endwhile; ?>
                        <!--
            <?php //simple_boostrap_page_navi(); ?>
-->
                        <?php else : ?>

                            <div class="col-sm-8 col-sm-push-2 col-md-4 col-md-push-4">
                                <p>
                                    <?php _e("No posts found.", "simple-bootstrap"); ?>
                                </p>
                            </div>

                            <?php endif; ?>
        </div>

        <!--#######################end of php####################-->



        <div class="background-home">


            <!--
<h1 class="text-center name"> Mohammed Shajib</h1>
<p class="text-center"> My Portfolio</p>
-->

        </div>

        <div class="container-fluid">

            <div class="row" id="home-description">

                <div class="col-md-7 col-lg-7" id="intro-img" style="">
                    <img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-intro2.png" alt="home-intro" width="600" height="400" >

                </div>

                <div class="col-md-5 col-lg-5" id="writing" style="">
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

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/08/home-featured-1/"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work2.jpg" alt="" /> </a>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/08/home-featured-1/"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work1.jpg" alt="" /> </a>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/08/home-featured-1/"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work3-2.jpg" alt="" /> </a>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 home-featured">
                    <a href=" http://portfolio.bmcc.is/mohammed.shajib/2016/03/08/home-featured-1/"><img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-work4-1.jpg" alt="" /> </a>

                </div>





            </div>
            <!-- end row-->

        </div>
        <!-- end container-->





        <?php get_footer(); ?>
