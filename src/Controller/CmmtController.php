<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cmmt Controller
 *
 * @property \App\Model\Table\CmmtTable $Cmmt
 *
 * @method \App\Model\Entity\Cmmt[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CmmtController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cmmt = $this->paginate($this->Cmmt);

        $this->set(compact('cmmt'));
    }

    /**
     * View method
     *
     * @param string|null $id Cmmt id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cmmt = $this->Cmmt->get($id, [
            'contain' => [],
        ]);

        $this->set('cmmt', $cmmt);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cmmt = $this->Cmmt->newEntity();
        if ($this->request->is('post')) {
            $cmmt = $this->Cmmt->patchEntity($cmmt, $this->request->getData());
            if ($this->Cmmt->save($cmmt)) {
                $this->Flash->success(__('The cmmt has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cmmt could not be saved. Please, try again.'));
        }
        $this->set(compact('cmmt'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cmmt id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cmmt = $this->Cmmt->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cmmt = $this->Cmmt->patchEntity($cmmt, $this->request->getData());
            if ($this->Cmmt->save($cmmt)) {
                $this->Flash->success(__('The cmmt has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cmmt could not be saved. Please, try again.'));
        }
        $this->set(compact('cmmt'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cmmt id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cmmt = $this->Cmmt->get($id);
        if ($this->Cmmt->delete($cmmt)) {
            $this->Flash->success(__('The cmmt has been deleted.'));
        } else {
            $this->Flash->error(__('The cmmt could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
