<?php
App::uses('AppController', 'Controller');
/**
 * CommentsGuides Controller
 *
 * @property CommentsGuide $CommentsGuide
 */
class CommentsGuidesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CommentsGuide->recursive = 0;
		$this->set('commentsGuides', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CommentsGuide->id = $id;
		if (!$this->CommentsGuide->exists()) {
			throw new NotFoundException(__('Invalid comments guide'));
		}
		$this->set('commentsGuide', $this->CommentsGuide->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommentsGuide->create();
			if ($this->CommentsGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The comments guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments guide could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommentsGuide->User->find('list');
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
		$this->CommentsGuide->id = $id;
		if (!$this->CommentsGuide->exists()) {
			throw new NotFoundException(__('Invalid comments guide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The comments guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments guide could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsGuide->read(null, $id);
		}
		$users = $this->CommentsGuide->User->find('list');
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
		$this->CommentsGuide->id = $id;
		if (!$this->CommentsGuide->exists()) {
			throw new NotFoundException(__('Invalid comments guide'));
		}
		if ($this->CommentsGuide->delete()) {
			$this->Session->setFlash(__('Comments guide deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments guide was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CommentsGuide->recursive = 0;
		$this->set('commentsGuides', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CommentsGuide->id = $id;
		if (!$this->CommentsGuide->exists()) {
			throw new NotFoundException(__('Invalid comments guide'));
		}
		$this->set('commentsGuide', $this->CommentsGuide->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CommentsGuide->create();
			if ($this->CommentsGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The comments guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments guide could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommentsGuide->User->find('list');
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
		$this->CommentsGuide->id = $id;
		if (!$this->CommentsGuide->exists()) {
			throw new NotFoundException(__('Invalid comments guide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsGuide->save($this->request->data)) {
				$this->Session->setFlash(__('The comments guide has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments guide could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsGuide->read(null, $id);
		}
		$users = $this->CommentsGuide->User->find('list');
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
		$this->CommentsGuide->id = $id;
		if (!$this->CommentsGuide->exists()) {
			throw new NotFoundException(__('Invalid comments guide'));
		}
		if ($this->CommentsGuide->delete()) {
			$this->Session->setFlash(__('Comments guide deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments guide was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
