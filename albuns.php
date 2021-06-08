<!DOCTYPE html>
<html lang="pt_br">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Albuns do Bts</title>



    <style type="text/css">
        body {
            background:
                radial-gradient(#f9b 2px, transparent 3px),
                radial-gradient(#f9b 2px, transparent 3px),
                #fee;
            background-position: 0 0, 20px 20px;
            background-size: 40px 40px;
        }

        form {
            background-color: #f9b;
            font-style: normal;
            font-size: large;

        }

        h1 {
            color:#f9b;
            text-shadow: -0.06em 0 0 red, 0.06em 0 0 cyan;
         
        }

        p {
            text-decoration-line: none;
        }

        textarea {
            width: 474px;
            height: 120px;
            line-height: 20px;
        }
        
    </style>
</head>

<body>

    <script>
        function ver(info) {
            var dado = info;
            if (dado == "preferencia") {
                preferencia.className = "viseble d-block";
                document.getElementById("preferencia").style.display = "black";

            } else {
                preferencia.className = "invisible d-none";
                document.getElementById("preferencia").style.display = "none";
            }

            if (dado == "versao") {
                versao.className = "visible d-block";
                document.getElementById("versao").style.display = "black";

            } else {
                versao.className = "invesible d-none";
                document.getElementById("versao").style.display = "none";

            }
        }
    </script>

    <div class="container">
        <h1 class="text-center"> Formulário para compra do Álbum</h1>
        <div class=" mt-5 :">

            <form method="Get" action="continuacao.php" class="border border-dark p-3 rounded ">
                <div class="row mb-3">
                    <label for="inputNome3" class="col-sm-2 col-form-label">
                        <h5> Seu Nome:</h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNome3" name="nome" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputAlbum3" class="col-sm-2 col-form-label">
                        <h5> Nome do Álbum</h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAlbum3" name="album" required>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">
                        <h5> Preferência do Álbum:</h5>
                    </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="albumalbum" id="composter" value="comporter">
                            <label class="form-check-label" for="composter">
                                <h6> Com Poster</h6>
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="albumalbum" id="semposter" value="semposter">
                            <label class="form-check-label" for="semposter">
                                <h6>Sem Poster</h6>
                            </label>
                        </div>
                        <p>
                            <legend>
                                <h5>Versão do Álbum:</h5>
                            </legend>
                            Atenção!
                        <h6> </br>Aqui só damos a opção de 4 versões. Caso sua versão não esteja no Formulário, por favor envie sua versão pela caixa de mansagem que esta logo a baixo.</br></h6>
                        <div class="form-check ">
                            </p>
                            <input class="form-check-input" type="radio" name="versaoversao" id="versao1" value="versao1">
                            <label class="form-check-label" for="versao1">
                              <h6>  Versão 1 </h6>
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="versaoversao" id="versao2" value="versao2">
                            <label class="form-check-label" for="versao2">
                             <h6>   Versão 2 </h6>
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="versaoversao" id="versao3" value="versao3">
                            <label class="form-check-label" for="versao3">
                             <h6>   Versão 3 </h6>
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="versaoversao" id="versao4" value="versao4">
                            <label class="form-check-label" for="versao4">
                              <h6>  Versão 4 </h6>
                            </label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0"><h5> Modo de envio:</h5></legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="envio" id="mandar1" value="5dias" onclick="ver(this.value)">
                            <label class="form-check-label" for="mandar1">
                             <h6>   Envio imediato(Até 5 dias uteis)</h6>
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="envio" id="mandar2" value="15dias">
                            <label class="form-check-label" for="mandar2">
                             <h6>   Envio normal(Até 15 dias uteis) </h6>
                            </label>
                        </div>
                        <p class="mensagem" align="center">
                            <textarea name="mensagem" placeholder="Informe o nome e versão do álbum escolhido."></textarea id="mensagem" for="mensagem" value="msg">
                    </p>
              
                <button type="submit" class="btn btn-primary" onclick="verTudo()">Enviar</button>
            </form>

        </div>
    
</body>

</html>