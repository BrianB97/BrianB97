
</main>

<footer>
    <div class="site-width menus">

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul>
                        <li><a href="homepage.php" target="_self" class=>Homepage</a></li>
                        <li><a href="About-us.php" target="_self" class=about>About us </a></li>
                        <li><a class='link--dark-grey' href="donate.php" target="_self">Donate</a></li>
                        <li><a class='link--dark-grey' href="Contact.php" target="_self">Contact</a></li>
                        <li><a href="register.php" target="_self" class=>Register</a></li>
                    </ul>
                </div>
                <div class="col-6">
               
                <ul class="social clearfix">
            <li class="twitter"><a href="https://twitter.com/YLDFYemen" target="_blank"><strong>Twitter</strong></a>
            </li>
            <li class="facebook"><a href="https://www.facebook.com/YLDFYemen/" target="_blank"><strong>Facebook</strong></a></li>
            <li class="youtube"><a href="https://www.youtube.com/user/YLDFYMN" target="_blank"><strong>youtube</strong></a>
            </li>
            <li class="instagram"><a href=" https://www.instagram.com/yldfyemen/" target="_blank"><strong>instagram</strong></a>
            </li>
        </ul>
                
    
                </div>
            </div>
        </div>
    </div>

    <div class="redes-sociales">
        <form>
            <label class="label">Newsletter</label>
            <input type="email" id="subEmail">
            <button type="submit" id="submit"></button>
        </form>
       
    </div>
    <br>
    <br>
  
  
   
    <div class="site-width copyright">
        <p>© 2024 Brian All Rights Reserved |  Powered by Brian</p>
    </div>
</footer>

<script src="/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/js/swiper.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/tilt.jquery.js"></script>
<script src="/js/tilt.app.js"></script>
<script>
    var $overlay = $('<div class="overlay"></div>');
    $('.videos section  a[href*="youtube.com/"]').click(function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var vidId = href.substring(href.length - 11, href.length);
        var $iframe = $('<div class="flexy"><iframe src="//youtube.com/embed/' + vidId + '?rel=0&autoplay=1" frameborder="0"></iframe></div>');
        $('body').append($overlay);
        $overlay.append($iframe);
        $('a[href*="youtube.com/"]').each(function (value) {
            $frameEl.append(value);
        });
    });
    $overlay.click(function () {
        $(this).detach().empty();
    });
    $('.actNowLink').click(function () {
        $('.takeAction').toggleClass('open');
        return false
    })

    $('.videos section .toggle').click(function (event) {
        event.preventDefault();
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        var ph = $(this).parent().height();
        var ch = $(this).next().height();

        if (ch > ph) {
            $(this).parent().css({
                'min-height': ch + 'px'
            });
        } else {
            $(this).parent().css({
                'height': 'auto'
            });
        }
    });

    function tabParentHeight() {
        var ph = $('.videos section').height();
        var ch = $('section .cont').height();
        if (ch > ph) {
            $('.videos section').css({
                'height': ch + 'px'
            });
        } else {
            $(this).parent().css({
                'height': 'auto'
            });
        }
    }

    $(window).resize(function () {
        tabParentHeight();
    });

    $(document).resize(function () {
        tabParentHeight();
    });
    tabParentHeight();
</script>
<script src="/js/jquery-barIndicator.js"></script>
<script src="/js/highcharts.js"></script>
<script src="/js/waypoints.min.js" type="text/javascript"></script>
<script src="/js/jquery.counterup.js" type="text/javascript"></script>
<script src="/js/form.js"></script>
<script src="/js/script.js"></script>







​
</body>
</html>
