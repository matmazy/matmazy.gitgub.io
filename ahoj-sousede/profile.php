<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<?php include "header.php" ?>
<main>
    <div class="s1">
        <nav>
            <p class="pro"><img src="data/icoSipka.svg"> Upravit profil</p>
            <p class="pas"><img src="data/icoSipka.svg"> Heslo</p>
            <p class="adr"><img src="data/icoSipka.svg"> Vaše adresy</p>
            <p class="hod"><img src="data/icoSipka.svg"> Hodnocení</p>
            <p class="nab"><img src="data/icoSipka.svg"> Moje nabídky</p>
            <p class="nov"><img src="data/icoSipka.svg"> Odběr novinek</p>
            <p class="kre"><img src="data/icoSipka.svg"> Kredity</p>
        </nav>
    </div>
    <div class="s2">
        <div class="prof" style="display: block">
            <div>
                <img src="data/profFoto.svg">
                <p>Karel</p>
                <p class="name">Karel Novak</p>
            </div>
            <form class="eProf">
                <div>
                    <label>
                        Jméno* <br>
                        <input type="text" placeholder="Karel">
                    </label>
                    <label>
                        Přijmeni* <br>
                        <input type="text" placeholder="Karel">
                    </label>
                    <label>
                        Email* <br>
                        <input type="text" placeholder="Karel">
                    </label>
                    <label>
                        Telefon* <br>
                        <input type="tel" placeholder="Karel">
                    </label>
                    <label>
                        IČO* <br>
                        <input type="text" placeholder="Karel">
                    </label>
                    <label>
                        DIČ* <br>
                        <input type="text" placeholder="Karel">
                    </label>
                </div>
                <button class="btnSave">Uložit změny</button>
            </form>
        </div>
        <div class="pass" style="display: none">
            <form>
                <label>
                    Sočastné heslo* <br>
                    <input type="password">
                </label>
                <label>
                    Nové heslo* <br>
                    <input type="password">
                </label>
                <label>
                    Potvrzení nového hesla* <br>
                    <input type="password">
                </label>
                <button class="btnSave">Uložit změny</button>
            </form>
        </div>
        <div class="adre" style="display: none">
            <form>
                <label>
                    Adresa <br>
                    <input type="text" placeholder="u pošty">
                </label>
                <label>
                    PSČ <br>
                    <input type="number" placeholder="14000">
                </label>
                <label>
                    Organizace <br>
                    <input type="text" placeholder="sousedi">
                </label>
                <label>
                    Město <br>
                    <input type="text" placeholder="praha">
                </label>
                <label>
                    Vyberte kraj <br>
                    <select>
                        <option>Praha</option>
                        <option>Středočeský</option>
                        <option>Liberecký</option>
                        <option>Ústecký</option>
                        <option>Karlovarský</option>
                        <option>Plzeňský</option>
                        <option>Jihočeský</option>
                    </select>
                </label>
                <button class="btnSave">Uložit změny</button>
            </form>
        </div>
        <div class="hodn" style="display: none">
            <div class="sRec">
                <a href="">Získané recenze</a>
                <a href="">Moje recenze</a>
            </div>
            <div class="rec">
                <div class="a">
                    <img src="data/profFoto.svg">
                </div>
                <div class="b">
                    <p>Karel678987</p>
                    <p>21 recenzí</p>
                </div>
                <div class="c">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <p>25/5/2022</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, rem voluptas. A
                        asperiores autem, beatae cum cupiditate excepturi expedita hic iure molestias, nam nemo officia
                        placeat possimus quaerat soluta suscipit!</p>
                </div>
            </div>
            <div class="rec">
                <div class="a">
                    <img src="data/profFoto.svg">
                </div>
                <div class="b">
                    <p>Karel678987</p>
                    <p>21 recenzí</p>
                </div>
                <div class="c">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <p>25/5/2022</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, rem voluptas. A
                        asperiores autem, beatae cum cupiditate excepturi expedita hic iure molestias, nam nemo officia
                        placeat possimus quaerat soluta suscipit!</p>
                </div>
            </div>
            <div class="rec">
                <div class="a">
                    <img src="data/profFoto.svg">
                </div>
                <div class="b">
                    <p>Karel678987</p>
                    <p>21 recenzí</p>
                </div>
                <div class="c">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <p>25/5/2022</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, rem voluptas. A
                        asperiores autem, beatae cum cupiditate excepturi expedita hic iure molestias, nam nemo officia
                        placeat possimus quaerat soluta suscipit!</p>
                </div>
            </div>
            <div class="rec">
                <div class="a">
                    <img src="data/profFoto.svg">
                </div>
                <div class="b">
                    <p>Karel678987</p>
                    <p>21 recenzí</p>
                </div>
                <div class="c">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <img src="data/star.svg">
                    <p>25/5/2022</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, rem voluptas. A
                        asperiores autem, beatae cum cupiditate excepturi expedita hic iure molestias, nam nemo officia
                        placeat possimus quaerat soluta suscipit!</p>
                </div>
            </div>
        </div>
        <div class="inze" style="display: none">
            <div class="sRec">
                <a href="">Aktivní inzeráty</a>
                <a href="">Neaktivní inzeráty</a>
            </div>
            <form>
                <div class="aktiv">
                    <img src="data/hasak.svg" alt="hasak">
                    <div style="margin: 0.5rem 0">
                        <p style="font-size: 150%; margin: 0.5rem 0">Hasák čevený</p>
                        <p style="color: #6DC400; margin: 0.5rem 0">5ks po 569kč</p>
                        <p style="color: #515151; margin: 0.5rem 0; font-size: 80%">bazar</p>
                    </div>
                    <div style="flex: 0.5">
                        <a>+</a>
                        <input type="number">
                        <a>-</a>
                    </div>
                    <div class="price">
                        <p>569 Kč</p>
                    </div>
                    <div>

                            <a href="">Topovat</a>
                            <img src="data/rubbish%202.svg">
                            <img src="data/pen%201.svg">

                        <p>Inzerát je platný do 29.9.2022</p>
                    </div>

                </div>
                <div class="aktiv">
                    <img src="data/hasak.svg" alt="hasak">
                    <div style="margin: 0.5rem 0">
                        <p style="font-size: 150%; margin: 0.5rem 0">Hasák čevený</p>
                        <p style="color: #6DC400; margin: 0.5rem 0">5ks po 569kč</p>
                        <p style="color: #515151; margin: 0.5rem 0; font-size: 80%">bazar</p>
                    </div>
                    <div style="flex: 0.5">
                        <a>+</a>
                        <input type="number">
                        <a>-</a>
                    </div>
                    <div class="price">
                        <p>569 Kč</p>
                    </div>
                    <div>

                        <a href="">Topovat</a>
                        <img src="data/rubbish%202.svg">
                        <img src="data/pen%201.svg">

                        <p>Inzerát je platný do 29.9.2022</p>
                    </div>

                </div>
                <div class="aktiv">
                    <img src="data/hasak.svg" alt="hasak">
                    <div style="margin: 0.5rem 0">
                        <p style="font-size: 150%; margin: 0.5rem 0">Hasák čevený</p>
                        <p style="color: #6DC400; margin: 0.5rem 0">5ks po 569kč</p>
                        <p style="color: #515151; margin: 0.5rem 0; font-size: 80%">bazar</p>
                    </div>
                    <div style="flex: 0.5">
                        <a>+</a>
                        <input type="number">
                        <a>-</a>
                    </div>
                    <div class="price">
                        <p>569 Kč</p>
                    </div>
                    <div>

                        <a href="">Topovat</a>
                        <img src="data/rubbish%202.svg">
                        <img src="data/pen%201.svg">

                        <p>Inzerát je platný do 29.9.2022</p>
                    </div>

                </div>
                <div class="aktiv">
                    <img src="data/hasak.svg" alt="hasak">
                    <div style="margin: 0.5rem 0">
                        <p style="font-size: 150%; margin: 0.5rem 0">Hasák čevený</p>
                        <p style="color: #6DC400; margin: 0.5rem 0">5ks po 569kč</p>
                        <p style="color: #515151; margin: 0.5rem 0; font-size: 80%">bazar</p>
                    </div>
                    <div style="flex: 0.5">
                        <a>+</a>
                        <input type="number">
                        <a>-</a>
                    </div>
                    <div class="price">
                        <p>569 Kč</p>
                    </div>
                    <div>

                        <a href="">Topovat</a>
                        <img src="data/rubbish%202.svg">
                        <img src="data/pen%201.svg">

                        <p>Inzerát je platný do 29.9.2022</p>
                    </div>

                </div>
                <div class="aktiv">
                    <img src="data/hasak.svg" alt="hasak">
                    <div style="margin: 0.5rem 0">
                        <p style="font-size: 150%; margin: 0.5rem 0">Hasák čevený</p>
                        <p style="color: #6DC400; margin: 0.5rem 0">5ks po 569kč</p>
                        <p style="color: #515151; margin: 0.5rem 0; font-size: 80%">bazar</p>
                    </div>
                    <div style="flex: 0.5">
                        <a>+</a>
                        <input type="number">
                        <a>-</a>
                    </div>
                    <div class="price">
                        <p>569 Kč</p>
                    </div>
                    <div>

                        <a href="">Topovat</a>
                        <img src="data/rubbish%202.svg">
                        <img src="data/pen%201.svg">

                        <p>Inzerát je platný do 29.9.2022</p>
                    </div>

                </div>


                <button>Uložit změny</button>
            </form>
        </div>
        <div class="odber" style="display: none">
            <p>Chcete odebírat sousedský zpravodaj?</p>
            <form>
                <input type="radio">
                <input type="radio">
                <a>Ano</a>
                <a>Ne</a>
                <button>Uložit změny</button>
            </form>
        </div>
        <div class="kred" style="display: none">
            <form>
                <h1>Zadejte částku dobití</h1>
                <label>
                    Částka
                    <input type="number">
                </label>
                <h1>Vyberte typ platby</h1>
                <div>

                </div>
            </form>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
<script src="js/profile.js"></script>
</body>
</html>