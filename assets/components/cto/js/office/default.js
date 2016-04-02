Ext.onReady(function() {
	cto.config.connector_url = OfficeConfig.actionUrl;

	var grid = new cto.panel.Home();
	grid.render('office-cto-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});