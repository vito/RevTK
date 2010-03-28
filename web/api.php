<?php
define('CORE_ROOT_DIR',    realpath(dirname(__FILE__).'/..'));
define('CORE_APP',         'api');
define('CORE_ENVIRONMENT', 'dev');
define('CORE_DEBUG',       true);

require_once(CORE_ROOT_DIR.'/apps/'.CORE_APP.'/config/config.php');
$configuration = new apiConfiguration(CORE_ENVIRONMENT, CORE_DEBUG, CORE_ROOT_DIR);
coreContext::createInstance($configuration);
coreContext::getInstance()->getController()->dispatch();
?>