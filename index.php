<html>
<head>
<script src="jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/bootstrap.css">

<style>
{
	margin:0;
}
.modal
{
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	display:none;
}
.modal_close
{
	width:100%;
	height:100%;
	background:rgba(0,0,0,.8);
	position:fixed;
	top:0;
}
.close
{
	cursor:pointer;
}
.modal_main
{
	width:50%;
	height:400px;
	background:#fff;
	z-index:4;
	position:fixed;
	top:16%;
	border-radius:4px;
	left:24%;
	display:none;
 -webkit-animation-duration: .5s;
    -webkit-animation-delay: .0s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
	    -webkit-backface-visibility: visible!important;
    -webkit-animation-name: fadeInRight;
}
@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translateX(20px)}100%{opacity:1;-webkit-transform:translateX(0)}}

button
{
padding:20px;
border-radius:5px;
background:#3399cc;
border:none;
font-size:20px;
color:#fff;
margin:8%;
}
</style>
<script>
$(document).ready(function(){
  $(".call_modal").click(function(){
	$(".modal").fadeIn();
	$(".modal_main").show();
	  });
});
$(document).ready(function(){
  $(".close").click(function(){
	$(".modal").fadeOut();
	$(".modal_main").fadeOut();
	  });
});
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-84302592-1', 'auto');
ga('send', 'pageview');

</script>
</header>
	<div id ="principal">
		<br>
		<header>
			<br>
			<div id="logo"></div>
			<nav>
				<ul>
					<li><a href="#">um</a></li>
					<li><a href="#">um</a></li>
					<li><a href="#">um</a></li>
					<li><a href="#">um</a></li>		
				</ul>
			</nav>
		
		<br>
	</div>
		<section>
		<br>
			<div class="imagem imgum"></div>
<form>
  			<div class="form-group">
				<div id="caixatexto">
					<p1>
						Foco...no que realmente importa!
					</p1>
					<br><br><br>
					<p2>
						Já se perguntou quantos clientes deixaram de comprar ou consumir seus produtos
						por conta de uma enorme fila na hora de realizar o pagamento?
					</p2>
					<p2><br><br>
						Por que não se preocupar apenas como o que você faz de melhor?
					</p2>
					<p2><br><br>
						Por que não facilitar o pagamento ao seus clientes de uma forma rápida e segura?
					</p2>
					<p2><br><br>
						Chega de burocrácia, de perder tempo com aquilo que não é o seu negócio!
					</p2>
					<p2><br><br>
						Saiba mais sobre como avançar suas vendas, otimizar seus processos e ganhar tempo!
				</p2>
				</div>

			</div>
			</form>
			<button class="botao bntum"> <a href="cadastro.html" target="_parent"><p3>SAIBA MAIS!</p3></button>
			
			<div class="imagem imgdois"></div>

			<div class="texto txtdois"></div>


			<a class="botao bntdois" href="cadastro.html" target="_blank">New Discussion</a>
			<button class="call_modal" style="cursor:pointer;">Conheça!</button>


			 <div id="bg"></div>
			 <div id="box">
			 	
			 	<a href="" id="close">X</a>
			 </div>
</head>
<body>

<div class="modal">
<div class="modal_close close"></div>
<div class="modal_main">
<section class="formulario">
		<form action="form.php" method="post" class="form">

	    	<div class="col-md-6">
	    		<h3>Inscreva-se já.</h3>
	    		<br />
				<form method="post" action="registrar_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input id="inptnome" name="inptnome" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input form-control" placeholder="Nome Completo" />
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					</div>
		
					<button type="submit" id="butsubmit" name="butsubmit" class="btn btn-primary form-control" alt="Submit">Inscreva-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
</form></section>
</div>
<img src="i783wQYjrKQ.png" class="close" style="margin-top:13px;left:96%;position:fixed;">
</div>
</div>
</body>
</html>