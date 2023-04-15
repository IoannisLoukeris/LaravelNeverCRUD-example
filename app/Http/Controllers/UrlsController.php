<?php

namespace App\Http\Controllers;

use App\Handlers\UrlsHandler;
use IoannisL\LaravelNeverCrud\Controllers\CRUDController;

class UrlsController extends CRUDController
{
    public function __construct(UrlsHandler $uH)
    {
        parent::__construct(
            $uH,
            [
                'name' => 'required|unique:ingredients',
            ]
        );
    }
}
