<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;
use Cake\Mailer\Email;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;
use Illuminate\Http\Request;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController  {

    public function upload()  {
        if($this->request->is('post'))  {
            $myname = $this->request->getData()['file']['name'];
            $myname = $this->request->getData()['file']['tmp_name'];
            $myext = substr(strrchr($myname, "."), 1);
            $mypath = "upload/".Security::hash($myname).".".$myext;
            $file = $this->Files->newEntity();
            $file->name = $myname;
            $file->path = $mypath;
            $file->created = time();
            if(move_uploaded_file($mytmp, WWW_ROOT.$mypath))  {
                $this->Files->save($file);
                return $this->redirect(['action'=>'index']);
            }
        }
    }
}

?>