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
    <meta name="description" content="Descubra quienes somos, se explica brevemente objetivos, actividad y horario">
    <meta name="keywords" content="Nuestros Objetivos, tareas micromercio, horarios">
    <meta name="author" content="Micromercio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micromercio - <?php echo _("Quienes somos y a que nos dedicamos") ?></title>
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

    <section id="slider" class="slider-element slider-parallax" style="background: url('Assets/img/landing1.webp') no-repeat; background-size: cover" data-height-xl="600" data-height-lg="500" data-height-md="400" data-height-sm="300" data-height-xs="250">
        <div class="slider-parallax-inner">

            <div class="container clearfix">
                <div class="vertical-middle dark center">

                    <div class="heading-block nobottommargin center">
                        <h1>
								<span class="text-rotater nocolor" data-separator="|" data-rotate="flipInX" data-speed="3500">
									<?php echo _("Quienes Somos") ?>
								</span>
                        </h1>
                        <span class="hidden-xs"><?php echo _("Conózcanos un poco mejor") ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="col_one_third">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4><?php echo _("Construcción ") ?> <span><?php echo _("de páginas web") ?></span>.</h4>
                    </div>

                    <p><?php echo _("Somos una pequeña y sólida empresa con más de diez años de experencia en el sector de construcción de páginas web en las palmas. En nuestro folder de trabajo se puden encontrar la realización de páginas web en las palmas, desarrollo de páginas web en peninsula y construcción de páginas web en el reino unido.") ?></p>

                </div>
                <div class="col_one_third">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4><?php echo _("Como ") ?> <span><?php echo _("empresa de páginas web") ?></span>.</h4>
                    </div>

                    <p><?php echo _("Nuestro objetivo es la realización de páginas web de las que nos sintamos orgullosos, nuestros clientes y nosotros mismos. Nuestra motivación va más allá del beneficio monetario, disfrutar de una página web con diseño profesional y unos buenos acabados, ese es otro de nuestros objetivos. Un desarrollo web profesional con un diseño web profesional, es con total seguridad uno de nuestros objetivos más importantes ") ?></p>

                </div>

                <div class="col_one_third col_last">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4><?php echo _("Como ") ?> <span><?php echo _("empresa de servicios web") ?></h4>
                    </div>

                    <p><?php echo _("Nos encargamos de todo el proceso en la creación de paginas web, tanto en páginas web para empresas como así en páginas web para profesionales. También le asesoramos acerca del mejor alojamiento para páginas web, le buscamos y contratamos el dominio web, y por supuesto, nos encargamos del desarrollo web con distintos lenguajes de programación en virtud de las funciones que la página vaya a realizar. ") ?></p>

                </div>
            </div>
        </div>

            <!---////////////VIDEO/////////////--->
            <div class="section parallax noborder dark nobottommargin" style="height: 450px; padding: 120px 0;margin-top: -80px;">

                <div class="vertical-middle center" style="z-index: 2;">
                    <div class="container clearfix" data-animate="fadeInUp">
                        <div class="heading-block nobottomborder ">
                            <h2 style="font-size: 42px;"><?php echo _("Micromercio nunca duerme") ?></h2>
                            <span class="hidden-sm hidden-xs"><?php echo _("Todos sus procesos son monitorizados a tiempo real para que su comercio este abierto 24/7/365") ?></span>
                        </div>
                    </div>
                </div>

                <div class="video-wrap" style="z-index: 1;">
                    <video poster="Assets/img/video/deskwork.jpg" preload="auto" loop autoplay muted>
                        <source src='Assets/img/video/deskwork_mini.mp4' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                </div>

            </div>
            <!---////////////VIDEO/////////////--->
        <div class="section notopmargin nobottommargin">

            <div class="visible-sm visible-xs" style="background-color: rgba(238,238,238,0.9); position: absolute; top: 0;left: 0; z-index: 1;width: 100%; height: 100%;"></div>

            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-md-5" data-lightbox="gallery">
                        <div class="heading-block nobottomborder bottommargin-sm">
                            <h3 class="nott ls0"><?php echo _("Que hacemos realmente") ?></h3>
                        </div>
                        <p><?php echo _("A medida que han pasado los años, los distintos lenguajes de programación han ido tomando mayor relevancia en la construccion de diferentes plataformas y aplicaciones web.") ?></p>
                        <p><?php echo _("Actualmente están fuertemente consolidadas diferentes tecnologías basadas en lenguajes de programación, plataformas y por supuesto toda clase de comercios  están siendo construidas con ellas. <b>Nosootros hace uso de una buena parte de esos lenguajes</b>.") ?></p>
                        <p><?php echo _("<b>Usamos las mas avanzadas tecnologías en la programación para el diseño y la construcción de páginas web profesionales.</b> Desarrollamos apliaciones web implementando lenguajes dinámicos que ofrecerán la mejor experiencia al usuario. De hecho, llevamos haciéndolo hace más de diez años") ?></p>

                    </div>
                    <div class="col-md-4" style="margin-left: 120px;">
                        <div class="opening-table">
                            <div class="heading-block bottommargin-sm nobottomborder">
                                <h4><?php echo _("Horario de comercio") ?></h4>
                                <span><?php echo _("Horarios de apertura y cierre") ?></span>
                            </div>
                            <div class="time-table-wrap clearfix">
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Lunes") ?></h5>
                                    <span class="col-md-7">10:00am - 18:00pm</span>
                                </div>
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Martes") ?></h5>
                                    <span class="col-md-7">10:00am - 18:00pm</span>
                                </div>
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Miércoles") ?></h5>
                                    <span class="col-md-7">10:00am - 18:00pm</span>
                                </div>
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Jueves") ?></h5>
                                    <span class="col-md-7">10:00am - 18:00pm</span>
                                </div>
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Viernes") ?></h5>
                                    <span class="col-md-7">10:00am - 18:00pm</span>
                                </div>
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Sábado") ?></h5>
                                    <span class="col-md-7 color t600"><?php echo _("Cerrado") ?></span>
                                </div>
                                <div class="time-table clearfix">
                                    <h5 class="col-md-5"><?php echo _("Domingo") ?></h5>
                                    <span class="col-md-7 color t600"><?php echo _("Cerrado") ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        </div>
    </section>
<?php
include "Views/footer.php";
?>