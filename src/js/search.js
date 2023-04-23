
console.log('search.js loaded');

document.getElementById('search_button').addEventListener('click', function (e) {
    console.log("search button clicked");
    e.preventDefault();
    var form = document.getElementById('form_menu');
    var formData = new FormData(form);
    console.log(formData);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'search.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send('formData=' + formData);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('results').innerHTML = xhr.responseText;
        }
    }
});