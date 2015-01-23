<?php
App::uses('AppController', 'Controller');
/**
 * Loans Controller
 *
 * @property Loan $Loan
 * @property PaginatorComponent $Paginator
 */
class LoansController extends AppController {

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
		$this->Loan->recursive = 0;
		$this->set('loans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loan->exists($id)) {
			throw new NotFoundException(__('Invalid loan'));
		}
		$options = array('conditions' => array('Loan.' . $this->Loan->primaryKey => $id));
		$this->set('loan', $this->Loan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loan->create();
			if ($this->Loan->save($this->request->data)) {
				$this->Session->setFlash(__('The loan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan could not be saved. Please, try again.'));
			}
		}
		$users = $this->Loan->User->find('list');
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
		if (!$this->Loan->exists($id)) {
			throw new NotFoundException(__('Invalid loan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Loan->save($this->request->data)) {
				$this->Session->setFlash(__('The loan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Loan.' . $this->Loan->primaryKey => $id));
			$this->request->data = $this->Loan->find('first', $options);
		}
		$users = $this->Loan->User->find('list');
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
		$this->Loan->id = $id;
		if (!$this->Loan->exists()) {
			throw new NotFoundException(__('Invalid loan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Loan->delete()) {
			$this->Session->setFlash(__('The loan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The loan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
