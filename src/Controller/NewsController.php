<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Http\ServerRequest;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController  {

    public function index()  {
        $query = $this->News->find()->order(['id' => 'asc']);
        $this->set('news', $this->paginate($query)) ;
    }

    public function list()  {
        $query = $this->News->find()->order(['id' => 'desc']);
        $this->set('news', $this->paginate($query)) ;
    }

    public function view($id = null)  {

        $news = $this->News->get($id, [
            'contain' => ['Cmmt'],
        ]);
        // Debugger::dump($news->read_count); 2 udaa view duudagdaj baigaag olj zasna
        $news->read_count++;
        $this->News->save($news);
        $this->set('news', $news);
    }

    public function add()  {
        $news = $this->News->newEntity();
        if ($this->request->is('post'))  {
            $news->author_id = $this->Auth->user('user_id');
            $news->author_name = $this->Auth->user('lastname');
            $news->date = time();
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));
                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news'));
    }

    public function edit($id = null)  {
        $news = $this->News->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));
                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news'));
    }

    public function delete($id = null)  {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'list']);
    }

    public function commentadd($id = null)  {
        $commentTable = TableRegistry::get('cmmt');
        $comment = $commentTable -> newEntity();

        $comment->itemid_ = $id;
        $comment->modulName = 'News';
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
