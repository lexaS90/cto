<?php

/**
 * Class ctoMainController
 */
abstract class ctoMainController extends modExtraManagerController {
	/** @var cto $cto */
	public $cto;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('cto_core_path', null, $this->modx->getOption('core_path') . 'components/cto/');
		require_once $corePath . 'model/cto/cto.class.php';

		$this->cto = new cto($this->modx);
		//$this->addCss($this->cto->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->cto->config['jsUrl'] . 'mgr/cto.js');
		$this->addHtml('
		<script type="text/javascript">
			cto.config = ' . $this->modx->toJSON($this->cto->config) . ';
			cto.config.connector_url = "' . $this->cto->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('cto:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends ctoMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}