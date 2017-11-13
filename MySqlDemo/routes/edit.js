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


// var lookSql='select id,name,email,titile from ExpressDB where id=?';
// router.get('/', function(req, res, next) {
//     //解析请求参数
//     res.charset = 'utf-8';
//     var params = URL.parse(req.url, true).query;
//       var addSqlParams = [params.id];
//
//       //改
//       connection.query(lookSql,addSqlParams,function (err, result) {
//           if(err){
//             console.log('[SELECT ERROR] - ',err.message);
//             return;
//           }
//           console.log(params.id);
//
//           //把搜索值输出
//          res.render()
//
//       });

// });

var sql='UPDATE ExpressDB SET name=?,email=?,title=? WHERE id=?';
router.get('/', function(req, res, next) {

  var params = URL.parse(req.url, true).query;
      var addSqlParams = [params.id, params.name, params.email,params.title];

    //改
  connection.query(sql,addSqlParams,function (err, result) {
      if(err){
       console.log('[updatesql ERROR] - ',err.message);
       return;
      }
      res.charset = 'utf-8';
      console.log("修改成功");
  });
});

module.exports = router;
