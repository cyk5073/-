<?
// 1. 공통 인클루드 파일
include ("./include.php");

// 2. 모든 세션값을 빈값으로 
$_SESSION[user_idx] = "";
$_SESSION[user_id] = "";
$_SESSION[user_name] = "";

?>
<script>//
    alert("로그아웃이 되어습니다.");
    location.replace("board_login.php");
</script>