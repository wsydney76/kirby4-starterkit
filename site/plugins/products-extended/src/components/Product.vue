<template>
  <k-inside>
    <k-view>
      <k-header>
        {{ product.title }}
        <k-button-group slot="left">
          <k-button
            text="Edit"
            icon="edit"
            @click="$dialog('products/' + product.id + '/update')"
          />
          <k-button
            text="Delete"
            icon="trash"
            @click="$dialog('products/' + product.id + '/delete')"
          />
        </k-button-group>
      </k-header>
      <table class="k-products">
        <tr>
          <th class="k-product-type">Type</th>
          <th>Description</th>
          <th class="k-product-price">Price</th>
        </tr>
        <tr>
          <td class="k-product-type">{{ product.type }}</td>
          <td>{{ product.description }}</td>
          <td class="k-product-price">{{ price(product.price) }}</td>
        </tr>
      </table>
    </k-view>
  </k-inside>
</template>

<script>
import price from "../helpers/price.js";

export default {
  props: {
    product: Object,
  },
  methods: {
    price,
  },
};
</script>
