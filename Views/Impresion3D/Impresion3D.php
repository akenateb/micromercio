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
    <meta name="description" content="Nuevo Servicio de Impresión 3D en Las Palmas">
    <meta name="keywords" content="impresion 3D Gran Canaria, impresion 3D Las Palmas, Imprenta 3D, servicion impresion 3D">
    <meta name="author" content="Micromercio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micromercio - <?php echo _("Nuevo Servicio de Impresión 3D") ?></title>
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

    <section id="slider" class="slider-element force-full-screen full-screen">

			<div class="force-full-screen full-screen dark" style="background-image: url('<?php echo BASE_URL ?>Assets/img/landp/ball-597523_1920.jpg');background-position: 50% 0;">

				<div class="container clearfix">
					<div class="slider-caption slider-caption-center">
						<h2 data-animate="fadeInDown"><?php echo _("Servicio Impresión 3D") ?></h2>
						<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="400"><?php echo _("Nos complace anunciar que ya ofrecemos servicio de Impresión 3D en Las Palmas de Gran Canaria. Servicio casi en exclusividad en las islas, si necesita más información contacte con nosotros.") ?></p>
						
						<a data-animate="fadeInUp" data-delay="800" href="<?php echo BASE_URL ?>Contactar" class="button button-3d button-teal button-large nobottommargin d-none d-md-inline-block" style="margin: 30px 0 0 10px;"><?php echo _("Contactar") ?></a>
					</div>
				</div>
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.15);"></div>
			</div>

		</section>
    
<?php
include_once("Views/footer.php");
?>