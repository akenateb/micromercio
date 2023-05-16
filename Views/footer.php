
        <!-- Stylesheets
        ============================================= -->

         <link rel="prefetch" href="<?php echo BASE_URL ?>Assets/css/fonts/fonts_google.css" as="style" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/medical.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/Assets/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>Assets/include/rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>Assets/include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>Assets/include/rs-plugin/css/navigation.css">
<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">



			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background-color: #333;">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2021 <?php echo _("Todos los derechos reservados por Micromercio") ?><br>
						<script id="cronoscript" src="https://www.cronoshare.com/assets/cronoSealWidget-ba977fd463539c4e3a5e7cec83eb3f99.js" type="text/javascript" domain="https://www.cronoshare.com" csspath="/assets/cronoSealWidget-c1a93f6d3bd9edeb8fc8ba80fcc1be00.css"></script><a href="https://www.cronoshare.com/croner-2990454-micromercio" target="_blank" title="Mira el perfil de Micromercio, Desarrollador en Cronoshare" class="cronoWidget" style="width: 178px; height: 100px"><svg viewBox="0 0 178 100"><rect rx="5%" ry="10%" width="100%" height="100%" fill="lightgrey"></rect><rect x="2.5%" y="4%" rx="5%" ry="10%" width="95%" height="92%" fill="white"></rect><text x="8%" y="30%" fill="#9a9a9a" font-family="Calibri" font-size="105%" font-weight="bold">Encuéntranos en</text><image x="7%" y="38%" width="86%" href="https://www.cronoshare.com/assets/badges/logo-normal-89ff9c34f6ff22b027fae7dbbc4c0c48.svg"></image><text text-anchor="middle" x="50%" y="85%" fill="#49abe8" font-family="Calibri" font-size="105%" font-weight="normal">Micromercio</text></svg></a>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">


							<a href="https://twitter.com/M1cromerc1o" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="https://plus.google.com/114946708472508940665" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="https://www.youtube.com/channel/UCjdYRbkhaXHe35_8I19tNng?disable_polymer=true" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-youtube"></i>
								<i class="icon-youtube"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@micromercio.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +34 - 928 79 35 27  || 610 25 26 87
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="<?php echo BASE_URL ?>Assets/js/jquery.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?php echo BASE_URL ?>Assets/js/functions.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script defer src="<?php echo BASE_URL ?>Assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script defer src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function changeesp(){
        var parametros = {
            "idlng": 'es_ES',
        };
        $.ajax({
            data: parametros,
            url: '<?php echo BASE_URL ?>Helpers/functions.php',
            type: 'post',
            success: function(response) {
                //alert(response);
            },
            error: function (response) {
                //alert('ko Esp');
            }
        });
    }
    function changeeng(){
        var parametros = {
            "idlng": 'en_GB',
        };
        $.ajax({
            data: parametros,
            url: '<?php echo BASE_URL ?>Helpers/functions.php',
            type: 'post',
            success: function(response) {
                //alert(response);
            },
            error: function (response) {
                //alert('ko Eng');
            }
        });
    }


    function onSubmit(token) {
        var send = true;
        var form = document.getElementById('template-contactform');
        for(var i=0; i < form.elements.length; i++){
            if(form.elements[i].value == '' && form.elements[i].hasAttribute('required')){
                send = false;
            }
        }
        if (send==true){
            document.getElementById("template-contactform").submit();
        }else{
            $('#msg').fadeIn();
            $('#msg').html('<div class="alert alert-warning" role="alert"><?php echo _("Por favor, Complete todos los campos") ?></div>');
            setTimeout(function(){
                $('#msg').fadeOut('5000');
            }, 3000);
        }

    }
    var tpj=jQuery;
    var revapi31;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_679_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_679_1");
        }else{
            revapi31 = tpj("#rev_slider_679_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:16000,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hades",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[1140,1024,778,480],
                visibilityLevels:[1140,1024,778,480],
                gridwidth:[1140,1024,778,480],
                gridheight:[700,768,960,720],
                lazyType:"none",
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }

        revapi31.bind("revolution.slide.onloaded",function (e) {
            setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
        });

        revapi31.bind("revolution.slide.onchange",function (e,data) {
            SEMICOLON.slider.revolutionSliderMenu();
        });
    });	/*ready*/
</script>


</body>
</html>