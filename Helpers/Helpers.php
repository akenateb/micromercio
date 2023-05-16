<?php
use PHPMailer\PHPMailer\PHPMailer;
require "Helpers/PHPMailer/PHPMailer.php";
require "Helpers/PHPMailer/Exception.php";

    function base_url(){
        return BASE_URL;
    }

    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string);
        $string = stripslashes($string);
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script scr>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*)","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace("OR '1'='1'","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace('LIKE ´',"",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a"',"",$string);
        $string = str_ireplace('OR ´a´=´a´',"",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }
        function passGenerator($length = 10){
            $pass = "";
            $longPass = $length;
            $string = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz1234567890";
            $longstring = strlen($string);
            for($i=1;$i<=$longPass;$i++){
                $pos = rand(0,$longstring-1);
                $pass .= substr($string,$pos,1);
            }
            return $pass;
        }

        function token(){

            $r1 = bin2hex((random_bytes(10)));
            $r2 = bin2hex((random_bytes(10)));
            $r3 = bin2hex((random_bytes(10)));
            $r4 = bin2hex((random_bytes(10)));
            $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
            return $token;
        }

        function formatMoney($money){

            $money = number_format($money,2,SPD,SPM);
            return $money;
        }

        function contactar(string $name,string $email,string $phone,string $subject,string $message,string $servicios){
            $mail = new PHPMailer();
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->setFrom("plataforma@micromercio.com", "Pagina contactar Micromercio");
            $mail->addAddress($email, "Webmaster Micromercio");

            //$file_to_attach = "files/$thisyear/$file_zip";

            //$mail->AddAttachment( $file_to_attach , $file_zip );

            $mail->isHTML(true);
            $mail->Subject = "Mensaje a Micromercio recibido";

            $mail->Body = "<h2>Aviso de mensaje recibido</h2></br></br>
                Este email se envía de manera automática para confirmar que se ha recibido el mensaje enviado a Micromercio<br><br>        
                No es necesario responder a este correo.<br><br>
                Atentamente<br>
                Webmaster Micromercio";
            $mail->send();

            $mail = new PHPMailer();
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->setFrom("plataforma@micromercio.com", "Pagina contactar Micromercio");
            $mail->addAddress('info@micromercio.com', "Webmaster Micromercio");

            //$file_to_attach = "files/$thisyear/$file_zip";

            //$mail->AddAttachment( $file_to_attach , $file_zip );

            $mail->isHTML(true);
            $mail->Subject = "Mensaje desde plataforma";

            $mail->Body = "Asunto: ".$subject." Mensaje: ".$message." Servicio: ".$servicios;
            if ($mail->send()){
                echo '<div class="alert alert-success nomargin" role="alert">'. _("Mensaje enviado correctamente") .'</div>';

            }else{
                echo '<div class="alert alert-danger nomargin" role="alert">'. _("Ha ocurrido un error al enviar el mensaje") .'</div>';
            }
        }