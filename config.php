<?php
declare(strict_types=1);
define('DB_HOST','localhost'); define('DB_NAME','nexora_db'); define('DB_USER','root'); define('DB_PASS','');
if(session_status()===PHP_SESSION_NONE) session_start();
function db():PDO{static $p=null;if($p)return $p;$p=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>false]);return $p;}
function e($s):string{return htmlspecialchars((string)$s,ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8');}
function auth():void{if(empty($_SESSION['user_id'])){header('Location: login.php');exit;}}
function token():string{if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf'];}
function check_token():void{if(!hash_equals(token(),(string)($_POST['csrf']??''))){http_response_code(419);exit('Session expired. Refresh and try again.');}}
function flash(string $m,string $type='success'):void{$_SESSION['flash']=[$m,$type];}
function show_flash():void{if(isset($_SESSION['flash'])){[$m,$t]=$_SESSION['flash'];echo '<div class="notice '.e($t).'">'.e($m).'</div>';unset($_SESSION['flash']);}}
