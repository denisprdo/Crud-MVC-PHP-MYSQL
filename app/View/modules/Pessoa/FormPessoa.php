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
                                <th scope="col"><span></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form method="POST" id="pessoa-form" action="/pessoa/form/save">
                                <tr>
                                    <td><input type="hidden" name="id" value="<?=$model->id ?>" /></td>
                                    <td><input type="text" name="nome" id="nome" value="<?=$model->nome ?>"></td>
                                    <td><input type="number" name="cpf" id="cpf" value="<?=$model->cpf ?>"></td>
                                    <td><input type="date" name="data" id="data" value="<?=$model->data_nasc ?>"></td>
                                    <td>
                                        <button type="submit" class="save-btn">
                                            <a><i class="fas fa-floppy-disk"></i></a>
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once("footer.php")
?>