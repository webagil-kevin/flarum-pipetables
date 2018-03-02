'use strict';

System.register('DogSports/PipeTables/main', ['flarum/extend', 'flarum/components/Post'], function (_export, _context) {
	"use strict";

	var extend, Post;
	return {
		setters: [function (_flarumExtend) {
			extend = _flarumExtend.extend;
		}, function (_flarumComponentsPost) {
			Post = _flarumComponentsPost.default;
		}],
		execute: function () {
			/* global $ */
			/* global app */
			app.initializers.add('DogSports-PipeTables', function (app) {
				extend(Post.prototype, 'config', function (original, isInitialized) {
					$('.Post-body table thead th').each(function () {
						$('.Post-body table tbody td:nth-child(' + ($(this).index() + 1) + ')').attr('data-th', $(this).html());
					});
				});
			});
		}
	};
});