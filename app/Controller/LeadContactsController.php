<?php
App::uses('AppController', 'Controller');
/**
 * LeadContacts Controller
 *
 * @property LeadContact $LeadContact
 * @property PaginatorComponent $Paginator
 */
class LeadContactsController extends AppController {

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
		$this->LeadContact->recursive = 0;
		$this->set('leadContacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LeadContact->exists($id)) {
			throw new NotFoundException(__('Invalid lead contact'));
		}
		$options = array('conditions' => array('LeadContact.' . $this->LeadContact->primaryKey => $id));
		$this->set('leadContact', $this->LeadContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeadContact->create();
			if ($this->LeadContact->save($this->request->data)) {
				$this->Session->setFlash(__('The lead contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead contact could not be saved. Please, try again.'));
			}
		}
		$contactManagers = $this->LeadContact->ContactManager->find('list');
		$users = $this->LeadContact->User->find('list');
		$this->set(compact('contactManagers', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LeadContact->exists($id)) {
			throw new NotFoundException(__('Invalid lead contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeadContact->save($this->request->data)) {
				$this->Session->setFlash(__('The lead contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadContact.' . $this->LeadContact->primaryKey => $id));
			$this->request->data = $this->LeadContact->find('first', $options);
		}
		$contactManagers = $this->LeadContact->ContactManager->find('list');
		$users = $this->LeadContact->User->find('list');
		$this->set(compact('contactManagers', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LeadContact->id = $id;
		if (!$this->LeadContact->exists()) {
			throw new NotFoundException(__('Invalid lead contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeadContact->delete()) {
			$this->Session->setFlash(__('The lead contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lead contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LeadContact->recursive = 0;
		$this->set('leadContacts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LeadContact->exists($id)) {
			throw new NotFoundException(__('Invalid lead contact'));
		}
		$options = array('conditions' => array('LeadContact.' . $this->LeadContact->primaryKey => $id));
		$this->set('leadContact', $this->LeadContact->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LeadContact->create();
			if ($this->LeadContact->save($this->request->data)) {
				$this->Session->setFlash(__('The lead contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead contact could not be saved. Please, try again.'));
			}
		}
		$contactManagers = $this->LeadContact->ContactManager->find('list');
		$users = $this->LeadContact->User->find('list');
		$this->set(compact('contactManagers', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LeadContact->exists($id)) {
			throw new NotFoundException(__('Invalid lead contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeadContact->save($this->request->data)) {
				$this->Session->setFlash(__('The lead contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadContact.' . $this->LeadContact->primaryKey => $id));
			$this->request->data = $this->LeadContact->find('first', $options);
		}
		$contactManagers = $this->LeadContact->ContactManager->find('list');
		$users = $this->LeadContact->User->find('list');
		$this->set(compact('contactManagers', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LeadContact->id = $id;
		if (!$this->LeadContact->exists()) {
			throw new NotFoundException(__('Invalid lead contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeadContact->delete()) {
			$this->Session->setFlash(__('The lead contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lead contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
