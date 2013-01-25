<?php
App::uses('AppController', 'Controller');
/**
 * RateTracks Controller
 *
 * @property RateTrack $RateTrack
 */
class RateTracksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RateTrack->recursive = 0;
		$this->set('rateTracks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RateTrack->id = $id;
		if (!$this->RateTrack->exists()) {
			throw new NotFoundException(__('Invalid rate track'));
		}
		$this->set('rateTrack', $this->RateTrack->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RateTrack->create();
			if ($this->RateTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The rate track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate track could not be saved. Please, try again.'));
			}
		}
		$tracks = $this->RateTrack->Track->find('list');
		$this->set(compact('tracks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RateTrack->id = $id;
		if (!$this->RateTrack->exists()) {
			throw new NotFoundException(__('Invalid rate track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RateTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The rate track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate track could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RateTrack->read(null, $id);
		}
		$tracks = $this->RateTrack->Track->find('list');
		$this->set(compact('tracks'));
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
		$this->RateTrack->id = $id;
		if (!$this->RateTrack->exists()) {
			throw new NotFoundException(__('Invalid rate track'));
		}
		if ($this->RateTrack->delete()) {
			$this->Session->setFlash(__('Rate track deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rate track was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->RateTrack->recursive = 0;
		$this->set('rateTracks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->RateTrack->id = $id;
		if (!$this->RateTrack->exists()) {
			throw new NotFoundException(__('Invalid rate track'));
		}
		$this->set('rateTrack', $this->RateTrack->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RateTrack->create();
			if ($this->RateTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The rate track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate track could not be saved. Please, try again.'));
			}
		}
		$tracks = $this->RateTrack->Track->find('list');
		$this->set(compact('tracks'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->RateTrack->id = $id;
		if (!$this->RateTrack->exists()) {
			throw new NotFoundException(__('Invalid rate track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RateTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The rate track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate track could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RateTrack->read(null, $id);
		}
		$tracks = $this->RateTrack->Track->find('list');
		$this->set(compact('tracks'));
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
		$this->RateTrack->id = $id;
		if (!$this->RateTrack->exists()) {
			throw new NotFoundException(__('Invalid rate track'));
		}
		if ($this->RateTrack->delete()) {
			$this->Session->setFlash(__('Rate track deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rate track was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
