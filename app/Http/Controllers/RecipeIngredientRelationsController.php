<?php

namespace App\Http\Controllers;

use App\Handlers\RecipeIngredientRelationsHandler;
use IoannisL\LaravelNeverCrud\Controllers\CRUDController;

class RecipeIngredientRelationsController extends CRUDController
{
    public function __construct(RecipeIngredientRelationsHandler $rirH)
    {
        parent::__construct(
            $rirH,
            [
                'name' => 'required|unique:ingredients',
            ]
        );
    }
}
