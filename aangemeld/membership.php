<?php
session_start();
// print_r( $_SESSION );

if (!isset($_SESSION['ID'])) {
    header("Location:../Homepage.php");
}
?>
<?php include 'header.php';?>



        <section class="volunteerPage">
        <div class="campaignFeatured outer-width">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img
                                        src="images/member.jpg"
                                        alt="Become an Activist or volunteer"/></div>
                        

                    </div>
                </div>
            </div>
            <div class="hashTag-snippet">
                <div>
                    <h2>Membership</h2>
                    <p>Become an Activist or volunteer</p>
                </div>
            </div>
        </div>
        <div class="site-width">
            <div class="page_content" id="print">
                <br>
                <div class="paragraphs-container">
                    <p>YLDF Overview</p><p>Youth Leadership Development Foundation (YLDF) is a non-governmental and non-profitable organization, located in Sana&rsquo;a, the capital city of Yemen. YLDF was originally founded to motivate, support and develop today&rsquo;s youth, by enabling them to recognize their needs and problems and in helping them to put forward their opinions, solutions and ideas, so that they become a special part of Yemen&rsquo;s development. Although Youth represents a broader section in the demographic pyramid of Yemen, yet they still play a small role as far as decision making</p><p>processes and development issues are concerned. Our vision is a Yemen in which skilled, well qualified and active young women and men play leadership roles smartly in all domains of society and enable Yemenis to contribute to a better world. Our mission is &ldquo;to increase youth</p><p>participation in social, political and economic aspects of society through systematic training and education in vocational, communication, leadership and soft skills in order to bring them in the main stream to respond to community and labor market.&rdquo;</p>
                </div>
            </div>

        </div>
        <div class="sc_columns columns_wrap site-width clearfix flex">
                            <div class="column-1_4 column_padding_bottom">
                    <div id="sc_services_319709470_1" class="sc_services_item sc_services_item_1 odd first">
                       <span class="sc_icon icon-icon1_1" style="background-image: url('images/volunteer.png')"></span>
                        <div class="sc_services_item_content">
                            <h4 class="sc_services_item_title">Volunteer</h4>
                            <div class="sc_services_item_description">
                                <p>Become an Activist or volunteer</p>

                                    <a class="link_1 white" href="#">Apply Now</a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="column-1_4 column_padding_bottom">
                    <div id="sc_services_319709470_1" class="sc_services_item sc_services_item_1 odd first">
                       <span class="sc_icon icon-icon1_1" style="background-image: url('images/intern.png')"></span>
                        <div class="sc_services_item_content">
                            <h4 class="sc_services_item_title">Intern</h4>
                            <div class="sc_services_item_description">
                                <p>Become an Activist or volunteer</p>

                                    <a class="link_1 white" href="#">Apply Now</a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="column-1_4 column_padding_bottom">
                    <div id="sc_services_319709470_1" class="sc_services_item sc_services_item_1 odd first">
                       <span class="sc_icon icon-icon1_1" style="background-image: url('images/trainee.png')"></span>
                        <div class="sc_services_item_content">
                            <h4 class="sc_services_item_title">Trainee</h4>
                            <div class="sc_services_item_description">
                                <p>Training Opportunity </p>

                                    <a class="link_1 white" href="#">Apply Now</a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="column-1_4 column_padding_bottom">
                    <div id="sc_services_319709470_1" class="sc_services_item sc_services_item_1 odd first">
                       <span class="sc_icon icon-icon1_1" style="background-image: url('images/consula1.png')"></span>
                        <div class="sc_services_item_content">
                            <h4 class="sc_services_item_title">Consultant and Trainer </h4>
                            <div class="sc_services_item_description">
                                <p>Become a consultant and trainer</p>

                                    <a class="link_1 white" href="# ">Apply Now</a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="column-1_4 column_padding_bottom">
                    <div id="sc_services_319709470_1" class="sc_services_item sc_services_item_1 odd first">
                       <span class="sc_icon icon-icon1_1" style="background-image: url('images/vendor.png')"></span>
                        <div class="sc_services_item_content">
                            <h4 class="sc_services_item_title">Vendors </h4>
                            <div class="sc_services_item_description">
                                <p>Become a vendor </p>

                                    <a class="link_1 white" href="#">Apply Now</a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            

        </div>
    </section>
    <?php include 'footer.php';?>
