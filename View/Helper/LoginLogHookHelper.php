<?php
class LoginLogHookHelper extends AppHelper {
	public function menu_toolbar_alter(&$info) {
		if (QuickApps::is('view.admin') && in_array(($this->request->params['plugin']), array('user', 'login_log'))) {
			$info['links'][] = array(
				__d('login_log', 'Login Log'),
				'/admin/login_log/',
				'pattern' => '*login_log/*'
			);
		}
	}

/**
 * Toolbar menu for section: `Users`.
 *
 * @return void
 */
	public function beforeLayout($layoutFile) {
		if (QuickApps::is('view.admin') && strtolower($this->request->params['plugin']) == 'login_log') {
			$this->_View->Block->push(array('body' => $this->_View->element('User.toolbar') . '<!-- LoginLogHookHelper -->'), 'toolbar');
		}

		return true;
	}
}