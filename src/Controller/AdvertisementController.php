<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Http\ServerRequest;

/**
 * Advertisement Controller
 *
 * @property \App\Model\Table\AdvertisementTable $Advertisement
 *
 * @method \App\Model\Entity\Advertisement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdvertisementController extends AppController  {

    public function index()  {
        $query = $this->Advertisement->find('all')->order(['id' => 'desc']);
        $this->set('advertisement', $this->paginate($query));
    }

    public function list()  {
        $advertisement = $this->paginate($this->Advertisement);
        $this->set(compact('advertisement'));
    }

    public function view($id = null)  {
        $advertisement = $this->Advertisement->get($id, [
            'contain' => ['Cmmt'],
        ]);
        $advertisement->read_count++;
        $this->Advertisement->save($advertisement);
        $this->set('advertisement', $advertisement);
    }

    public function add()  {
        $advertisement = $this->Advertisement->newEntity();
        if ($this->request->is('post')) {
            $advertisement = $this->Advertisement->patchEntity($advertisement, $this->request->getData());
            $advertisement->createDate = time();
            if ($this->Advertisement->save($advertisement)) {
                $this->Flash->success(__('The advertisement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The advertisement could not be saved. Please, try again.'));
        }
        $this->set(compact('advertisement'));
    }

    public function edit($id = null)  {
        $advertisement = $this->Advertisement->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $advertisement = $this->Advertisement->patchEntity($advertisement, $this->request->getData());
            if ($this->Advertisement->save($advertisement)) {
                $this->Flash->success(__('The advertisement has been saved.'));

                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The advertisement could not be saved. Please, try again.'));
        }
        $this->set(compact('advertisement'));
    }

    public function delete($id = null)  {
        $this->request->allowMethod(['post', 'delete']);
        $advertisement = $this->Advertisement->get($id);
        if ($this->Advertisement->delete($advertisement)) {
            $this->Flash->success(__('The advertisement has been deleted.'));
        } else {
            $this->Flash->error(__('The advertisement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'list']);
    }

    public function commentadd($id = null)  {
        $commentTable = TableRegistry::get('cmmt');
        $comment = $commentTable -> newEntity();

        $comment->itemid_ = $id;
        $comment->modulName = 'Advertisement';
        $comment->authorName = $this->request->getData('author_name') == "" ? "Зочин" : $this->request->getData('author_name') ;
        $comment->commentBody = $this->request->getData('body');
        $comment->createDate = time();

        if ($commentTable->save($comment)) {
            return $this->redirect(['action' => 'view',$id]);
        }
    }

    public function feedback($id = null)  {
        $type = $this->request->getQuery("type");
        $count = $this->request->getQuery("count");

        $set = array();
        if($type == "like") $set['likeCnt'] = $count;
        if($type == "unlike") $set['unlikeCnt'] = $count; 

        $commentTable = TableRegistry::get("cmmt");
        $query = $commentTable->query();
        $result = $query->update()->set($set)->where(['id' => $id])->execute();
    }
}
