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
    var sql = `CREATE TABLE Topic(
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(40),
        description TEXT,
        source VARCHAR(40)
    )`;
    db.query(sql, (err, result) => {});

    sql = `CREATE TABLE User(
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(40),
        password VARCHAR(40)
    )`;

    db.query(sql, (err, result) => {});

    console.log("Topic, User Table Created!");
});

module.exports = db;
