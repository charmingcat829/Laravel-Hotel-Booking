<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HotelList msg="Welcome to Your Vue.js + TypeScript App"/>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import HotelList from '@/components/hotels/HotelList.vue'; // @ is an alias to /src

@Component({
  components: {
    HotelList,
  },
})
export default class Home extends Vue {}
</script>
