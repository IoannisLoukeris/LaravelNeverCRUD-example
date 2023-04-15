<?php

namespace App\Http\Controllers;

use App\Handlers\PicturesHandler;
use IoannisL\LaravelNeverCrud\Controllers\CRUDController;

class PicturesController extends CRUDController
{
    public function __construct(PicturesHandler $piH)
    {
        parent::__construct(
            $piH,
            [
                'name' => 'required|unique:ingredients',
            ]
        );
    }
}
