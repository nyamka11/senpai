<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Advertisement Controller
 *
 * @property \App\Model\Table\AdvertisementTable $Advertisement
 *
 * @method \App\Model\Entity\Advertisement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdvertisementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function list()
    {
        $advertisement = $this->paginate($this->Advertisement);

        $this->set(compact('advertisement'));
    }

    /**
     * View method
     *
     * @param string|null $id Advertisement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $advertisement = $this->Advertisement->get($id, [
            'contain' => [],
        ]);

        $this->set('advertisement', $advertisement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $advertisement = $this->Advertisement->newEntity();
        if ($this->request->is('post')) {
            $advertisement = $this->Advertisement->patchEntity($advertisement, $this->request->getData());
            if ($this->Advertisement->save($advertisement)) {
                $this->Flash->success(__('The advertisement has been saved.'));

                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The advertisement could not be saved. Please, try again.'));
        }
        $this->set(compact('advertisement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Advertisement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
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

    /**
     * Delete method
     *
     * @param string|null $id Advertisement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $advertisement = $this->Advertisement->get($id);
        if ($this->Advertisement->delete($advertisement)) {
            $this->Flash->success(__('The advertisement has been deleted.'));
        } else {
            $this->Flash->error(__('The advertisement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'list']);
    }
}
