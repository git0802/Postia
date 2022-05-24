<template>
    <div class="overflow-hidden overflow-x-auto p-6 bg-white border-gray-200">
        <div class="min-w-full align-middle">
            <Link :href="route('posts.index')"> Posts</Link>
            <Link :href="route('pages.about')" class="ml-2"> About</Link>
        </div>
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam at eos veniam voluptas ipsa nisi dicta rem quasi inventore eum.</p>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default{
    components: {
        Link
    },

}
</script>
