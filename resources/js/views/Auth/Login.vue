<template>
    <div>
        <div class="flex justify-center items-center h-screen">
            <div class="bg-white shadow-lg px-12 py-10 rounded-t-lg max-w-2xl">
                <div class="text-xl font-bold mb-2">{{ from.password  }}</div>
                <div class="text-xl font-bold mb-2">Login</div>
                <form action="" v-on:submit.prevent="login">
                    <div class="mb-2">
                        <label for="username" class="block text-sm mb-2">Email</label>
                        <input type="text" v-model="from.email"  class="shadow w-full border py-1 px-3 border-gray-500 rounded-md leading-tight focus:outline-none focus:shadow-outline" placeholder="email" id="username">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="block text-sm mb-2">Password</label>
                        <input type="password" v-model="from.password"  name="password" class="shadow w-full border py-1 px-3 border-gray-500 rounded-md leading-tight focus:outline-none focus:shadow-outline" placeholder="Password" id="password">
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <button class="bg-blue-500  hover:bg-blue-700 text-white mr-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Sign In
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            from: {
                email :'',
                password: ''
            },
            validations : [],
        }
    },
    methods: {
        login(){
            this.axios
            .post('http://127.0.0.1:8000/api/login', this.from)
            .then((response) => {
                const token = response.data.token;
                if (token) {
                    localStorage.token = token
                    this.$router.push('/dashboard');
                } 
            }).catch((error) => console.log(error))
        }
    },
}
</script>

<style>

</style>