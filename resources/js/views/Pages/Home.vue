<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-12 px-10 h-screen">
            <div class="container">
                <div class="flex flex-col items-center w-full">
                    <img class="rounded-full" width="200px" title="Kafri Bung" :src="'img_users/kafri.png'" alt="Error">
                    <div class="font-extrabold text-2xl mt-2">Kafriansyah</div>
                    <div class="flex justify-center  mt-1">
                        <div class="font-light font-serif text-xl mx-auto">He/Him. 21  y/o Web Developer,  Traveling and Foodies . More about me on <router-link to="/about"  class="text-blue-400 hover:font-semibold">Now</router-link>. My thought visible on <router-link to="/blog"  class="text-blue-400 hover:font-semibold">Blogs</router-link></div>
                    </div>
                    <div class="mt-5">
                        <a :href="'https://github.com/kafribung'" target="blank" class="text-3xl mr-5 hover:text-blue-400"><i class="fa fa-github"></i></a>
                        <a :href="'https://www.instagram.com/kafri_bung/'" target="blank" class="text-3xl mr-5 hover:text-blue-400"><i class="fa fa-instagram"></i></a>
                        <a :href="'https://id.linkedin.com/in/kafriansyah-kafriansyah-633359179'" target="blank" class="text-3xl mr-5 hover:text-blue-400"><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Hero -->
        <Footer />
    </div>
</template>

<script>
import Navbar from "../../components/Navbar";
import Footer from '../../components/Footer'
export default {
    components: {
        Navbar,
        Footer
    }
};
</script>
