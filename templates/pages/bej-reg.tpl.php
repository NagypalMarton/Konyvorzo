<h1 class="w-auto p-3">
  Bejelentkezés <br> Regisztráció
</h1>
<div class="container">
  <div class="row">
    <div class="col-md">
      <!--1 of 3-->
    </div>
    <div class="col-md-4">
      <form action="belepes.php" method="post">

        <h2 id="idezet">Bejelentkezés</h2>
        <div class="login-div">
          <div class="form-group">
            <label for="email"> Email</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="xy@z.hu" required>
          </div>

          <div class="form-group">
            <label for="password"> Jelszó</label>
            <input class="form-control red" id="password" type="password" name="jelszó" required>
          </div>

          <div class="form-group">
            <button type="button" class="btn btn-primary btn-lg btn-block red form-control"><i
                class="fas fa-sign-in-alt"></i> BEJELENTKEZÉS</button>
          </div>
        </div>

      </form>
    </div>
    <div class="col-md">
      <!--3 of 3-->
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md">
      <!--1 of 3-->
    </div>
    <div class="col-md-6">
      <h2>Regisztráció</h2>

      <form action="regisztracio.php" method="post">
        <div class="login-div">
          <div class="form-row">
            <div class="form-group col">
              <label for="veznev"> Vezetéknév</label>
              <input class="form-control" id="veznev" type="text" name="Vezetéknév" placeholder="Vezetéknév"
                pattern="[A-Z,a-z, ]{3}[A-Z,a-z, ]*" required>
            </div>
            <div class="form-group col">
              <label for="knev"> Keresztnév</label>
              <input class="form-control" id="knev" type="text" name="Keresztnév" placeholder="Keresztnév"
                pattern="[A-Z,a-z, ]{3}[A-Z,a-z, ]*" required>
            </div>
          </div>
          <div class="form-group">
            <label for="username">Felhasználónév</label>
            <input type="text" class="form-control" id="username" placeholder="Felhasználónév" pattern="[#a-zA-Z09]+"
              required>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="email1"></label> Email cím</label>
              <input class="form-control" id="email1" type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group col">
              <label for="email2"></label> Email cím újra</label>
              <input class="form-control" id="email2" type="email" name="email" placeholder="E-mail" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="pw"> Jelszó</label>
              <input class="form-control red" id="pw" type="password" name="Jelszó" placeholder="Jelszó" required>
            </div>
            <div class="form-group col">
              <label for="pw1"> Jelszó újra</label>
              <input class="form-control red" id="pw1" type="password" name="Jelszó" placeholder="Jelszó" required>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="aszf" name="aszf" type="checkbox" required>
              <label class="form-check-label" for="aszf">Elolvastam és elfogadom az <a target="_blank"
                  href="http://nagypalmarton.nhely.hu/?oldal=adatvedelem">Adatvédelmi tájékoztatót.</a></label>
            </div>

            <div class="form-group col">
              <button type="button" class="btn btn-primary btn-lg btn-block red form-control"> <i
                  class="fas fa-paper-plane"></i> Regisztráció
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md">
      <!--3 of 3-->
    </div>
  </div>
</div>