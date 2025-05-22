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
    <link rel="stylesheet" href="src/css/styles_formalt.css">
    <link rel="shortcut icon" href="src/images/favicon3.png" type="image/x-icon">
    <title>MyPetShow</title>
</head>

<body>
    <?php
    $id = $_POST['id'];
    $con = mysqli_connect("127.0.0.1", "root", "", "mypetshow_petshop");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con, "SELECT * FROM clientes WHERE id='$id'");
    ?>
    <center>
        <h1 class="titulo-pagina">Alterar Cliente</h1>
        <form action="realizaaltclientes.php" method="POST">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <div class="form-row">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="end">Endereço:</label>
                    <input type="text" id="end" name="end" value="<?php echo $row['end']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="fone">Telefone:</label>
                    <input type="tel" id="fone" name="fone" value="<?php echo $row['fone']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="dn">Data de Nascimento:</label>
                    <input type="date" id="dn" name="dn" value="<?php echo $row['dn']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="sexo">Sexo:</label>
                    <div class="radio-buttons">
                        <input type="radio" id="f" name="sexo" value="f" <?php if ($row['sexo'] == 'f') echo 'checked'; ?>>
                        <label for="f">Feminino</label>
                        <input type="radio" id="m" name="sexo" value="m" <?php if ($row['sexo'] == 'm') echo 'checked'; ?>>
                        <label for="m">Masculino</label>
                    </div>
                </div>
            <?php } ?>
            <button type="submit" name="enviar" value="ok">Alterar</button>
        </form>
    </center>
    <script src="src/javascript/script.js"></script>
</body>


</html>