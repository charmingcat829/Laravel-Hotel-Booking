<template>
  <div class="container mx-auto px-16">
    <h1>Hotels</h1>

    <ul class="list-reset">
      <li class="my-8 py-3 bg-grey-lighter" v-for="hotel in hotels" :key="hotel.id">
        <div class="flex flex-col bg-grey-lighter">

          <div class="text-grey-darker bg-grey-lightest px-4 py-2 m-2 text-left">
            <span class="text-3xl font-bold">
              {{ hotel.name }}
            </span>

            <span>
              {{ hotel.address }}
            </span>
          </div>

          <div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2">2</div>
          <div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2">3</div>
        </div>

      </li>
    </ul>

  </div>
</template>

<script lang="ts">
  import {Component, Prop, Vue} from 'vue-property-decorator';
  import { Hotel } from '@/classes/HotelInterface';
  import axios from 'axios';

  @Component
  export default class HelloWorld extends Vue {
    @Prop() private msg!: string;
    hotels: Hotel[] = [];

    async mounted() {
      console.log('mounted, getting hotels?');
      this.hotels = (await this.getHotels(1)).data;
      console.log(this.hotels)
    }

    async getHotels(page: number): any[] {
      let response;
      console.log('in get users');
      return axios.get(`api/hotels`);
    }

  }
</script>
<style scoped>

</style>