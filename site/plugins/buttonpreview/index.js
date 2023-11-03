panel.plugin("kirby4-starterkit/buttonpreview-block", {
  blocks: {
    buttonpreview: {
      computed: {
        textPlaceholder() {
          return "Button text …";
        },
        linkPlaceholder() {
          return "https://example.com";
        }
      },
      template: `
        <div class="wrapper">
          <input
            class="button"
            type="text"
            :placeholder="textPlaceholder"
            :value="content.text"
            @input="update({ text: $event.target.value })"
          />

          <input
            v-if="content.text.length > 0"
            class="link"
            type="url"
            :placeholder="linkPlaceholder"
            :value="content.link"
            @input="update({ link: $event.target.value })"
          />
      </div>
      `
    }
  }
});
