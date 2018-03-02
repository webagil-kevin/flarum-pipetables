/* global $ */
/* global app */
import { extend } from 'flarum/extend'
import Post from 'flarum/components/Post'

app.initializers.add('DogSports-PipeTables', app => {
	extend(Post.prototype, 'config', function (original, isInitialized) {
		this.$('.Post-body table thead th').each(function () {
			this.$('.Post-body table tbody td:nth-child(' + ($(this).index() + 1) + ')').attr('data-th', $(this).html())
		})
	})
});