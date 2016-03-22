<html>
<body>
<?
// 1. 공통 인클루드 파일
include ("./include.php");
// 2. 로그인 안한 회원은 로그인 페이지로 보내기
if(!$_SESSION[user_id]){
    ?>
    <script>
        alert("로그인 하셔야 합니다.");
        location.replace("board_login.php");
    </script>
    <?
}

// 3. 넘어온 변수 검사
if(trim($_POST[b_title]) == ""){
    ?>
    <script>
        alert("글제목을 입력해 주세요.");
        history.back();
    </script>
    <?
    exit;
}

if(trim($_POST[b_contents]) == ""){
    ?>
    <script>
        alert("글내용을 입력해 주세요.");
        history.back();
    </script>
    <?
    exit;
}

if(true)
{
    $_SESSION[b_num]=$_SESSION[b_num]+1;
}

$day=date("Y-m-d A h:i:s");
// 4. 글저장
$sql = "insert into tb_board set b_num = '".$_SESSION[b_num]."', m_id = '".$_SESSION[user_id]."', m_name = '".$_SESSION[user_name]."', b_title = '".addslashes(htmlspecialchars($_POST[b_title]))."', b_contents = '".addslashes(htmlspecialchars($_POST[b_contents]))."', b_regdate = '".$day."'";
sql_query($sql);
// 7. 글목록 페이지로 보내기
?>


</body>
</html>
<script>
    alert("글이 저장 되었습니다.");
    location.replace("./board_list.php");
</script>
