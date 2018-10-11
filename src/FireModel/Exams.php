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
  public function viewExam($exam_link = null){

    $url = $this->default_url.$exam_link;
    $data = $this->http->get($url);
    // debug($data->json);exit;
    return $data->json;

  }

}
