<template>
  <div class="m-4">
      <ul class="menu py-3 shadow-lg bg-neutral-focus rounded-box">
        <li class="menu-title">
          <span>
            <div class="float-left">
              Menu
            </div>
          <div class="">
               <button  @click="hide()" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current text-error float-right">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
            </div>
        </span>
        </li>
        <li>
          <router-link to="Dashboard">
            <a>
              Home
            </a>
          </router-link>
        </li>
        <li>
          <router-link to="Categories">
            <a>
              Category
            </a>
          </router-link>
        </li>
        <li>
          <router-link to="Foods">
            <a>
              Food
            </a>
          </router-link>
        </li>
      </ul>
  </div>
</template>

<script>
export default {
  name: 'MobileMenu',
  methods: {
    hide(){
      this.$parent.showMenu = false;
    }
  }
}
</script>