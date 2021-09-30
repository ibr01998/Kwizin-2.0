<template>

    <div class="justify-center flex">
      <div class="lg:inline-block w-5/6 card bg-neutral-focus shadow-2xl text-neutral-content w-1/4">
        <figure class="">
          <img :src="image" class="rounded-lg shadow-lg h-52">
        </figure>
        <div class="max-w-md card-body">
          <h2 class="card-title">{{name}}</h2>
          <button v-if="showPrice" class="btn glass rounded-full">$ 55</button>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Featured</span>
              <input type="checkbox" disabled="disabled" :checked="featured" class="checkbox">
            </label>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Active</span>
              <input type="checkbox" disabled="disabled" :checked="active" class="checkbox">
            </label>
          </div>
          <div class="card-actions">
            <router-link :to="`/categories/edit/${id}`">
              <button v-if="showAction"  class="btn btn-info p-2 rounded-full shadow-2xl">edit</button>
            </router-link>
            <button v-if="showAction" @click="Delete(id)" class="btn btn-error rounded-full">Delete</button>
          </div>
        </div>
      </div>
    </div>

</template>

<script>
import axios from "axios";

export default {
  name: "Card",
  props:{
    'id': {
      type: Number,
      default: 0,
    },
    'showAction': {
      type: Boolean,
      default: false,
    },
    'showPrice': {
      type: Boolean,
      default: false,
    },
    'name': {
      type: String,
    },
    'image': {
      type: String,
    },
    'featured': {
      type: Boolean,
      default: false,

    },
    'active': {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    async Delete(id){

      await axios.delete('http://127.0.0.1:8000/api/Categories/'+id, {
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token')
        }
      }).then(response =>{
        console.log(response);
        location.reload();

      });
    }
  }

}
</script>

<style scoped>

</style>