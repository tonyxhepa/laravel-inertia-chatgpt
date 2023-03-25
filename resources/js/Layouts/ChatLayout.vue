<script setup></script>
<template>
    <aside
        class="ml-[-100%] fixed z-10 top-0 pb-3 px-4 w-full flex flex-col justify-between h-screen border-r border-slate-700 bg-slate-800 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]"
    >
        <div>
            <slot name="aside" />
        </div>
    </aside>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <div class="pt-6">
            <main>
                <slot />
            </main>
        </div>
        <div
            class="fixed z-20 lg:w-[75%] xl:w-[80%] 2xl:w-[85%] bottom-0 h-28 bg-slate-900 bg-opacity-70 shadow-2xl lg:py-2.5"
        >
            <slot name="form" />
        </div>
    </div>
</template>
