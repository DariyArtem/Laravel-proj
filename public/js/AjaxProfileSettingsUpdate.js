$(document).ready(function () {
    $('#submit').click(function () {
        let name = $('#inputFirstName').val();
        let surname = $('#inputLastName').val();
        let phone = $('#inputNumber').val();
        let country = $('#inputCountry').val();
        let region = $('#inputRegion').val();
        let city = $('#inputCity').val();
        let about = $('#inputContent').val();
        let picture = $('#inputImage').val();
        let csrf_token = $('#csrf').attr('content');
        $.ajax({
            type: 'POST',
            url: '/user/settings',
            data: {
                _token: csrf_token,
                name: name,
                surname: surname,
                phone: phone,
                country: country,
                region: region,
                city: city,
                about: about,
                picture: picture
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
                }
            },
        })
    })
})
