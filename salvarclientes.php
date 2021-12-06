
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nomeCliente = $_GET["nome"];
    $cpfCliente = $_GET["cpf"];
    $telefoneCliente = $_GET["telefone"];
    $emailCliente = $_GET["email"];
?>


<table border="1">
	<tr>
		<td>
			<b>Nome</b>
		</td>
		
		<td>
			<b>CPF</b>
		</td>
		
		<td>
			<b>Telefone</b>
		</td>
		
		<td>
			<b>E-Mail</b>
		</td>
	</tr>
	
	<tr>
		<td>
			<?php echo $nomeCliente; ?>
		</td>
		
		<td>
			<?php echo $cpfCliente; ?>
		</td>
		
		<td>
			<?php echo $telefoneCliente; ?>
		</td>
		
		<td>
			<?php echo $emailCliente; ?>
		</td>
	</tr>
</table>

<style>
        body{
            color:white; 
            background-size: 100vw 100vh;
            background-image: url("https://agenciamarketing.com.br/wp-content/uploads/2021/01/como-escolher-qual-e-a-melhor-hospedagem-de-sites.png");
        }
    </style>
</body>
</html>
