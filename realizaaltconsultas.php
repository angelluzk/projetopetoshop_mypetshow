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
    $id = $_POST['id'];
    $nome_cliente = $_POST['nome_cliente'];
    $nome_pet = $_POST['nome_pet'];
    $raca = $_POST['raca'];
    $idade = $_POST['idade'];
    $data_agendamento = $_POST['data_agendamento'];
    $tipo_servico = $_POST['tipo_servico'];
    $observacoes = $_POST['observacoes'];
    $sql = "update consultas set id='$id',nome_cliente='$nome_cliente',nome_pet='$nome_pet',raca='$raca',idade='$idade',data_agendamento='$data_agendamento',tipo_servico='$tipo_servico',observacoes='$observacoes' where id=$id";
    $con = mysqli_connect("127.0.0.1", "root", "", "mypetshow_petshop");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_query($con, $sql);
    echo "<center><h2>Serviço Alterado com Sucesso!</center></h2><p><br>";
    mysqli_close($con);
    ?>
    <center>
        <h2><a id="voltar-link" href="listar_consulta.php">VOLTAR</a></h2>
    </center>
    <script src="src/javascript/script.js"></script>
</body>

</html>