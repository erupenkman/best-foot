'use strict';
window.bestFootTheme = window.bestFootTheme ? {}
window.bestFootTheme.Collections = window.bestFootTheme.Collections ? {}

class window.bestFootTheme.Collections.PostCollection extends Backbone.Collection
	model: bestFootTheme.Models.PostModel
	
	url: '?json=1'
	
	parse: (response) ->
		response.posts