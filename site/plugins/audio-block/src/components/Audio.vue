<template>
    <k-block-figure
        :is-empty="!source.url"
        empty-icon="audio-file"
        empty-text="No file selected yet …"
        @open="open"
        @update="update"
    >
        <div class="k-block-type-audio-wrapper">
            <div>
                <k-aspect-ratio
                    class="k-block-type-audio-poster"
                    cover="true"
                    ratio="1/1"
                >
                    <img
                        v-if="poster.url"
                        :src="poster.url"
                        alt=""
                    >
                </k-aspect-ratio>
            </div>
            <div @dblclick.stop>
                <k-writer
                    :inline="true"
                    :marks="false"
                    :placeholder="field('title').placeholder"
                    :value="content.title"
                    class="k-block-type-audio-title"
                    @input="update({ title: $event })"
                />
                <k-writer
                    :inline="true"
                    :marks="false"
                    :placeholder="field('subtitle').placeholder"
                    :value="content.subtitle"
                    class="k-block-type-audio-subtitle"
                    @input="update({ subtitle: $event })"
                />
                <k-writer
                    :inline="true"
                    :marks="false"
                    :placeholder="field('description').placeholder"
                    :value="content.description"
                    class="k-block-type-audio-description"
                    @input="update({ description: $event })"
                />
                <audio class="k-block-type-audio-element" controls>
                    <source :src="source.url" :type="mime">
                </audio>
            </div>
        </div>
    </k-block-figure>
</template>

<script>
export default {
    data() {
        return {
            mime: null
        };
    },
    computed: {
        poster() {
            return this.content.poster[0] || {};
        },
        source() {
            return this.content.source[0] || {};
        }
    },
    watch: {
        "source.link": {
            handler (link) {
                if (link) {
                    this.$api.get(link).then(file => {
                        this.mime = file.mime;
                    });
                }
            },
            immediate: true
        }
    }
};
</script>

<style lang="scss">
.k-block-type-audio-wrapper {
    display: flex;
    padding: 1rem;
    background: black;
    color: white;
    width: 560px;
}
.k-block-type-audio-poster {
    width: 12rem;
    margin-right: 1rem;
    background: #333;
}
.k-block-type-audio-title,
.k-block-type-audio-subtitle {
    font-size: 1.5rem;
}
.k-block-type-audio-title {
    font-weight: 600;
}
.k-block-type-audio-subtitle {
    margin-bottom: 1rem;
    color: #999;
}
.k-block-type-audio-description {
    line-height: 1.5;
}
.k-block-type-audio-element {
    margin-top: 2rem;
    height: 2rem;
}
</style>
