<template>
  <div class="m-20 p-6 card bg-base-200 ">
    <form enctype="multipart/form-data">
      <div class="form-control pb-6">
        <input type="text" name="title" v-model="categories.title" placeholder="Title" class="input">
      </div>
      <div class="form-control pb-6">
        <label>
          <snap class="label-text mr-2">Add Image</snap>
          <input type="file" name="image_name" class="" @change="uploadImage($event)">
        </label>
      </div>
      <div class="form-control pb-6">
        <label class="cursor-pointer label">
          <span class="label-text">Featured</span>
          <input type="checkbox" class="toggle toggle-accent" name="featured" v-model="categories.featured" checked="{{categories.featured}}">
        </label>
      </div>
      <div class="form-control pb-6">
        <label class="cursor-pointer label">
          <span class="label-text">Active</span>
          <input type="checkbox" class="toggle toggle-accent" name="active" v-model="categories.active" checked="{{categories.active}}">
        </label>
      </div>
      <div class="form-control">
        <button type="submit" @click.prevent="onSubmit()" class="btn glass">Update Categorie</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";
import router from "../../router";

export default {
  name: "EditCategories",
  data(){
    return{
      form:{
        title: '',
        active: Boolean,
        featured: Boolean,
      },
      image_name: null,
      id: Number,
      categories: null,
      errors: []
    }
  },
  async created() {
    this.id = this.$route.params.id;

    try {
      await axios.get('http://127.0.0.1:8000/api/Categories/'+ this.id, {
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token')
        }
      }).then(response =>{
        this.categories = response.data;
        let hey =  this.categories.title.replace(/['"]+/g, '');
        this.categories.title = hey;
        console.log(this.categories)
      });
    } catch (error) {
      console.log('not logged in')
    }
  },
  methods: {
    async onSubmit(){

      await axios.put('http://127.0.0.1:8000/api/Categories/'+ this.id, this.categories,{
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token'),
          'Content-Type': 'multipart/form-data; boundary=---------------------------974767299852498929531610575',
        }
      }).then(response =>{
        console.log(this.form);
        router.push('/Categories')
      });
    },
  }
}
</script>