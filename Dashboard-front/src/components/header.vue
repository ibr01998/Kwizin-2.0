<template>
  <div>
    <mobile-menu v-if="showMenu"></mobile-menu>
  </div>
  <div v-if="!showMenu">
    <div class="navbar m-4 shadow-lg bg-neutral-focus text-neutral-content rounded-box">
      <div class="flex sm:flex md:hidden lg:hidden xl:hidden">
        <button v-on:click="showMenu = !showMenu" class="btn btn-square btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="flex-1 px-2 mx-2 lg:flex">
    <span class="text-lg font-bold">
            Dashboard
          </span>
      </div>
      <div class="hidden px-2 mx-2 navbar-center md:flex lg:flex">
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
        <div class="dropdown dropdown-end">
          <div class="flex-none">
            <div class="avatar">
              <div tabindex="0" class="btn btn-ghost rounded-btn ">
                <div class="rounded-full w-10 h-10 m-1">
                  <img src="https://i.pravatar.cc/500?img=32" class="rounded-full w-10 h-10 m-1">
                </div>
              </div>
              <ul tabindex="0" class="p-2 mt-12 shadow menu dropdown-content bg-neutral w-52 rounded-lg" >
                <li>
                  <a>Profile</a>
                </li>
                <li>
                  <a>Settings</a>
                </li>
                <div v-if="user">
                  <li>
                    <a @click="logout">Logout</a>
                  </li>
                </div>
                <div v-if="!user">
                  <li>
                    <router-link to="/Login">
                      <a>Login</a>
                    </router-link>
                  </li>
                </div>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Logout from '../components/logout.vue'
import mobileMenu from "../components/mobileMenu.vue"
import axios from "axios";

export default {
    name: 'Header',

    components: {
      Logout,
      mobileMenu
    },
    data(){
      return{
        user: null,
        showMenu: false,
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
        console.log('not logged in')
      }
    },
    updateValue(showMenu){
      this.showMenu = showMenu;
    },
  methods:{
    async logout(){
      const res = await fetch('http://127.0.0.1:8000/api/logout', {
        method: 'POST',
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token')},
      }).then(response => {
            localStorage.removeItem('token');
            this.loggin = false;
            window.location.href = "/login";

          }
      );
      console.log(res);
    }
  }
}
</script>