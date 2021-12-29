const trs = document.querySelectorAll('#clients tr');

function filter() {
    let value = document.getElementById("searchInput").value.toUpperCase();
    console.log(trs);

    trs.forEach(function(tr){
        console.log(tr);
        const tds = tr.querySelectorAll('td')
        console.log(tds);

        let trobat = false;

        tds.forEach(function (td) {
            console.log(td.textContent.toUpperCase().includes(value));
            console.log(td.textContent);

            if (td.textContent.toUpperCase().includes(value)){
                trobat = true;
            }

        });

        // trobat ????

        if (trobat === false){
            tr.classList.add('hidden');
            //tr.style.display = "none";
        }else {
            tr.classList.remove('hidden');
            //tr.style.display = "block";
            //tr.style.width = "100%";
        }

    });
}
document.getElementById("searchInput").addEventListener("keyup", filter);