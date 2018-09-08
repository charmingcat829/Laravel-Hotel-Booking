<template>
  <div class="flex flex-col bg-gray-lighter">

    <div class="flex justify-between items-end text-grey-lightest bg-blue-dark hotel-header px-4 py-2">
      <div class="flex flex-col">
        <span class="text-3xl font-bold text-left">
          {{ hotel.name }}
        </span>
        <span class="text-base text-white font-medium">
          {{ hotel.address }} {{ hotel.city }}, {{ hotel.state }} {{ hotel.zip }}
        </span>
      </div>

      <div>
        <span class="text-3xl">
          ${{ hotel.price }}
        </span>
        <span class="text-xl">
          a night
        </span>
      </div>

    </div>

    <div class="text-grey-darker text-left bg-grey-lightest px-4 py-4 m-2 border-2 rounded">

    </div>

  </div>
</template>

<script lang="ts">
  import {Component, Prop, Model, Vue} from 'vue-property-decorator';
  import { Hotel } from '@/classes/HotelInterface';

  @Component
  export default class HotelDetail extends Vue {
    @Prop() private hotel: Hotel;
  }
</script>

<style scoped>
  .hotel-header {
    text-shadow: 0 1px 2px rgba(0, 0, 0, .30);
  }
</style>