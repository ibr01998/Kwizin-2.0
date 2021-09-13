<template>
  <a>
    <router-link to='/categories/add'>
      <div class="fab-container">
        <div class="fab-icon-holder">
          <button class="fas fa-question btn btn-circle bg-neutral shadow-2xl p-8">
            +
          </button>
        </div>
      </div>
    </router-link>
  </a>

</template>

<script>
export default {
  name: "FAB"
}
</script>

<style>
.fab-container{
  position: fixed;
  bottom: 20px;
  right: 50px;
  z-index: 999;
  cursor:pointer;
}

.fab-icon-holder{
  width:50px;
  height: 50px;

  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}

.fab-icon-holder:hover{
  opacity: 0.8;
}

.fab-icon-holder button{
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 100px;
  font-size: 20px;
  color: white;
}
</style>