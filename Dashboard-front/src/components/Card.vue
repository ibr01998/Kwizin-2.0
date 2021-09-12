<template>
    <div class="inline-block card bg-neutral-focus shadow-2xl text-neutral-content w-1/4">
      <figure class="">
        <img src="https://picsum.photos/id/1005/300/200" class="rounded-lg shadow-lg">
      </figure>
      <div class="max-w-md card-body">
        <h2 class="card-title">Glass</h2>
        <button class="btn glass rounded-full">$ 55</button>

        <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
        <div class="card-actions">
          <button class="btn btn-info p-2 rounded-full shadow-2xl">edit</button>
          <button class="btn btn-error rounded-full">Delete</button>
        </div>
      </div>
    </div>


</template>

<script>
export default {
  name: "Card"
}
</script>

<style scoped>

</style>