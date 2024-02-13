<?php
session_start();
// print_r( $_SESSION );

if (!isset($_SESSION['ID'])) {
    header("Location:../Homepage.php");
}
?>
<?php include 'header.php';?>


<section class="aboutPage Page">


<div class="ajax-container">

<div class="ajax">
<div class="parallexContainer outer-width" style="   background-color: #62b64d;">
<div class="parallex">
<div id="background" class="mouse-bg"
 style="background-image: url('images/yldf we.....jpg');">

</div>
<div id="foreground" class="mouse-bg">
<h1 class="title">

    <small>   About Foundation </small>
    Who We Are
</h1>
</div>

</div>    </div>
<div class="content site-width  clearfix lazyloaded">
   <div class="page_content" id="print">
    <div class="paragraphs">
        <div class="paragraphs-container">
        <h1>Who We Are</h1>
<p><strong>YLDF Vision, Mission and Values</strong></p>
<p>Our vision is a Yemen in which skilled, well qualified and active young women and men play leadership roles in all domains of society and enable Yemenis to contribute to a better world.<strong> </strong></p>
<p>Our mission is &ldquo;to increase male and female youth participation in development of their communities through high standards of quality education and participatory and action oriented training and youth NGOs and initiatives capacity building over all Yemeni governorates in response to development and labor market needs.&rdquo;</p>
<p>YLDF works in light of the following values:</p>
<ul><li> Quality Assurance</li>
<li>Non- Discrimination</li>
<li>Gender Equity</li>
<li>Respect of Human Rights</li>
<li>Fostering Creativity</li>
<li>Participation</li>
<li>Continuous Improvement</li>
<li>Volunteerism</li>
<li>Sustainability</li></ul>

            </div>
        </div>
    </div>
</div>
</div>
</div>


<section class="partners">
    <div class="site-width">
        <h2 class="heading_1">Our Partners</h2>
        <ul data-display=1 data-group=5>
                                   
        <li style="background-image: url('images/3.jpg');">
                    <h2>Netherlands Ministry of Foreign Affairs </h2>
                                                    <a target="_blank" href="https://www.government.nl/ministries/ministry-of-foreign-affairs"></a>
                                            </li>
                                  
                                   
                                    <li style="background-image: url('images/14.jpg');">
                    <h2>Yemen Government </h2>
                                            </li>
                                   
                                    <li style="background-image: url('images/23.gif');">
                    <h2>Total</h2>
                                                    <a target="_blank" href="https://www.total.com/en"></a>
                                            </li>
                                    <li style="background-image: url('images/24.jpg');">
                    <h2>UNICEF</h2>
                                                    <a target="_blank" href="https://www.unicef.org/"></a>
                                            </li>
                                    
                                    
                                    <li style="background-image: url('images/29.jpg');">
                    <h2>Yemen LNG Company</h2>
                                                    <a target="_blank" href="www.yemenlng.com/"></a>
                                            </li>
                                    
                                    <li  style="background-image: url('images/saxion.jpg');">
                    <h2>Saxion</h2>
                                                    <a target="_blank" href="https://www.saxion.edu/"></a>
                                            </li>           
            

        </ul>
       
    </div>
</section>
<section class="move">
    <div class="site-width para_1">
        <h3 class="heading_1">YLDF Team</h3>
        <p></p>
        <img src="images/yldfteam3.jpg"
                     alt=""/>
    </div>
</section>
</section>


<?php include 'footer.php';?>