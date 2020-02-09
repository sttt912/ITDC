<?

include("inc/head.php");

// Соединямся с БД
include("inc/conect.php");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);
        print "Привіт, <b>".$userdata['user_login']."</b> <br/> <b>Ваше імя в системі:</b> ".$userdata['user_name']."<br/><b>Ваше прізвище з системі:</b>".$userdata['user_surname']."<br/><b>Ви працюєте на віділенні:</b>".$userdata['user_station']."";
    }else{
    print "Неудача";
}

include("inc/foot.php");
?>