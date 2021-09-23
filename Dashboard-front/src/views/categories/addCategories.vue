<template>
  <div class="m-20 p-6 card bg-base-200 ">
    <form enctype="multipart/form-data">
      <div class="form-control pb-6">
        <input type="text" name="title" v-model="form.title" placeholder="Title" class="input">
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
          <input type="checkbox" class="toggle toggle-accent" name="featured" v-model="form.featured">
        </label>
      </div>
      <div class="form-control pb-6">
        <label class="cursor-pointer label">
          <span class="label-text">Active</span>
          <input type="checkbox" class="toggle toggle-accent" name="active" v-model="form.active" @change="test($event)">
        </label>
      </div>
      <div class="form-control">
        <button type="submit" @click.prevent="onSubmit()" class="btn glass">Add Categorie</button>
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
        active: Boolean,
        featured: Boolean,
      },
      image_name: null,
      errors: []
    }
  },
  methods: {
    async onSubmit(){

      let formData = new FormData()
      formData.append('image_name', this.image_name, this.image_name.name);
      formData.append('title', JSON.stringify(this.form.title));
      if (this.form.active === true){
        formData.append('active', 1);
      }else {
        formData.append('active', 0);
      }
      if (this.form.featured === true){
        formData.append('featured', 1);
      }else {
        formData.append('featured', 0);
      }

      console.log(formData);

      await axios.post('http://127.0.0.1:8000/api/Categories/add', formData,{
        headers: {
          'Authorization' : 'Bearer ' + localStorage.getItem('token'),
          'Content-Type': 'multipart/form-data; boundary=---------------------------974767299852498929531610575',
        }
      }).then(response =>{
        console.log(this.form);
        router.push('/Categories')
      });
    },

    uploadImage(event) {
      this.image_name = event.target.files[0];
      console.log(this.form);
    },
    test(event) {
      console.log(event);
    }
  }
}
</script>