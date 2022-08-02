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
let kivGomb
function searchBtn(schBtn) {
    let searchText = schBtn.parentElement.firstElementChild.value
    alert(`Ez egy kereső mező lesz! Beírt szöveg: ${searchText}`)
    kivGomb=schBtn
    // console.log(kivGomb)
}

function konyvSzerzoKeres(konyvKeresBtn) {
    // console.log(konyvKeresBtn)
    alert('Könyvet vagy Szerzőt fogok keresni!')
    kivGomb=konyvKeresBtn
    //console.log(kivGomb)
}

function szerzoKeres(szerzoKeresBtn) {
    // console.log(szerzoKeresBtn)
    alert('Szerzőt fogok keresni!')
    kivGomb=szerzoKeresBtn
    // console.log(kivGomb)
}