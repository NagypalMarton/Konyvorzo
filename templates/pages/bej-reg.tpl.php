        <h1>
            Bejelentkezés/Regisztráció
        </h1>
        <h2 id="idezet" >Bejelentkezés</h2>
        <DIV class="login-div">
            <DIV class="form-group">
                <LABEL for="email"> Email</LABEL>
                <INPUT class="form-control" id="email" type="email" name="email" placeholder="felh.név@szolg.hu/com" require>
            </DIV>

            <DIV class="form-group">
                <LABEL for="password"> Jelszó</LABEL>
                <INPUT class="form-control red" id="password" type="password" name="jelszó" require>
            </DIV>

            <DIV class="form-group">
                <BUTTON class="red form-control">BEJELENTKEZÉS</BUTTON>
            </DIV>
        </DIV>
        <h2 id="idezet">Regisztráció</h2>
        <DIV class="login-div">
            <div class="form-row">
                <DIV class="form-group col">
                    <LABEL for="veznev"> Vezetéknév</LABEL>
                    <INPUT class="form-control" id="veznev" type="text" name="Vezetéknév" placeholder="Vezetéknév" require>
                </DIV>
                <DIV class="form-group col">
                    <LABEL for="knev"> Keresztnév</LABEL>
                    <INPUT class="form-control" id="knev" type="text" name="Keresztnév" placeholder="Keresztnév"require>
                </DIV>
            </div>
            <div class="form-row">
                <DIV class="form-group col">
                    <LABEL for="email1"></LABEL> Email cím</LABEL>
                    <INPUT class="form-control" id="email1" type="email" name="email" placeholder="felh.név@szolg.hu/com" require>
                    <small id="email1" class="form-text text-muted">3. féllel nem osztjuk meg az email címet!</small>
                </DIV>
                <DIV class="form-group col">
                    <LABEL for="email1"></LABEL> Email cím újra</LABEL>
                    <INPUT class="form-control" id="email1" type="email" name="email" placeholder="felh.név@szolg.hu/com" require>
                </DIV>
            </div>
            <div class="form-row">
                <DIV class="form-group col">
                    <LABEL for="pw"> Jelszó</LABEL>
                    <INPUT class="form-control red" id="pw" type="password" name="jelszó" require>
                </DIV>
                <DIV class="form-group col">
                    <LABEL for="pw"> Jelszó újra</LABEL>
                    <INPUT class="form-control red" id="pw" type="password" name="jelszó" require>
                </DIV>
            </div>
        
            <DIV class="form-group">
                <BUTTON class="red form-control">Regisztráció</BUTTON>
            </DIV>
        </DIV>