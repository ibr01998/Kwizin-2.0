<template>
    <div class="m-4 justify-center md:flex lg:flex">
      <card show-action class="m-4"></card>
      <card show-action class="m-4"></card>
      <card show-action class="m-4"></card>
      <card show-action class="m-4"></card>
    </div>
    <div class="m-4 justify-center md:flex lg:flex">
      <card show-action class="m-4"></card>
      <card show-action class="m-4"></card>
      <card show-action class="m-4"></card>
      <card show-action class="m-4"></card>
    </div>
  <FAB></FAB>
</template>

<script>
import Card from "../../components/Card.vue";
import FAB from "../../components/FAB.vue";

export default {
  name: "Categories",
  components: {
    Card,
    FAB
  },
}
</script>

<style>

</style>