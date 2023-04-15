<?php

namespace App\DataServices;

use App\Models\People;
use IoannisL\LaravelNeverCrud\DataServices\ModelDataService;

class PeopleDataService extends ModelDataService
{
  public function __construct(People $pe)
  {
    parent::__construct($pe);
  }
}
