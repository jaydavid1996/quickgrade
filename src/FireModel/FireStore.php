<?php
namespace App\FireModel;

use Cake\Http\Client;

class FireStore{
  protected $default_url;
  protected $dblink;
  protected $http;

  function __construct(){

    $this->default_url = "https://firestore.googleapis.com/v1beta1";
    $this->dblink = $this->default_url."/projects/quickgrade-26cde/databases/(default)/documents";
    $this->http = new Client();

  }
}
