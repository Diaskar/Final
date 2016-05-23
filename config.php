$host='localhost'; // имя хоста
$database='baza'; // имя базы данных
$user='admin'; // заданное вами имя пользователя
$pswd='pasw'; // заданный вами пароль
// подключаемся к MySQL
$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");

define("db_prefix","pb_");

function sql($query) {
    $res=mysql_query ( $query );
    if(!$res)die("Запрос:\n".$query."\n");
    return $res;
}