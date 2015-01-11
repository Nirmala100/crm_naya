<?php
App::uses('AppController', 'Controller');
/**
 * ProductCategories Controller
 *
 * @property ProductCategory $ProductCategory
 * @property PaginatorComponent $Paginator
 */
class ProductCategoriesController extends AppController {

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
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductCategory->exists($id)) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$options = array('conditions' => array('ProductCategory.' . $this->ProductCategory->primaryKey => $id));
		$this->set('productCategory', $this->ProductCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductCategory->create();
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->ProductCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductCategory->exists($id)) {
			throw new NotFoundException(__('Invalid product category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductCategory.' . $this->ProductCategory->primaryKey => $id));
			$this->request->data = $this->ProductCategory->find('first', $options);
		}
		$categories = $this->ProductCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductCategory->delete()) {
			$this->Session->setFlash(__('The product category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ProductCategory->exists($id)) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$options = array('conditions' => array('ProductCategory.' . $this->ProductCategory->primaryKey => $id));
		$this->set('productCategory', $this->ProductCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ProductCategory->create();
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->ProductCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ProductCategory->exists($id)) {
			throw new NotFoundException(__('Invalid product category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductCategory.' . $this->ProductCategory->primaryKey => $id));
			$this->request->data = $this->ProductCategory->find('first', $options);
		}
		$categories = $this->ProductCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductCategory->delete()) {
			$this->Session->setFlash(__('The product category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
