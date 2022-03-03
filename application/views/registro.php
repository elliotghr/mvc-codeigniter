<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Registro</h1>
    <ul>
        <?php foreach ($menu as $key => $value) { ?>
            <li>
                <a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a>
            </li>
        <?php } ?>
    </ul>

    <?php
    // pondremos a donde se enviarán esos datos
    echo form_open('registro/create', array('method' => 'POST'));
    echo form_label('Nombre de usuario');
    echo form_input('username');
    echo '<br>';
    
    echo form_label('Correo Electronico');
    // Con el array podemos definir mas atributos
    echo form_input(array('type' => 'email', 'name' => 'email'));
    echo '<br>';

    echo form_label('Contraseña');
    echo form_password('password');
    echo '<br>';

    echo form_submit('submit', 'enviar datos');

    echo form_close();
    ?>
</body>

</html>