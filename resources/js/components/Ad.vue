<template>
    <div class="parallax-window" data-z-index="1" data-parallax="scroll"
         :data-image-src="require(`../../img/${background}`)">
        <div class="columns custom-ad-wrapper">
            <div class="column is-3 cover">
                <img :src="require(`../../img/${cover}`)" alt="cover">
            </div>
            <div class="column is-6">
                <div class="column is-6 text">
                    <h1>
                        {{ title}}
                    </h1>
                    <p>
                        {{ content }}
                    </p>
                </div>
                <div class="link">
                    <a href="" class="button is-primary">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            background: String,
            cover: String,
            title: String,
            content: String
        },
    }
</script>
