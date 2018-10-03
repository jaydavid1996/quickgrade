<?php
namespace App\FireModel;

class Exams extends FireStore{

  public function getExams($user_link = null){
    // debug($user_link);
    // debug($this->default_url.$user_link);exit;
    $url = $this->default_url.$user_link."/Exam";
    $data = $this->http->get($url);
    
    return $data->json;

  }

}
