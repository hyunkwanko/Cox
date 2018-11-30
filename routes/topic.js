var express = require('express');
var router = express.Router();
var path = require('path'); // 보안 적용
var db = require('../lib/db');
var url = require('url');

router.get('/create', (request, response) => {
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(`SELECT * FROM ${query_id}`, (err, topics) =>{
        response.render('create', {
            query : query_id
        });
    });
});

router.post('/create_process', (request, response) => { // post 방식
    var post = request.body; // POST로 받은 데이터를 미들웨어로 간결하게 받는다.
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(
        `INSERT INTO ${query_id} (title, description, source) VALUES(?, ?, ?)`,
        [post.title, post.description, "test"], (err, result) =>{
            if(err){
                throw err;
            }
            response.redirect(`/topic/${result.insertId}?id=${query_id}`); // redirection, 생성된 id를 찾는 약속
        }
    );
});

router.get('/update/:pageId', (request, response) => {
    var filteredId = path.parse(request.params.pageId).base;
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(`SELECT * FROM ${query_id} WHERE id=?`, [filteredId], (err2, topic) => { // 보안 적용
        response.render('update', {
            list : topic,
            query : query_id
        });
    });
});

router.post('/update_process', (request, response) => { // post 방식
    var post = request.body; // 정보를 객체화
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(`UPDATE ${query_id} SET title=?, description=? WHERE id=?`, [post.title, post.description, post.id], (err, result) =>{
        response.redirect(`/topic/${post.id}?id=${query_id}`); // redirection, 생성된 id를 찾는 약속
    });
});

router.post('/delete_process', (request, response) => { // post 방식
    var post = request.body; // 정보를 객체화
    var get_url = url.parse(request.url, true);
    var query_id = "topic"; // default
    if (get_url.query.id != undefined){
        query_id = get_url.query.id;
        // console.log(query_id);
    }
    db.query(`DELETE FROM ${query_id} WHERE id=?`, [post.id], (err, result) => {
        if (err){
            throw err;
        }
        response.redirect(`/?id=${query_id}`);
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
            id : filteredId,
            query : query_id
        });
    });
});

module.exports = router;