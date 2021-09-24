<template>
    <div class="relative h-10 m-1">
        <div style="border-top: 1px solid #e6e6e6" class="grid grid-col-6">
            <input type="text" v-model="message" @keyup.enter="sendMessage()" placeholder="Say Something" 
            class="col-span-5 outline-none p-1"/>
           
            <button @click="sendMessage()" class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white">
                Send Message
            </button>
        </div>
    </div>
</template>

<script>
export default {
   props: ['room'],
   data: function(){
       return{
           message: ''
       }
   },
   methods:{
       sendMessage(){
          //validate form
          if(this.message = ''){
              return;
          }

          axios.post('chat/room/' + this.room.id + 'message', {
              message: this.message
          }).then(res => {
              //check if request was successful
              if(res.status == 201){
                  this.message = '';
                  this.$emit('messageSent');
              }
          }).catch(error => {
              console.log(error);
          })

       }
   }
}
</script>