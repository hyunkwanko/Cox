var express = require('express');
var router = express.Router();
var path = require('path'); // 보안 적용
var db = require('../lib/db');
var template = require('../lib/template');
var url = require('url');

router.get('/create', (request, response) => {
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(`SELECT * FROM ${getURL}`, (err, topics) =>{
        response.render('create', {
            query : getURL
        });
    });
});

router.post('/create_process', (request, response) => { // post 방식
    var post = request.body; // POST로 받은 데이터를 미들웨어로 간결하게 받는다.
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(
        `INSERT INTO ${getURL} (title, description, source) VALUES(?, ?, ?)`,
        [post.title, post.description, "test"], (err, result) =>{
            if(err){
                throw err;
            }
            response.redirect(`/topic/${result.insertId}?id=${getURL}`);
        }
    );
});

router.get('/update/:pageId', (request, response) => {
    var filteredId = path.parse(request.params.pageId).base;
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(`SELECT * FROM ${getURL} WHERE id=?`, [filteredId], (err2, topic) => { // 보안 적용
        response.render('update', {
            list : topic,
            query : getURL
        });
    });
});

router.post('/update_process', (request, response) => { // post 방식
    var post = request.body; // 정보를 객체화
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(`UPDATE ${getURL} SET title=?, description=? WHERE id=?`, [post.title, post.description, post.id], (err, result) =>{
        response.redirect(`/topic/${post.id}?id=${getURL}`); // redirection, 생성된 id를 찾는 약속
    });
});

router.post('/delete_process', (request, response) => { // post 방식
    var post = request.body; // 정보를 객체화
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(`DELETE FROM ${getURL} WHERE id=?`, [post.id], (err, result) => {
        if (err){
            throw err;
        }
        response.redirect(`/?id=${getURL}`);
    });
});

router.get('/:pageId', (request, response) => { // 상세 보기 (Main)
    var filteredId = path.parse(request.params.pageId).base; // 보안 적용 -> 경로가 차단됨. 예를 들어 ../
    var getURL = url.parse(request.url, true);
    getURL = template.getURL(getURL);
    db.query(`SELECT * FROM ${getURL} WHERE id = ?`,[filteredId], (err, list) =>{
        // console.log(topics[0]); // topic은 배열로써 들어오기 때문에 이런 형식이다.
        response.render(`content`, {
            list : list,
            id : filteredId,
            query : getURL
        });
    });
});

module.exports = router;