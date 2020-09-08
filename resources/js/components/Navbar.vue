<template>
    <div>
        <!-- Header -->
        <header class="py-5 px-10">
            <nav  class="flex justify-between flex-wrap text-black text-lg font-semibold">
                <div class="flex">
                    <div class="text-2xl uppercase">Nomads Dev</div>
                </div>
                <div class="block md:hidden">
                    <button @click.prevent="showNavbar" class="px-2 py-1 border rounded text-black border-blue-400 hover:text-blue-400 hover:border-black focus:outline-none">
                        <svg class="w-5 h-5 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"> <path :class="toogle ? 'hidden': 'block'"  d="M4 6h16M4 12h16m-7 6h7"></path> <path  :class="toogle ? 'block': 'hidden'" d="M6 18L18 6M6 6l12 12"></path> </svg>
                    </button>
                </div>
                <div class="w-full hidden md:flex md:items-center md:w-auto">
                    <div class="md:flex text-sm list-none">
                        <li>
                            <router-link :to="'/'" class="mt-3 md:mt-0 block mr-0 md:mr-8  hover:text-blue-400">Home</router-link>
                        </li>
                        <li>
                            <router-link :to="'/about'" class="mt-3 md:mt-0 block mr-0 md:mr-8  hover:text-blue-400">About</router-link>
                        </li>
                        <li>
                            <router-link :to="{name:'Blog'}" class="mt-3 md:mt-0 block mr-0 md:mr-8  hover:text-blue-400">Blog</router-link>
                        </li>
                        <li>
                            <router-link :to="'/contact'" class="mt-3 md:mt-0 block mr-0 md:mr-8 hover:text-blue-400">Contact</router-link>
                        </li>
                    </div>
                    <div class="mt-3 md:mt-0">
                        <button  type="submit" class="bg-white border border-black rounded-md shadow-sm text-black text-sm py-1 px-2 hover:border-blue-400 hover:font-bold">Get CV</button>
                    </div>
                </div>
                <!-- Navbar Mobile -->
                <div :class="toogle ? 'flex': 'hidden'" class="w-full flex flex-grow  md:hidden justify-center items-center mt-5">
                    <div class="flex flex-grow text-sm mt-3">
                        <router-link :to="'/'" class="block mr-2 md:mr-0 hover:text-blue-400 focus:underline">Home</router-link>
                        <router-link :to="'/about'" class="block  mr-2 md:mr-0 hover:text-blue-400">About</router-link>
                        <router-link :to="{name:'Blog'}" class="block mr-2 md:mr-0 hover:text-blue-400">Blog</router-link>
                        <router-link :to="'/contact'" class="block md:mr-0 hover:text-blue-400">Contact</router-link>
                    </div>
                    <div class="">
                        <button  type="submit" class="py-1 px-4 border rounded text-black border-blue-400 hover:text-blue-400 hover:border-black focus:outline-none uppercase">cv</button>
                    </div>
                </div>
            </nav>
        </header>
    <!-- End Header -->
    </div>
</template>

<script>
export default {
    data() {
        return {
        toogle: false,
        }
    },
    methods: {
        showNavbar() {
            this.toogle = !this.toogle;
        }
    },
};
</script>
