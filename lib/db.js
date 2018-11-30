// var fs = require('fs');
// var get_password = fs.readFileSync('../../MyKey/password.js', 'utf8');
// var password = get_password.replace(/[\r\n]/g, '');

// var db = mysql.createConnection({
//   host     : '10.0.0.1',
//   port     : 3306,
//   user     : 'cjdshrwkd11',
//   password : '',
//   database : 'cjdshrwkd11',
// });

var mysql = require('mysql');

var db = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : '',
    database : 'everyolo'
});

module.exports = db;
