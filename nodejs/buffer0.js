var buffer1=new Buffer('runoob');
var buffer2=new Buffer(3);
var result = buffer1.compare(buffer2);

if(result<0){
    console.log(buffer1+"在"+buffer2+"之前");
}else if(result==0){
  console.log(buffer1+"与"+buffer2+"相同");
}else{
  console.log(buffer1+"在"+buffer2+"之后");
}
//复制，buffer2的内容改变

buffer1.copy(buffer2);
console.log("buffer2是"+buffer2.toString()+"$$$$$"+buffer1.toString());

//缓冲区裁剪
 var buffer3=buffer1.slice(0,2);
 console.log("buffer2 是"+   buffer2.toString());

   //buffer长度
 console.log("buffer1的长度是："+buffer1.length);
