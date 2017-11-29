<?php
$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;
echo "<br>";
?>
<?php 
	function myTest(){
		static $x=0;
		echo $x;
		$x++;
	}

	myTest();
	myTest();
	myTest();
	myTest();
	echo "<br>";

	function myBase($x){
		echo $x;
	}

	myBase(10);
 ?>
<?php 

	$txt1="学习php";
	$txt2="RUNOOB.com";
	$car=array("123456789","adsffa","7d7d7d7d");

	echo $txt1;
	echo "<br>";
	echo "在 $txt2 学习 PHP ";
	echo "<br>";
	echo "我车的品牌是 {$car[1]}";

 ?>	

<?php 
	$favcolor="red";
	switch ($favcolor) {
		case "red":
			echo "你喜欢的颜色是红色";
			break;
		case 'blue':
			echo "你喜欢的颜色是蓝色";
			break;
		default:
			echo "你到底喜欢什么色";
			break;
	}

	var_dump(intdiv(10,3));

	echo "<br>";


	$x=array("a"=>"red","b"=>"green");
	$y=array("c"=>"blue","d"=>"yellow");

	$z=$x+$y;

	var_dump($z);
	var_dump($x==$y);
	var_dump($x===$y);
	var_dump($x!=$y);

	echo "<br>";

	$cars=array("Volvo","BMW","Toyota");

	$length=count($cars);

	for ($i=0; $i < $length; $i++) { 
		echo($cars[$i]);
		echo("<br>");
	}


	// 超级全局变量$GLOBALS是php中的一个超级全局变量

	$x=25;
	$y=75;

	function  add(){

		$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	}

	add();
	echo($z);


	function writeName($fname){
		echo($fname) . " Refsnes . <br>";
	}

	echo "My name is ";
	writeName("jack");
	echo "My brother's name is ";
	writeName("hong");

	//计算两个数的和
	 function addSum($a,$b){
	    $count = $a + $b;
	    return $count;
	}

	    $m = 96;//数学成绩
	    $y = 99;//语文成绩
	    $sum = addSum($m,$y);
	    echo "总和" . $sum;
 ?>
