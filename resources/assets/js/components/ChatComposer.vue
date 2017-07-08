<template lang="html">
  <div class="chat-composer">
      <input type="text" placeholder="start typing your message...." v-model="messageText" @keyup.enter="sendMessage"/>
      <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
export default {
  data(){
    return {
      messageText: 'default'
    }
  },
  methods: {
    sendMessage(){
      this.$emit('messagesent',this.messageText);
      this.messageText = '';
    }
  }
}
</script>

<style lang="css">
.chat-composer{
  display: flex;
}

.chat-composer input {
  flex: 1 auto;
}

.chat-composer button {
  border-radius: 0;
}
</style>
