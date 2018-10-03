<?php
namespace App\FireModel;

class Users extends FireStore{

  public function getUsers($id = null){
    $url = $this->dblink."/Users";
    $data = $this->http->get($url);
    return $data->json;

  }

}
