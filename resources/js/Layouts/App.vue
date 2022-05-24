<template>
    <div class="overflow-hidden overflow-x-auto p-6 bg-white border-gray-200">
        <div class="min-w-full align-middle">
            <Link :href="route('posts.index')" :class="{'font-bold': $page.component === 'Posts/Index'}"> Posts</Link>
            <Link :href="route('pages.about')" :class="{'font-bold': $page.component === 'About'}" class="ml-2"> About</Link>

            <slot />
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default{
    components: {
        Link
    }
}
</script>
