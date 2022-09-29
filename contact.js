const form = document.getElementById('form');
const errorContainer = document.getElementById('errors');

let errors = [];

form.addEventListener('submit', (event) => {
    event.preventDefault();
    errors = [];

    const f = Object.values(form);

    for (const input of f) {
        console.log(
            `%cInput %c${input.id || '[other]'} %chas value %c${input.value}`, 
            'color: #fff', 
            'color: #0f0', 
            'color: #fff', 
            'color: #0f0');

        input.classList.remove('error');

        let error = null;

        switch (input.id) {
            case 'email':
                error = validateEmail(input.value);
                break;
            case 'name':
                error = validateName(input.value);
                break;
            case 'body':
                error = validateBody(input.value);
                break;
            case 'agree':
                error = validateAgreement(input.checked);
                break;
            default: 
                break;
        }

        if (error !== null) {
            input.classList.add('error');
            const el = document.createElement('span');
            el.innerText = error;
            el.classList.add('error');
            input.after(el);
        }
    }

    console.log(errors);

    for (const e of errors) {
        const item = document.createElement('li');
        item.innerText = e;
        errorContainer.appendChild(item);
    }

    if (errors.length <= 0) {
        form.submit();
    } else {
        errorContainer.classList.add('active');
    }
});


function validateEmail(email) {
    const hasAt = email.includes('@');
    const hasDot = email.includes('.');
    const count = email.split(/\@|\./).length;

    const isValid = hasDot && hasAt && (count >= 3);

    if (!isValid) {
        errors.push('The email is incorrect');
        return 'The email is incorrect';
    }

    return null;
}

function validateName(name) {
    const isNotEmpty = name.length > 0;
    const isCapitalized = /[A-Z][a-zA-Z\-]+/.test(name);
    
    const isValid = isNotEmpty && isCapitalized;

    if(!isValid) {
        errors.push('Name is incorrect');
        return 'Name is incorrect';
    }

    return null;
}

function validateBody(body) {
    const isMinLength = body.length > 50;
    const isMaxLength = body.length < 2000;

    const isValid = isMinLength && isMaxLength;

    if(!isValid) {
        errors.push('Body must be between 50 and 200 chars');
        return 'Body must be between 50 and 200 chars';
    }

    return null;
}

function validateAgreement(agreement) {
    if(!agreement) {
        errors.push('You must agree!');
        return 'You must agree!';
    }

    return null;
}