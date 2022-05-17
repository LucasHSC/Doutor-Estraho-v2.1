<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doutor Estranho</title>
    <link rel="stylesheet" href="../css/personagem.css">
    <link rel="stylesheet" href="../css/menu_burger.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!--Fontes-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,400;0,700;1,300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400&display=swap" rel="stylesheet">
    

        <!--Scripts-->
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
</head>
<body>
<header>
        <div class="container d-flex justify-content-between align-items-center">   
            <img src="../img/logo-marvel.png" alt="logo">
            <nav>
                <a class="menu-burger-container">
                <i class="menu-burger"></i>
                </a>
                <ul class="links-container list-inline">
                    <li class="list-inline-item"><a href="../index.php">Home</a>
                    </li>
                    <li class="list-inline-item"><a href="./personagem.php" >Personagens</a>
                    </li>
                    <li class="list-inline-item"><a href="./galeria.php" >Galeria</a>
                    </li>
                </ul>
            </nav>     
        </div>
    </header>

    <main>

        <nav class="navbtn">
            <ul>
                <li><input type="button" class="btnDE action" value="Doutor Estranho" ></li>
                <li><input type="button" class="btnWD action" value="      Wanda          "></li>
                <li><input type="button" class="btnWG action" value="        Wong          "></li>
            </ul>
        </nav>




        <span class="personagem1-text card" id="doutor-estranho">
            <a  target="_blank">
                <img src="../img/personagemDoutorEstranho.png" alt="Doutor Estranho"
                width="305px" height="378px">
            </a>
            <div class="text-container">
                <h3>Doutor Estranho</h3>
                <p class="descricao">Interpretado por Benedict Cumberbatch.</p>
            </div>
        </span>
        <span class="personagem2-text card" id="Wanda">
            <a  target="_blank">
                <img src="../img/personagemWanda.png" alt="Wanda Maximoff"
                width="305px" height="378px">
            </a>
            <div class="text-container">
                <h3>Wanda Maximoff</h3>
                <p class="descricao">Interpretada por Elizabeth Olse.</p>
            </div>
        </span>
        <span class="personagem3-text card" id="Wong">
            <a  target="_blank">
                <img src="../img/personagemWong.png" alt="Wong"
                width="305px" height="378px">
            </a>
            <div class="text-container">
                <h3>Wong</h3>
                <p class="descricao">Interpretado por Benedict Wong.</p>
            </div>
        </span>
    </main>

</body>
    <script src="../js/script.js"></script>
</html>