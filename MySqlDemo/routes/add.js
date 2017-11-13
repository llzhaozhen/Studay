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
//SQL语句
var  sql = 'SELECT * FROM ExpressDB';
var  addSql = 'INSERT INTO ExpressDB(id,name,email,title) VALUES(?,?,?,?)';
// var  updateSql='UPDATE ExpressDB set id=?,name=?,email=?,title=? WHERE id=?';
var  deleteSql='DELETE ExpressDB WHERE id=?';

router.get('/', function(req, res, next) {
    //解析请求参数
    res.charset = 'utf-8';
    var params = URL.parse(req.url, true).query;
      var addSqlParams = [params.id, params.name, params.email,params.title];

      //增
    connection.query(addSql,addSqlParams,function (err, result) {
        if(err){
         console.log('[INSERT ERROR] - ',err.message);
         return;
        }
    });

    //查
    connection.query(sql,function (err, result) {
        if(err){
          console.log('[SELECT ERROR] - ',err.message);
          return;
        }
        console.log(params.id);

        //把搜索值输出
       res.send(result);

    });
});

module.exports = router;
