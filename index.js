function showSuccessMessage(message) {
    const successMsgContainer = document.createElement('div');
    successMsgContainer.className = 'submitmsg';
    successMsgContainer.textContent = message;
    document.querySelector('.container').appendChild(successMsgContainer);
}


function validateForm(event) {
    const name = document.getElementById('name').value;
    const age = document.getElementById('age').value;
    const ID = document.getElementById('ID').value;
    const phone = document.getElementById('Phone').value;
    const desc = document.getElementById('desc').value;


    if (!name || !age || !ID || !phone || !desc) {
        event.preventDefault();
        alert('Please fill out all fields.');




        return false;
    }

    if (isNaN(age) || age < 1 || age > 100) {
        event.preventDefault();
        alert('Please enter a valid age.');
        return false;
    }

    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
        event.preventDefault();
        alert('Please enter a valid phone number (10 digits).');
        return false;
    }

    return true;
}

document.querySelector('form').addEventListener('submit', function(event) {
    if (validateForm(event)) {
        setTimeout(() => {
            showSuccessMessage('Your form has been submitted successfully!');
        }, 500); 

        document.querySelector('form').reset();
    }
});
