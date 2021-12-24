const trs = document.querySelectorAll('#clients tr');

function filter() {
    let value = document.getElementById("searchInput").value.toUpperCase();
    console.log(trs);

    trs.forEach(function(tr){
        console.log(tr);
        // tr.addEventListener("keyup", filter);
        const tds = tr.querySelectorAll('td')
        console.log(tds);

        tds.forEach(function (td) {
            console.log(td.textContent.toUpperCase().includes(value));
            console.log(td.textContent);
        })
    });

    // let value = document.getElementById("searchInput").value.toUpperCase();
    // var clients = document.getElementById("clients");
    // var rows = clients.getElementsByTagName("tr");
    //
    // for (i = 0; i < rows.length; i++) {
    //     let column = rows[i].getElementsByTagName("td")[1];
    //     let language = column.textContent;
    //
    //     rows[i].style.display =
    //         language.toUpperCase().indexOf(value) > -1 ? "" : "none";
    // }
}

document.getElementById("searchInput").addEventListener("keyup", filter);