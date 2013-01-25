<?php
App::uses('AppController', 'Controller');
/**
 * RateJourneys Controller
 *
 * @property RateJourney $RateJourney
 */
class RateJourneysController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RateJourney->recursive = 0;
		$this->set('rateJourneys', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RateJourney->id = $id;
		if (!$this->RateJourney->exists()) {
			throw new NotFoundException(__('Invalid rate journey'));
		}
		$this->set('rateJourney', $this->RateJourney->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RateJourney->create();
			if ($this->RateJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The rate journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate journey could not be saved. Please, try again.'));
			}
		}
		$journeys = $this->RateJourney->Journey->find('list');
		$this->set(compact('journeys'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RateJourney->id = $id;
		if (!$this->RateJourney->exists()) {
			throw new NotFoundException(__('Invalid rate journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RateJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The rate journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RateJourney->read(null, $id);
		}
		$journeys = $this->RateJourney->Journey->find('list');
		$this->set(compact('journeys'));
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
		$this->RateJourney->id = $id;
		if (!$this->RateJourney->exists()) {
			throw new NotFoundException(__('Invalid rate journey'));
		}
		if ($this->RateJourney->delete()) {
			$this->Session->setFlash(__('Rate journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rate journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->RateJourney->recursive = 0;
		$this->set('rateJourneys', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->RateJourney->id = $id;
		if (!$this->RateJourney->exists()) {
			throw new NotFoundException(__('Invalid rate journey'));
		}
		$this->set('rateJourney', $this->RateJourney->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RateJourney->create();
			if ($this->RateJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The rate journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate journey could not be saved. Please, try again.'));
			}
		}
		$journeys = $this->RateJourney->Journey->find('list');
		$this->set(compact('journeys'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->RateJourney->id = $id;
		if (!$this->RateJourney->exists()) {
			throw new NotFoundException(__('Invalid rate journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RateJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The rate journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RateJourney->read(null, $id);
		}
		$journeys = $this->RateJourney->Journey->find('list');
		$this->set(compact('journeys'));
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
		$this->RateJourney->id = $id;
		if (!$this->RateJourney->exists()) {
			throw new NotFoundException(__('Invalid rate journey'));
		}
		if ($this->RateJourney->delete()) {
			$this->Session->setFlash(__('Rate journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rate journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
