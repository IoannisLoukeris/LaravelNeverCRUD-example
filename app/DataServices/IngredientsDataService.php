<?php

namespace App\DataServices;

use App\Models\Ingredient;
use IoannisL\LaravelNeverCrud\DataServices\ModelDataService;

class IngredientsDataService extends ModelDataService
{
  public function __construct(Ingredient $in)
  {
    parent::__construct($in);
  }
}
