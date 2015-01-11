<?php
App::uses('AppController', 'Controller');
/**
 * LeadActivities Controller
 *
 * @property LeadActivity $LeadActivity
 * @property PaginatorComponent $Paginator
 */
class LeadActivitiesController extends AppController {

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
		$this->LeadActivity->recursive = 0;
		$this->set('leadActivities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LeadActivity->exists($id)) {
			throw new NotFoundException(__('Invalid lead activity'));
		}
		$options = array('conditions' => array('LeadActivity.' . $this->LeadActivity->primaryKey => $id));
		$this->set('leadActivity', $this->LeadActivity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeadActivity->create();
			if ($this->LeadActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The lead activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead activity could not be saved. Please, try again.'));
			}
		}
		$users = $this->LeadActivity->User->find('list');
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
		if (!$this->LeadActivity->exists($id)) {
			throw new NotFoundException(__('Invalid lead activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeadActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The lead activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadActivity.' . $this->LeadActivity->primaryKey => $id));
			$this->request->data = $this->LeadActivity->find('first', $options);
		}
		$users = $this->LeadActivity->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LeadActivity->id = $id;
		if (!$this->LeadActivity->exists()) {
			throw new NotFoundException(__('Invalid lead activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeadActivity->delete()) {
			$this->Session->setFlash(__('The lead activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lead activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LeadActivity->recursive = 0;
		$this->set('leadActivities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LeadActivity->exists($id)) {
			throw new NotFoundException(__('Invalid lead activity'));
		}
		$options = array('conditions' => array('LeadActivity.' . $this->LeadActivity->primaryKey => $id));
		$this->set('leadActivity', $this->LeadActivity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LeadActivity->create();
			if ($this->LeadActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The lead activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead activity could not be saved. Please, try again.'));
			}
		}
		$users = $this->LeadActivity->User->find('list');
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
		if (!$this->LeadActivity->exists($id)) {
			throw new NotFoundException(__('Invalid lead activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeadActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The lead activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadActivity.' . $this->LeadActivity->primaryKey => $id));
			$this->request->data = $this->LeadActivity->find('first', $options);
		}
		$users = $this->LeadActivity->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LeadActivity->id = $id;
		if (!$this->LeadActivity->exists()) {
			throw new NotFoundException(__('Invalid lead activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeadActivity->delete()) {
			$this->Session->setFlash(__('The lead activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lead activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
