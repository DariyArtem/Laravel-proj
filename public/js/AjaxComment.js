$(document).ready(function () {
    $('#submit').click(function () {
        let name = $('#inputName').val();
        let email = $('#inputEmail').val();
        let number = $('#inputNumber').val();
        let message = $('#inputMessage').val();
        let csrf_token = $('#csrf').attr('content');
        let post_id = $('#post_id').val();
        $.ajax({
            type: 'POST',
            url: '/comment',
            data: {
                _token: csrf_token,
                name: name,
                email: email,
                number: number,
                message: message,
                post_id: post_id
            },
            success: function (response) {
                if (response.status === 500) {
                    response.message.forEach(function (message) {
                        toastr.error(message);
                    })
                }
                if (response.status === 200) {
                    response.message.forEach(function (message) {
                        toastr.success(message);
                    })
                    $('#inputName').val('')
                    $('#inputEmail').val('')
                    $('#inputNumber').val('')
                    $('#inputMessage').val('')
                }
            },
        })
    })
})
