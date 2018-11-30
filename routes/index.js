var express = require('express');
var router = express.Router();
var db = require('../lib/db');

router.get('/', (request, response) => {
    db.query(`SELECT * FROM topic`, (err, topics) =>{        
        response.render('main', {
            list : topics
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
            response.redirect(`/`); // main 페이지로 리디렉션
        }
        db.connect((err) => {
            var sql = `CREATE TABLE hyunkwan (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(40),
                description TEXT,
                author_id INT
            )`;
            db.query(sql, (err, result) => {}); // 이미 존재해도 상관없다.
            console.log("Table Created!");
        });
        response.redirect(`/?id=${post.username}`); // main 페이지로 리디렉션
    });
});

module.exports = router;