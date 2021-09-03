<template>
    <button @click="logout">logout</button>
</template>

<script>
import axios from 'axios'
export default {
    name: 'Logout',
    methods: {
        async logout(){
            const res = await fetch('http://127.0.0.1:8000/api/logout', {
                method: 'POST',
                headers: {
                    'Authorization' : 'Bearer ' + localStorage.getItem('token')},
            }).then(response => {
                localStorage.removeItem('token');
            }
            );
            console.log(res);
        }
    }
}
</script>