<?php
namespace App\FireModel;

class Students extends FireStore{

  public function getStudents($user_link = null){
    // debug($user_link);
    // debug($this->default_url.$user_link);exit;
    $url = $this->default_url.$user_link."/Student";
    $data = $this->http->get($url);
    
    return $data->json;

  }
  public function viewStudent($student_link = null){

    $url = $this->default_url.$student_link;
    $data = $this->http->get($url);
    // debug($data->json);exit;
    return $data->json;

  }


}
