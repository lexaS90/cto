<?php

/**
 * The home manager controller for cto.
 *
 */
class ctoHomeManagerController extends ctoMainController {
	/* @var cto $cto */
	public $cto;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('cto');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->cto->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->cto->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->cto->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->cto->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->cto->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->cto->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->cto->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "cto-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->cto->config['templatesPath'] . 'home.tpl';
	}
}