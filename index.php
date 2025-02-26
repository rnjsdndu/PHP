<?php

class DB{
	static $db = null;
	static function getDB(){
		if(!self::$db ){
			$connection = new PDO("mysql:host=localhost;dbname=sdhs-posts;charset=utf8mb4","root","");
			$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			self::$db = $connection;
		}
		return self::$db;
	}
	static function exec($query){
		try{
			self::getDB()->exec($query);
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	static function fetch($query){
		$stmt = self::getDB()->query($query);
		return $stmt->fetch();
	}
	static function fetchAll($query){
		$stmt = self::getDB()->query($query);
		return $stmt->fetchAll();
	}
}
$users = DB::fetchAll('select * from users');
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form action="create.php" method = "post" class="flexBox">
			<input type="text" name = "title" placeholder = "제목을 입력하세요">
			
			<textarea name="content" placeholder="내용을 입력하세요"></textarea>
	
			<button>submit</button>
		</form>
		<form action="delete.php" method = "post">
			<button>delete</button>
		</form>
		<ul>
    		<?php foreach($users as $key => $value): ?>
		        <li class="flex">
					<p><?=htmlspecialchars($value->id)?>.</p>
		            <a href="content.php?id=<?=htmlspecialchars($value->id)?>&title=<?=htmlspecialchars($value->title)?>&content=<?=htmlspecialchars($value->content)?>">
		                <?= htmlspecialchars($value->title) ?>
		            </a>
		        </li>
		    <?php endforeach ?>
		</ul>

	</div>

</body>
</html>