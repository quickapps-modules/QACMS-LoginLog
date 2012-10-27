<?php
class LogsController extends LoginLogAppController {
	public $uses = array('LoginLog.LoginLog');

	public function admin_index() {
		$paginationScope = array();

		if (isset($this->data['LoginLog']['filter']) || $this->Session->check('LoginLog.filter')) {
			if (isset($this->data['LoginLog']['filter']) && empty($this->data['LoginLog']['filter'])) {
				$this->Session->delete('LoginLog.filter');
			} else {
				$filter = isset($this->data['LoginLog']['filter']) ? $this->data['LoginLog']['filter'] : $this->Session->read('LoginLog.filter');

				foreach ($filter as $field => $value) {
					if ($value !== '') {
						$paginationScope[$field] = strpos($field, 'LIKE') !== false ? "%{$value}%" : $value;
					}
				}

				$this->Session->write('LoginLog.filter', $filter);
			}
		}

		$results = $this->paginate('LoginLog', $paginationScope);	

		$this->set('results', $results);
		$this->setCrumb(
			'/admin/user/',
			array(__d('login_log', 'Login Log'), '')
		);
		$this->title(__d('login_log', 'Login Log'));
	}
}