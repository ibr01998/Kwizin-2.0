<template>
  <Header/>
  <router-view>
  </router-view>
  <Footer/>
</template>


<script>
import Header from './components/header.vue'
import Footer from './components/footer.vue'

export default{
  name: 'App',
  components: {
    Header,
    Footer,

  },
}
</script>

<style>


::-webkit-scrollbar {
  width: 12px;
  height: 12px;
}

::-webkit-scrollbar-track {
  border-radius: 100vh;
  background: #d1d5db;
}

::-webkit-scrollbar-thumb {
  background: #3d4451;
  border-radius: 100vh;
  border: 2px solid #edf2f7;
}

::-webkit-scrollbar-thumb:hover {
  background: #2a2e37;
}
.fade-enter-from,.fade-leave-to {
  opacity: 0;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease-out;
}

</style>