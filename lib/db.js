var mysql = require('mysql');

var db = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : '',
    database : 'everyolo'
});

/* Cafe24 Database */
// var db = mysql.createConnection({
//   host     : '10.0.0.1',
//   port     : 3306,
//   user     : 'cjdshrwkd11',
//   password : '',
//   database : 'cjdshrwkd11',
// });

db.connect((err) => {
    var sql = `CREATE TABLE topic(
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(40),
        description TEXT,
        source VARCHAR(40)
    )`;
    db.query(sql, (err, result) => {}); // 이미 존재해도 상관없다.
    console.log("Topic Table Created!");
});

module.exports = db;
