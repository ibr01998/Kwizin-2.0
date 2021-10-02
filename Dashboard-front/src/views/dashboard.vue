<template>
<div class="">
<div class="m-4">
  <div class="w-full shadow stats shadow-lg ">
    <div class="stat bg-neutral-focus p-10">
      <div class="stat-title">Category's</div> 
      <div class="stat-value text-primary">10</div> 
    </div> 
    <div class="stat bg-neutral-focus p-10">
      <div class="stat-title">Orders Today</div> 
      <div class="stat-value text-info">2</div> 
    </div> 
    <div class="stat bg-neutral-focus p-10">
      <div class="stat-title">Total Orders</div> 
      <div class="stat-value text-info">54</div> 
    </div>
  </div>
</div>
<div class="m-4 bg-neutral-focus rounded-box">
 <div class="card lg:card-side bordered">
    <div class="card-body">
      <h2 class="card-title text-center">Welcome Back <span v-if="user">{{user.name}}</span></h2>
      <div class="avatar absolute inset-y-0 right-0 m-4">
      <div class="w-24 h-24 mask mask-hexagon">
      </div>
    </div> 
    </div>
  </div> 
</div>
  <div class="m-4 card bg-neutral ">
    <div class="m-4">
      <div class="card bg-neutral-focus rounded-box place-items-center w-full">
        <div class=" m-4 text-2xl font-semibold">Most Popular Food's</div>
      </div>
    </div>
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-2 xl:grid-cols-5 xl:gap-2">
    <Card show-price class="m-2"></Card>
    <Card show-price class="m-2"></Card>
    <Card show-price class="m-2"></Card>
    <Card show-price class="m-2"></Card>
    <Card show-price class="m-2"></Card>
  </div>
  </div>

</div>
</template>

<script>
import axios from 'axios'
import Card from '../components/Card.vue'

export default {
  name: 'Dashboard',
  components: {
    Card,
  },
  data(){
    return{
      user: null,
      categories: null
    }
  },
  async created() {
    try {
      await axios.get('http://127.0.0.1:8000/api/user', {
      headers: {
        'Authorization' : 'Bearer ' + localStorage.getItem('token')
      }
      }).then(response =>{
        this.user = response.data;
      });
    } catch (error) {
      console.log('not logged in')
    }

    
    }
}
</script>