<?php

namespace App\Http\Controllers;

use App\Handlers\IngredientsHandler;
use IoannisL\LaravelNeverCrud\Controllers\CRUDController;

class IngredientsController extends CRUDController
{
    public function __construct(IngredientsHandler $inH)
    {
        parent::__construct(
            $inH,
            [
                'name' => 'required|unique:ingredients',
            ]
        );
    }
}
