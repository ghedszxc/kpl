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
  /* SCROLLBAR */
  ::-webkit-scrollbar{
    /* height:0px;
    width:0px;
    border-radius: 0px; */
    height:10px;
    width:6px;
    border-radius: 4px;
    background: transparent;
    transition: all 0.3s ease;
  }
  ::-webkit-scrollbar:hover{
    /* background: transparent; */
    background: #c6c7ca;
  }
  ::-webkit-scrollbar-thumb{
    
    /* background: transparent; */
    background:#D3D3D3;
    border-radius: 4px;
  }

  /* FONTS */
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
  .small-desc-item{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif !important;
    font-size: 12px !important;
  }
  
  /* DIV FADES */
  @keyframes fadeInLeft {
    0% { opacity: 0; transform: translateX(-20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  @keyframes fadeInRight {
    0% { opacity: 0; transform: translateX(20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  .animate_one {
    animation-name: fadeInRight;
    background-position: left top;
    animation-duration: 3s;
  } 
  .animate_two {
    animation-name: fadeInLeft;
    background-position: right top;
    animation-duration: 3s;
  } 
  .animate_three {
    animation-name: fadeInRight;
    background-position: right top;
    animation-duration: 3s;
  } 
</style>
