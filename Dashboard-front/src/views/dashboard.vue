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
      <h2 class="card-title">Welcome Back</h2> 
      <p v-if="user">{{user.name}}</p> 
      <div class="avatar absolute inset-y-0 right-0 m-4">
      <div class="mb-8 w-24 h-24 mask mask-hexagon">
      <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
      </div>
    </div> 
    </div>
  </div> 
</div>
    <div class="m-4">
      <div class="card bg-neutral-focus rounded-box place-items-center">
        <div class=" m-4 text-2xl font-semibold">Most Popular Food's</div>
      </div>
    </div>
    </div>
  <div class="justify-center flex">
    <Card class="m-4"></Card>
    <Card class="m-4"></Card>
    <Card class="m-4"></Card>
    <Card class="m-4"></Card>

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