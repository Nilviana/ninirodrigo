<?php
if(isset($_POST['submit']))
{
    //print_r('Nome:' . $_POST['Nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['Email']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco)
    VALUES ('$nome','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | NIni</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(10, 113, 231), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 17px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 9px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 9px;
            border-radius: 11px;
            outline: none;
            font-size: 17px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 17px;
            cursor: pointer;
            border-radius: 11px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(57, 20, 220), rgb(27, 17, 71));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
        <fieldset>
            <legend> Formulário de Clientes </legend>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput"> Nome completo </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br><br>
            <p>Sexo</p>
            <input type="radio" id="feminino" name="sexo" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="sexo" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="sexo" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nascimento"><b>Data de nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            <br>
            </div>
        </fieldset>
    </div>
</body>
</html>
