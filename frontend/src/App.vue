<template>
  <div id="app">
     <div class="flex justify-between bg-grey-darker py-5" id="nav">

       <div>
          <router-link class="text-2xl px-5" to="/">Home</router-link>
          <router-link class="text-2xl px-5 " to="/hotels">Hotels</router-link>
        </div>

       <div>
          <router-link class="text-2xl px-5" to="/profile">Profile</router-link>
        </div>
      </div>

    <router-view/>

  </div>
</template>

<style lang="scss">
@import 'assets/styles/tailwind.postcss';

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  background-color: #36495d;
  a {
    text-decoration: none;
    font-weight: bold;
    color: #b7dcff;
    &.router-link-exact-active {
      color: #59ffb5;
    }
  }
}
</style>
