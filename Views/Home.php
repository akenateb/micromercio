<?php
header("access-control-allow-origin: *");

if (!isset($_SESSION['lng'])){
    $_SESSION['lng']='es_ES';
}

$locale=$_SESSION['lng'];
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain($locale, "./locale");
textdomain($locale);

?>
    <!DOCTYPE html>
<html dir="ltr" lang=<?php echo $locale ?>>
<head>


    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Empresa dedicada al desarrollo de páginas web, desarrollo de apliaciones, alojamiento plataformas y creación de páginas aplicaciones con acabado profesional en Gran Canaria desde hace muchos años.">
    <meta name="keywords" content="empresa diseño web,diseño web profesional, desarrollo web profesional, diseño paginas web precios, dominio y alojamiento web, programacion paginas web, diseño y creacion paginas web, hacemos paginas web, crear pagina web canarias, creador paginas web, empresas diseño web">
    <meta name="author" content="Micromercio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micromercio - <?php echo _("Creamos páginas web profesionales corporativas") ?></title>
    <?php
    //echo $locale;
    if ($locale=="en_GB"){
    ?>
        <link rel="alternate" hreflang="en" href="https://www.micromercio.com/" />
    <?php
    }else{
    ?>
        <link rel="alternate" hreflang="es" href="https://www.micromercio.com/" />
    <?php
    }
    include_once 'header.php';
    ?>

    <section id="slider" class="slider-element revslider-wrap clearfix">
        <div class="slider-parallax-inner">
            <!--
                #################################
                    - THEMEPUNCH BANNER -
                #################################
                -->
            <div id="rev_slider_679_1_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
                <div id="rev_slider_679_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                    <ul>
                        <!-- SLIDE  -->
                        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="Assets/images/slider/rev/websitestart_thumb.jpg" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
                            <!-- MAIN IMAGE -->
                            <img src="Assets/images/slider/rev/websitestart.webp"  alt="Desarrollo aplicativos web" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="215"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"></div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="230"
                                 data-fontsize="['60','50','40','34']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><?php echo _("Bienvenid@ a Micromercio") ?></div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="340"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-width="['650','650','480','360']"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-textAlign="center"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;"><?php echo _("Hacemos plataformas profesionales desde hace muchos años") ?></div>
                        </li>
                        <!-- SLIDE  -->
                        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="Assets/images/slider/rev/programming_thumb.jpg" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
                            <!-- MAIN IMAGE -->
                            <img src="Assets/images/slider/rev/programming.webp"  alt="Programación aplicaciones" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="215"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><?php echo _("Páginas web y Aplicaciones para dipositivos") ?></div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="230"
                                 data-fontsize="['60','50','40','34']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><?php echo _("Desarrollamos aplicaciones web") ?></div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="340"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-width="['650','650','480','360']"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-textAlign="center"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;"><?php echo _("Para empresas y particulares") ?></div>
                        </li>
                        <!-- SLIDE  -->
                        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="Assets/images/slider/rev/web2_thumb.jpg" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
                            <!-- MAIN IMAGE -->
                            <img src="Assets/images/slider/rev/web2.webp"  alt="Desarrollo aplicaciones web" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="215"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><?php echo _("Si no estás en internet no existes") ?></div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="230"
                                 data-fontsize="['60','50','40','34']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><?php echo _("Amplie su presencia comercial") ?></div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="middle" data-hoffset="0"
                                 data-y="top" data-voffset="340"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-width="['650','650','480','360']"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-textAlign="center"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;"><?php echo _("Llegue a un mayor número de clientes potenciales") ?></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </section>
    <!-- Content
