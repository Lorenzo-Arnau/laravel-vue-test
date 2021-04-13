<template>
    <div >
        {{catalogue.model}}
        {{catalogue.price}}
    </div>
</template>

<script>
  export default {
  name: 'BaseComponent',
  props: {
    catalogue: Object
  }
}
</script>

<style scoped>

</style>
