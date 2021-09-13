<template>
<div class="navbar m-4 shadow-lg bg-neutral-focus text-neutral-content rounded-box">
  <div class="px-2 mx-2 navbar-start">
    <span  class="text-lg font-bold">
           <router-link to="/dashboard">Dashboard</router-link>
          </span>
    </div>
  <div class="hidden px-2 mx-2 navbar-center lg:flex">
    <div class="flex items-stretch">
      <a class="btn btn-ghost btn-sm rounded-btn">
              <router-link to='/dashboard' exact>Home</router-link>
            </a> 
      <a class="btn btn-ghost btn-sm rounded-btn">
              <router-link to='/categories'>Categories</router-link>
            </a> 
    <a class="btn btn-ghost btn-sm rounded-btn">
              <router-link to='/foods'>Food's</router-link>
            </a> 
    </div>
  </div> 
  <div class="navbar-end">
  <div class="hidden px-2 mx-2 navbar-center lg:flex">
    <div class="flex items-stretch">
      <Logout/>
      <a class="btn btn-ghost btn-sm rounded-btn">
              <router-link to='/login'>Login</router-link>
            </a> 
      <a class="btn btn-ghost btn-sm rounded-btn">
              <router-link to='/register'>Register</router-link>
            </a> 
    </div>
  </div> 
  <div class="flex-none">
    <div class="avatar">
      <div class="rounded-full w-10 h-10 m-1">
        <img src="https://i.pravatar.cc/500?img=32">
      </div>
    </div>
  </div>
  </div>
</div>
</template>

<script>
import Logout from '../components/logout.vue'

export default {
    name: 'Header',

    components: {
      Logout
    },
    data(){
      return{
        user: null,
      }
    },
    async created(){
      try {
      await axios.get('http://127.0.0.1:8000/api/user', {
      headers: {
        'Authorization' : 'Bearer ' + localStorage.getItem('token')
      }
      }).then(response =>{
        this.user = response.data;
      });
      } catch (error) {
        console.log(error)
      }
    }
    
}
</script>