<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<style>
    nav{
        font-size:19px;

    }
    .nav-bar{
        padding-left:150px;
    }
    .nav-link{
        margin-right:20px;
    }
    .pesquisa{
        margin-left:100px;
    }
    #logo{
        margin-left:100px;
    }
    .img-login{
      margin-left:10px;
    }
    .login{
    padding-left:20px;
    padding-right:20px;
    }
    .card-image{
      width: 287px; /* Defina o tamanho desejado */
  height: 300px; /* Mantém a proporção da imagem */
  
    }
    .card{
      width: 18rem; 
      display:inline-block; 
      margin-top:20px; 
      margin-left:70px;
    }
    .select-all{
      width:120px;
      border:0;
    }
    .carrinho{
      margin-left:20px;
    }
    .imagem-evento{
        text-align:center;
    }
    
    .container {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Divide em duas colunas iguais */
    grid-gap: 20px; /* Espaço entre as colunas */
    align-items: center;
}

.imagem-evento {
    max-width: 100%;
    height: auto;
}

.produto-info {
    text-align: left;
}

.descricao-produto {
    max-width: 100%;
}

.preco {
    border:solid green;
    background:green;
    color:white;
   border-radius:20px;
   margin-top: 10px;
    padding: 10px 20px 10px 20px; 
    border: 1px solid #000; 
    display: inline-block; 
}

    
    
    
 
</style>
</head>
  <body>
 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <img id="logo" src="https://media.discordapp.net/attachments/1143286773154320525/1152019527001964585/Logotipo_bravo.png?ex=65442d4a&is=6531b84a&hm=ed8260d6a64401896a8c88e19cf6a755941abf11963d8223dbe51cfa41db5bbc&=&width=575&height=575" width="200">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav nav-bar" >
        <a class="nav-link active" aria-current="page" href="/about">Home</a>
        <select class="form-select select-all" aria-label="Default select example">
            <option selected>Categoria</option>

            @foreach($categorias as $categoria)
            <option value="{{ $categoria->CATEGORIA_ID }}">{{ $categoria->CATEGORIA_NOME }}</option>
            @endforeach
        </select>

      </div>
      <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex pesquisa" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <a class="login" href="#">Login<img class="img-login" src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" width="30"></a>
   
    <a class="login"href="#">Cadastrar</a>
    <a href='#'><img class="carrinho" src="https://cdn-icons-png.flaticon.com/512/126/126510.png" width='29'></a>

  </div>
</nav>
    </div>
    
  </div>
</nav>
<div class="container">
    @foreach($imagens as $imagem)
        <img class="imagem-evento" src="{{ asset($imagem->IMAGEM_URL) }}" class="img-fluid" alt="..." width='500'>
    @endforeach
    <div class="produto-info">
        <p class="fs-1">{{$produtos->PRODUTO_NOME}}</p>
        <p class="descricao-produto">{{$produtos->PRODUTO_DESC}}</p>
        <div class="preco">
            R${{$produtos->PRODUTO_PRECO}}
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>