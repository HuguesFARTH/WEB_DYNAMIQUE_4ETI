
console.log('search.js loaded');
function submit_search_form(){
    console.log("search form send");
    //récupérer toutes les input d'un formulaire
    var formData = {};
    formData['keywords'] = document.getElementById('keywords').value;
    var form = document.getElementById('meridien_form');
    var inputs = form.getElementsByTagName('input');
    formData['meridiens'] = [];
    for (var i = 0; i < inputs.length; i++) {
        if(inputs[i].checked){
            formData['meridiens'].push(inputs[i].value);
        }
    }
    var form = document.getElementById('category_form');
    var inputs = form.getElementsByTagName('input');
    formData['categories'] = [];
    for (var i = 0; i < inputs.length; i++) {
        if(inputs[i].checked){
            formData['categories'].push(inputs[i].value);
        }
    }
    var form = document.getElementById('caracteristique_form');
    var inputs = form.getElementsByTagName('input');
    formData['caracteristiques'] = [];
    for (var i = 0; i < inputs.length; i++) {
        if(inputs[i].checked){
            formData['caracteristiques'].push(inputs[i].value);
        }
    }
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
}
document.getElementById('search_button').addEventListener('click', function (e) {
    e.preventDefault();
    submit_search_form();
});
submit_search_form();

