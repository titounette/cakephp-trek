<?php
App::uses('AppController', 'Controller');
/**
 * Journeys Controller
 *
 * @property Journey $Journey
 */
class JourneysController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Journey->recursive = 0;
		$this->set('journeys', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		$this->set('journey', $this->Journey->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Journey->create();
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		}
		$creators = $this->Journey->Creator->find('list');
		$zones = $this->Journey->Zone->find('list');
		$this->set(compact('creators', 'zones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Journey->read(null, $id);
		}
		$creators = $this->Journey->Creator->find('list');
		$zones = $this->Journey->Zone->find('list');
		$this->set(compact('creators', 'zones'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->Journey->delete()) {
			$this->Session->setFlash(__('Journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Journey->recursive = 0;
		$this->set('journeys', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		$this->set('journey', $this->Journey->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Journey->create();
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		}
		$creators = $this->Journey->Creator->find('list');
		$zones = $this->Journey->Zone->find('list');
		$this->set(compact('creators', 'zones'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Journey->read(null, $id);
		}
		$creators = $this->Journey->Creator->find('list');
		$zones = $this->Journey->Zone->find('list');
		$this->set(compact('creators', 'zones'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->Journey->delete()) {
			$this->Session->setFlash(__('Journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
