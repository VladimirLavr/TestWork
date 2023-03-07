$(document).ready(function () {

    $('form').submit(function (e) {
        e.preventDefault()
        let myForm = $(this);
        let mess = $('.alert');


        $.ajax({
            url: "/serv.php",
            type: "post",
            dataType: "html",
            data: myForm.serialize(),
            success: function (data) {

                if (data == 1) {
                    mess.html('<div class="alertError">Невірно вказані данні</div>')
                } else {
                    myForm.addClass('hideForm')
                    mess.html('<div class="alertSuccses">Ви успішно пройшли реєстрацію</div>')
                }

            }, error: function () {
                console.log('Помилка відправки')
            }
        })
    })
})

