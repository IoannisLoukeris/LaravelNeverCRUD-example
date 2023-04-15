<?php

namespace App\Handlers;

use App\DataServices\UrlsDataService;
use IoannisL\LaravelNeverCrud\Handlers\CRUDHandler;

class UrlsHandler extends CRUDHandler
{
  public function __construct(UrlsDataService $uDS)
  {
    parent::__construct($uDS);
  }
}
