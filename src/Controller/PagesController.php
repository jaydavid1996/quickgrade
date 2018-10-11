<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
// use Cake\View\Exception\MissingTemplateException;
// use  App\Module\FirestoreModule as Firestore;
use App\FireModel\Users;
use App\FireModel\Students;
use App\FireModel\Exams;
use App\FireModel\Classes;
use App\FireModel\Papers;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    ####################################################
    public function index(){

    }
    ####################################################
    public function login(){

    }
    ####################################################
    public function users(){
      #reset selected
      $this->request->session()->delete('SELECTED_USER');
      $user = new Users;
      $data = $user->getUsers();

      $this->set('data',$data);
      // debug($data);exit;
      $this->set('active_nav','users');

    }
    //-------------------------------------------------
    public function loaduser(){
       $user_link = $this->request->getQuery('user');
      if (empty($user_link)) {
        $this->redirect(['controller'=>'pages','action'=>'users']);
      }
      $this->request->session()->write('SELECTED_USER',$user_link);
      $this->redirect(['controller'=>'pages','action'=>'exams']);
      // $this->redirect
    }
    ####################################################
    public function students(){
      $students = new Students;
      $user_link = $this->request->session()->read('SELECTED_USER');
      $data = $students->getStudents($user_link);
      // debug($data);exit;
      $this->set('data',$data);
      $this->set('active_nav','students');
    }
    //------------------------------------------------
    public function loadstudent(){
      $student_link = $this->request->getQuery('student');
       if (empty($student_link)) {
         $this->redirect(['controller'=>'pages','action'=>'students']);
       }
       $this->request->session()->write('SELECTED_STUDENT',$student_link);
       $this->redirect(['controller'=>'pages','action'=>'viewstudent']);
    }
    //------------------------------------------------
    public function viewstudent(){
      if (!$this->request->session()->check('SELECTED_STUDENT')) {
        $this->redirect(['controller'=>'pages','action'=>'students']);
      }
      $student_link = $this->request->session()->read('SELECTED_STUDENT');
      $students = new Students;

      $data = $students->viewStudent($student_link);

      $this->set('data',$data);
      $this->set('active_nav','students');
    }
    ####################################################
    public function exams(){
      #reset selected
      $this->request->session()->delete('SELECTED_EXAM');

      $exams = new Exams;
      $user_link = $this->request->session()->read('SELECTED_USER');
      $data = $exams->getExams($user_link);
      // debug($data);exit;
      $this->set('data',$data);
      $this->set('active_nav','exams');

    }
    //------------------------------------------------
    public function loadexam(){
      $exam_link = $this->request->getQuery('exam');
       if (empty($exam_link)) {
         $this->redirect(['controller'=>'pages','action'=>'exams']);
       }
       $this->request->session()->write('SELECTED_EXAM',$exam_link);
       $this->redirect(['controller'=>'pages','action'=>'viewexam']);
    }
    //------------------------------------------------
    public function viewexam(){
      if (!$this->request->session()->check('SELECTED_EXAM')) {
        $this->redirect(['controller'=>'pages','action'=>'exams']);
      }
      $exam_link = $this->request->session()->read('SELECTED_EXAM');
      $exams = new Exams;

      $data = $exams->viewExam($exam_link);

      $this->set('data',$data);
      $this->set('active_nav','exams');

    }
    ####################################################
    public function classes(){

      $classes = new Classes;
      $user_link = $this->request->session()->read('SELECTED_USER');
      $data = $classes->getClasses($user_link);
      // debug($data);exit;
      $this->set('data',$data);
      $this->set('active_nav','classes');

    }
    //------------------------------------------------
    public function loadclass(){
      $class_link = $this->request->getQuery('class');
       if (empty($class_link)) {
         $this->redirect(['controller'=>'pages','action'=>'classes']);
       }
       $this->request->session()->write('SELECTED_CLASS',$class_link);
       $this->redirect(['controller'=>'pages','action'=>'viewclass']);
    }
    //------------------------------------------------
    public function viewclass(){
      if (!$this->request->session()->check('SELECTED_CLASS')) {
        $this->redirect(['controller'=>'pages','action'=>'classes']);
      }
      $class_link = $this->request->session()->read('SELECTED_CLASS');
      $classes = new Classes;

      $data = $classes->viewClass($class_link);

      $this->set('data',$data);
      $this->set('active_nav','classes');
    }
    ####################################################
    public function papers(){
      $papers = new Papers;
      $user_link = $this->request->session()->read('SELECTED_USER');
      $data = $papers->getPapers($user_link);
        // debug($data);exit;
      $this->set('data',$data);
      $this->set('active_nav','pages');
    }
    ####################################################
    // public function display(...$path)
    // {
    //     $count = count($path);
    //     if (!$count) {
    //         return $this->redirect('/');
    //     }
    //     if (in_array('..', $path, true) || in_array('.', $path, true)) {
    //         throw new ForbiddenException();
    //     }
    //     $page = $subpage = null;
    //
    //     if (!empty($path[0])) {
    //         $page = $path[0];
    //     }
    //     if (!empty($path[1])) {
    //         $subpage = $path[1];
    //     }
    //     $this->set(compact('page', 'subpage'));
    //
    //     try {
    //         $this->render(implode('/', $path));
    //     } catch (MissingTemplateException $exception) {
    //         if (Configure::read('debug')) {
    //             throw $exception;
    //         }
    //         throw new NotFoundException();
    //     }
    // }
}
