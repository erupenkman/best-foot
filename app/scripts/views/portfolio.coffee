'use strict';
window.bestFootTheme = window.bestFootTheme ? {}
window.bestFootTheme.Views = window.bestFootTheme.Views ? {}
class window.bestFootTheme.Views.PortfolioView extends Backbone.View
	el: $('#portfoio-list'),
	render: ->
		$(this.el).html(Mustache.to_html($('#portfolio-entry').html(), this.collection.toJSON()));
