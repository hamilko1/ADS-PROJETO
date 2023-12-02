<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.html"); // Redireciona para a página de login se o usuário não estiver logado
    exit();
}

// Agora você pode exibir as informações do perfil do usuário
$userName = $_SESSION['user_name'];
$userEmail = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Perfil do Usuário</title>
</head>
    
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-size: 18px;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    min-height: 100vh;
}

.header {
    width: 70%;
    height: 80px;
    background-color: #12486B;
    display: flex;
    margin: 30px 0;
    padding: 15px;
    border-radius: 3px;
    justify-content: space-between;
    align-items: center;
}

.header .logo{
 align-items: center;
 width: 5%;
}

.cart{
    width: 80px;
    display: flex;
    background-color: #fff;
    justify-content: space-between;
    border-radius: 3px;
    align-items: center;
    padding: 7px 10px;
}

.fa-shopping-cart{
    color: #12486B;
}

.cart p{
    width: 22px;
    height: 22px;
    justify-content: center;
    text-align: center;
    align-items: center;
    border-radius: 22px;
    background-color: #12486B;
    color: #fff;
}

.container{
    display: flex;
    width: 70%;
    margin-bottom: 30px;
   
}

.container_2{
    display: flex;
    width: 70%;
    margin-bottom: 30px;
   
}

.linha-produtos{
    display: grid;
    width: 60%;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
}

.imgProduto{
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.produtoMiniatura{
    max-width: 90%;
    max-height: 90%;
    object-fit: cover;
    object-position: center;
}

.titulo{
    display: flex;
    width: 100%;
    height: 110px;
    align-items: center;
    justify-content: space-between;
    text-align: center;
    margin-top: 5px;
    flex-direction: column;
}

h2{
    font-size: 20px;
    color: red;
}

.button{
    background-color: #12486B;
    width: 100%;
    border: none;
    border-radius: 5px;
    position: relative;
    padding: 7px 25px;
    color: #fff;
    font-size: 15px;    
    cursor: pointer;
}

.button:hover{
    background-color: #165e8b;
}

.corpoProduto{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    padding: 15px;
    border: 1px solid #12486B;
    border-radius: 5px;    
}

.barraLateral{
    width: 40%;
    border-radius: 5px;
    background-color: #eee;
    margin-left: 20px;
    padding: 15px;
    text-align: center;
}

.topoCarrinho{
    background-color: #12486B;
    display: flex;
    align-items: center;
    height: 40px;
    border-radius: 3px;
    padding: 10px;
    margin-bottom: 20px;
    color: #fff;
}

.item-carrinho{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    background-color: #fff;
    border-radius: 3px;
    margin: 10px 10px;
    border-bottom: 1px solid #fff;
}

.linha-da-imagem{
    display: flex;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 1px solid #12486B;
    align-items: center;
    justify-content: center;

}

.img-carrinho{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
}

.rodape{
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
    padding: 10px;
    border-top: 1px solid #333;
}

.fa-trash-o:hover{
    cursor: pointer;
    color: #333;
}

.login-icons {
    display: flex;
    align-items: center;
    color: #fff;
    text-decoration: none;
    margin-left: 20px;
}

.login-icons a {
    margin-left: 20px;
    text-decoration: none;
    color: #fff;
}
</style>

<body>
    
    <body>
    
    <div class="header">
        <p class="logo"><img src="img/0b8deede-7121-415f-8980-246b7f1fe478-removebg-preview.png" alt=""></p>
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
        <div class="login-icons">
        </div>
    </div>

<div class="container">
<div class="linha-produtos">
    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgproduto">
                <img src="img/🗯.jpg" alt="" class="produtoMiniatura">
        </div>
            <div class="titulo">
                    <p>Jaqueta Motoqueiro Gangsta</p>
                    <h2>R$ 120</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>
                </div>
    </form>

    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgproduto">
                <img src="img/Vintage shirt from @thedivisionspell on depop polyvore png made by @artoftheweirdoboy.jpg" alt="" class="produtoMiniatura">
        </div>
            <div class="titulo">
                    <p>Camisa Vintage Marrom</p>
                    <h2>R$ 70</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>
                </div>
    </form>

</div>

<div class="barraLateral">
    <div class="topoCarrinho">
        <p>Meu Carrinho</p>
    </div>

    <div class="item-carrinho">
        <div class="linha-da-imagem">
           <img src="img/Vintage shirt from @thedivisionspell on depop polyvore png made by @artoftheweirdoboy.jpg" alt="" class="img-carrinho">
        </div>
        <p>Camiseta Vintage Marrom</p>
        <h2>R$ 70,00</h2>
        <form action="filtros/excluir.php" method="post">
            <input type="hidden" name="id_produto" value="">
            <button type="submit" style="border:none; background:none;"><i class="fa fa-trash-o"></i></button>
        </form>
    </div>

    <div class="item-carrinho-vazio">Seu carrinho está vazio.</div>
    <div class="rodape">
        <h3>Total</h3>
        <h2>R$ 70,00</h2>
        </div>
    </div>
    </div>  
</body>
</html>
