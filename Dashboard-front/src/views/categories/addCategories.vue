<template>
  <div class="m-20 p-6 card bg-base-200 ">
    <form>
      <div class="form-control pb-6">
        <input type="text" name="title" v-model="form.title" placeholder="Title" class="input">
      </div>
      <div class="form-control pb-6">
        <label>
          <snap class="label-text mr-2">Add Image</snap>
          <input type="file" name="image" class="">
        </label>
      </div>
      <div class="form-control pb-6">
        <label class="cursor-pointer label">
          <span class="label-text">Featured</span>
          <input type="checkbox" class="toggle toggle-accent" name="featured" v-model="form.featured">
        </label>
      </div>
      <div class="form-control pb-6">
        <label class="cursor-pointer label">
          <span class="label-text">Active</span>
          <input type="checkbox" class="toggle toggle-accent" name="active" v-model="form.active">
        </label>
      </div>
      <div class="form-control">
        <button type="submit" @click.prevent="onSubmit(form)" class="btn glass">Add Categorie</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";
import router from "../../router";

export default {
  name: "AddCategories",
  data(){
    return{
      form:{
        title: '',
        image: '',
        active: Boolean,
        featured: Boolean,

      },
      errors: []
    }
  },
  methods: {
    async onSubmit(form){

      await axios.post('http://127.0.0.1:8000/api/Categories/add', form,{
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token')
        }
      }).then(response =>{
        console.log(response);
        router.push('/Categories')
      });
    }
  }
}
</script>