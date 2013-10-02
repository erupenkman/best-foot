bestFootTheme = window.bestFootTheme ? {}
bestFootTheme.init = ()->
	'use strict'
	postRouter = new bestFootTheme.Routers.PostRouter();
	Backbone.history.start();
	postCollection = new bestFootTheme.Collections.PostCollection();
	postCollection.fetch().then ->
		portfolioView = new bestFootTheme.Views.PortfolioView({
			collection: postCollection
		});
		portfolioView.render();
	$('#portfolio-masonry').imagesLoaded -> 
		console.log('hey');
		$('#portfoio-masonry').masonry(
			columnWidth: 1
			itemSelector: 'li'
		)
$ ->
	'use strict'
	bestFootTheme.init();
