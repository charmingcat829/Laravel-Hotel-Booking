<template>
  <div class="container mx-auto mt-8">
    <div class="flex">

      <div class="flex flex-row">

        <div class="flex-shrink px-4 py-3 mr-4 border border-blue-dark rounded w-64 h-auto max-h-screen shadow-md">
          <h1 class="font-normal border-b-2"> Filters </h1>

          <div class="my-5">
            <label class="block text-grey-darker text-base font-bold mb-2 text-left" for="hotelName">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3
                           text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                   id="hotelName" v-model="searchTerm" placeholder="Hotel Name">
          </div>

        </div>

        <div class="flex flex-col flex-1">
          <hotel-detail class="mb-5" v-for="hotel in filteredHotels" :key="hotel.id" :hotel="hotel"></hotel-detail>
        </div>

      </div>

    </div>
  </div>
</template>

<script lang="ts">
  import { Component, Prop, Vue } from 'vue-property-decorator';
  import { Hotel } from '@/classes/HotelInterface';
  import HotelDetail from './HotelDetail';
  import axios from 'axios';

  @Component({
    components: { HotelDetail }
  })
  export default class HotelList extends Vue {
    @Prop() private msg!: string;
    hotels: Hotel[] = [];
    searchTerm: string = "";

    async mounted() {
      console.log('mounted, getting hotels?');
      this.hotels = (await this.getHotels(1)).data;
      console.log(this.hotels)
    }

    async getHotels(page: number): Hotel[] {
      console.log('in get users');
      return axios.get(`api/hotels`);
    }

    get filteredHotels(): Hotel[] {
      if (this.searchTerm.length === 0) return this.hotels;

      return this.hotels.filter(hotel => {
        const index: Number = hotel.name.toLowerCase().indexOf(this.searchTerm.toLowerCase())
        console.log(this.searchTerm, hotel.name, index)
        return hotel.name.toLowerCase().indexOf(this.searchTerm.toLowerCase()) >= 0;
      });
    }

  }
</script>
<style scoped>

</style>