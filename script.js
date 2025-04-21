document.getElementById('nameForm').addEventListener('submit',function(event) {
    const nameInput = document.getElementById('name').value;
    if (nameInput.trim() === '') 
    {
        event.preventDefault();
        alert('Please enter a valid name!');
    }
});
