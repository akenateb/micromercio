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
    <meta name="description" content="Página de contacto de Micromercio, desde esta página puede contactar con nosotros">
    <meta name="keywords" content="contactar, contacto, preguntar, solicitar">
    <meta name="author" content="Micromercio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micromercio - <?php echo _("Contactar con Nosotros, solicitar presupuesto") ?></title>
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

    if(isset($_POST) && !empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $services = $_POST['services'];

        contactar($name,$email,$phone,$subject,$message,$services);

    }
?>

    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap" style="background-image: url('<?php echo BASE_URL ?>Assets/img/landp/hero.jpg');">

            <div class="container clearfix dark">
                <div id="msg"></div>
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent nobottommargin">

                    <h3><?php echo _("Contactar con nosotros") ?></h3>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="../Helpers/sendemail.php" method="post">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name" style="color: white;"><?php echo _("Nombre") ?> <small>*</small></label>
                                <input type="text" id="name" name="name" value="" class="sm-form-control required" style="color: white;" required>
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email" style="color: white;">Email <small>*</small></label>
                                <input type="email" id="email" name="email" value="" class="required email sm-form-control"  style="color: white;" required>
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone" style="color: white;"><?php echo _("Teléfono") ?></label>
                                <input type="text" id="phone" name="phone" value="" class="sm-form-control" style="color: white;" required>
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="template-contactform-subject" style="color: white;"><?php echo _("Asunto") ?> <small>*</small></label>
                                <input type="text" id="subject" name="subject" value="" class="required sm-form-control" style="color: white;" required>
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-service" style="color: white;"><?php echo _("Servicios") ?></label>
                                <select id="services" name="services" class="sm-form-control" style="color: white;" required>
                                    <option value=""><?php echo _("Selecciona uno") ?></option>
                                    <option value="Mantenimiento"><?php echo _("Mantenimiento Web") ?></option>
                                    <option value="DWeb"><?php echo _("Desarrollo Web") ?></option>
                                    <option value="DApp"><?php echo _("Desarrollo App") ?></option>
                                    <option value="Otros"><?php echo _("Otros") ?></option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message" style="color: white;"><?php echo _("Mensaje") ?> <small>*</small></label>
                                <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30" style="color: white;" value=""></textarea>
                            </div>
							<div><?php 
								echo "[CAPTCHA] No eres Robot? Suma: "; 
								echo '<input type="number" style="width:40px;background:black;color:white" readonly value="'.$a = rand(0, 10).'" id="a" name="sumandoa">'.' más '.'<input type="number" style="width:40px;background:black;color:white" readonly value="'.$b = rand(0, 10).'" id="b" name="sumandob"> Resultado <input type="number" style="width:50px;background:black;color:white" min=0 max=20 value="" id="result" name="result" required>'; 
								?>
								</div>
								<div class="col_full">
								<input type="checkbox" id="checkread" name="check" value="ok" required> Debe aceptar el envío de los datos haciendo click en el check dispuesto, con ello acepta el envío de los datos introducidos en los campos, como así su tratamiento para poder responderle haciendo uso del correo y nombre aportados. Todo ello cumpliendo con la nueva normativa LOPGD.<br><br>

								
								</div>
                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <button class="button button-3d nomargin" type="text" id="send" name="send" onclick="validarFormulario()" value="submit"><?php echo _("Enviar Mensaje") ?></button>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform">

                        </form>

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
					============================================= -->
                <div class="sidebar col_last nobottommargin" style="margin-top: 150px;">

                    <address style="background: #333333">
                        <strong><?php echo _("Nuestras Oficinas") ?></strong><br>
                        Calle Goya, nº 75<br>
                        C.P. 35110 Vecindario, Las Palmas<br>
                        <font size='1'>N.I.F: 44300944T</font><br>
                    </address>
                    <address style="background: #333333">
                    <abbr title="Phone Number"><strong><?php echo _("Teléfono Fijo: ") ?></strong></abbr> (928) 79 35 27<br>
                    <abbr title="Phone Number"><strong><?php echo _("Teléfono Móvil:") ?></strong></abbr> 610 25 26 87 <br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@micromercio.com
                    </address>


                    <div class="widget noborder notoppadding">



                        <a href="https://twitter.com/M1cromerc1o" class="social-icon si-small si-dark si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                    </div>

                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->
    <script>
        document.getElementById('header').classList.remove('transparent-header');

	var formulario = document.getElementById("template-contactform");
	
	  function validarFormulario(){
		 var send = true;
		 var a = $('#a').val();
		 var b = $('#b').val();
		 var result = $('#result').val();
		if (parseInt(a)+parseInt(b)!=parseInt(result)){
			send=false;
			$('#msg').html('<div class="alert alert-danger" role="alert">Algunos de los campos no son correctos</div>');
		}
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var phone = document.getElementById('phone').value;
		var subject = document.getElementById('subject').value;
		var service = document.getElementById('services').selectedIndex;
		var message = document.getElementById('message').value;
		var chkEstado = document.getElementById('checkread');
		
		if (name == null || name.length == 0 || /^\s+$/.test(name)){
			send = false;
		}
		if (!(/\S+@\S+\.\S+/.test(email))){
			send = false;
		}
		if (phone == null || phone.length == 0 || isNaN(phone)){
			send = false;
		}
		if (subject == null || subject.length == 0 || /^\s+$/.test(subject)){
			send = false;
		}
		if (service == null || service == 0){
			send = false;
		}
		if (message == null || message.length == 0 || /^\s+$/.test(message)){
			send = false;
		}
		if (!chkEstado.checked){
			send = false;
		}
		var form = document.getElementById('template-contactform');
			//console.log(form.elements.length);
			for(var i=0; i < form.elements.length; i++){
			  if(form.elements[i].value == '' && form.elements[i].hasAttribute('required')){
				 send = false;
			  }
			}
			if (send==false){
				$("#msg").html('<div class="alert alert-danger" role="alert">Hay campos necesarios sin completar correctamente!</div>');
				
			}else{
				$("#msg").html('<div class="alert alert-success" role="alert">Todos los campos necesarios ok!</div>');
				//form.submit();
				
			}
		  
		//document.getElementById('form_reg').submit();
		
		console.log(send);
		if (send == true){
			//formulario.submit();
			//formulario.send();
		}
	  }
	  

	</script>
<?php
include_once("Views/footer.php");
?>