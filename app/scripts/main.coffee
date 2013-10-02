bestFootTheme = window.bestFootTheme ? {}
bestFootTheme.init = ()->
	'use strict'
	postRouter = new bestFootTheme.Routers.PostRouter();
	Backbone.history.start();
	postCollection = new bestFootTheme.Collections.PostCollection();
	postCollection.fetch().then ->
		console.log(postCollection);
	$('#portfolio-masonry').imagesLoaded -> 
		console.log('hey');
		$('#portfoio-masonry').masonry(
			columnWidth: 1
			itemSelector: 'li'
		)
$ ->
	'use strict'
	bestFootTheme.init();
