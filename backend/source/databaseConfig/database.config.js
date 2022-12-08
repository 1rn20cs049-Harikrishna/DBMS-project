const sequlize = require('sequelize');
module.exports = new sequlize('db','root','',{
  host:"localhost",
  dialect:"mysql"
});