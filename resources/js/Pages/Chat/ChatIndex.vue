<script setup>
import ChatLayout from "@/Layouts/ChatLayout.vue";
</script>
<template>
    <ChatLayout>
        <template #aside> </template>
        <div class="w-full flex text-white"></div>
        <template #form>
            <section class="px-6 top-0">
                <div class="w-full">
                    <div class="relative flex-1 flex items-center">
                        <input
                            type="text"
                            class="w-full bg-slate-700 text-white rounded-lg"
                            placeholder="Ask Laravel AI"
                        />
                    </div>
                </div>
            </section>
        </template>
    </ChatLayout>
</template>
