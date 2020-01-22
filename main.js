console.log('It works')

$(document).ready(function () {
    $('.submit').click(function (event) {
        console.log('Clicked button')

        var email = $('.email').val()
        var subject = $('.subject').val()
        var message = $('.message').val()
        var statusElm = $('.status')
        statusElm.empty()

        if(email.length > 5 && email.includes('@') && email.includes('.')) {
            statusElm.append('<div>Valid Email</div>')
        } else {
            event.preventDefault()
            statusElm.append('<div>Invalid Email</div>')
        }

        if(subject.length >= 2) {
            statusElm.append('<div>Valid subject</div>')
        } else {
            event.preventDefault()
            statusElm.append('<div>Invalid Subject</div>')
        }

        if(message.length >= 10) {
            statusElm.append('<div>Valid Message</div>')
        } else {
            event.preventDefault()
            statusElm.append('<div>Invalid Message</div>')
        }
    })
})