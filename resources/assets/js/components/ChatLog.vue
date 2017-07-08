<template lang="html">
  <div class="chat-log">
    <chat-message v-for="(message, i)  in messages" v-bind:message="message"></chat-message>
  </div>

</template>

<script>
    var ChatMessage = require('./ChatMessage.vue');
export default {
  data(){
    return{
      messages: [
        {
          message : 'Hey',
          user: 'test 2'
        },
        {
          message : 'Hello',
          user: 'test 1'
        }
      ]
    }
  }
}
</script>

<style lang="css">
</style>
