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
// 3. 입력 HTML 출력
?>
<br/>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" style="font-zise:15px;font-weight:bold;">글쓰기</td>
    </tr>
</table>
<br/>
<form name="bWriteForm" method="post" action="./board_write_save.php" style="margin:0px;">
    <table style="width:1000px;height:50px;border:0px;">
        <tr>
            <td align="center" valign="middle" style="width:200px;height:50px;background-color:#CCCCCC;">글제목</td>
            <td align="left" valign="middle" style="width:800px;height:50px;"><input type="text" name="b_title" style="width:780px;"></td>
        </tr>
</form>
        <tr>
            <td align="center" valign="middle" style="width:50px;height:50px;background-color:#CCCCCC;">파일 업로드</td>
            <td>
                <form enctype="multipart/form-data" action="1.php" method="POST" target = "_blank">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="userfile" type="file"  />
                    <input type="submit" value="UpLoad"/>
                </form>
            </td>
        </tr>
        <tr>
            <td align="center" valign="middle" style="width:200px;height:200px;background-color:#CCCCCC;">글내용</td>
            <td align="left" valign="middle" style="width:800px;height:200px;">
                <textarea name="b_contents" style="width:800px;height:200px;"></textarea>
            </td>
        </tr>
        <!-- 4. 글쓰기 버튼 클릭시 입력필드 검사 함수 write_save 실행 -->
        <tr>
            <td align="center" valign="middle" colspan="2"><input type="button" value=" 글쓰기 " onClick="write_save();"></td>
        </tr>
    </table>

<script>//
    // 5.입력필드 검사함수
    function write_save()
    {
        // 6.form 을 f 에 지정
        var f = document.bWriteForm;

        // 7.입력폼 검사

        if(f.b_title.value == ""){
            alert("글제목을 입력해 주세요.");
            return false;
        }

        if(f.b_contents.value == ""){
            alert("글내용을 입력해 주세요.");
            return false;
        }

        // 8.검사가 성공이면 form 을 submit 한다
        f.submit();

    }
</script>