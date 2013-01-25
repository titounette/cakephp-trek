<?php
App::uses('AppController', 'Controller');
/**
 * RateGuides Controller
 *
 * @property RateGuide $RateGuide
 */
class RateGuidesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RateGuide->recursive = 0;
		$this->set('rateGuides', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RateGuide->id = $id;
		if (!$this->RateGuide->exists()) {
			throw new NotFoundException(__('Invalid rate guide'));
		}
		$this->set('rateGuide', $this->RateGuide->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RateGuide->create();
			if ($this->RateGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The rate guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate guide could not be saved. Please, try again.'));
			}
		}
		$guides = $this->RateGuide->Guide->find('list');
		$this->set(compact('guides'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RateGuide->id = $id;
		if (!$this->RateGuide->exists()) {
			throw new NotFoundException(__('Invalid rate guide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RateGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The rate guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate guide could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RateGuide->read(null, $id);
		}
		$guides = $this->RateGuide->Guide->find('list');
		$this->set(compact('guides'));
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
		$this->RateGuide->id = $id;
		if (!$this->RateGuide->exists()) {
			throw new NotFoundException(__('Invalid rate guide'));
		}
		if ($this->RateGuide->delete()) {
			$this->Session->setFlash(__('Rate guide deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rate guide was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->RateGuide->recursive = 0;
		$this->set('rateGuides', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->RateGuide->id = $id;
		if (!$this->RateGuide->exists()) {
			throw new NotFoundException(__('Invalid rate guide'));
		}
		$this->set('rateGuide', $this->RateGuide->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RateGuide->create();
			if ($this->RateGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The rate guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate guide could not be saved. Please, try again.'));
			}
		}
		$guides = $this->RateGuide->Guide->find('list');
		$this->set(compact('guides'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->RateGuide->id = $id;
		if (!$this->RateGuide->exists()) {
			throw new NotFoundException(__('Invalid rate guide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RateGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The rate guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate guide could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RateGuide->read(null, $id);
		}
		$guides = $this->RateGuide->Guide->find('list');
		$this->set(compact('guides'));
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
		$this->RateGuide->id = $id;
		if (!$this->RateGuide->exists()) {
			throw new NotFoundException(__('Invalid rate guide'));
		}
		if ($this->RateGuide->delete()) {
			$this->Session->setFlash(__('Rate guide deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rate guide was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
