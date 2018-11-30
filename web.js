var express = require('express');
var app = express();
var fs = require('fs');
var bodyParser = require('body-parser');
var compression = require('compression');
var indexRouter = require('./routes');
var topicRouter = require('./routes/topic');
var helmet = require('helmet'); // Security
var path = require('path'); // Security

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(helmet());
app.use(express.static('public')); // public 디렉토리 안에서 static 파일을 찾는다.
app.use(express.static('views')); // views 디렉토리 안에서 static 파일을 찾는다.
app.use(bodyParser.urlencoded({ extended: false })); // 미들웨어 사용
app.use(compression()); // 미들웨어 사용 - contents를 압축한다. -> command + shift + R키로 새로고침해서 확인

app.use('/', indexRouter); // /으로 시작하는 주소에 topicRouter 미들웨어를 수행
app.use('/topic', topicRouter); // /topic으로 시작하는 주소에 topicRouter 미들웨어를 수행

app.use((request, response, next) => { // 예 : /asdf 입력하면 못찾아서 에러 메시지 수행
    response.status(404).send('404 Not found');
});

app.use((err, request, response, next) => { // 예 : /page/CSS1 하면 없는 파일
    console.error(err.stack);
    response.status(500).send('Something broke!');
});

app.listen(8001, () => {
    console.log('Port 8001: Success!');
});