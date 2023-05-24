<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		#pantalla-carga {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: white;
			z-index: 9999;
		}
	</style>
	<script>
		function verificarUsuario() {
			<?php session_start(); ?>
			var nombreUsuario = "<?php echo $_SESSION['username']; ?>"; // Obtener el nombre de usuario de la sesión en PHP
			if (nombreUsuario !== "admin") {
				alert("Acceso denegado. No eres un administrador.");
				window.location.href = "../paginas/MenuinternoUser.php"; // Redirigir a otra página
			} else {
				// Ocultar la pantalla de carga
				alert("Acceso completo permitido. Eres un administrador.");
				window.location.href = "../paginas/Menuinterno.html";
			}
		}
	</script>
</head>
<body onload="verificarUsuario()">
	<div id="pantalla-carga"></div>
</body>
</html>
