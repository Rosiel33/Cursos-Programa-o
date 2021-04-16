<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Projeto Php Fundamentos</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <span>TreinaWeb</span>
    </nav>



    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome do Curso</th>
                    <th scope="col">Formato</th>
                    <th scope="col">duração</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(cursos() as $curso): ?>
                <?php if(!$curso["status"]){
                    continue;
                } ?>
                <tr>
                    
                    <th scope="row"><?= $curso['nome_curso']?></th>
                    <td> <?=$curso['formato']?></td>
                    <td><?= carga_horaria($curso['duracao'])?></td>
                    <td><?=$curso['status']?></td>

                </tr>
            <?php endforeach;?> <!-- FECHAMENTO DO FOREACH -->
            </tbody>
        </table>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>