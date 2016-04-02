<?php

/**
 * Remove an Items
 */
class ctoItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'ctoItem';
	public $classKey = 'ctoItem';
	public $languageTopics = array('cto');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('cto_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var ctoItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('cto_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'ctoItemRemoveProcessor';