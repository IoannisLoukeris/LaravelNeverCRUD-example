<?php

namespace App\Http\Controllers;

use App\Handlers\PeopleHandler;
use IoannisL\LaravelNeverCrud\Controllers\CRUDController;

class PeopleController extends CRUDController
{
    public function __construct(PeopleHandler $peH)
    {
        parent::__construct(
            $peH,
            [
                'name' => 'required|unique:ingredients',
            ]
        );
    }
}
