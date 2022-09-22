<template>
    <div>
  
      <div>
        <h3 class="text-success pb-5 text-center">
          SCOPRI CON NOI LA STORIA DELLE CUCINE DEL MONDO
        </h3>
      </div>
      <div class="container">
        <div class="rounded mx-auto d-block">
          <div v-for="i in [currentIndex]" :key="i">
            <img class="rounded mx-auto d-block w-100" :src="currentImg" />
          </div>
        </div>
        <a class="prev" @click="prev" href="#">&#10094;</a>
        <a class="next" @click="next" href="#">&#10095;</a>
      </div>
  
      <div class="container pt-3">
        <div class="rounded mx-auto d-block bg-black">
          <div class="row">
            <div class="col-6">
              <div class="" v-for="ind in [currentIndexChef]" :key="ind">
                <img class="img-fluid px-3 pt-5" :src="currentChef" />
              </div>
            </div>
            <div class="col-6">
              <div v-for="index in [currentIndexStory]" :key="index">
                <p class="text-white padding-x pt-5">{{currentStory}}</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
    </template>
    
    <script>
    export default {
      name: "PlateInfo",
      data() {
        return {
          images: [
            "https://www.kikkoman.it/fileadmin/_processed_/d/0/csm_Italien_0525c8ba3c.jpg", //italiana
            "https://www.sfizioso.it/wp-content/uploads/2021/06/piatti-tipici-greci.jpg", //greca
            "https://wips.plug.it/cips/buonissimo.org/cms/2013/05/strumenti-cucina-cinese.jpg", //cinese
            "https://www.bioimis.it/resize_image?id=e4cd7759-dfd7-47ed-9aa9-19234f952c59&w=791&h=500", // Iberica
            "https://s3-eu-west-1.amazonaws.com/fratelliorsero/wp-content/uploads/2019/11/25120833/shutterstock_648560977-1.jpg", //giapponese
            "https://blog.giallozafferano.it/viaggiandomangiando/wp-content/uploads/2019/11/shutterstock_649541308.jpg", //Indiana
            "https://s3.eu-de.cloud-object-storage.appdomain.cloud/pro-strapi-media-library/web_alimentos_ultraprocesados2_f215d111af", //fast-food
            "https://static2-viaggi.corriereobjects.it/wp-content/uploads/2021/09/214892655_6035116193228248_5179461785950087407_n-1080x720.jpeg?v=449399" // Pizza
            ],
            story: [
            "La cucina italiana è l espressione dell'arte culinaria sviluppatasi in Italia, comprendente tradizioni fortemente radicate e comuni a tutto il paese, nonché l'insieme di tutte le gastronomie regionali, in uno scambio continuo: molti piatti italiani che una volta erano conosciuti solo nelle regioni di provenienza col tempo si sono diffusi in tutto il paese. È conosciuta come classico esempio di dieta mediterranea, riconosciuta come patrimonio immateriale dell'umanità dall'UNESCO nel 2010. Inoltre, si tratta di una delle gastronomie più note e apprezzate a livello globale. Una delle caratteristiche principali della cucina italiana è la sua semplicità, con molti piatti composti da pochi ingredienti: i cuochi italiani fanno affidamento sulla qualità degli ingredienti, piuttosto che sulla complessità di preparazione.",
            "La cucina greca",
            "La cucina cinese",
            "La cucina Iberica",
            "La cucina Giapponese",
            "La cucina Indiana",
            "Il cibo così detto Fast food",
            "Sua Maestà la Pizza",
            ],
            chef:[
            "https://www.cucchiaio.it/chef/wp-content/uploads/2020/09/barbieri-json-2.jpg",//chef italiano Bruno Barbieri
            "https://www.greekgastronomyguide.gr/wp-content/uploads/2018/01/rsz_dsc_6670-1.jpg", //chef greco Thodoris Papanikolaou
            "https://reportergourmet.com/files/2021/09/Song-ristorante-cinese.png", //chef cinese Chu Lin Sang
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/ferran-adria-1526482767.jpg", // chef Iberico Ferran Adrià
            "https://www.innaturale.com/wp-content/uploads/2018/03/chef-giapponese-nobu-il-re-della-cucina-fusion.jpg", //chef giapponese Nobu - Re della cucina Fusion
            "https://static.gamberorosso.it/2020/03/cardoz.jpg", //chef indiano Floyd Cardoz(Tributo)
            "https://giornaledisegrate.it/wp-content/uploads/2020/01/DSC_2411-777x437.jpg", //chef Americano Joe Bastianich
            "https://reportergourmet.com/files/2021/09/Peppe-Cutraro-Miglior-Pizzaiolo-Europa.png?x36365", //Chef pizza Peppe Cutraro
            ],
          timer: null,
          currentIndex: 0,
          currentIndexStory: 0,
          currentIndexChef: 0,
        }
      },
      
        mounted: function() {
          this.startSlide();
        },
      
        methods: {
          startSlide: function() {
           this.timer = setInterval(this.next, 4000);
          },
      
      
          next: function() {
            this.currentIndex += 1
          },
          prev: function() {
            this.currentIndex -= 1
          }
        },
      
        computed: {
          currentImg: function() {
            return this.images[Math.abs(this.currentIndex) % this.images.length];
          },
          currentStory: function(){
            return this.story[Math.abs(this.currentIndex) % this.story.length];
          },
          currentChef: function() {
            return this.chef[Math.abs(this.currentIndex) % this.chef.length];
          }
        }
      
    }
    </script>
    
    <style>
    .fade-enter-active,
    .fade-leave-active {
      transition: all 0.9s ease;
      overflow: hidden;
      visibility: visible;
      position: absolute;
      width:100%;
      opacity: 1;
    }
    .fade-enter,
    .fade-leave-to {
      visibility: hidden;
      width:100%;
      opacity: 0;
    }
    img {
    height:600px;
    width:100%
      }
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.7s ease;
      border-radius: 0 4px 4px 0;
      text-decoration: none;
      user-select: none;
    }
    /* Position the "next button" to the right */
    .next {
      right: 0;
    }
    .prev {
      left: 0;
    }
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.9);
    }
    </style>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped lang="scss">
  h3 {
    margin: 40px 0 0;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    display: inline-block;
    margin: 0 10px;
  }
  a {
    color: #42b983;
  }
  .padding-x{
    padding-left: 2rem;
    padding-right: 2rem;
  }
  </style>
  