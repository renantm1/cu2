<x-layout title="form">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Seu CSS personalizado aqui */
        .button-85 {
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(0, 0, 0);
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-85:before {
            content: "";
            background: linear-gradient(
                45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000
            );
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing-button-85 20s linear infinite;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowing-button-85 {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .button-85:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #fcfcfc;
            left: 0;
            top: 0;
            border-radius: 10px;
        }
    </style>
    <br> <br> <br> <br> <br> <br>
<div class="col-md-4 mx-auto">
<h1>Cadastro de alunos</h1>
<h2>Inscreva-se aqui</h2>
</div>
<br> <br> 
<form action="/renan/salvar" method="POST" >

    @csrf
 
    <div class="col-md-4 mx-auto" >
      <label for="nome" class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome" >
    </div>
    <div class="col-md-4 mx-auto">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email" >
      </div>
      <div class="col-md-4 mx-auto">
        <label for="area" class="form-label">Área</label>
        <input name="area" type="text" class="form-control" id="area" >
      </div>
      <br>
     
<div class="col-md-4 mx-auto">
    <label for="periodo" class="form-label">Período</label>
    <input name="periodo" type="text" class="form-control" id="periodo" >
  </div>
  <br>

  
   <div class="col-md-4 mx-auto">
    <button type="submit" class="button-85">Concluído</button>
</div>
</div>

  </form>


</x-layout >
