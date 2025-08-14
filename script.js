document.getElementById('appointmentForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche l'envoi par défaut du formulaire

    const formData = new FormData(this);

    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('confirmationMessage').classList.remove('hidden');
        document.getElementById('appointmentForm').reset();
    })
    .catch(error => console.error('Erreur :', error));
});