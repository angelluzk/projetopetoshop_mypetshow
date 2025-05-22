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
    $result = mysqli_query($con, "SELECT * FROM consultas WHERE id='$id'");
    ?>
    <center>
        <h1 class="titulo-pagina">Alterar Consultas</h1>
        <form action="realizaaltconsultas.php" method="POST">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <div class="form-row">
                    <label for="nome_cliente">Nome do Dono:</label>
                    <input type="text" id="nome_cliente" name="nome_cliente" value="<?php echo $row['nome_cliente']; ?>"
                        required>
                </div>
                <div class="form-row">
                    <label for="nome_pet">Nome do Pet:</label>
                    <input type="text" id="nome_pet" name="nome_pet" value="<?php echo $row['nome_pet']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="raca">Raça:</label>
                    <input type="text" id="raca" name="raca" value="<?php echo $row['raca']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="idade">Idade:</label>
                    <input type="text" id="idade" name="idade" value="<?php echo $row['idade']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="data_agendamento">Data do Agendamento:</label>
                    <input type="date" id="data_agendamento" name="data_agendamento"
                        value="<?php echo $row['data_agendamento']; ?>" required>
                </div>
                <div class="form-row">
                    <label for="tipo_servico">Tipo de Serviço:</label>
                    <select id="tipo_servico" name="tipo_servico" required>
                        <option value="" disabled selected hidden>Selecione o serviço</option>
                        <option value="banho" <?php if ($row['tipo_servico'] == 'banho')
                            echo 'selected'; ?>>Banho</option>
                        <option value="tosa" <?php if ($row['tipo_servico'] == 'tosa')
                            echo 'selected'; ?>>Tosa</option>
                        <option value="hidratacao" <?php if ($row['tipo_servico'] == 'hidratacao')
                            echo 'selected'; ?>>
                            Hidratação</option>
                        <option value="unhas" <?php if ($row['tipo_servico'] == 'unhas')
                            echo 'selected'; ?>>Corte de unhas
                        </option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="observacoes">Observações:</label>
                    <textarea id="observacoes" name="observacoes" rows="4"><?php echo $row['observacoes']; ?></textarea>
                </div>
            <?php } ?>
            <button type="submit" name="enviar" value="ok">Alterar</button>
        </form>
    </center>
    <script src="src/javascript/script.js"></script>
</body>
</html>