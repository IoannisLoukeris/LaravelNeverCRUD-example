<?php

namespace App\Handlers;

use App\DataServices\PeopleDataService;
use IoannisL\LaravelNeverCrud\Handlers\CRUDHandler;

class PeopleHandler extends CRUDHandler
{
  public function __construct(PeopleDataService $pDS)
  {
    parent::__construct($pDS);
  }
}
