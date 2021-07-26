<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
<style>	

@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700');
.msg{
	display: block;
    background: #de6d6d;
    border-radius: 5px;
    padding: 10px;
    border: solid 1px #d74e4e;
    color: #7f2e2e;
    font-weight: 600;
	margin:5px auto;
	font-family: 'Roboto', sans-serif;
	}
	
.msg.sucesso{
	background:rgba(0, 128, 0, 0.35);
    border-color: #669866;
    color: #4d754d;
}
.msg .fa-times{
	float:right;
	text-decoration:none
}
.msg.sucesso .fa-times{
    color: #4d754d;
}	
.msg.erro{
	background: #e69f9f;
    border-color: #967272;
    color: #9a4848;
}
.msg.erro .fa-times{
    color: #9a4848;
}
.msg.info{
	background: #aed8e6;
    border-color: #5899af;
    color: #5594a9;
}
.msg.info .fa-times{
    color: #5594a9;
}	
</style>

<div>
<?php foreach($erros as $erro){?>
	<span class="msg erro"><i class="fas fa-exclamation-triangle"></i> <?php echo $erro ?><a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
<?php } ?>
</div>
