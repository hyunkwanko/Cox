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

module.exports = db;
