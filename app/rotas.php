<?php

use App\Controller\PessoaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        PessoaController::index();
        break;

    case '/pessoa':
        PessoaController::index();
        break;
        
    case '/pessoa/form':
        PessoaController::form();
        break;

    case '/pessoa/form/save':
        PessoaController::save();
        break;

    case '/pessoa/delete':
        PessoaController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}