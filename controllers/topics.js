//ajaxでDBからリスト生成
//DB:topic_idで一意
$(function() {
    createTopicList();
});

function createTopicList(){
    $.ajax({
        type: "GET",
        url: '/models/topic.php',
        dataType: json,
        //成功時の処理、取得dataを受け取る
        success: function(data) {
            const contents = data;
            //画面上に表示するデータを格納
            const $topicList = $('#topicList');
            //一覧クリア
            $('.topicList').empty();
            //拡張for文でデータを回収
            $html = "";
            for(const row of contents) {
                //topicIdを付与
                $html += "<div id=topicId" + row["topic_id"] + ">" + row["topic"] + "</div>";
            }
            $('.topicList').append($html);
        }
    });
}

function selectTopic() {
    //自分で作ったタグの要素名を捕まえる
    $('.topics).attr("topicId"
    });
}
