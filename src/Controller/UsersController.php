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

    public function list()  {
        I18n::setLocale('mn_MN'); 
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function login()  {
        I18n::setLocale('mn_MN'); 
        if($this->request->is('post'))  {
            $user = $this->Auth->identify();
            // $this->viewBuilder()->setLayout(false);

            if($user)  {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect');
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function register()  {
        if($this->request->is('post'))  {
            $usersTable = tableRegistry::get('Users');
            $user = $usersTable -> newEntity();

            $hasher = new DefaultPasswordHasher();
            $myname = $this->request->getData('username');
            $myemail = $this->request->getData('email');
            $mypass = $this->request->getData('password');
           

            $user->username = $myname;
            $user->email = $myemail;
            $user->password = $hasher->hash($mypass);
            $user->ins_date = time();

            if($usersTable->save($user))  {
                $this->Flash->set('Амжилттай бүртгэгдлээ', ['element'=>'success']);
            }
            else {
                $this->Flash->set('Алдаа гарлаа дахин оролдоно уу', ['element'=>'error']);
            }
        }
    }

    public function view($id = null)  {
        I18n::setLocale('mn_MN'); 
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    public function add()  {
        I18n::setLocale('mn_MN'); 
        $user = $this->Users->newEntity();
        if ($this->request->is('post'))  {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)  {
        I18n::setLocale('mn_MN'); 
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)  {
        I18n::setLocale('mn_MN'); 
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function signup($id = null)  {
        I18n::setLocale('mn_MN'); 
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function signin($id = null)  {
        I18n::setLocale('mn_MN'); 
    }
}