<?php
require_once APP_PATH . '/model/loai_model.php';
require_once APP_PATH . '/library/functions.php';

switch ($action) {
    case 'index':
        extract(Index());
        break;
    default:
        extract(Index());
        break;
}
function index()
{
    return [
        'view_name' => 'index.php'
    ];
}
