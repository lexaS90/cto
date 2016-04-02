<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var cto $cto */
$cto = $modx->getService('cto', 'cto', $modx->getOption('cto_core_path', null, $modx->getOption('core_path') . 'components/cto/') . 'model/cto/');
$modx->lexicon->load('cto:default');

// handle request
$corePath = $modx->getOption('cto_core_path', null, $modx->getOption('core_path') . 'components/cto/');
$path = $modx->getOption('processorsPath', $cto->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));