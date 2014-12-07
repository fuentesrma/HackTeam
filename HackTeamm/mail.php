
<?php
/*
<input type="email" name="mail" required>
						<input type="hidden" name="nom_uni" value="<?php echo $nombreuni; ?>">
						<input type="hidden" name="carrera" value="<?php echo $carrera; ?>">
						<input type="hidden" name="dir" value="<?php echo $direccion; ?>">
						<input type="hidden" name="email" value="<?php echo $correo; ?>">
						<input type="hidden" name="pagina" value="<?php echo $pagina; ?>">
						<input type="hidden" name="telefono" value="<?php echo $tel; ?>">
*/
		$mail=$_POST['mail'];
		$nom_uni=$_POST['nom_uni'];
		$carrera=$_POST['carrera'];
		$dir=$_POST['dir'];
		$email=$_POST['email'];
		$pagina=$_POST['pagina'];
		$telefono=$_POST['telefono'];
//

		/*
		$this-> nom_uni = $nom_uni;
		$this-> carrera = $carrera;
		$this-> dir = $dir;
		$this-> email = $email;
		$this-> pagina = $pagina;
		$this-> telefono = $telefono;
		*/
		$confimacion="HackTeam@hackteam.net";
		$subject="Universidad";

		if (isset($_POST['mail'])) {
			
			$body="
				Datos de la universidad Solicitada
				----------------------------------------------------------------------------------

				Carrera ".$carrera.";
				Direccion ".$dir.";
				Email ".$email.";
				Pagina Web ".$pagina.";
				Telefono ".$telefono.";
				

				-----------------------------------------------------------------------------------
				TU CORREO ES:".$mail." ;

			";
			$headers="From: $confimacion";
			mail($mail, $subject, $body,$headers);
			echo '<script type="text/javascript">
                alert("Se ha enviado un email a su correo elctronico");
            window.location.href="index.html";
            </script>';
	}
 ?>

