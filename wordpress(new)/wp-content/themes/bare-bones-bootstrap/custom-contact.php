<?php /* Template Name: Custom Contact Page Template */ ?>
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

<div class="container-fluid" id="contact-background">

<h1 class="text-center"> Contact Me </h1>
<hr>
<p class="text-center" style="color: dimgray:"> Let's talk about your innovative idea. </p>

<div class="row" id="contact-body">

<div class="col-md-7 col-lg-7" id="contact-red">

<ul class="list-inline">
<li>
<a href=""target="_blank"><i class="fa fa-linkedin-square fa-4x" style="color: #0077b5;"></i> </a>
</li>

<li>
<a href=""target="_blank"><i class="fa fa-youtube-square fa-4x" style="color: #cc181e;"></i> </a>
</li>

<li>
<a href=""target="_blank"><i class="fa fa-skype fa-4x" style="color: #01a3e1;"></i> </a>
</li>

<li>
<a href=""target="_blank"><i class="fa fa-soundcloud fa-4x" style="color: #ff3701;"></i> </a>
</li>

<li>
<a href=""target="_blank"><i class="fa fa-google-plus fa-4x" style="color: #db4639;"></i> </a>
</li>

</ul>
 </div>

<div class="col-md-3 col-lg-3">

<h2 class="text-center" style="color: #d74e4b; font-family: 'Oswald', sans-serif;"> iamsajib1@gmail.com </h2>
<p class="text-center">www.mshajib.com</p>
<h4 class="text-center" style="color: white; font-family: 'Oswald', sans-serif;">1(929)253-0165</h4>

 </div>

<div class="col-md-2 col-lg-2" id="contact-row-3">


<ul class="list-inline">
<li>
<a href=""target="_blank"><i class="fa fa-html5 fa-4x"></i> </a>
</li>

<li>
<a href=""target="_blank"><i class="fa fa-css3 fa-4x"></i> </a>
</li>

<li>
<a href=""target="_blank"><i class="fa fa-github-alt fa-4x"></i> </a>
</li>
</ul>

</div>


</div> <!-- end of row -->


<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

<div style='overflow:hidden;height:65%;width:100%;'><div id='gmap_canvas' style='height:65%;width:100%;'>

</div>

<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(40.7127837,-74.00594130000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.7127837,-74.00594130000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>New York, USA<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>



</div> <!-- end of 1st container-fluid -->

<div class="container-fluid" id="contact-body">
<!--    -->

              <div id="messagebox" class="spacer">
                <div class="container contactform center">

                <h2 class="text-center  wowload fadeInUp">Leave your Comment</h2>

            <div class="row wowload fadeInLeftBig">

                <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                  <input type="text" placeholder="Name">

                  <input type="text" placeholder="Country">

                  <textarea rows="5" placeholder="Message"></textarea>

                  <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                </div>
            </div>
          </div>
          </div>

</div> <!-- end of 2nd container-fluid -->


        <?php get_footer(); ?>
