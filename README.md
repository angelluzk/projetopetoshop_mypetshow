# 🐾 MyPetShow - Sistema de Cadastro e Agendamento para PetShop

![Status](https://img.shields.io/badge/status-concluído-brightgreen)
![PHP](https://img.shields.io/badge/PHP-7.4+-8892BF?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?logo=mysql&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)
![License](https://img.shields.io/badge/license-MIT-green)
![Feito com ❤️](https://img.shields.io/badge/feito%20com-%E2%9D%A4-red)

---

## ✅ Funcionalidades

- 📋 Cadastro de clientes com dados pessoais.
- 👩‍💼 Cadastro de funcionários com informações profissionais.
- 📅 Agendamento de serviços para pets.
- 🗄️ Armazenamento e manipulação de dados via **MySQL**.
- 🖥️ Interfaces simples e funcionais para interação com o sistema.

---

## 🛠️ Tecnologias utilizadas

- HTML5, CSS3, JavaScript
- PHP (com MySQLi)
- MySQL
- Font Awesome
- Google Fonts

---

## 🚀 Como executar o projeto

1. Clone este repositório:
```bash
   git clone https://github.com/seu-usuario/projetopetoshop_mypetshow.git
````

2. Configure o servidor local (**XAMPP**).

3. Execute o script SQL para criar o banco de dados e as tabelas:

```sql
   CREATE DATABASE IF NOT EXISTS angel_petshop;
   USE mypetshow_petshop;

   CREATE TABLE IF NOT EXISTS clientes (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome VARCHAR(100) NOT NULL,
     end VARCHAR(150),
     fone VARCHAR(20),
     cpf VARCHAR(14) UNIQUE,
     email VARCHAR(100),
     dn DATE,
     sexo ENUM('M','F','Outro') DEFAULT 'Outro',
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   CREATE TABLE IF NOT EXISTS consultas (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome_cliente VARCHAR(100) NOT NULL,
     nome_pet VARCHAR(100) NOT NULL,
     raca VARCHAR(50),
     idade INT,
     data_agendamento DATE NOT NULL,
     tipo_servico VARCHAR(100),
     observacoes TEXT,
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   CREATE TABLE IF NOT EXISTS funcionarios (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome VARCHAR(100) NOT NULL,
     end VARCHAR(150),
     fone VARCHAR(20),
     cpf VARCHAR(14) UNIQUE,
     email VARCHAR(100),
     dn DATE,
     escolaridade VARCHAR(50),
     sexo ENUM('M','F','Outro') DEFAULT 'Outro',
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
```

4. Coloque os arquivos do projeto na pasta `htdocs` (caso use **XAMPP**).

5. Acesse via navegador:

```
   http://localhost/projetopetoshop_mypetshow
```

---

## 📸 Prints do Sistema

### 🖼️ Tela de cadastro de clientes

![Tela Inicial](src/images/print_tela_inicial.png)

![Cadastro de Clientes](src/images/print_cadastro_clientes.png)

### 🖼️ Tela de agendamento de serviços

![Agendamento de Serviços](src/images/print_agendamento.png)

### 🖼️ Tela de cadastro de funcionários

![Cadastro de Funcionários](src/images/print_cadastro_funcionarios.png)

---

## 📚 Finalidade

Este projeto foi desenvolvido como um **projeto acadêmico** no **Curso Técnico em Informática**, com o objetivo de praticar:

* Desenvolvimento Full Stack (front-end e back-end).
* Integração com banco de dados relacional.
* Estruturação e manipulação de formulários.

---

## 🤝 Contribuição

Projeto desenvolvido por **\[Angelita Luz]** durante o **Curso Técnico em Informática**.

---