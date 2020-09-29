function check(){
    const userName = document.getElementById("userName");
    const pass = document.getElementById("pass");
    if(userName.value == "" || pass.value == ""){
        alert("IDとパスワードを入力してください");
        return false;   //送信ボタンの動作キャンセル
    } else {
        return true;
    }
}
