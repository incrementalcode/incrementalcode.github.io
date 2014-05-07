var express = require('express');
var app = express();
var blog = require('./blog');

app.listen(3000);

app.get('/', index);

app.get('/post/:post', post);

app.get('/:category', category);

app.get('/:category/:post', post);

function index(req, res) {
  res.render('index');
};

function category(req, res) {
  blog.getCategoryIndex(req.params.category, function(e, files) {
    if (e) console.log(e);
    files.forEach(function(file) {

    });

    res.send(files);
  });
};

function post(req, res) {
  res.render(req.params.category + '/'+ req.params.post);
};
