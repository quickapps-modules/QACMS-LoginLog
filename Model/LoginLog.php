<?php
/**
 * LoginLog Model
 *
 * PHP version 5
 *
 * @package	 QuickApps.Module.LoginLog.Model
 * @version	 1.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 */
class LoginLog extends LoginLogAppModel {
	public $name = 'LoginLog';
	public $useTable = 'login_log';
	public $primaryKey = 'id';
}