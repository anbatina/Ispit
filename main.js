$(document).ready(function(){

    var inpRectangleA = $('#inp-rectangle-a')
    var inpRectangleB = $('#inp-rectangle-b')
    var valRectangleA = $('#val-rectangle-a')
    var valRectangleB = $('#val-rectangle-b')
    var ispisDijagonale = $('#dijagonala-pravokutnika')
    var ispisDijagonalePhp = $('#dijagonala-pravokutnika-php')
    valRectangleA.html(inpRectangleA.val())
    valRectangleB.html(inpRectangleB.val())
    $('.content > div').not('.active').hide()

    $('#inp-rectangle-a, #inp-rectangle-b').on('input', function() {
        var a = inpRectangleA.val()
        var b = inpRectangleB.val()
        valRectangleA.html(a)
        valRectangleB.html(b)
        var duljinaDijagonale = dijagonala(a, b)
        ispisDijagonale.html(duljinaDijagonale)
    })

    $('#clickToChange').on('click', function(){
        $(this).html('Ispit iz PA3')
    })

    var clock = $('#clock')
    setInterval(function() {
        var date = new Date()
        clock.html(
            date.getDate() + '.' +
            date.getMonth() + '.' +
            date.getFullYear() + ' ' +
            date.getHours() + ':' +
            date.getMinutes() + ':' +
            date.getSeconds()
        )
    }, 1000)

    $('#frm-dijagonala-php').on('submit', function(e) {
        e.preventDefault()
        $.ajax({
            url: 'funkcije.php',
            data: $(this).serialize(),
            success: function(response) {
                ispisDijagonalePhp.html(response)
            }
        })
    })
})

function otvoriStranicu(id) {
    $('.content > .active')
        .removeClass('active')
        .fadeOut(function() {
            $('#'+id).fadeIn().addClass('active')
        })
}

function dijagonala(a, b) {
    return Math.sqrt(a*a + b*b)
}

window.onbeforeunload = function (e) {
    // browseri već godinama ignoriraju ovu poruku
    // https://developers.google.com/web/updates/2016/04/chrome-51-deprecations?hl=en#remove_custom_messages_in_onbeforeunload_dialogs
    return "Gotov ispis it PA3";
};
