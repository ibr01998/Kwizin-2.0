<template>
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-2 xl:grid-cols-5 xl:gap-2">
    <div v-for="categorie in categories" :key="categorie.id">
        <card show-action v-bind:name="categorie.title" v-bind:image="categorie.image" v-bind:active="categorie.active" v-bind:featured="categorie.featured" v-bind:id="categorie.id" class="m-4"></card>
      </div>
  </div>
  <FAB></FAB>
</template>

<script>
import Card from "../../components/Card.vue";
import FAB from "../../components/FAB.vue";
import axios from "axios";

export default {
  name: "Categories",
  data(){
    return{
      categories: [],
    }
  },
  components: {
    Card,
    FAB,


  },
  async created() {
    try {
      await axios.get('http://127.0.0.1:8000/api/Categories', {
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token')
        }
      }).then(response =>{
        this.categories = response.data;
        for (let i = 0; i < this.categories.length; i++){
          let hey =  this.categories[i].title.replace(/['"]+/g, '');
          this.categories[i].title = hey;
          console.log(hey);
        }
        console.log(this.categories)
      });
    } catch (error) {
      console.log('not logged in')
    }
  }
}
</script>

<style>


</style>