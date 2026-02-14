<?php
error_reporting(0);
?>
<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Recuerdos Familiares</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Comentarios - Nicolas Camargo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<link rel="icon" href="data:,">
	<link rel="stylesheet" href="../Estilos/index 1/styles3.css"> <!--importacion de estilos-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="../vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">

	<style>
		@media (max-width: 768px) {
			.carousel-item img {
				height: 400px;
				object-fit: contain;
			}
		}

		.btn-reply {
			cursor: pointer;
			color: #3498db;
			font-weight: bold;
		}

		.btn-reply:hover {
			color: #2980b9;
			text-decoration: underline;
		}
	</style>

<body>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">

			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<a href="../Paginas/Pablo_Esteban.html">
					<!-- Imagen para Escritorio -->
					<img class="d-none d-md-block w-100" src="../IMG/Plantilla_Pag_Recuerdos_Pablo.png" alt="Pablo Esteban Desktop">
					<!-- Imagen para Móvil (usando la imagen vertical 2.jpg) -->
					<img class="d-block d-md-none w-100" src="../IMG/Plantilla_Pag_Recuerdos_Pablo_movil.jpg" alt="Pablo Esteban Movil">
				</a>
			</div>
			<div class="carousel-item">
				<a href="../Paginas/Ana_Soledad.html">
					<img class="d-none d-md-block w-100" src="../IMG/Plantilla_Pag_Recuerdos_Ana.png" alt="Ana Soledad Desktop">
					<img class="d-block d-md-none w-100" src="../IMG/Plantilla_Pag_Recuerdos_Ana_movil.jpg" alt="Ana Soledad Movil">
				</a>
			</div>
			<div class="carousel-item">
				<a href="../Paginas/Carlos_Alberto.html">
					<img class="d-none d-md-block w-100" src="../IMG/Plantilla_Pag_Recuerdos_Carlos.png" alt="Carlos Alberto Desktop">
					<img class="d-block d-md-none w-100" src="../IMG/Plantilla_Pag_Recuerdos_Carlos_movil.jpg" alt="Carlos Alberto Movil">
				</a>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<br><br><br><br><br>


	<!-- Contenedor principal que se dividirá en 3 columnas -->
	<div class="grid-container">

		<!-- Tarjeta para Ana Soledad -->
		<div class="biografia-card">
			<!-- Usaremos la imagen 1.jpg que está en tu carpeta IMG -->
			<img src="../IMG/1.jpg" alt="Ana Soledad" class="card-img">
			<div class="card-content">
				<h3>Ana Soledad Lizarazo Calderon</h3>
				<a href="../Paginas/Ana_Soledad.html" class="btn">Ver Biografía</a>
			</div>
		</div>

		<!-- Tarjeta para Pablo Esteban -->
		<!-- Asumiré que tienes IMG/2.jpg y IMG/3.jpg para las otras personas -->
		<div class="biografia-card">
			<img src="../IMG/2.jpg" alt="Pablo Esteban" class="card-img">
			<div class="card-content">
				<h3>Pablo Esteban Aguirre Camargo</h3>
				<a href="../Paginas/Pablo_Esteban.html" class="btn">Ver Biografía</a>
			</div>
		</div>

		<!-- Tarjeta para Carlos Alberto -->
		<div class="biografia-card">
			<img src="../IMG/3.jpg" alt="Carlos Alberto" class="card-img">
			<div class="card-content">
				<h3>Carlos Alberto Camargo Munevar</h3>
				<a href="../Paginas/Carlos_Alberto.html" class="btn">Ver Biografía</a>
			</div>
		</div>

	</div>

	<br><br><br><br><br>


	<!-- Scripts -->
	<!-- Usamos la versión completa de jQuery (local) en lugar de la slim -->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Emoji Picker Scripts -->
	<script src="../vendor/emoji-picker/lib/js/config.js"></script>
	<script src="../vendor/emoji-picker/lib/js/util.js"></script>
	<script src="../vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
	<script src="../vendor/emoji-picker/lib/js/emoji-picker.js"></script>





	<section id="jjjd" class="section">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->


					<br>
					<br>

					<h3>Comentario</h3>
					<p>Cuentanos tu opinion acerca de Ana Soledad</p>
					<br>

					<!-- Contact Details -->
					<div class="contact-info col-lg-6 wow fadeInUp" data-wow-duration="500ms">



						<form id="frm-comment">
							<div class="input-row">
								<input type="hidden" name="comment_id" id="post" placeholder="Nombre" />
								<label for="nombre" class="form-label">Tu Nombre:</label>
								<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required />
							</div>

							<div class="input-row">
								<label for="comentario" class="form-label">Comentario:</label>
								<p class="emoji-picker-container">
									<textarea rows="6" class="form-control"
										type="text" name="comentario" id="comentario" placeholder="Agregue su comentario" required></textarea>
								</p>
							</div>

							<div>
								<input type="button" class="btn btn-primary " id="submitButton" value="Agregar Comentario" />
							</div>
							<br>
							<div id="comment-message">¡Tu comentario se agrego!</div>

						</form>
					</div>
					<div id="output"></div>

				</div>

				</form>
			</div>
		</div>




		<!-- / End Contact Details -->

		<!-- Contact Form -->

		<script>
			function postReply(post) {
				$('#post').val(post);
				$("#nombre").focus();
			}

			$("#submitButton").click(function() {
				$("#comment-message").css('display', 'none');
				var nombre = $("#nombre").val();
				if (nombre === "") {
					alert("Por favor ingresa tu nombre");
					return;
				}
				var str = $("#frm-comment").serialize();

				$.ajax({
					url: "AgregarComentario.php",
					data: str,
					type: 'post',
					success: function(response) {
						$("#comment-message").css('display', 'inline-block');
						$("#comentario").val("");
						$("#post").val("");
						listComment();
					}

				});
			});

			$(document).ready(function() {
				listComment();
			});

			$(function() {
				// Initializes and creates emoji set from sprite sheet
				window.emojiPicker = new EmojiPicker({
					emojiable_selector: '[data-emojiable=true]',
					assetsPath: '../vendor/emoji-picker/lib/img/',
					popupButtonClasses: 'icon-smile'
				});

				window.emojiPicker.discover();

			});


			function listComment() {
				$.post("ListaComentario.php",
					function(data) {
						var data = JSON.parse(data);

						var comments = "";
						var replies = "";
						var item = "";
						var parent = -1;
						var results = new Array();

						var list = $("<ul class='outer-comment'>");
						var item = $("<li>").html(comments);

						for (var i = 0;
							(i < data.length); i++) {
							var post = data[i]['id'];
							parent = data[i]['respuesta'];

							if (parent == "0") {
								comments = "<div class='comment-row'>" +
									"<div class='comment-info'><img src='user.png' width='50px'><span class='posted-by'>" + data[i]['nombre'] + "</span></div>" +
									"<div class='comment-text'>" + data[i]['comentarios'] + "</div>" +
									"<div><a class='btn-reply' onClick='postReply(" + post + ")'>Responder</a></div>" +
									"<div class='comment-text'>" + data[i]['fecha'] + "</div>" + "</div>";
								var item = $("<li>").html(comments);
								list.append(item);
								var reply_list = $('<ul>');
								item.append(reply_list);
								listReplies(post, data, reply_list);
							}
						}
						$("#output").html(list);

					});
			}

			function listReplies(post, data, list) {

				for (var i = 0;
					(i < data.length); i++) {
					if (post == data[i].respuesta) {
						var comments = "<div class='comment-row'>" +
							" <div class='comment-info'><img src='user.png' width='50px'><span class='posted-by'>" + data[i]['nombre'] + "</span></div>" +
							"<div class='comment-text'>" + data[i]['comentarios'] + "</div>" +
							"<div class='comment-text'>" + data[i]['fecha'] + "</div>" +
							"<div><a class='btn-reply' onClick='postReply(" + data[i]['id'] + ")'>Responder</a></div>" +
							"</div>";
						var item = $("<li>").html(comments);
						var reply_list = $('<ul>');
						list.append(item);
						item.append(reply_list);
						listReplies(data[i].id, data, reply_list);

					}
				}
			}
		</script>

		<!-- ./End Contact Form -->

		</div> <!-- end row -->
		</div> <!-- end container -->

	</section> <!-- end section -->

	<button onclick="topFunction()" id="myBtn" title="Subir" style="opacity: 0; visibility: hidden; transition: opacity 0.4s, visibility 0.4s; position: fixed; bottom: 20px; right: 30px; z-index: 99; font-size: 18px; border: none; outline: none; background-color: #3498db; color: white; cursor: pointer; padding: 10px 15px; border-radius: 50%; box-shadow: 2px 2px 5px rgba(0,0,0,0.3);">
		<i class="fas fa-arrow-up"></i>
	</button>

	<script>
		// Obtener el botón
		var mybutton = document.getElementById("myBtn");

		// Cuando el usuario hace scroll hacia abajo 20px desde el inicio del documento, mostrar el botón
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.opacity = "1";
				mybutton.style.visibility = "visible";
			} else {
				mybutton.style.opacity = "0";
				mybutton.style.visibility = "hidden";
			}
		}

		// Cuando el usuario hace clic en el botón, hacer scroll hasta el inicio del documento
		function topFunction() {
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
			});
		}
	</script>