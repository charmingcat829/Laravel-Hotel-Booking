<template>
  <div class="flex flex-col border border-t-0 border-blue-dark shadow-md">

    <div class="flex justify-between items-end text-grey-darkest hotel-header px-4 py-3
                border-t-4">
      <div class="flex flex-col">
        <span class="text-3xl font-thin text-left">
          {{ hotel.name }}
        </span>
        <span class="text-base text-black font-medium">
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

    <div class="w-full lg:flex p-2 bg-grey-lightest">
      <div class="h-64 lg:h-auto lg:w-64 flex-none bg-cover
                  text-center overflow-hidden"
           style="background-image: url('https://picsum.photos/300/?random')" title="Woman holding a mug">
      </div>

      <div class="border-l px-4 flex flex-col leading-normal text-left h-48">

        <div class="mb-8  p-2">
          <div class="text-black font-bold text-2xl mb-2">
            Can coffee make you a better developer?
          </div>
          <p class="text-grey-darker text-lg">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus quia, nulla! Maiores et perferendis eaque,
            exercitationem praesentium nihil.
          </p>
        </div>
      </div>

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
    border-top-color: #607e9f;
    /*text-shadow: 0 1px 2px rgba(0, 0, 0, .10);*/
  }
</style>