<div class="container">
  <div class="row">
    <div class="col-md">
      <!--1 of 3-->
    </div>
    <div class="col-md-10">
      <h2>Könyvfeltöltés</h2>
      <h3>Kedves <b>Olvasó</b>!</h3>
      <p>
        Az alábbi űrlap kitöltésével tudsz az adatbáziusnkban hiányzó könyvet feltöletni.
        Kérlek, minden adatot pontosan add meg, ezért beküldés előtt ellenőrizd!
      </p>
      <form class="form-row">
        <div class="form-group col-md-6">
          <label for="szvezetek">Szerző vezetékneve</label>
          <input type="text" class="form-control" id="szvezetek" aria-describedby="szvezetek" pattern="[A-Z,a-z, ]{3}[A-Z,a-z, ]*" required>
        </div>
        <div class="form-group col-md-6">
          <label for="szkereszt">Szerző keresztneve</label>
          <input type="text" class="form-control" id="szkereszt" aria-describedby="szkereszt" pattern="[A-Z,a-z, ]{3}[A-Z,a-z, ]*" required>
        </div>
        <div class="form-group col-md-6">
          <label for="konyvcim">Könyv címe</label>
          <input type="text" class="form-control" id="konyvcim" pattern="[#a-zA-Z09]+" required>
        </div>
        <div class="form-group col-md-6">
          <label for="megjelenes" class="col-md col-form-label">Megjelenés éve</label>
          <input type="text" class="form-control" id="megjelenes" pattern="[0-9]{4}" required>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="boritokep">
            <label class="custom-file-label col-md-12" for="boritokep">Borítókép kiválasztása</label>
        </div>
        <div class="form-group col-md-12">
          <label for="kiado" class="col-md col-form-label">Kiadó</label>
          <input type="teyt" class="form-control" id="kiado" pattern="[A-Z,a-z, ]{3}[A-Z,a-z, ]*" required>
        </div>
        <div class="form-group col-md-12">
          <label for="konyvleiras" class="col-md-12 col-form-label">Könyv leírás</label>
          <div class="col-sm-12">
            <textarea class="form-control" id="konyvleiras" rows="5" required></textarea>
          </div>
        </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-paper-plane"></i> Küldés</button>
      </form>
    </div>
    <div class="col-md">
      <!--3 of 3-->
    </div>
  </div>
</div>