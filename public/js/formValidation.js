document.querySelector('#formular').addEventListener('submit', function(e) {
    var errors = [];

    const name = document.querySelector('#name') !== null ? document.querySelector('#name').value : null;
    const email = document.querySelector('#email') !== null ? document.querySelector('#email').value : null;
    const telefon = document.querySelector('#phone') !== null ? document.querySelector('#phone').value : null;
    const movie = document.querySelector('#movie') !== null ? document.querySelector('#movie').value : null;
    const ausleihStatus = document.querySelector('#ausleih_status') !== null ? document.querySelector('#ausleih_status').value : null;
    const memberStatus = document.querySelector('#member-status') !== null ? document.querySelector('#member-status').value : null;
    const endDate = document.querySelector('#enddate') !== null ? document.querySelector('#enddate').value : null;

    const dateRegex = '^\\s*((?:19|20)\\d{2})\\-(1[012]|0?[1-9])\\-(3[01]|[12][0-9]|0?[1-9])\\s*$';
    const phoneRegex = /[^a-zA-Z]/;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    const memberStats = [
        'Keine',
        'Bronze',
        'Silber',
        'Gold'
    ];

    console.log('begin');

    if (name === '') {
        errors.push('Bitte geben Sie einen Namen ein');
    }

    if (email === '') {
        errors.push('Bitte geben Sie eine Email ein');
    } else if (!email.match(emailRegex)) {
        errors.push('Bitte geben Sie eine gültige Email ein');
    }

    if (!telefon.match(phoneRegex) && telefon !== '') {
        errors.push('Bitte entfernen Sie die Buchstaben aus der Telefonnummer')
    }

    if (movie === '') {
        errors.push('Bitte wählen Sie einen Film aus');
    }

    if (ausleihStatus === 0 || ausleihStatus === 1) {
        errors.push('Bitte wählen Sie einen Status aus zwischen Ausgeliehen und Zurückgebracht');
    }

    if (memberStatus !== null) {
        if (memberStatus === '') {
            errors.push('Bitte wählen Sie einen Member-Status aus');
        } else if (memberStats.indexOf(memberStatus) === -1) {
        errors.push('Bitte wählen Sie einen gültigen Member-Status aus');
        }
    }

    if (endDate !== null) {
        if (endDate === '') {
            errors.push('Die Ausleihe braucht das ausgerechnete Enddatum');
        } else if (!endDate.match(dateRegex)) {
            errors.push('Das Rückgabedatum ist nicht gültig oder entspricht nicht dem erwarteten Format');
        }
    }

    var isValid = errors.length < 1;

    if ( ! isValid) {
        renderErrors(errors);
        e.preventDefault();
    }

});

function renderErrors(errors) {

    var errorList = document.querySelector('#errorList');

    // Bestehende Fehler entfernen
    errorList.innerHTML = '';

    errors.forEach(function(error) {
        var li = document.createElement('li');
        li.innerText = error;

        errorList.appendChild(li)
    });

    errorList.style.display = 'block';
}