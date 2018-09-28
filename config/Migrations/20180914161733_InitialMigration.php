<?php
use Migrations\AbstractMigration;

class InitialMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
      
      #user tables
      $table = $this->table('students');
      
       $table->addColumn('customid', 'string', [
           'default' => null,
           'limit' => 20,
           'null' => false,
       ]);
       
       $table->addColumn('firstname', 'string', [
           'default' => null,
           'limit' => 50,
           'null' => false,
       ]);
       
       $table->addColumn('lastname', 'string', [
           'default' => null,
           'limit' => 50,
           'null' => false,
       ]);
       
       $table->addColumn('password', 'string', [
           'default' => null,
           'limit' => 255,
           'null' => false,
       ]);
       
       $table->addColumn('status', 'integer', [
           'default' => 0,
           'limit' => 5,
           'null' => false,
       ]);

       $table->addColumn('created', 'datetime', [
           'default' => null,
           'null' => false,
       ]);
       
       $table->addColumn('modified', 'datetime', [
           'default' => null,
           'null' => false,
       ]);
       
       $table->create();
       
       
       
       #classes tables
       $table = $this->table('classes');
       
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
        
       
       
       
       
       
       
       
      
    }
    
}
