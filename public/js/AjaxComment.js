$(document).ready(function () {
    $('#submit').click(function () {
        let name = $('#inputName').val();
        let email = $('#inputEmail').val();
        let number = $('#inputNumber').val();
        let message = $('#inputMessage').val();
        let post_id = $('#post_id').val();
        let user_id = $('#user_id').val();
        console.log(user_id)
        let csrf_token = $('#csrf').attr('content');
        $.ajax({
            type: 'POST',
            url: '/comment',
            data: {
                _token: csrf_token,
                name: name,
                email: email,
                number: number,
                message: message,
                post_id: post_id,
                user_id: user_id
            },
            success: function (response) {
                console.log(response.message)
                if (response.status === false) {
                    response.message.forEach(function (message) {
                        toastr.success(message);
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
