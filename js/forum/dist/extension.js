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
			app.initializers.add('DogSports-PipeTables', function (app) {
				extend(Post.prototype, 'config', function (original, isInitialized) {
					function addDataLabelsToTable(table) {
						let labels = [];
						for (let th of table.getElementsByTagName('th')) {
							labels.push(th.textContent);
						}
						for (let tr of table.getElementsByTagName('tr')) {
							let i = -1;
							for (let td of tr.getElementsByTagName('td')) {
								td.setAttribute('data-label', labels[++i] || '');
							}
						}
					}
					for (let table of document.getElementsByTagName('table')) {
						addDataLabelsToTable(table);
					}
				});
			});
		}
	};
});
