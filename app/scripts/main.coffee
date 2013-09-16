window.yeoman =
	Models: {}
	Collections: {}
	Views: {}
	Routers: {}
	init: ->
		'use strict'
		$('#portfolio-masonry').imagesLoaded -> 
			console.log('hey')
			$('#portfoio-masonry').masonry(
				columnWidth: 1
				itemSelector: 'li'
			)
				

$ ->
	'use strict'
	yeoman.init();
