<template>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="m-20 p-6 card bg-base-200">
        <form @submit.prevent="onSubmit(form)">
        <div class="form-control pb-6">
        <input type="email" name="email" v-model="form.email" placeholder="E-mail" class="input">
        </div>
        <div class="form-control pb-6">
        <input type="password" name="password" v-model="form.password" placeholder="Password" class="input">
        </div>
        <input type="hidden" name="_token" v-model="form._token">
        <div class="form-control">
        <button type="submit" class="btn glass">Login</button>
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
                email: '',
                password: '',
                _token: ''
            },
            errors: []
            
        }
    },
    methods: {
        async onSubmit(form){


            console.log(form);

            // const res = await fetch('http://127.0.0.1:8000/api/login', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',},
            //     credentials: 'include',
            //     body: JSON.stringify(form)
            // });
               
            // console.log(res);

            await axios.post('http://127.0.0.1:8000/api/login', form).then(response =>{
                localStorage.setItem('token', response.data.token);
                console.log(response);
            });


        }
    }
}
</script>