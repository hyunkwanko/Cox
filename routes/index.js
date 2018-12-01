var express = require('express');
var router = express.Router();
var db = require('../lib/db');
var template = require('../lib/template');
var url = require('url');

router.get('/', (request, response) => {
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(`SELECT * FROM ${getURL}`, (err, topics) =>{        
        response.render('main', {
            list : topics,
            query : getURL
        });
    });
});

router.get('/login', (request, response) => {
    response.render('login', {});
});

router.post('/login_process', (request, response) => {
    var post = request.body;
    db.query(`SELECT * FROM user WHERE username=? AND password=?`, [post.username, post.password], (err, topic) => {
        if (topic[0].username != undefined){ // Registered
            response.redirect(`/?id=${post.username}`);
        }
    });
});

module.exports = router;