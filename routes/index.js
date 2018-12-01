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

router.get('/signup', (request, response) => {
    response.render('signup', {});
});

router.post('/signup_process', (request, response) => {
    var post = request.body;
    db.query(`SELECT * FROM user WHERE username=?`, [post.username], (err, topic) => {
        if (!err) { // Already Exist
            response.send(`
                <script type="text/javascript">
                    alert("이미 존재하는 아이디");	
                    window.location.href = '/signup';
                </script>
            `);
            return;
        } else {
            db.query(`INSERT INTO user (username, password) VALUES(?, ?)`, [post.username, post.password], (err, topic) => {
                db.connect((err) => {
                    var sql = `CREATE TABLE ${post.username}(
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        title VARCHAR(40),
                        description TEXT,
                        source VARCHAR(40)
                    )`;
                    db.query(sql, (err, result) => {});
                    console.log(post.username + "Table Created!");
                });        
                response.redirect(`/login`);
            });
        }
    });
});

module.exports = router;