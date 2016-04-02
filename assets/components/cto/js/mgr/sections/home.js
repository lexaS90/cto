cto.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'cto-panel-home', renderTo: 'cto-panel-home-div'
		}]
	});
	cto.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(cto.page.Home, MODx.Component);
Ext.reg('cto-page-home', cto.page.Home);