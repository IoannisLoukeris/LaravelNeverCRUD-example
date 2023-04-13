<?php

namespace App\DataServices;

use App\Models\Recipe;
use IoannisL\LaravelNeverCrud\DataServices\ModelDataService;

class RecipesDataService extends ModelDataService
{
  public function __construct(Recipe $re)
  {
    parent::__construct($re);
  }
}
