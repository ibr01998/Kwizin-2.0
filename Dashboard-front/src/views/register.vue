<template>
    <div class="m-20 p-6 card bg-base-200 ">
        <form>
        <div class="form-control pb-6">
        <input type="text" name="name" v-model="form.name" placeholder="Username" class="input">
        </div>
        <div class="form-control pb-6">
        <input type="email" name="email" v-model="form.email" placeholder="E-mail" class="input">
        </div>
        <div class="form-control pb-6">
        <input type="password" name="password" v-model="form.password" placeholder="Password" class="input">
        </div>
        <div class="form-control pb-6">
        <input type="password" name="password_confirmation" v-model="form.password_confirmation" placeholder="Comfirm Password" class="input">
        </div>
        <div class="form-control">
        <button type="submit" @click.prevent="onSubmit(form)" class="btn glass">Register</button>
        </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {    
    name: 'login',
    data(){
        return{
            form:{
                name: '',
                email: '',
                password: '',
                password_confirmation: ''  
            },
            errors: []
        }
    },
    methods: {
        async onSubmit(form){
            await axios.post('http://127.0.0.1:8000/api/register', form).then(response =>{
                console.log(response);
            });
        }
    }
}
</script>