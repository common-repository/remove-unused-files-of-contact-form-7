<?php

namespace RufoCF7\ATA;

class Api  extends Core
{
  protected function __construct()
  {
    parent::__construct();
  }

  protected function response($data, $code = 200)
  {
    return new \WP_REST_Response(json_encode($data), $code);
  }
}
