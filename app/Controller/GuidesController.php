<?php
App::uses('AppController', 'Controller');
/**
 * Guides Controller
 *
 * @property Guide $Guide
 */
class GuidesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Guide->recursive = 0;
		$this->set('guides', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		$this->set('guide', $this->Guide->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Guide->create();
			if ($this->Guide->save($this->request->data)) {
				$this->Session->setFlash(__('The guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guide could not be saved. Please, try again.'));
			}
		}
		$users = $this->Guide->User->find('list');
		$groups = $this->Guide->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guide->save($this->request->data)) {
				$this->Session->setFlash(__('The guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guide could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Guide->read(null, $id);
		}
		$users = $this->Guide->User->find('list');
		$groups = $this->Guide->Group->find('list');
		$this->set(compact('users', 'groups'));
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
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		if ($this->Guide->delete()) {
			$this->Session->setFlash(__('Guide deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guide was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Guide->recursive = 0;
		$this->set('guides', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		$this->set('guide', $this->Guide->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Guide->create();
			if ($this->Guide->save($this->request->data)) {
				$this->Session->setFlash(__('The guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guide could not be saved. Please, try again.'));
			}
		}
		$users = $this->Guide->User->find('list');
		$groups = $this->Guide->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guide->save($this->request->data)) {
				$this->Session->setFlash(__('The guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guide could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Guide->read(null, $id);
		}
		$users = $this->Guide->User->find('list');
		$groups = $this->Guide->Group->find('list');
		$this->set(compact('users', 'groups'));
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
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		if ($this->Guide->delete()) {
			$this->Session->setFlash(__('Guide deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guide was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
