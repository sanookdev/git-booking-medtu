<?
    session_start();
    $_SESSION['user'] = 'ADMIN';
    $_SESSION['member_id'] = '1103000076902';


    if($_SESSION['user'] != ''){
        header('Location: ./dashboard.php');
    }

?>