cto.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'cto-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('cto_items'),
				layout: 'anchor',
				items: [{
					html: _('cto_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'cto-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	cto.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(cto.panel.Home, MODx.Panel);
Ext.reg('cto-panel-home', cto.panel.Home);