============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="heading-block topmargin">
                            <h1>
                                <?php echo _("Usted pone el negocio") ?>
                                <br>
                                <?php echo _("Nosotros lo difundimos") ?>
                            </h1>
                        </div>
                        <p class="lead">
                            <?php echo _("Hacemos páginas web profesionales personalizadas, para ser usadas en diferentes plataformas y en distintos entornos. Le ofrecemos el diseño y creación de aplicativos web con los acabados más avanzados para la implementación de páginas web corporativas y aplicaciones web (Android e IOS). Somos su mejor opción entre las empresas de creación de páginas web.") ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="section parallax bottommargin-lg dark" style="background-image: url('Assets/img/nightcity.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                <div class="heading-block center nobottomborder nobottommargin">
                    <h2><?php echo _("Internet nunca descansa") ?></h2>
                    <span class="hidden-sm hidden-xs">
									<?php echo _("Con nosotros puede descansar sabiendo que su plataforma está en las mejores manos.") ?>
									<a href="<?php echo BASE_URL ?>Servicios">
										<?php echo _(" Todo lo que hacemos por usted.") ?>
									</a>
								</span>
                </div>
            </div>
			
            <div class="container clearfix" style="font-size:16px">
                <div class="fancy-title title-bottom-border">
                    <h1>
                        <?php echo _("Micromercio ") ?>
                        <span>
										<?php echo _("construye") ?>
									</span>
                        <?php echo _(" para usted") ?>
                    </h1>
                </div>
                <p>
                    <?php echo _("Ponemos a disposicion de nuestros clientes diferentes tipos de soluciones, servicios que le permitirán desde crear su plataforma corporativa construidas con páginas web dinámicas, hasta servicios de amortización de la inversión en la construcción de su aplicativp. Pasando por servicios de alojamiento web, compra de dominio, soporte, personalización, y mucho más.") ?>
                </p>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <i class="icon-screen"></i>
                        </div>
                        <h3>
                            <?php echo _("Diseños responsive.") ?>
                        </h3>
                        <p>
                            <?php echo _("Para adaptarse a casi todos los tamaños de pantallas y dispositivos táctiles. Hoy dia el uso de estos dispositivos está tan extendidos como los ordenadores") ?>
                        </p>
                    </div>
                </div>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <i class="icon-eye"></i>
                        </div>
                        <h3>
                            <?php echo _("Programación dinámica.") ?>
                        </h3>
                        <p>
                            <?php echo _("Permite que diferentes lenguajes de programacion interactúen con el usuario dependiendo de sus acciones en la plataforma web.") ?>
                        </p>
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <i class="icon-star2"></i>
                        </div>
                        <h3>
                            <?php echo _("Destaque sobre sus competidores.") ?>
                        </h3>
                        <p>
                            <?php echo _("Rapidamente atraerá más posibles usuarios, y por ello, más posibles clientes potenciales con una plataforma que ofrezca un diseño y usabilidad acordes con los diseños actuales") ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <i class="icon-play1"></i>
                        </div>
                        <h3>
                            <?php echo _("Integre fácilmente elementos multimedia.") ?>
                        </h3>
                        <p>
                            <?php echo _("No importa si es un video o cientos de fotos, no hay limites. Las plataformas web construidas por Micromercio le permiten incrustar cualqueir contenido multimedia.") ?>.
                        </p>
                    </div>
                </div>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                        <div class="fbox-icon">
                            <i class="icon-firstdraft"></i>
                        </div>
                        <h3>
                            <?php echo _("Soporte Parallax.") ?>
                        </h3>
                        <p>
                            <?php echo _("Efectos de diseño que aumentan el valor de diseño de sus páginas web creando elementos llamativos y dinámicos para el visitante.") ?>
                        </p>
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                        <div class="fbox-icon">
                            <i class="icon-cloud1"></i>
                        </div>
                        <h3>
                            <?php echo _("Presencia en la nube") ?>
                        </h3>
                        <p>
                            <?php echo _("Una de las mayores ventajes que ofrece tener una plataforma centralizada en la nube, es la facilidad de acceso desde cualquier punto del planeta, su plataforma web no cierra.") ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col_one_third bottommargin-sm">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <i class="icon-bulb"></i>
                        </div>
                        <h3>
                            <?php echo _("Convertimos su idea.") ?>
                        </h3>
                        <p>
                            <?php echo _("Transformamos su idea en una plataforma web operativa para que esa idea sea usada por cualquier usuario que la visite.") ?>
                        </p>
                    </div>
                </div>
                <div class="col_one_third bottommargin-sm">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                        <div class="fbox-icon">
                            <i class="icon-heart2"></i>
                        </div>
                        <h3>
                            <?php echo _("Construimos plataformas con dedicación.") ?>
                        </h3>
                        <p>
                            <?php echo _("Para nosotros, de la misma manera que para usted, lo acabados son tán importantes como la plataforma en sí misma.") ?>
                        </p>
                    </div>
                </div>
                <div class="col_one_third bottommargin-sm col_last">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                        <div class="fbox-icon">
                            <i class="icon-note"></i>
                        </div>
                        <h3>
                            <?php echo _("Necesita presupuesto.") ?>
                        </h3>
                        <p>
                            <?php echo _("Micromercio estará encantado de atenderle cuando lo desee, pida presupuesto sin compromiso.") ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row clearfix bottommargin-lg common-height">
                <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-code"></i>
                        <div class="counter counter-lined">
                            <?php echo _("+ ") ?>
                            <span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>.000
                        </div>
                        <h5>
                            <?php echo _("Lineas de Código escritas") ?>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-graph"></i>
                        <div class="counter counter-lined">
                            <?php echo _("+ ") ?>
                            <span data-from="30" data-to="215" data-refresh-interval="100" data-speed="100"></span>.000
                        </div>
                        <h5>
                            <?php echo _("Kbytes de Archivos realizados") ?>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-layer-group"></i>
                        <div class="counter counter-lined">
                            <?php echo _("+ ") ?>
                            <span data-from="10" data-to="150" data-refresh-interval="25" data-speed="3500">+</span>
                        </div>
                        <h5>
                            <?php echo _("Plantillas Realizadas") ?>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-clock2"></i>
                        <div class="counter counter-lined">
                            <?php echo _("+ ") ?>
                            <span data-from="60" data-to="190" data-refresh-interval="30" data-speed="2700"></span>.000
                        </div>
                        <h5>
                            <?php echo _("Horas de desarrollo realizadas") ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div class="col_one_third bottommargin-sm center">
                    <img data-animate="fadeInLeft" src="Assets/img/services/iphonex.webp" alt="Desarrollo Android e IOS">
                </div>
                <div class="col_two_third bottommargin-sm col_last">
                    <div class="heading-block topmargin-sm">
                        <h3>
                            <?php echo _("Hacemos aplaciones optimizadas para dispositivos móviles.") ?>
                        </h3>
                    </div>
                    <p>
                        <?php echo _("Implementamos apps personalizadas para empresas y pequeños negocios. Aplicaciones que pueden ser instaladas tanto en dispositivos Android como en IOS") ?>
                    </p>
                    <p>
                        <?php echo _("Los aplicativos en dispositivos moviles le ayudarán a difundir contenido dinámico que se acoplarán perfectamente a cualquier modelo de negocio, ampliando el impacto en un canal completamente establecido y novedoso como es el de los dispositivos móviles.") ?>
                    </p>
                    <a href="<?php echo BASE_URL ?>quienes_somos" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">
                        <?php echo _("Quienes Somos") ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- #content end -->
<?php include_once 'footer.php'; ?>