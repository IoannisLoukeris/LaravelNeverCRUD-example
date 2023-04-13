<?php

namespace App\Handlers;

use App\DataServices\RecipesDataService;
use IoannisL\LaravelNeverCrud\Handlers\CRUDHandler;

class RecipesHandler extends CRUDHandler
{
  public function __construct(RecipesDataService $rDS)
  {
    parent::__construct($rDS);
  }
}
