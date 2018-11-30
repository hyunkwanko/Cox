var express = require('express');
var router = express.Router();
var path = require('path'); // 보안 적용
var db = require('../lib/db');
var url = require('url');

router.get('/create', (request, response) => {
    db.query(`SELECT * FROM topic`, (err, topics) =>{
        response.render('create', {});
    });
});

router.post('/create_process', (request, response) => { // post 방식
    var post = request.body; // POST로 받은 데이터를 미들웨어로 간결하게 받는다.
    db.query(
        `INSERT INTO topic (title, description, created, author_id) VALUES(?, ?, NOW(), ?)`,
        [post.title, post.description, 1], (err, result) =>{
            if(err){
                throw err;
            }
            response.redirect(`/topic/${result.insertId}`); // redirection, 생성된 id를 찾는 약속
        }
    );
});

router.get('/update/:pageId', (request, response) => {
    var filteredId = path.parse(request.params.pageId).base;
    db.query(`SELECT * FROM topic WHERE id=?`, [filteredId], (err2, topic) => { // 보안 적용
        response.render('update', {
            list : topic
        });
    });
});

router.post('/update_process', (request, response) => { // post 방식
    var post = request.body; // 정보를 객체화
    db.query(`UPDATE topic SET title=?, description=?, author_id=? WHERE id=?`, [post.title, post.description, post.author, post.id], (err, result) =>{
        response.redirect(`/topic/${post.id}`); // redirection, 생성된 id를 찾는 약속

    });
});

router.post('/delete_process', (request, response) => { // post 방식
    var post = request.body; // 정보를 객체화
    db.query(`DELETE FROM topic WHERE id=?`, [post.id], (err, result) => {
        if (err){
            throw err;
        }
        response.redirect('/'); // redirection
    });
});

router.get('/:pageId', (request, response) => { // 상세 보기 (Main)
    var filteredId = path.parse(request.params.pageId).base; // 보안 적용 -> 경로가 차단됨. 예를 들어 ../
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(`SELECT * FROM ${query_id} WHERE id = ?`,[filteredId], (err, list) =>{
        // console.log(topics[0]); // topic은 배열로써 들어오기 때문에 이런 형식이다.
        response.render(`content`, {
            list : list,
            id : filteredId
        });
    });
});

module.exports = router;