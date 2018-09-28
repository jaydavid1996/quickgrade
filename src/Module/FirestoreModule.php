<?php 
namespace App\Module;
use Morrislaptop\Firestore\Factory;
use Kreait\Firebase\ServiceAccount;

class FirestoreModule{
  
  public function __construct(){
  
    $serviceAccount = ServiceAccount::fromJsonFile(CONFIG . 'connection.json');
    $firestore = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->createFirestore();
        // debug($firestore);exit;

    $collection = $firestore->collection('users');
    // debug($collection);exit;
    
    $user = $collection->document('123456');

    // Save a document
    $user->set(['name' => 'morrislaptop', 'role' => 'developer']);

    // Get a document
    $snap = $user->snapshot();
    echo $snap['name']; // morrislaptop
  
  }
  
}