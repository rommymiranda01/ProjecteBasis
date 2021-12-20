function filter() {
    let value = document.getElementById("searchInput").value.toUpperCase();
    var clients = document.getElementById("clients");
    var rows = clients.getElementsByTagName("tr");

    for (i = 0; i < rows.length; i++) {
        let column = rows[i].getElementsByTagName("td")[1];
        let language = column.textContent;

        rows[i].style.display =
            language.toUpperCase().indexOf(value) > -1 ? "" : "none";
    }
}

document.getElementById("searchInput").addEventListener("keyup", filter);