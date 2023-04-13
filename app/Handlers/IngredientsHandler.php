<?php

namespace App\Handlers;

use App\DataServices\IngredientsDataService;
use IoannisL\LaravelNeverCrud\Handlers\CRUDHandler;

class IngredientsHandler extends CRUDHandler
{
  public function __construct(IngredientsDataService $inDS)
  {
    parent::__construct($inDS);
  }
}
