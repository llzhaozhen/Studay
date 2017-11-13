var express = require('express');
var router = express.Router();
var URL = require('url');
//加载mysql模块
var mysql      = require('mysql');
//创建连接
var connection = mysql.createConnection({
host     : 'localhost',
user     : 'root',
password : '140701',
database : 'RUNOOB'
});
//执行创建连接
connection.connect();

var sql='DELETE FROM Expressdb WHERE id=?';


router.get('/', function(req, res, next) {
  res.charset = 'utf-8';
  var params = URL.parse(req.url, true).query;
    var addSqlParams = params.id;

    //删
  connection.query(sql,addSqlParams,function (err, result) {
      if(err){
       console.log('[deletesql ERROR] - ',err.message);
       return;
      }
      console.log("删除成功");
  });

});
module.exports = router;
