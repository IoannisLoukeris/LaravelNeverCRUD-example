<?php

namespace App\Handlers;

use App\DataServices\PicturesDataService;
use IoannisL\LaravelNeverCrud\Handlers\CRUDHandler;

class PicturesHandler extends CRUDHandler
{
  public function __construct(PicturesDataService $piDS)
  {
    parent::__construct($piDS);
  }
}
