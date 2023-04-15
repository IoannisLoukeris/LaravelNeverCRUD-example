<?php

namespace App\DataServices;

use App\Models\RecipeIngredientRealtion;
use IoannisL\LaravelNeverCrud\DataServices\ModelDataService;

class RecipeIngredientRealtionsDataService extends ModelDataService
{
  public function __construct(RecipeIngredientRealtion $rir)
  {
    parent::__construct($rir);
  }
}
