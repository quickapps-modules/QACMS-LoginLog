<?php
class LoginLogController extends LoginLogAppController {
	public function admin_index() {
		$this->redirect('/admin/login_log/logs');
	}
}