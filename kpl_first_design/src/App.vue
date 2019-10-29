<template>
  <v-app app>
    <router-view></router-view>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    //
  })
};
</script>
<style>
  .main_font{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif !important;
    font-weight: 700 !important;
  }
  .main_title{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif !important;
    font-weight: 800 !important;
    font-size: 16px !important;
  }
  .main_subheader{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif !important;
    font-weight: 400 !important;
    font-size: 13px !important;
  }
  .active{
    background-color: #616161;
  }
</style>
