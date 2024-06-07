<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,cyan,yellow);
        }
        div{
            background-color: rgb(0,0,0,0.35);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 20px;
            color: wheat;
        }
        input{
            padding: 15px;
            border:none;
            outline: none;
            font-size: 17px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 20px;
            width: 100%;
            border-radius: 15px;
            color:wheat;
            font-size: 20px;         
        }       
        </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <input type="tex" placeholder="Nome">
        <br><br>
        <input type="text" placeholder="senha">
        <br><br>
        <button>Enviar</button>
    </div>
    
</body>
</html>