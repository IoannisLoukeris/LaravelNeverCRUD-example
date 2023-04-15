<?php

namespace App\Handlers;

use App\DataServices\RecipeIngredientRealtionsDataService;
use IoannisL\LaravelNeverCrud\Handlers\CRUDHandler;

class RecipeIngredientRelationsHandler extends CRUDHandler
{
  public function __construct(RecipeIngredientRealtionsDataService $rirDS)
  {
    parent::__construct($rirDS);
  }
}
