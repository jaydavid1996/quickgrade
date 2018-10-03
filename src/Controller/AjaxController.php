<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ajax Controller
 *
 *
 * @method \App\Model\Entity\Ajax[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AjaxController extends AppController
{
  
  public function test(){
    $this->set('test',array('sadasd','asdasdasdas'));
    $this->set('_serialize','test');
  }
}
