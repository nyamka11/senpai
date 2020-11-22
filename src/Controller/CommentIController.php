<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CommentI Controller
 *
 * @property \App\Model\Table\CommentITable $CommentI
 *
 * @method \App\Model\Entity\CommentI[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentIController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $commentI = $this->paginate($this->CommentI);

        $this->set(compact('commentI'));
    }

    /**
     * View method
     *
     * @param string|null $id Comment I id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commentI = $this->CommentI->get($id, [
            'contain' => [],
        ]);

        $this->set('commentI', $commentI);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commentI = $this->CommentI->newEntity();
        if ($this->request->is('post')) {
            $commentI = $this->CommentI->patchEntity($commentI, $this->request->getData());
            if ($this->CommentI->save($commentI)) {
                $this->Flash->success(__('The comment i has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comment i could not be saved. Please, try again.'));
        }
        $this->set(compact('commentI'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comment I id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commentI = $this->CommentI->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commentI = $this->CommentI->patchEntity($commentI, $this->request->getData());
            if ($this->CommentI->save($commentI)) {
                $this->Flash->success(__('The comment i has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comment i could not be saved. Please, try again.'));
        }
        $this->set(compact('commentI'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment I id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commentI = $this->CommentI->get($id);
        if ($this->CommentI->delete($commentI)) {
            $this->Flash->success(__('The comment i has been deleted.'));
        } else {
            $this->Flash->error(__('The comment i could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
