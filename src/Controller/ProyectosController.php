<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proyectos Controller
 *
 * @property \App\Model\Table\ProyectosTable $Proyectos
 *
 * @method \App\Model\Entity\Proyecto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProyectosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programas', 'Users'],
        ];
        $proyectos = $this->paginate($this->Proyectos);

        $this->set(compact('proyectos'));
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => ['Programas', 'Users', 'Avances'],
        ]);

        $this->set('proyecto', $proyecto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyecto = $this->Proyectos->newEntity();
        if ($this->request->is('post')) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->getData());
            if ($this->Proyectos->save($proyecto)) {
                $this->Flash->success(__('The proyecto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proyecto could not be saved. Please, try again.'));
        }
        $programas = $this->Proyectos->Programas->find('list', ['limit' => 200]);
        $users = $this->Proyectos->Users->find('list', ['limit' => 200]);
        $this->set(compact('proyecto', 'programas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->getData());
            if ($this->Proyectos->save($proyecto)) {
                $this->Flash->success(__('The proyecto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proyecto could not be saved. Please, try again.'));
        }
        $programas = $this->Proyectos->Programas->find('list', ['limit' => 200]);
        $users = $this->Proyectos->Users->find('list', ['limit' => 200]);
        $this->set(compact('proyecto', 'programas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyecto = $this->Proyectos->get($id);
        if ($this->Proyectos->delete($proyecto)) {
            $this->Flash->success(__('The proyecto has been deleted.'));
        } else {
            $this->Flash->error(__('The proyecto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
