<?php /* Template Name: Custom Contact Page Template */ ?>
    <?php get_header(); ?>

        <div id="background-contact"></div>
        <!-- background end -->

        <div id="contact" class="container-fluid">

            <div id="contactHeader" class="text-center">
                <h2>Contact</h2>
            </div>


            <div id="nameAddress" class="row text-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="contactinfo">
                    <h2>Mohammed Enamul Haque Shajib</h2>
                    <h3>iamsajib1@gmail.com</h3>
                    <p>42-25 80th Street
                        <br> Elmhurst, NY - 11373
                        <br> P: (929) 253-0165 </p>
                </div>

            </div>

            <div id="box-message">
                <div id="messagebox" class="spacer">
                    <div class="container contactform center">

                        <h2 class="text-center">Leave your Comment</h2>

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
            </div>
            <!--    end of message box-->


        </div>

        <?php get_footer(); ?>
