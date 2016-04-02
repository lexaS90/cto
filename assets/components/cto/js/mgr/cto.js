var cto = function (config) {
	config = config || {};
	cto.superclass.constructor.call(this, config);
};
Ext.extend(cto, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('cto', cto);

cto = new cto();