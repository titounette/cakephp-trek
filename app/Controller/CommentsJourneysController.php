<?php
App::uses('AppController', 'Controller');
/**
 * CommentsJourneys Controller
 *
 * @property CommentsJourney $CommentsJourney
 */
class CommentsJourneysController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CommentsJourney->recursive = 0;
		$this->set('commentsJourneys', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CommentsJourney->id = $id;
		if (!$this->CommentsJourney->exists()) {
			throw new NotFoundException(__('Invalid comments journey'));
		}
		$this->set('commentsJourney', $this->CommentsJourney->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommentsJourney->create();
			if ($this->CommentsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The comments journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments journey could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommentsJourney->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CommentsJourney->id = $id;
		if (!$this->CommentsJourney->exists()) {
			throw new NotFoundException(__('Invalid comments journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The comments journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsJourney->read(null, $id);
		}
		$users = $this->CommentsJourney->User->find('list');
		$this->set(compact('users'));
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
		$this->CommentsJourney->id = $id;
		if (!$this->CommentsJourney->exists()) {
			throw new NotFoundException(__('Invalid comments journey'));
		}
		if ($this->CommentsJourney->delete()) {
			$this->Session->setFlash(__('Comments journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CommentsJourney->recursive = 0;
		$this->set('commentsJourneys', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CommentsJourney->id = $id;
		if (!$this->CommentsJourney->exists()) {
			throw new NotFoundException(__('Invalid comments journey'));
		}
		$this->set('commentsJourney', $this->CommentsJourney->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CommentsJourney->create();
			if ($this->CommentsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The comments journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments journey could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommentsJourney->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->CommentsJourney->id = $id;
		if (!$this->CommentsJourney->exists()) {
			throw new NotFoundException(__('Invalid comments journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The comments journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsJourney->read(null, $id);
		}
		$users = $this->CommentsJourney->User->find('list');
		$this->set(compact('users'));
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
		$this->CommentsJourney->id = $id;
		if (!$this->CommentsJourney->exists()) {
			throw new NotFoundException(__('Invalid comments journey'));
		}
		if ($this->CommentsJourney->delete()) {
			$this->Session->setFlash(__('Comments journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
