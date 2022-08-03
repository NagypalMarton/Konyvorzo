let WriterAuthor = []

function getData() {
    let randomID
    try {
        randomID = Math.floor(Math.random() * 999999)
    } catch (error) {
        randomID = Math.floor(Math.random() * 4)
    }
    let fetchInit = {
        method: "GET",
        headers: new Headers(),
        mode: "cors",
        cache: "default"
    };
    fetch(`https://moly.hu/api/book_citations/${randomID}.json?key=4f7679f7ec5f95a5c7f08da35c79df1b`, fetchInit).then(
        data => data.json(),
        err => {
            alert(err)
            console.log(randomID)
        }
    ).then(
        idezet => {
            let idezetHelye = document.querySelector('#idezet')
            let idezetKiv = idezet["citations"][Math.floor(Math.random() * idezet["citations"].length)]//Randomszám generátoros
            idezetHelye.innerHTML = idezetKiv["citation"] + `\r\n`
            let idezetURL = document.createElement("a")
            idezetURL.href = idezetKiv["url"]
            idezetURL.innerHTML = "Forrás: Moly.hu"
            idezetHelye.appendChild(idezetURL)
        }
    )
}
getData()

function searchBtn(schBtn) {
    let searchText = schBtn.parentElement.firstElementChild.value
    getSearchData(searchText)
}

function konyvSzerzoKeres(konyvKeresBtn) {
    let keresendoSzoveg = konyvKeresBtn.parentElement.firstElementChild.firstElementChild.lastElementChild.value
    getSearchData(keresendoSzoveg)
}
function getSearchData(searchText) {
    let keresendoSzoveg = searchText
    let fetchInit = {
        method: "GET", //CRUD => Create(POST) Read(GET) Update(PUT) Delete(DELETE)
        headers: new Headers(),
        mode: "cors",
        cache: "default"
    }; fetch(`https://moly.hu/api/books.json?q=${keresendoSzoveg}&key=4f7679f7ec5f95a5c7f08da35c79df1b`, fetchInit).then(
        data => data.json(),
        err => alert(err)
    ).then(
        WriterAuthor => {
            createTableCheckedWriterAuthor(WriterAuthor['books'])//addEventListener-rel nem kellene megcsinálni?
        }
    );
}
function createTableCheckedWriterAuthor(WriterAuthor) {
    let table = document.querySelector('#CheckedWriterAuthor')

    //Korábbi Table törlése
    let tableBody = table.querySelector('tbody')
    let tableHead = table.querySelector('thead')

    if (isNaN(tableBody) && isNaN(tableHead)) {
        table.removeChild(tableBody)
        table.removeChild(tableHead)
    }

    //caption elkészítése
    let captionCr = document.createElement("caption")
    captionCr.innerHTML = "Szerző és művük listázása"
    table.appendChild(captionCr)

    //thead elkészítése
    let theadCreate = document.createElement("thead")
    theadCreate.className = "table-light"
    let tr = document.createElement("tr")
    for (let i = 0; i < 4; i++) {
        let th = document.createElement("th")
        th.setAttribute("scope", "col")
        th.className = "align-middle"
        switch (i) {
            case 0:
                th.innerHTML = "#"
                break;
            case 1:
                th.innerHTML = "Szerző neve"
                break;
            case 2:
                th.innerHTML = "Kötet címe"
                break;
            case 3:
                th.innerHTML = "Részletek megtekintése"
                break;
        }
        tr.appendChild(th)
    }
    theadCreate.appendChild(tr)
    table.appendChild(theadCreate)

    //tbody elkészítése
    let tbodyCreate = document.createElement("tbody")
    tbodyCreate.className = "table-group-divider"

    for (let k in WriterAuthor) {
        let tr = document.createElement("tr")
        let th = document.createElement("th")
        th.innerHTML = parseInt(k) + 1
        th.setAttribute("scope", "row")
        tr.appendChild(th)
        tr.className = "align-middle"
        for (let value of Object.values(WriterAuthor[k])) {
            if (typeof (value) != typeof (1)) {//value != k
                let td = document.createElement("td")
                td.className = "align-middle"
                td.innerHTML = value
                tr.appendChild(td)
            }
        }
        let infoBtn = document.createElement("button")
        infoBtn.type = "button"
        infoBtn.className = "btn btn-outline-light align-middle"
        infoBtn.innerHTML = '<i class="fa-solid fa-circle-info"></i> Részletek'
        tr.appendChild(infoBtn)
        infoBtn.setAttribute("onclick","detailsBtn(this)")
        tbodyCreate.appendChild(tr)
        table.appendChild(tbodyCreate)
    }
}
function detailsBtn(dBtn) {
    alert('NINCS kész funkció!')
}