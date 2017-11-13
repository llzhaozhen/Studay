var UserSQL = {
                insertall:'INSERT INTO ExpressDB (id,name) VALUES(?,?)',
                queryAll:'SELECT * FROM ExpressDB',
                getUserById:'SELECT * FROM ExpressDB WHERE id = ? ',
              };
 module.exports = UserSQL;
