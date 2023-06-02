panel.plugin("kirby4-starterkit/buttonpreview-block", {
  blocks: {
    buttonpreview: {
      computed: {
        placeholder() {
          return "Button text …";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.text"
          @input="update({ text: $event.target.value })"
        />
      `
    }
  }
});
