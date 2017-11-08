//EventEmitter类,events模块只提供了一个对象，events.EventEmitter  EventEmitter的核心
//就是事件触发与事件监听功能的封装

var EventEmitter = require('events').EventEmitter;
var event=new EventEmitter();
  event.on('some_event',function(){
  console.log('some_event 事件触发');
});
setTimeout(function(){
event.emit('some_event');
},100);
