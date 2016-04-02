<?php

/**
 * Create an Item
 */
class ctoItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'ctoItem';
	public $classKey = 'ctoItem';
	public $languageTopics = array('cto');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('cto_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('cto_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'ctoItemCreateProcessor';