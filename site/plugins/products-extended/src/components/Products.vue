<template>
  <k-inside>
    <k-view>
      <k-header>
        Products
        <k-button-group slot="left">
          <k-button
            text="New product"
            icon="add"
            @click="$dialog('products/create')"
          />
        </k-button-group>
      </k-header>
      <table class="k-products">
        <tr>
          <th>
            <button @click="sortBy('title')">
              Title
              <span v-if="sort === 'title'">{{ sortArrow }}</span>
            </button>
          </th>
          <th class="k-product-type">
            <button @click="sortBy('type')">
              Type
              <span v-if="sort === 'type'">{{ sortArrow }}</span>
            </button>
          </th>
          <th>
            <button @click="sortBy('description')">
              Description
              <span v-if="sort === 'description'">{{ sortArrow }}</span>
            </button>
          </th>
          <th class="k-product-price">
            <button @click="sortBy('price')">
              Price
              <span v-if="sort === 'price'">{{ sortArrow }}</span>
            </button>
          </th>
          <th class="k-product-options"></th>
        </tr>
        <tr v-for="(product, id) in products" :key="id">
          <td>
            <k-link :to="'products/' + id">{{ product.title }}</k-link>
          </td>
          <td class="k-product-type">{{ product.type }}</td>
          <td>{{ product.description }}</td>
          <td class="k-product-price">{{ price(product.price) }}</td>
          <td class="k-product-options">
            <k-options-dropdown :options="'products/' + id" />
          </td>
        </tr>
      </table>
    </k-view>
  </k-inside>
</template>

<script>
import price from "../helpers/price.js";

export default {
  props: {
    dir: String,
    sort: String,
    products: Object,
  },
  computed: {
    sortArrow() {
      return this.dir === "asc" ? "↓" : "↑";
    },
  },
  methods: {
    price,
    sortBy(sort) {
      // sort ascending by default
      let dir = "asc";

      // toggle direction when resorting the same column
      if (sort === this.sort) {
        dir = this.dir === "asc" ? "desc" : "asc";
      }

      // refresh the view with the updated query parameters
      this.$reload({
        query: {
          sort: sort,
          dir: dir,
        },
      });
    },
  },
};
</script>

<style>
.k-products {
  width: 100%;
  table-layout: fixed;
  border-spacing: 1px;
}
.k-products td,
.k-products th {
  text-align: left;
  font-size: var(--text-sm);
  padding: var(--spacing-2);
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  background: var(--color-white);
}
.k-products th {
  font-weight: var(--font-bold);
}
.k-products th button {
  font: inherit;
  text-align: left;
  width: 100%;
}
.k-products a {
  text-decoration: underline;
}
.k-product-type {
  width: 8rem;
}
.k-product-price {
  width: 5rem;
  font-variant-numeric: tabular-nums;
  text-align: right !important;
}
.k-product-price button {
  text-align: right !important;
}
.k-product-options {
  padding: 0 !important;
  width: 3rem;
  overflow: visible !important;
}
</style>
