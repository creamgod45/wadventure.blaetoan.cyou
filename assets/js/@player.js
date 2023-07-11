function f0(e, f, g) {
    const object = document.querySelector(e);
    const playername = object.value;

    $.ajax({
        url: '/api/player.php',
        type: 'POST',
        dataType: "json",
        data: {
            a: playername,
            b: f
        },
        success: function (response) {
            if (response['error'] !== undefined) {
                $('#error_message').text(response['error']);
            }
            if (response['b'] !== undefined && response['b'] !== "") {
                b = response['b'];
                $('#error_message').text("冷卻時間約 10 秒。");
            }
            console.log(response);
        },
        error: function (xhr, status, error) {
            // 請求失敗時的處理
            console.log(error);
        }
    });
}