<?php
namespace App\FireModel;

class Classes extends FireStore{

  public function getClasses($user_link = null){
    // debug($user_link);
    // debug($this->default_url.$user_link);exit;
    $url = $this->default_url.$user_link."/Class";
    $data = $this->http->get($url);
    
    return $data->json;

  }
  public function viewClass($class_link = null){

    $url = $this->default_url.$class_link;
    $data = $this->http->get($url);
    // debug($data->json);exit;
    return $data->json;

  }


}
