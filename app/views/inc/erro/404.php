<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
    <title><?php echo TITULO_SITE; ?> 500</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700');
		.erro{display:block;font-family: 'Cutive';width:auto;margin:0 auto;text-align:center;margin-top:40px;font-family: 'Roboto'}
		.far{font-size:5rem;margin-bottom:10px;}
		h1{margin-bottom:0;text-align:center;margin-top:0}
		.icone{padding-top:30px;display:block;color:#fff}
		.terro{padding:10px;}
		p{font-family: 'Roboto', sans-serif;text-align:center;}
		.btn{display:block;border:solid 1px #fff;padding:10px;color:#fff;border-radius:4px;text-decoration:none;margin:5px 0}
		.btn.voltar{background:#fff;color:#b45766}
		
		@media (min-width:992px){
			.erro{width:700px;margin-top:80px;}
			.erro i{font-size: 12rem; opacity: 0.8;}
			.icone{padding: 0; }
			.terro{text-align:center;width: 100%;}
			h1{font-size:3rem;line-height:3.4rem}
			h1 span{font-size:4.3rem}
			p{font-size:1.2rem}
			.btn{display:inline-block;margin:5px 10px;padding:12px 15px}
		}
	</style>
</head>
<body style="background:#b45766;color:#fff">
    <div class="erro">
		<div class="icone"><i class="far fa-dizzy"></i></div>
		<div class="terro">
			<h1 class="error"> <span>Erro 404 </span><br> Página Não encontrada!!</h1>
			<a href="<?php echo URL_BASE ?>" class="btn voltar">Voltar para a página inicial</a>
			
		</div>
    </div>
</body>
</html>
