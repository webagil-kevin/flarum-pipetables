var flarum = require('flarum-gulp');

flarum({
  modules: {
    'DogSports/PipeTables': [
      'src/**/*.js'
    ]
  }
});