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
    <meta name="description" content="Descripcion de los desarrollos web que realizamos.">
    <meta name="keywords" content="empresa diseño web,diseño web profesional, desarrollo web profesional, diseño paginas web precios">
    <meta name="author" content="Micromercio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micromercio - <?php echo _("Los Servicios web que ofrecemos") ?></title>
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
    include_once 'Views/header.php';
    ?>

    <section id="slider" class="slider-element slider-parallax" style="background: url('<?php echo BASE_URL ?>Assets/img/programming.webp') no-repeat; background-size: cover" data-height-xl="600" data-height-lg="500" data-height-md="400" data-height-sm="300" data-height-xs="250">
        <div class="slider-parallax-inner">

            <div class="container clearfix">
                <div class="vertical-middle dark center">

                    <div class="heading-block nobottommargin center">
                        <h1>
								<span class="text-rotater nocolor" data-separator="|" data-rotate="flipInX" data-speed="3500">
									<?php echo _("Nuestros Servicios") ?>
								</span>
                        </h1>
                        <span class="hidden-xs"><?php echo _("Que podemos hacer por usted") ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="col_one_third">
                    <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-crop i-alt"></i>
                        </div>
                        <h3><?php echo _("Definimos") ?><span class="subtitle"><?php echo _("Entendiendo sus necesidades") ?></span></h3>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-tint i-alt"></i>
                        </div>
                        <h3><?php echo _("Diseñamos") ?><span class="subtitle"><?php echo _("El proyecto que necesita") ?></span></h3>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-text-width i-alt"></i>
                        </div>
                        <h3><?php echo _("Personalizamos") ?><span class="subtitle"><?php echo _("Le damos el aspecto que busca") ?></span></h3>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-ok i-alt"></i>
                        </div>
                        <h3><?php echo _("Validamos") ?><span class="subtitle"><?php echo _("Realizamos pruebas de funcionalidad") ?></span></h3>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-thumbs-up i-alt"></i>
                        </div>
                        <h3><?php echo _("Ponemos en produccion") ?><span class="subtitle"><?php echo _("Ya tiene su plataforma operativa") ?></span></h3>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-eye i-alt"></i>
                        </div>
                        <h3><?php echo _("Mantenemos") ?><span class="subtitle"><?php echo _("Cuidamos de su plataforma") ?></span></h3>
                    </div>
                </div>
            </div><!--Fin de la estructura section -->
        </div>
    </section>

    <section id="content">

        <div class="content-wrap nopadding">

            <div class="row nopadding align-items-stretch">

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #1abc9c;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;"><?php echo _("Porque llamarnos") ?></h3>
                        <p style="line-height: 1.8;"><?php echo _("Porque estará asesorado por personas cualificadas y con gran experiencia, la mejor elección para construir su proyecto web") ?></p>

                        <i class="icon-bulb bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #34495e;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;"><?php echo _("Nuestra Misión") ?></h3>
                        <p style="line-height: 1.8;"><?php echo _("Construimos su página web para crear el espacio digital de su empresa obteniendo de esta manera su página web corporativa") ?></p>
                        <i class="icon-cog bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #e74c3c;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;"><?php echo _("Que Obtiene") ?></h3>
                        <p style="line-height: 1.8;"><?php echo _("Dejar de pertenecer al 30% de empresas españolas que no tienen su presencia corporativa en la red y están dejando de obtener más beneficios") ?></p>
                        <i class="icon-thumbs-up bgicon"></i>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div class="section nomargin noborder" style="background-image: url('<?php echo BASE_URL ?>Assets/images/parallax/3.jpg');">
                <div class="heading-block center nobottomborder nobottommargin">
                    <h2>"Everything is designed, but some things are designed well."</h2>
                </div>
            </div>


        </div>

    </section><!-- #content end -->
    <section id="content">

        <div class="content-wrap nopadding">

            <div class="section nomargin noborder">

                <div class="container nobottommargin noborder">

                    <div class="heading-block center">
                        <h2><?php echo _("Que integramos") ?></h2>
                        <span><?php echo _("Características que dan valor a su plataforma") ?></span>
                    </div>

                    <div class="row">

                        <div class="col-md-4 bottommargin">
                            <img data-animate="fadeInLeftBig" src="<?php echo BASE_URL ?>Assets/images/services/iphone.webp" alt="iPhone" class="center-block">
                        </div>

                        <div class="col-md-4 col-sm-6 topmargin bottommargin">

                            <div class="col_full">

                                <div class="feature-box fbox-plain fbox-small fbox-dark">
                                    <div class="fbox-icon">
                                        <i class="icon-screen"></i>
                                    </div>
                                    <h3><?php echo _("Diseños responsive") ?></h3>
                                    <p><?php echo _("Pensados para el uso de dispositivos moviles y táctiles, estos dispositivos se usan casi tanto como los ordenadores actualmente") ?></p>
                                </div>

                            </div>

                            <div class="col_full">

                                <div class="feature-box fbox-plain fbox-small fbox-dark">
                                    <div class="fbox-icon">
                                        <i class="icon-lock3"></i>
                                    </div>
                                    <h3><?php echo _("Plataformas seguras") ?></h3>
                                    <p><?php echo _("Un uso de código seguro es fundamental en la actualidad, código limpio y sin bugs") ?></p>
                                </div>

                            </div>

                            <div class="col_full nobottommargin">

                                <div class="feature-box fbox-plain fbox-small fbox-dark">
                                    <div class="fbox-icon">
                                        <i class="icon-server"></i>
                                    </div>
                                    <h3><?php echo _("Alojamiento web profesional") ?></h3>
                                    <p><?php echo _("Proveemos de servidores donde alojamos su página web, servidores escalables y potentes.") ?></p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 topmargin bottommargin">

                            <div class="col_full">

                                <div class="feature-box fbox-plain fbox-small fbox-dark">
                                    <div class="fbox-icon">
                                        <i class="icon-layer-group"></i>
                                    </div>
                                    <h3><?php echo _("Distintas tecnologías") ?></h3>
                                    <p><?php echo _("Con el uso de capas con distintos lenguajes obtenemos una gran variedad de funcionalidades, con éstas funcionalidades desarrollamos su página web profesional") ?></p></div>

                            </div>

                            <div class="col_full">

                                <div class="feature-box fbox-plain fbox-small fbox-dark">
                                    <div class="fbox-icon">
                                        <i class="icon-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <h3><?php echo _("Comercio Electrónico") ?></h3>
                                    <p><?php echo _("Proyectamos plataformas de comercio online para ampliar la ventas de su negocio, o bien, escaparates online si prefiere solo tener un escaparate virtual accesible") ?></p>
                                </div>

                            </div>

                            <div class="col_full nobottommargin">

                                <div class="feature-box fbox-plain fbox-small fbox-dark">
                                    <div class="fbox-icon">
                                        <i class="icon-user-cog"></i>
                                    </div>
                                    <h3><?php echo _("Mantenimiento personalizable") ?></h3>
                                    <p><?php echo _("Mantendremos su plataforma actualizada y segura. Creando backups (respaldos) para que nunca pierda nada y controlando cualquier posible intento de intrusión") ?></p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!---////////////VIDEO/////////////--->
    <div class="section parallax nomargin noborder dark" style="height: 450px; padding: 120px 0;">

        <div class="vertical-middle center" style="z-index: 2;">
            <div class="container clearfix" data-animate="fadeInUp">
                <div class="heading-block nobottomborder nobottommargin">
                    <h2 style="font-size: 42px;"><?php echo _("Tenemos más servicios") ?></h2>
                    <span class="hidden-sm hidden-xs"><?php echo _("Ponemos a su disposición herramientas que son muy útiles para su plataforma comercial como comprar de dominio, alojamiento páginas web, posicionamiento web, etc. <b><a href='contact.php'>Consúltenos</a></b>") ?></span>
                </div>
            </div>
        </div>

        <div class="video-wrap" style="z-index: 1;">
            <video poster="<?php echo BASE_URL ?>Assets/img/video/working.jpg" preload="auto" loop autoplay muted>
                <source src='<?php echo BASE_URL ?>Assets/img/video/working.mp4' type='video/mp4' />
            </video>
            <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
        </div>

    </div>

    <section id="content">

        <div class="content-wrap nopadding">

            <div class="section nomargin noborder">

                <div class="section" style="margin-top: -80px;">

                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h2><?php echo _("Pedir Presupuesto es supersencillo") ?></h2>
                            <span><?php echo _("Simplemente siga estos tres pasos") ?></span>
                        </div>

                        <div class="col_full">

                            <img data-animate="fadeIn" class="aligncenter" src="<?php echo BASE_URL ?>Assets/images/services/macbook.webp" alt="Solicitar">

                        </div>

                        <div class="col_one_third nobottommargin">

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <i class="i-alt">1.</i>
                                </div>
                                <h3><?php echo _("Tener un proyecto") ?></h3>
                                <p><?php echo _("Puede tener una idea clara de lo que quiere hacer, o bien tener más o menos una idea y prefiere dejarse asesorar") ?></p>
                            </div>

                        </div>

                        <div class="col_one_third nobottommargin">

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="contact.php"><i class="i-alt">2.</i></a>
                                </div>
                                <h3><?php echo _("Ponerse en contacto") ?></h3>
                                <p><?php echo _("Póngase en contacto con nosotros y cuéntenos que desea hacer, definiremos un posible proyecto que se realizaría orientado completamente a sus necesidades y gustos") ?></p>
                            </div>

                        </div>

                        <div class="col_one_third nobottommargin col_last">

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <i class="i-alt">3.</i>
                                </div>
                                <h3><?php echo _("Recibir presupuesto") ?></h3>
                                <p><?php echo _("Una vez definido el proyecto, recibirá por email la estimación del coste presupuestario del mismo.") ?></p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


 <?php
include_once 'Views/footer.php';
?>