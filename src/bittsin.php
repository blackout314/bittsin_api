<?php

namespace bittsin\Api;

/**
 * Class bittsin
 *
 * @package bittsin\Api
 */
class bittsin {
  private $KEY;
  private $URL = 'http://bitts.in/api/?';
  /**
   * Constructor
   *
   * @param string $KEY Api KEY
   */
  public function __construct($key)
  {
    $this->KEY  = $key;
  }
  /**
   * __get method
   *
   * @param string $url
   *
   * @return string|boolean
   */
  public function __get($url)
  {
    $query = [
      'api'   => $this->KEY,
      'url'   => $url,
    ];
    if($data = file_get_contents($this->URL.http_build_query($query)))
    {
      return $data;
    }
    return false;
  }
}
