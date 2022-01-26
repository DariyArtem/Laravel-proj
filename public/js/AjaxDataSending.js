$(document).ready(function () {
    $('#submit').click(function () {
        let name = $('#inputName').val();
        let email = $('#inputEmail').val();
        let number = $('#inputNumber').val();
        let message = $('#inputMessage').val();
        let csrf_token = "{{csrf_token()}}"
        console.log(name);
        console.log(email)
        console.log(number)
        console.log(message)
        $.ajax({
            type: 'POST',
            url: '/message',
            data: {
                _token: csrf_token,
                name: name,
                email: email,
                number: number,
                message: message,
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
