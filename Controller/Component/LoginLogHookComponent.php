<?php
class LoginLogHookComponent extends Component {
	public function after_login($session) {
		$LoginLog = ClassRegistry::init('LoginLog.LoginLog');
		$insert = array(
			'LoginLog' => array(
				'user_id' => $session['id'],
				'username' => $session['username'],
				'name' => $session['name'],
				'time' => time(),
				'ip' => env('REMOTE_ADDR'),
				'data' => env('HTTP_USER_AGENT')
			)
		);

		$LoginLog->save($insert);
	}
}