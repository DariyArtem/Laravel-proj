
$(document).ready(function () {
    $('#submit').click(function () {
        let name = $('#inputName').val();
        let email = $('#inputEmail').val();
        let number = $('#inputNumber').val();
        let message = $('#inputMessage').val();
        let csrf_token = $('#csrf').attr('content')
        $.ajax({
            type: 'POST',
            url: '/message',
            data: {
                name: name,
                email: email,
                number: number,
                message: message,
                _token: csrf_token
            },
            success: function (response) {
                if (response.status === false) {
                    response.message.forEach(function (message) {
                        toastr.error(message);
                    })
                }
                if (response.status === true) {
                    toastr.success(response.message);
                    $('#inputName').val('')
                    $('#inputEmail').val('')
                    $('#inputNumber').val('')
                    $('#inputMessage').val('')
                }
            },
        })
    })
})
