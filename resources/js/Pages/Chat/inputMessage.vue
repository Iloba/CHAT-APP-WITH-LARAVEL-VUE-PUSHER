<template>
    <div class="relative h-10 m-1">
        <div style="border-top: 1px solid #e6e6e6" class="grid grid-col-6">
            <input type="text" v-model="message" @keyup.enter="sendMessage()" name="" placeholder="Say Something">
        </div>
    </div>
</template>

<script>
export default {
   props: ['room']
}
</script>