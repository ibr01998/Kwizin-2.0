<template>
  <div class="m-4 sm:justify-center wrapper page-loader">
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
      categories: []
    }
  },
  components: {
    Card,
    FAB
  },
  async created() {
    try {
      await axios.get('http://127.0.0.1:8000/api/Categories', {
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token')
        }
      }).then(response =>{
        this.categories = response.data;
        console.log(this.categories)
      });
    } catch (error) {
      console.log('not logged in')
    }
  }
}
</script>

<style>
@media only screen and (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
}

</style>