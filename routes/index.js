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
        if (topic[0].username != undefined){
            response.redirect(`/?id=${post.username}`);
        }
    });
});

router.get('/signup', (request, response) => {
    response.render('signup', {});
});

router.post('/signup_process', (request, response) => {
    var post = request.body;
    db.query(`INSERT INTO user (username, password) VALUES(?, ?)`, [post.username, post.password], (err, topic) => {
        db.connect((err) => {
            var sql = `CREATE TABLE ${post.username}(
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(40),
                description TEXT,
                source VARCHAR(40)
            )`;
            db.query(sql, (err, result) => {}); // 이미 존재해도 상관없다.
            console.log(post.username + "Table Created!");
        });        
        response.redirect(`/login`);
    });
});

module.exports = router;