const form = document.querySelector('.comment-form');
const nameField = document.querySelector('#name');
const commentField = document.querySelector('#comment');
const list = document.querySelector('.comment-container');


form.onsubmit = function(e) {
    e.preventDefault(); // Prevent form submission
    if (nameField.value.trim() === "" || commentField.value.trim() === "") {
        alert("Both Name and Comment are required!"); // Show alert if fields are empty
        return; // Stop submission if either field is empty
    }
    submitComment(); // Call the function to submit the comment
};

function submitComment() {
    const listItem = document.createElement('li');
    const namePara = document.createElement('p');
    const commentPara = document.createElement('p');

    const nameValue = nameField.value;
    const commentValue = commentField.value;

    namePara.textContent = nameValue;
    commentPara.textContent = commentValue;

    list.appendChild(listItem);
    listItem.appendChild(namePara);
    listItem.appendChild(commentPara);

    nameField.value = '';
    commentField.value = '';
}