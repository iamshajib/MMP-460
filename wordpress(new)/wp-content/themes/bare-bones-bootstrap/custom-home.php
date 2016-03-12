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






        <div class="row" style="background-color: #f0f0f0">

                  <div class="col-md-7 col-lg-7" style="margin-top:5%; margin-bottom:5%;">
                      <img class="img-responsive" src="http://portfolio.bmcc.is/mohammed.shajib/wp-content/uploads/2016/03/home-intro2.png" alt="home-intro">

                  </div>

                    <div class="col-md-5 col-lg-5" style="margin-top:5%; margin-bottom:5%;">
                    <h1> Mohammed Shajib</h1>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    </div>

                 </div>


                <div class="row" style="margin-top: 3%;">


<!--  *******************Query Post********************  -->
                    <div class="col-md-4 col-lg-4">

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


            </div> <!-- end container-->







        <?php get_footer(); ?>
