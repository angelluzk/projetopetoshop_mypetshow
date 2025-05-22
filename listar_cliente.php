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
    <link rel="stylesheet" href="src/css/styles_listar.css">
    <link rel="shortcut icon" href="src/images/favicon3.png" type="image/x-icon">
    <title>MyPetShow</title>
</head>

<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="src/images/avatar.png" id="user_avatar" alt="Avatar">

                <p id="user_infos">
                    <span class="item-description">
                        MyPetShow
                    </span>
                    <span class="item-description">
                        Sistema de Cadastro
                    </span>
                </p>
            </div>

            <ul id="side_items">
                <li class="side-item active">
                    <a href="index.html">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="item-description">
                            HOME
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="cadastra_cliente.html">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Cadastrar Clientes
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="cadastra_funcionario.html">
                        <i class="fa-solid fa-user-tie"></i>
                        <span class="item-description">
                            Cadastrar Funcionários
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="agenda_consulta.html">
                        <i class="fa-solid fa-calendar-plus"></i>
                        <span class="item-description">
                            Agendar Consulta
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="listar_cliente.php">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="item-description">
                            Alterar/Excluir Clientes
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="listar_funcionario.php">
                        <i class="fa-solid fa-rectangle-list"></i>
                        <span class="item-description">
                            Alterar/Excluir Funcionários
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="listar_consulta.php">
                        <i class="fa-solid fa-rectangle-list"></i>
                        <span class="item-description">
                            Alterar/Excluir Consulta
                        </span>
                    </a>
                </li>
            </ul>

            <button id="open_btn"
                style="display: inline-flex; align-items: center; justify-content: center; background-color: #975b39; color: white; border: none; border-radius: 100%; cursor: pointer;">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Sair
                </span>
            </button>
        </div>
    </nav>

    <div class="banner">
        <div class="logo">
            <span>
                PET
                <i class="fa fa-paw"></i>
                SHOW
            </span>
            <span>
                - Sistema de Clientes
            </span>
        </div>
    </div>

    <main class="fixed-content">
        <h1>Lista de Clientes - ALTERAR/DELETAR</h1>
        <div class="wrapper-listar">
            <div class="top-listar">
                <span>PET</span>
                <img src="src/images/dog.png" alt="">
                <span>SHOW</span>
            </div>
        </div>
        <div class="table-wrapper">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Deleta</th>
                    <th>Altera</th>
                </tr>
                <?php
                $con = mysqli_connect("localhost", "root", "", "mypetshow_petshop");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con, "SELECT * FROM clientes");
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['end']; ?></td>
                        <td><?php echo $row['fone']; ?></td>
                        <td><?php echo $row['cpf']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['dn']; ?></td>
                        <td><?php echo $row['sexo']; ?></td>
                        <td class="botao-acao">
                            <form action="realizadelclientes.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                <button class="botao-deletar" type="submit" name="botdelclientes" value="ok">Del</button>
                            </form>
                        </td>
                        <td class="botao-acao">
                            <form action="formaltclientes.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                <button class="botao-alterar" type="submit" name="botaltclientes" value="ok">Alt</button>
                            </form>
                        </td>
                    </tr>
                <?php }
                mysqli_close($con); ?>
            </table>
        </div>
    </main>

    <footer>
        <div class="footer-left">
            <p>&copy; 2024 MyPetShow. Todos os direitos reservados.</p>
        </div>
        <div class="footer-right">
            <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
        </div>
    </footer>
    
    <script src="src/javascript/script.js"></script>
</body>

</html>