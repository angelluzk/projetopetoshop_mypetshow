<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="src/css/styles.css">
    <link rel="shortcut icon" href="src/images/favicon3.png" type="image/x-icon">
    <title>MyPetShow</title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];
    $end = $_POST['end'];
    $fone = $_POST['fone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $dn = $_POST['dn'];
    $sexo = $_POST['sexo'];
    $sql = "INSERT INTO clientes(nome, end, fone,cpf, email, dn, sexo) 
  VALUES('$nome','$end','$fone','$cpf','$email','$dn','$sexo')";
    $con = mysqli_connect("127.0.0.1", "root", "", "mypetshow_petshop");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    mysqli_query($con, $sql);
    echo "<center><h2>Cliente cadastrado com sucesso!</center></h2><p><br>";
    mysqli_close($con);
    ?>
    <center>
        <h2><a id="voltar-link" href="cadastra_cliente.html">VOLTAR</a></h2>
    </center>
    <script src="src/javascript/script.js"></script>
</body>

</html>