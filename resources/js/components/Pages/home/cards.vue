<template>
    <div>
  <v-layout rowwrap>
      <v-flex xs12 sm6 md3 lg4 v-for="item in items" :key="item.title">
    <v-card
      class="text-lg-center ma-2"
      max-width="400"
    >
      <v-img
        :src="item.src"
        height="200px"
      ></v-img>
  
      <v-card-title>
        {{item.title}}
      </v-card-title>
  
      <v-card-subtitle>
        {{item.subtitle}}
      </v-card-subtitle>
  
      <v-card-actions>
        <v-btn
          color="orange lighten-2"
          text
        to='/about'
        >
          Explore
        </v-btn>
  
        <v-spacer></v-spacer>
  
        <v-btn
          icon
          @click="item.showdetails = !item.showdetails"
        >
          <v-icon>{{ showdetails ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
        </v-btn>
      </v-card-actions>
  
      <v-expand-transition>
        <div v-show="item.showdetails">
          <v-divider></v-divider>
  
          <v-card-text>
            {{item.text}}
          </v-card-text>
        </div>
      </v-expand-transition>
    </v-card>
      </v-flex>
  </v-layout>
</div>
</template>
<script>
export default {

  data: () => ({
    showdetails:false,
    items:[
        {title:' Vehicle Cost Prediction',subtitle:' Find estimate cost',text:'You can estimate your damage car cost using claim paul. Upload images of the car and claim paul is ready to estimate your cost', src: 'https://picsum.photos/800/800',showdetails:false},
        {title:' Find Garage',subtitle:'View nearest garage',text:'Need a garage? Claim paul is ready for find the nerest and recommended garages nearby location.',src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg',showdetails:false},
        {title:' Find Spare Parts',subtitle:'View nearest spare parts shops',text:'Are you looking spare parts for your vehicle. Claim paul can find you to best shop for you nearby your location',src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg',showdetails:false},
        {title:' FAQ',subtitle:'Frequently Asked Questions',text:'Questions related to site',src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg',showdetails:false}
    ]
  }),
}
</script>
