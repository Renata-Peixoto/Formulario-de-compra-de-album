<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Dados</title>
</head>
<style type="text/css">
    body {
        background:
            radial-gradient(#f9b 2px, transparent 3px),
            radial-gradient(#f9b 2px, transparent 3px),
            #fee;
        background-position: 0 0, 20px 20px;
        background-size: 40px 40px;
    }

    table {
        background-color: #f9b;
        font-style: normal;
        font-size: large;

    }
</style>

<body>
    <?php

    $seunome = $_GET['nome'];
    $nomedoalbum = $_GET['album'];
    $prerefencia = $_GET['albumalbum'];
    $versao = $_GET['versaoversao'];
    $envio = $_GET['envio'];
    $mensagem = $_GET['mensagem'];

    ?>
    <div class="container">
        <div class=" mt-5 border boder-dark p-3 rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Seu nome</th>
                        <th scope="col">Nome do Album</th>
                        <th scope="col">Preferencia do ábum</th>
                        <th scope="col">Versão do ábum</th>
                        <th scope="col">Modo de envio</th>
                        <th scope="col">Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo ($seunome); ?></th>
                        <td><?php echo ($nomedoalbum); ?></td>
                        <td><?php echo ($prerefencia); ?></td>
                        <td><?php echo ($versao); ?></td>
                        <td><?php echo ($envio); ?></td>
                        <td><?php echo ($mensagem); ?></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>