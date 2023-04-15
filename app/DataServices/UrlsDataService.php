<?php

namespace App\DataServices;

use App\Models\Url;
use IoannisL\LaravelNeverCrud\DataServices\ModelDataService;

class UrlsDataService extends ModelDataService
{
  public function __construct(Url $url)
  {
    parent::__construct($url);
  }
}
