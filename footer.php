<div class="grid_24">
                <div class="horisontal_line"></div>
            </div>
            <div class="grid_1">
                <div class="holder"></div>
            </div>
            <div class="grid_10">
                <div class="ribbon2">Why We Should Work Together</div>
                <div class="why_me">
                    <ul>
                        <li>Very Good understanding of the principles of design and design theories</li>
                        <li>Good technical skills enables me to use my knowlage of design principles</li>
                        <li>Ability to conceptualise and think visually</li>
                        <li>Ability to work within a team or alone</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>Pellentesque scelerisque urna in dui viverra faucibus</li>
                        <li>Nullam vel erat lacus, at tincidunt nibh</li>
                    </ul>
                </div>
            </div>
            <div class="grid_2">
                <div class="vertical_line2"></div>
            </div>
            <div class="grid_10">
                <div class="ribbon2">Contact Me</div>
                <!-- CONTACT FORM -->
                <div id="contact-area">
                    <form method="post" action="">
                        <label for="Name">Name:</label>
                        <input type="text" name="Name" id="Name" />
                        <label for="Email">Email:</label>
                        <input type="text" name="Email" id="Email" />
                        <label for="Message">Message:</label>
                        <br />
                        <textarea name="Message" rows="20" cols="20" id="Message"></textarea>
                        <input type="submit" name="submit" value="Submit" class="submit-button" />
                    </form>
                    <div style="clear: both;"></div>
                </div>
            </div>
            <div class="grid_1">
                <div class="holder"></div>
            </div>
            <div class="grid_24">
                <div class="horisontal_line"></div>
            </div>
        </div>
        <!-- END .CONTAINER_24 -->
        <div style="display:none;" class="nav_up" id="nav_up"></div>
        <div style="display:none;" class="nav_down" id="nav_down"></div>
        <script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tips.js" type="text/javascript"></script>
        <script language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tipTip.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lightbox-0.5.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/colorpicker.js"></script>
        <script type="text/javascript">
            $("document").ready(function() {
                var percent = $('.progress_bar').attr('title');
                $('.progress_bar').animate({
                    width: percent
                }, 1000);

                var percent = $('.photoshop').attr('title');
                $('.photoshop').animate({
                    width: percent
                }, 1000);

                var percent = $('.dreamweaver').attr('title');
                $('.dreamweaver').animate({
                    width: percent
                }, 1000);

                var percent = $('.flash').attr('title');
                $('.flash').animate({
                    width: percent
                }, 1000);

                var percent = $('.html').attr('title');
                $('.html').animate({
                    width: percent
                }, 1000);

                var percent = $('.css').attr('title');
                $('.css').animate({
                    width: percent
                }, 1000);

                var percent = $('.java').attr('title');
                $('.java').animate({
                    width: percent
                }, 1000);

                var percent = $('.php').attr('title');
                $('.php').animate({
                    width: percent
                }, 1000);

                // activate tooltip
                $('.tip').tipsy({
                    gravity: 's',
                    fade: true
                });

                //background switcher
                $('#bg_switcher a').click(function() {
                    var link = $(this).attr('href');
                    var cssLink = ('url(' + link + ')');
                    $('body').css('background', cssLink);
                    return false;
                });
                //color switcher				
                $('#colorSelector').ColorPicker({
                    color: '#0000ff',
                    onShow: function(colpkr) {
                        $(colpkr).fadeIn(500);
                        return false;
                    },
                    onHide: function(colpkr) {
                        $(colpkr).fadeOut(500);
                        return false;
                    },
                    onChange: function(hsb, hex, rgb) {
                        $('#colorSelector div').css('backgroundColor', '#' + hex);
                        $('#header').css('borderColor', '#' + hex);
                        $('.ribbon2, .horisontal,.ribbon_portfolio').css('borderColor', '#' + hex);
                        $("#header h1, .ribbon2, .available, .ribbon_portfolio, .item_tittle h1").css("color", '#' + hex);
                        $("#logo, #contact-area input.submit-button,.progress_bar, .photoshop, .ilustrator, .dreamweaver, .flash, .html, .css, .java, .php").css("background-color", '#' + hex);
                    }
                });

            });
        </script>
        <script type="text/javascript">
            $(function() {
                $('#gallery a').lightBox();
            });
        </script>
        <script type='text/javascript'>
            $(document).ready(function() {
                $("#gallery img").fadeTo("fast", 0.4);
                $("#gallery img").hover(function() {
                    $(this).fadeTo("fast", 1.0);
                }, function() {
                    $(this).fadeTo("fast", 0.4);
                });
            });
        </script>
        <script type="text/javascript">
            $(function() {
                var $elem = $('.container_24');

                $('#nav_up').fadeIn('slow');
                $('#nav_down').fadeIn('slow');

                $(window).bind('scrollstart', function() {
                    $('#nav_up,#nav_down').stop().animate({
                        'opacity': '0.2'
                    });
                });
                $(window).bind('scrollstop', function() {
                    $('#nav_up,#nav_down').stop().animate({
                        'opacity': '1'
                    });
                });

                $('#nav_down').click(

                function(e) {
                    $('html, body').animate({
                        scrollTop: $elem.height()
                    }, 800);
                });
                $('#nav_up').click(

                function(e) {
                    $('html, body').animate({
                        scrollTop: '0px'
                    }, 800);
                });
            });
        </script>
        <script type="text/javascript">
            $(function() {
                $(".blue").tipTip({
                    maxWidth: "auto",
                    edgeOffset: 10
                });
            });
            $(function() {
                $(".blue2").tipTip({
                    maxWidth: "auto",
                    edgeOffset: 52
                });
            });
        </script>
    </body>

</html>