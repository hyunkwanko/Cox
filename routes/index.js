var express = require('express');
var router = express.Router();
var db = require('../lib/db');
var url = require('url');

router.get('/', (request, response) => {
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(`SELECT * FROM ${query_id}`, (err, topics) =>{        
        response.render('main', {
            list : topics,
            query : query_id
        });
    });
});

router.get('/login', (request, response) => {
    response.render('login', {});
});

router.post('/login_process', (request, response) => {
    var post = request.body;
    db.query(`SELECT * FROM user WHERE username=? AND password=?`, [post.username, post.password], (err, topic) => {
        if (err){ // 등록이 안되어있다면
            response.redirect(`/`);
        }
        db.connect((err) => {
            var sql = `CREATE TABLE ${post.username} (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(40),
                description TEXT,
                source VARCHAR(40)
            )`;
            db.query(sql, (err, result) => {}); // 이미 존재해도 상관없다.
            console.log("Table Created!");
        });
        response.redirect(`/?id=${post.username}`);
    });
});

module.exports = router;