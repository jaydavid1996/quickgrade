<?php
namespace App\FireModel;

use Cake\Http\Client;

class FireStore{
  protected $default_url;
  protected $dblink;
  protected $http;

  function __construct(){

    $this->default_url = env('DEFAULT_URL');
    $this->dblink = $this->default_url.env('DB_LINK');
    $this->http = new Client();

  }
}
