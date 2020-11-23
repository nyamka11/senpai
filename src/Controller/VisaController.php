<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Visa Controller
 *
 * @property \App\Model\Table\VisaTable $Visa
 *
 * @method \App\Model\Entity\Visa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function list()
    {
        $visa = $this->paginate($this->Visa);

        $this->set(compact('visa'));
    }

    /**
     * View method
     *
     * @param string|null $id Visa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visa = $this->Visa->get($id, [
            'contain' => [],
        ]);

        $this->set('visa', $visa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visa = $this->Visa->newEntity();
        if ($this->request->is('post')) {
            $visa = $this->Visa->patchEntity($visa, $this->request->getData());
            $visa->createDate = time();
            if ($this->Visa->save($visa)) {
                $this->Flash->success(__('The visa has been saved.'));

                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The visa could not be saved. Please, try again.'));
        }
        $this->set(compact('visa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visa = $this->Visa->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visa = $this->Visa->patchEntity($visa, $this->request->getData());
            $visa->updateDate = time();
            if ($this->Visa->save($visa)) {
                $this->Flash->success(__('The visa has been saved.'));

                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The visa could not be saved. Please, try again.'));
        }
        $this->set(compact('visa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visa = $this->Visa->get($id);
        if ($this->Visa->delete($visa)) {
            $this->Flash->success(__('The visa has been deleted.'));
        } else {
            $this->Flash->error(__('The visa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'list']);
    }
}
