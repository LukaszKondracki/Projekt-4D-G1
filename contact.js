const form = document.getElementById('form');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const f = Object.values(form);

    for (const input of f) {
        console.log(
            `%cInput %c${input.id || '[other]'} %chas value %c${input.value}`, 
            'color: #fff', 
            'color: #0f0', 
            'color: #fff', 
            'color: #0f0');

        switch (input.id) {
            case 'email':
                // walidacja emaila
                break;
            case 'name':
                // walidacja imienia
                break;
            case 'body':
                // walidacja tekstu
                break;
            case 'agree':
                // walidacja zgody
                break;
            default: 
                break;
        }

    }

    // form.submit();
});