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

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()  {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth',  [
            'authenticate' => [
                'Form'=> [
                    'fields' => ['username'=>'username','password'=>'password'],
                    'userModel' => 'Users'
                ]
            ],
            'loginRedirect' => [
                'controller' => 'News',
                'action' => 'list'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'storage'=>'Session'
            ]
        );

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(event $event)  {
        parent::beforeFilter($event);
          $this->Auth->allow([
            'verification', 
            'register', 
            'logout', 
            'forgotpassword',
            'resetpassword',
            'index',
            'view',
        ]);
    }

    public function beforeRender(Event $event)  {
        parent::beforeFilter($event);
        $this->set('userData', $this->Auth->user());
    }

    // public function isAuthorized($user)  {
    //    //admin full akses
    //     if(isset($user['Role']) && $user['Role'] === 'Administrator')  {
    //         return true;
    //     } 
    //     else  {
	//         return false;
	//     }
    // }
}
