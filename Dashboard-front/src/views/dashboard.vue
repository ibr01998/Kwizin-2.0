<template>
<div class="">
<div class="m-4">
  <div class="w-full shadow stats shadow-lg ">
    <div class="stat bg-neutral p-10">
      <div class="stat-title">Category's</div> 
      <div class="stat-value text-primary">10</div> 
    </div> 
    <div class="stat bg-neutral p-10">
      <div class="stat-title">Orders Today</div> 
      <div class="stat-value text-info">2</div> 
    </div> 
    <div class="stat bg-neutral p-10">
      <div class="stat-title">Total Orders</div> 
      <div class="stat-value text-info">54</div> 
    </div>
  </div>
</div>
<div class="m-4 bg-neutral rounded-box">
 <div class="card lg:card-side bordered">
    <div class="card-body">
      <h2 class="card-title">Welcome Back</h2> 
      <p v-if="user">{{user.name}}</p> 
      <div class="avatar absolute inset-y-0 right-0 m-4">
      <div class="mb-8 w-24 h-24 mask mask-hexagon">
      <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
      </div>
    </div> 
    </div>
  </div> 
</div>

<div class="m-4">
  <div class="flex flex-row w-full">
    <div class="grid flex-grow  card bg-neutral rounded-box place-items-center">
      <div class="m-2 text-2xl font-semibold">Recent Orders</div>
<div class="overflow-x-auto p-4 w-full">
  <table class="table w-full">
    <thead>
      <tr>
        <th>
        </th> 
        <th>Name</th> 
        <th>Order</th> 
        <th>Amount</th> 
        <th></th>
      </tr>
    </thead> 
    <tbody>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3"> 
            <div>
              <div class="font-bold">
                    Hart Hagerty
                  </div> 
              <div class="text-sm opacity-50">
                    United States
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Zemlak, Daniel and Leannon
            
          <br> 
        </td> 
        <td>Purple</td> 
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="font-bold">
                    Brice Swyre
                  </div> 
              <div class="text-sm opacity-50">
                    China
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Carroll Group
            
          <br> 
          <span class="badge badge-outline badge-sm">Tax Accountant</span>
        </td> 
        <td>Red</td> 
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="font-bold">
                    Marjy Ferencz
                  </div> 
              <div class="text-sm opacity-50">
                    Russia
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Rowe-Schoen
            
          <br> 
          <span class="badge badge-outline badge-sm">Office Assistant I</span>
        </td> 
        <td>Crimson</td> 
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="font-bold">
                    Yancy Tear
                  </div> 
              <div class="text-sm opacity-50">
                    Brazil
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Wyman-Ledner
            
          <br> 
          <span class="badge badge-outline badge-sm">Community Outreach Specialist</span>
        </td> 
        <td>Indigo</td> 
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
    </tbody> 
  </table>
</div>
    </div> 
<div class="divider divider-vertical"></div> 
  <div class="grid flex-grow card bg-neutral rounded-box place-items-center">
    <div class=" m-2 text-2xl font-semibold">Most Popular Food's</div>
      <div class="overflow-x-auto p-4 w-full">
  <table class="table w-full">
    <thead>
      <tr>
        <th>
        </th> 
        <th>Food</th> 
        <th>Category</th> 
      </tr>
    </thead> 
    <tbody>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3"> 
            <div>
              <div class="font-bold">
                    Hart Hagerty
                  </div> 
              <div class="text-sm opacity-50">
                    United States
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Zemlak, Daniel and Leannon
            
          <br> 
        </td> 
      </tr>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="font-bold">
                    Brice Swyre
                  </div> 
              <div class="text-sm opacity-50">
                    China
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Carroll Group
          <br> 
        </td> 
      </tr>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="font-bold">
                    Marjy Ferencz
                  </div> 
              <div class="text-sm opacity-50">
                    Russia
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Rowe-Schoen
          <br> 
        </td> 
      </tr>
      <tr>
        <th>
        </th> 
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="font-bold">
                    Yancy Tear
                  </div> 
              <div class="text-sm opacity-50">
                    Brazil
                  </div>
            </div>
          </div>
        </td> 
        <td>
            Wyman-Ledner
          <br> 
        </td> 
      </tr>
    </tbody> 
  </table>
</div>
    </div>
  </div>
</div>
</div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Dashboard',
  data(){
    return{
      user: null,
      categories: null
    }
  },
  async created() {
    try {
      await axios.get('http://127.0.0.1:8000/api/user', {
      headers: {
        'Authorization' : 'Bearer ' + localStorage.getItem('token')
      }
      }).then(response =>{
        this.user = response.data;
      });
    } catch (error) {
      console.log('not loggedin')
    }

    
    }
}
</script>