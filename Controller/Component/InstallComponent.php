<?php
class InstallComponent extends Component {
	public function beforeInstall() {
		return true;
	}

	public function afterInstall() {
		$this->Installer->sql('CREATE TABLE IF NOT EXISTS `#__login_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` bigint(20) NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;');
		return true;
	}

	public function beforeUninstall() {
		return true;
	}

	public function afterUninstall() {
		return true;
	}
}