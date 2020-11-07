<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController  {

    public function index()  {
        $query = $this->News->find()->order(['id' => 'desc']);
        $this->set('news', $this->paginate($query)) ;
    }

    public function list()  {
        $query = $this->News->find()->order(['id' => 'desc']);
        $this->set('news', $this->paginate($query)) ;
    }

    public function view($id = null)  {
        $news = $this->News->get($id, [
            'contain' => [],
        ]);

        $this->set('news', $news);
    }

    public function add()  {
        $news = $this->News->newEntity();
        if ($this->request->is('post')) {
            $news->newsImg = $this->request->getData("image");
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
}
