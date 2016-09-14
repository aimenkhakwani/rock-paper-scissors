$(function() {
    $('.btn_player1').click(function() {
        $('#input_player1').val($(this).text());
        $('#hide1').fadeIn();
    });

    $('.btn_player2').click(function() {
        $('#input_player2').val($(this).text());
        $('#hide2').fadeIn();
    });
});
