//récupère le boutton d'id search_button, ne redirige pas vers une autre page et envoye une requête à search.php
document.getElementById('search_button').addEventListener('click', function (e) {
    e.preventDefault();
    var search = document.getElementById('search').value;
    console.log(search);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'search.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send('search=' + search);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('results').innerHTML = xhr.responseText;
        }
    }
});