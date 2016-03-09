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


<h1 class="text-center name"> Mohammed Shajib</h1>
<p class="text-center"> My Portfolio</p>

<!--
<div class="row" id="abouttagline">
    <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <div class="">
            <a href=""><h1 class="text-center">About</h1></a><hr>
            <p class="text-center">I am an ordinary man with some unordinary dreams
                <br>that emphasize knowledge and collaboration.</span>

            </p>
        </div>
    </div>
</div>
-->

</div>

            <div class="container">
                <h1 class="text-center">Home</h1>
                <div class="row">
                    <div class="text-center">

                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                    </div>
                </div>
                <div class="row" style="margin-top: 3%; margin-left: 7%;">


                    <div class="col-md-4 col-lg-4">


                        <!--         *******************Query Post********************      -->
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
                                            <?php  the_post_thumbnail( 'post-medium', array( 'class' => 'img-responsive' ) );?>
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
                                                            <!--         *******************End of Query Post********************      -->


                    </div>



                    <div class="col-md-4 col-lg-4"><img class="img-responsive" src="http://placehold.it/200x150" alt="" /></div>
                    <div class="col-md-4 col-lg-4"><img class="img-responsive" src="http://placehold.it/200x150" alt="" /></div>

                </div>
                <div class="row" style="margin-top: 5%; margin-left: 7%;">
                    <div class="col-md-6 col-lg-6"><img class="img-responsive" src="http://wpmmp.bmcc.cuny.edu/~mshajib/mmp460/wp-content/themes/bare-bones-bootstrap/image/1.jpg" alt="" /></div>
                    <div class="col-md-6 col-lg-6"><img class="img-responsive" src="http://wpmmp.bmcc.cuny.edu/~mshajib/mmp460/wp-content/themes/bare-bones-bootstrap/image/2.jpg" alt="" /></div>
                </div>
                <div class="row" style="margin-top: 1%; margin-left: 7%;">
                    <div class="col-md-6 col-lg-6 ">

                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                    </div>
                    <div class="col-md-6 col-lg-6">

                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                    </div>
                </div>
            </div>
            <!-- end row-->





        <!-- end container-->






        <?php get_footer(); ?>
