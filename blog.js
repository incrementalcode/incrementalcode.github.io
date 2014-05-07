var fs = require('fs');

exports.getCategories = function(cb) {
  fs.readdir('.', function(e, files) {
    // filter for directories only
  });
};

exports.getCategoryIndex = function(category, cb) {
  fs.readdir(category, function(e, files) {
    cb(e, files);
  });
};

exports.getIndex = function(cb) {
  exports.getCategories(function(e, categories) {
    var index = {};

    // TODO SYNC then callback
    categories.map(function(category) {
      exports.getCategoryIndex(category, function(e, posts) {
          index[category] = posts;
      });
    });
  });
};
