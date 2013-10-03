'use strict';
window.bestFootTheme = window.bestFootTheme ? {}
window.bestFootTheme.Models = bestFootTheme.Models ? {}
class window.bestFootTheme.Models.PostModel extends Backbone.Model
	toJSON: ->
		attachments = this.get('attachments');
		thumbnail = attachments && attachments[0] && attachments[0].images && attachments[0].images.thumbnail || {}
		_.extend(this.attributes, 
			thumbnail : thumbnail
		);