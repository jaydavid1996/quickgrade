<?php
namespace App\FireModel;

class Papers extends FireStore{

  public function getPapers($user_link = null){

    // debug($user_link);

    // debug($user_link);exit;
    $url = $this->default_url.$user_link."/Paper";
    $data = $this->http->get($url);

    return $data->json;

  }

}
