<?php
    include_once("header.php");
?>

<body>
    <!-- <div id="main-banner">
        <h1>Cadastro de Pessoas</h1>
    </div> -->
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Cadastro de Pessoas</h2>
                </div>
                <div class="col-md-12 table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><span>Id</span></th>
                                <th scope="col"><span>Nome</span></th>
                                <th scope="col"><span>CPF</span></th>
                                <th scope="col"><span>Data de Nascimento</span></th>
                                <th scope="col"><span></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($model->rows as $item): ?>
                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->nome ?></td>
                                <td><?= $item->cpf ?></td>
                                <td><?= $item->data_nasc ?></td>
                                <td>
                                    <button type="submit" class="update-btn">
                                        <a href="/pessoa/form?id=<?=$item->id ?>"><i class="fas fa-edit"></i></a>
                                    </button>
                                    <button type="submit" class="delete-btn">
                                        <a href="/pessoa/delete?id=<?=$item->id ?>"><i class="fas fa-trash"></i></a>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if(count($model->rows) == 0): ?>
                                <tr>
                                    <td colspan="5">Nenhum registro encontrado.</td>
                                </tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once("footer.php")
    ?>