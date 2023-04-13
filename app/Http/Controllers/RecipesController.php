<?php

namespace App\Http\Controllers;

use App\Handlers\RecipesHandler;
use IoannisL\LaravelNeverCrud\Controllers\CRUDController;

class RecipesController extends CRUDController
{
    public function __construct(RecipesHandler $rH)
    {
        parent::__construct(
            $rH,
            [
                'name' => 'required|unique:recipes',
                'preparation' => 'required',
            ]
        );
    }
}
