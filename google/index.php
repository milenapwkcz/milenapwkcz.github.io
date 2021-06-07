<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Google</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="main2.css">
        <link rel="stylesheet" href="autocompleter.css">
        <script src="cities.js"></script>
        <script src="functions.js" defer></script>
        <script src="autocompleter.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    </head>
    <body> 
        <div id="app" :class="[ googleSearch.length != 0 && isActive == 1 ? 'results' : isActive = 0 ]"> 
            <section class="container">
                <section class="pasekgora">
                    <section class="etykiety">
                        <section class="logowanie">
                            <button type="sumbit" class="log" onclick="location.href='https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin'">Zaloguj się</button>
                        </section>
                        <section class="docs">
                            <img src="docs.png" width="30">
                        </section>
                        <section class="etykietab">
                            <a class="g" href="https://www.google.pl/imghp?hl=pl&authuser=0&ogbl"> Grafika<br> </a><br>
                        </section>
                        <section class="etykietab">
                            <a class="g" href="https://mail.google.com/mail/u/0/?ogbl"> Gmail </a>
                        </section>
                    </section>
                </section>
                <section class="centrum">
                    <section class="logo">
                        <img class="logogoogle" src="logo.png" alt="Google">
                    </section>
                    <div class="wyszukiwarka">
                        <img class="kl1" src="kl1.png">
                        <input v-model="googleSearch" type="text" v-on:click="ustaw()" @keyup.up="goTo(activeResult - 1)" @keyup.down="goTo(activeResult + 1)" @keyup.enter="zmiana(googleSearch)">
                        <img class="kl2" src="kl2.png">
                        <div class="lista">
                            <div id="autocomp" :class="[ googleSearch.length != 0 && filteredCities.length != 0 && kontrol == 1 ? 'autocompleter' : 'nic']">
                                <ul class="cmbBox">
                                    <li class="cmbWyniki" v-for="(city, index) in filteredCities" @click="change(city.name)" :class="[autocompIsActive && activeResult === index ? 'kolor' : '']">
                                        <div id="kolor" :class="[autocompIsActive && activeResult === index ? 'kolor' : '']">
                                            <img class="cmblupa" src="kl1.png">
                                            <div class="cmbpogrub" v-html="city.nameHtml">
                                            </div>
                                        </div>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="buttony">
                        <section class="bszukaj">
                            <button type="sumbit" onclick="location.href='https://www.youtube.com/watch?v=XqZsoesa55w'">Szukaj w Google</button>
                        </section>
                        <section class="btraf">
                            <button type="submit" onclick="location.href='https://www.gry.pl/gra/my-dolphin-show-7'">Szczęśliwy traf</button>
                        </section>
                    </div>
                    <section class="jezyk">
                        <p>Korzystaj z Google w tych językach: <a>English</a></p>
                    </section>
                </section>
                <section class="pasekdolny">
                    <div class="panstwo">Polska</div>
                    <section class="podpanstwem">
                        <section class="etykietyd">
                            <section class="etykieta">
                                <a class="d">Pomoc</a>
                         </section>
                            <section class="etykieta">
                                <a class="d">Prześlij opinię</a>
                            </section>
                            <section class="etykieta">
                                <a class="d">Prywatność</a>
                            </section>
                        </section>
                    </section>
                    <section class="reszta">
                        <section class="pasekdollewy">
                            <section class="etykiety2">
                                <section class="etykieta">
                                    <a class="d" href="https://about.google/?utm_source=google-PL&utm_medium=referral&utm_campaign=hp-footer&fg=1">O nas</a>
                                </section>
                                <section class="etykieta">
                                    <a class="d" href="https://ads.google.com/intl/pl_pl/home/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpafooter&fg=1">Reklamuj się</a>
                                </section>
                                <section class="etykieta">
                                    <a class="d" href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpbfooter&fg=1">Dla firm</a>
                                </section>
                                <section class="etykieta">
                                    <a class="d" href="https://www.google.com/search/howsearchworks/?fg=1">Jak działa wyszukiwarka?</a>
                                </section>
                            </section>
                        </section>
                        <section class="pasekdolcentrum">
                            <section class="etykiety4">
                                <section class="eko">
                                    <img class="listek" src="eko.png" width="20">
                                </section>
                                <section class="etykieta">
                                    <a class="d" href="https://sustainability.google/intl/pl/commitments-europe/?utm_source=googlehpfooter&utm_medium=housepromos&utm_campaign=bottom-footer&utm_content=">Neutralność węglowa od 2007 roku</a><br>
                                </section>
                            </section>
                        </section>
                        <section class="pasekdolprawy">
                            <section class="etykiety3">
                                <section class="etykieta">
                                    <a class="d" href="https://policies.google.com/privacy?hl=pl&fg=1">Prywatność</a>
                                </section>
                                <section class="etykieta">
                                    <a class="d" href="https://policies.google.com/terms?hl=pl&fg=1">Warunki</a>
                                </section>
                                <section class="etykieta">
                                    <a class="d" href="https://www.google.com/preferences?hl=pl&client=safari&fg=1">Ustawienia</a>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="podinputem">
                    <section class="etykietyn">
                        <section class="etykieta">
                            <a class="d">Wszystko</a>
                        </section>
                        <section class="etykieta">
                            <svg focusable="false" width='20' height='20' viewBox="0 0 24 24"><path d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2"></path></svg>
                            <a class="d">Wiadomości</a>
                        </section>
                        <section class="etykieta">
                            <svg focusable="false" width='18' height='18' viewBox="0 0 24 24"><path d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5"></path></svg>
                            <a class="d" href="https://www.google.pl/imghp?hl=pl&authuser=0&ogbl">Grafika</a>
                        </section>
                        <section class="etykieta">
                            <svg focusable="false" width='18' height='18' viewBox="0 0 16 16"><path d="M7.503 0c3.09 0 5.502 2.487 5.502 5.427 0 2.337-1.13 3.694-2.26 5.05-.454.528-.906 1.13-1.358 1.734-.452.603-.754 1.508-.98 1.96-.226.452-.377.829-.904.829-.528 0-.678-.377-.905-.83-.226-.451-.527-1.356-.98-1.959-.452-.603-.904-1.206-1.356-1.734C3.132 9.121 2 7.764 2 5.427 2 2.487 4.412 0 7.503 0zm0 1.364c-2.283 0-4.14 1.822-4.14 4.063 0 1.843.86 2.873 1.946 4.177.468.547.942 1.178 1.4 1.79.34.452.596.99.794 1.444.198-.455.453-.992.793-1.445.459-.61.931-1.242 1.413-1.803 1.074-1.29 1.933-2.32 1.933-4.163 0-2.24-1.858-4.063-4.139-4.063zm0 2.734a1.33 1.33 0 11-.001 2.658 1.33 1.33 0 010-2.658"></path></svg>
                            <a class="d" href="https://www.google.pl/maps">Mapy</a>
                        </section>
                        <section class="etykieta">
                            <svg focusable="false" width='18' height='18' viewBox="0 0 24 24"><path d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5"></path></svg>
                            <a class="d" href="https://pl.wikipedia.org/wiki/Video_(zespół_muzyczny)">Wideo</a>
                        </section>
                        <section class="etykieta">
                            <svg focusable="false" width='18' height='18' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                            <a class="d" href="https://www.tekstowo.pl/piosenka,jessica_sutta,show_me.html">Więcej</a>
                        </section>
                        <section class="etykieta">
                            <a class="d" href="https://support.google.com/accounts/answer/3118621?hl=pl">Ustawienia</a>
                        </section>
                        <section class="etykieta">
                            <a class="d" href="https://widoczni.com/blog/12-bezplatnych-narzedzi-google-dla-twojej-firmy/">Narzędzia</a>
                        </section>
                    </section>
                </section>
                <a class="ilewynikow">Około 18 760 000 000 wyników (0,62 s) </a>
                <section class="wyniki">
                    <section class="wynik">
                        <section class="adres">
                            <section class="link">www.youtube.com </section>
                            <section class="corb">> watch</section>
                        </section>
                        <a class="naglowek" href="https://www.youtube.com/watch?v=kUhb1qvQj4c">Prawdziwa historia Agnieszki po wizycie w MCDonaldzie</a>
                        <section class="opis">Zalecam nie brać przykładu!</section>
                    </section>
                    <section class="wynik">
                        <section class="adres">
                            <section class="link">www.agh.edu.pl</section>
                            <section class="corb"></section>
                        </section>
                        <a class="naglowek" href="https://www.agh.edu.pl">Strona główna AGH</a>
                        <section class="opis">Strona startowa portalu Akademii Górniczo-Hutniczej w Krakowie.</section>
                    </section>
                    
                    <section class="wynik">
                        <section class="adres">
                            <section class="link">www.filmweb.pl</section>
                            <section class="corb">> serial</section>
                        </section>
                        <a class="naglowek" href="https://www.filmweb.pl/serial/Sposób+na+morderstwo-2014-710594">Sposób na morderstwo (Serial 2014-2020)- Filmweb</a>
                        <section class="opis">Wybitna prawniczka wraz ze swoimi studentami zostaje wplątana w morderstwo.</section>
                    </section>
                    <section class="wynik">
                        <section class="adres">
                            <section class="link">www.miejski.pl</section>
                            <section class="corb">> slowo-UwU</section>
                        </section>
                        <a class="naglowek" href="https://www.miejski.pl/slowo-UwU">UwU- Co to znaczy? Definicja w słowniku Miejski.pl</a>
                        <section class="opis"> Emotikon oznaczający coś słodkiego lub gdy czujemy się szczególnie szczęśliwi. </section>
                    </section>
                    <section class="wynik">
                        <section class="adres">
                            <section class="link">www.fera.pl</section>
                            <section class="corb">> Blog > Pies > Życie z psem</section>
                        </section>
                        <a class="naglowek" href="https://www.youtube.com/watch?v=3IX6jRta5Po">Lista imiona dla psów - imiona dla suczek i psów|Fera.pl</a>
                        <section class="opis"> Zastanawiasz się nad wybraniem najlepszego imienia dla psa? Przedstawiamy listę! </section>
                    </section>
                    <section class="podobne">Wyszukiwania podobne do: randomowe rzeczy</section>
                    <section class="podobnewyniki">
                        <section class="lewakolumna">
                            <section class="podobnywynik">Miód z malinami</section>
                            <section class="podobnywynik">Co kupić córce na urodziny?</section>
                            <section class="podobnywynik">Jestem sterem</section>
                            <section class="podobnywynik">Piosenki do treningu</section>
                        </section>
                        <section class="prawakolumna">
                            <section class="podobnywynik">Kup misia 2021</section>
                            <section class="podobnywynik">Losowanie LOTTO</section>
                            <section class="podobnywynik">Samochody Kraków</section>
                            <section class="podobnywynik">Googlowanie jest trudne</section>
                        </section>
                    </section>
                    <section class="strony">
                        <section class="gooogle">
                            <img src="gooogle.png" width="250">
                        </section>
                        <section class="liczby">
                            <a class="liczbaa" href="https://www.youtube.com/watch?v=JqpwcbrkQeA">1</a>
                            <a class="liczba" href="https://www.facebook.com/dwaslawy">2</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=k9vF9YRa-c0">3</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=OYX22JChwQ4">4</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=7ufvgExIldU">5</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=TKO8zmF98nI">6</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=nhcNLkosnz0">7</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=7kHsddf-6es">8</a>
                            <a class="liczba" href="https://www.youtube.com/watch?v=S0yLbdZRu3A">9</a>
                            <a class="nastepna" href="https://www.youtube.com/watch?v=TZgBIbqtDnQ">Następna</a>
                        </section>
                    </section>
                </section>
                <script>
                    var app = new Vue({
                        el: '#app', 
                        data: 
                        {
                            googleSearch: '',
                            isActive: 0,
                            kontrol: 0,
                            autocompleterIsActive: false,
                            activeResult: 0,
                            filteredCities: [],
                            cities: window.cities.map((cityData) => {
                                cityData.nameLowerCase = cityData.name.toLowerCase();
                            return cityData;
                            })
                        },
                        watch: 
                        {
                            googleSearch() {
                                if (this.autocompleterIsActive) {
                                    return;
                                }
                                if (this.googleSearch.length === 0) {
                                    filteredCities = [];
                                    return;
                                }
                                let returnedCities = [];
                                let searchLowerCase = this.googleSearch.toLowerCase();

                                this.cities.forEach((cityData) => {
                                    if (returnedCities.length === 10 || !cityData.nameLowerCase.includes(searchLowerCase)) {
                                        return;
                                    }
                                    returnedCities.push({
                                        name: cityData.name,
                                        nameHtml: cityData.nameLowerCase.replace(searchLowerCase, (match) => {
                                        return '<span class="bold">' + match + '</span>';
                                    })
                                })
                            });
        
                            this.filteredCities = returnedCities;
                            }
                        },
                        methods:
                        {
                            zmiana: function(a)
                            {
                                if(this.isActive == 0)
                                {
                                    this.isActive = 1;
                                    this.googleSearch = a;
                                    el2 = document.getElementById("autocom");
                                    el2.blur();
                                    this.kontrol = 0;
                                }
                            },
                            ustaw: function()
                            {
                                this.kontrol = 1;
                            },
                            goTo: function(index)
                            {
                                if (!this.autocompleterIsActive) {
                                    index = 0;
                                } 

                                if (index > this.filteredCities.length - 1) {
                                    index = 0;
                                } else if (index < 0) {
                                    index = this.filteredCities.length - 1;
                                }
        
                                this.autocompleterIsActive = true;
                                this.activeResult = index;
                                this.googleSearch = this.filteredCities[index].name;
                            }
                        }
  
                    });
                  </script>
            </section>
        </div>
    </body>