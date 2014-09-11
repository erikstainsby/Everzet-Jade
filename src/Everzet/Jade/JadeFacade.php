<?php namespace Everzet\Jade;

use Illuminate\Support\Facades\Facade;

class JadeFacade extends Facade {

  protected static function getFacadeAccessor() { return 'everzet_jade_service'; }

}
