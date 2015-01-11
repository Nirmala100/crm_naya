<?php
App::uses('AppController', 'Controller');
/**
 * ContactManagers Controller
 *
 * @property ContactManager $ContactManager
 * @property PaginatorComponent $Paginator
 */
class ContactManagersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactManager->recursive = 0;
		$this->set('contactManagers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactManager->exists($id)) {
			throw new NotFoundException(__('Invalid contact manager'));
		}
		$options = array('conditions' => array('ContactManager.' . $this->ContactManager->primaryKey => $id));
		$this->set('contactManager', $this->ContactManager->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactManager->create();
			if ($this->ContactManager->save($this->request->data)) {
				$this->Session->setFlash(__('The contact manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact manager could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContactManager->exists($id)) {
			throw new NotFoundException(__('Invalid contact manager'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContactManager->save($this->request->data)) {
				$this->Session->setFlash(__('The contact manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact manager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactManager.' . $this->ContactManager->primaryKey => $id));
			$this->request->data = $this->ContactManager->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContactManager->id = $id;
		if (!$this->ContactManager->exists()) {
			throw new NotFoundException(__('Invalid contact manager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactManager->delete()) {
			$this->Session->setFlash(__('The contact manager has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contact manager could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContactManager->recursive = 0;
		$this->set('contactManagers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ContactManager->exists($id)) {
			throw new NotFoundException(__('Invalid contact manager'));
		}
		$options = array('conditions' => array('ContactManager.' . $this->ContactManager->primaryKey => $id));
		$this->set('contactManager', $this->ContactManager->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContactManager->create();
			if ($this->ContactManager->save($this->request->data)) {
				$this->Session->setFlash(__('The contact manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact manager could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ContactManager->exists($id)) {
			throw new NotFoundException(__('Invalid contact manager'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContactManager->save($this->request->data)) {
				$this->Session->setFlash(__('The contact manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact manager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactManager.' . $this->ContactManager->primaryKey => $id));
			$this->request->data = $this->ContactManager->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ContactManager->id = $id;
		if (!$this->ContactManager->exists()) {
			throw new NotFoundException(__('Invalid contact manager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactManager->delete()) {
			$this->Session->setFlash(__('The contact manager has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contact manager could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
