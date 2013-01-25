<?php
App::uses('AppController', 'Controller');
/**
 * CommentsTracks Controller
 *
 * @property CommentsTrack $CommentsTrack
 */
class CommentsTracksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CommentsTrack->recursive = 0;
		$this->set('commentsTracks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CommentsTrack->id = $id;
		if (!$this->CommentsTrack->exists()) {
			throw new NotFoundException(__('Invalid comments track'));
		}
		$this->set('commentsTrack', $this->CommentsTrack->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommentsTrack->create();
			if ($this->CommentsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The comments track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments track could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommentsTrack->User->find('list');
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
		$this->CommentsTrack->id = $id;
		if (!$this->CommentsTrack->exists()) {
			throw new NotFoundException(__('Invalid comments track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The comments track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments track could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsTrack->read(null, $id);
		}
		$users = $this->CommentsTrack->User->find('list');
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
		$this->CommentsTrack->id = $id;
		if (!$this->CommentsTrack->exists()) {
			throw new NotFoundException(__('Invalid comments track'));
		}
		if ($this->CommentsTrack->delete()) {
			$this->Session->setFlash(__('Comments track deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments track was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CommentsTrack->recursive = 0;
		$this->set('commentsTracks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CommentsTrack->id = $id;
		if (!$this->CommentsTrack->exists()) {
			throw new NotFoundException(__('Invalid comments track'));
		}
		$this->set('commentsTrack', $this->CommentsTrack->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CommentsTrack->create();
			if ($this->CommentsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The comments track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments track could not be saved. Please, try again.'));
			}
		}
		$users = $this->CommentsTrack->User->find('list');
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
		$this->CommentsTrack->id = $id;
		if (!$this->CommentsTrack->exists()) {
			throw new NotFoundException(__('Invalid comments track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The comments track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments track could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsTrack->read(null, $id);
		}
		$users = $this->CommentsTrack->User->find('list');
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
		$this->CommentsTrack->id = $id;
		if (!$this->CommentsTrack->exists()) {
			throw new NotFoundException(__('Invalid comments track'));
		}
		if ($this->CommentsTrack->delete()) {
			$this->Session->setFlash(__('Comments track deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments track was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
