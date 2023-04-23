
console.log('search.js loaded');

document.getElementById('search_button').addEventListener('click', function (e) {
    console.log("search button clicked");
    e.preventDefault();
    //récupérer toutes les input d'un formulaire
    var form = document.getElementById('form_menu');
    var inputs = form.getElementsByTagName('input');
    console.log(inputs);
    var formData = {};
    for (var i = 0; i < inputs.length; i++) {
        formData[inputs[i].id] = inputs[i].value;
    }
    console.log(form);
    console.log(formData);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'search.php', true);
    //send json formData
    xhr.setRequestHeader("Content-Type", "application/json");
 

    xhr.send(JSON.stringify(formData));
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('result_page').innerHTML = xhr.responseText;
        }
    }
});