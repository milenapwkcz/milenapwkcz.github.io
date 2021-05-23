Vue.component('v-autocompleter', { 
    template: '<div class="wyszukiwarka"><img class="kl1" src="kl1.png"><input v-model="googleSearch" type="text" class="search_input" v-on:click="ustaw()"><img class="kl2" src="kl2.png"><div class="lista"><div id="id" :class="[ googleSearch.length != 0 && filtrowaniemiast.length != 0 && c == 1 ? "autocompleter" : "pustka"]"><ul class="cmbBox"><li class="cmbWyniki" v-for="miasto in filtrowaniemiast" v-on:click="zmiana(miasto.name)"><img class="cmblupa" src="kl1.png"><div class="cmbpogrub" v-html="pogrub(miasto.name)"></div>  </li></ul></div></div></div>',
    data: function()
    {
        return
        {
            googleSearch: ''
            c: 0
        }
    },

    computed: {
        filtrowaniemiast: function(){
            let wynik= this.miasta.filter(miasto=> miasto.name.includes(this.googleSearch));
            if (wynik.length>10)
            {
                return wynik.slice(1,11);
            }
            return wynik;
          }
      },
      methods:{
          pogrub(wynik)
          {
              wpisane= this.googleSearch;
              var zmienna= wynik.split(wpisane);
              for (i=0; i<zmienna.length; i++)
              {
                  wynik=wynik.replace(zmienna[i], zmienna[i].bold())
              }
              return wynik;
          },

          zmiana(z)
          {
              if(this.isActive == 0)
          {
              this.isActive = 1;
              this.googleSearch = z;
              a = document.getElementById("id");
              a.blur();
              this.c = 0;  
          }
          },

          ustaw()
          {
              this.c = 1;
          },
      }
  });