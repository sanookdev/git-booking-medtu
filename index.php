<?
    session_start();
    $_SESSION['user'] = 'ADMIN';
    $_SESSION['member_id'] = '1103000076902';
    $_SESSION['status_type'] = '1';


    if($_SESSION['user'] != ''){
        header('Location: ./dashboard.php');
    }

?>