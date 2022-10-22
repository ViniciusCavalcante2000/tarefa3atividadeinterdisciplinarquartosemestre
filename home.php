<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Boas Vindas</title>
</head>

<body>
    <div style="font-size: 50px; font-family: arial light; position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); color: black; margin: 0; padding: 0;">
        <h6>Login bem sucedido</h6>
    </div>
    <p style="font-size: 50px; font-family: arial light; position: absolute; 
	left: 50%;	top: 50%; transform: translate(-50%, -50%); color: black; margin: 0; padding: 0;">
        <b> SEJA BEM VINDO, </b>
    </p>
    <div style="font-size: 50px; font-family: arial light; position: relative; 
	margin-left: auto; margin-right: auto; margin-top: 25%; text-align: center; ">
        <?php
        if (isset($_POST['usuario'])) :
        ?><?= $_POST['usuario'] ?><?php
        endif;
        ?>
    </div>

</body>

</html>