<?php

namespace App\Controllers;

use App\Repositories\Repository;
use App\Services\DefaultService;

class DefaultController
{
    public function index()
    {
        $repository = new \App\Repositories\Repository('sections1');
        $all = $repository->getAll();

        $variable = DefaultService::serveMe('Default Page');

        var_dump( realpath(__DIR__ . '/../../'));

        return require_once __DIR__ . '/../Views/DefaultShowView.php';
    }

    public function page(array $vars)
    {
        $variable = DefaultService::serveMe('Other Page');

        return require_once __DIR__ . '/../Views/DefaultShowView.php';
    }

}