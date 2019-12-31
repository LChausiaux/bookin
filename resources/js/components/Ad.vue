<template>
    <div class="columns custom-ad-wrapper">
        <div class="column is-4 cover" style="background: blue">
            <img :src="require(`../../img/${cover}`)" alt="cover">
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            cover: String
        }
    }
</script>
