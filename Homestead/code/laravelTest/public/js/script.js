// microCMS用にテスト

var myfunc = function(){
    // α1で使用した関数
    // $.getJSON("data.json" , function(data) {
    //   var
    //     ulObj = $("#demo"),
    //     len = data.length;
    //     document.getElementById("text1").innerHTML = data[0].name;

    //   for(var i = 0; i < len; i++) {
    //     ulObj.append($("<li>").attr({"id":data[i].id}).text(data[i].name));
    //   }
    // });

    // α3（α2踏襲版）
    let end = sample1.endpoint.value;
    let url = 'http://homestead.test/api/' + end;
    const name = document.getElementById('text1');
    //APIからJSONデータを取得する
    fetch(url,{
        method:"POST",
        headers:{
            "X-API-KEY": "def",
        },
    })
    .then((response) => {
        return response.json()　//ここでBodyからJSONを返す
    })
    .then((result) => {
        jsonTest(result);  //取得したJSONデータを関数に渡す
    })
    .catch((e) => {
        console.log(e);
        name.textContent = e;
    })

    //JSONデータを引数に受け取ってDOM操作を行う関数を作成
    function jsonTest(jsonObj){
        let json_data = JSON.stringify(jsonObj);
        name.textContent = json_data;
    }
}
