
console.log('search.js loaded');

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