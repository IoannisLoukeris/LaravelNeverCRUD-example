<?php

namespace App\DataServices;

use App\Models\Picture;
use IoannisL\LaravelNeverCrud\DataServices\ModelDataService;

class PicturesDataService extends ModelDataService
{
  public function __construct(Picture $pi)
  {
    parent::__construct($pi);
  }
}
