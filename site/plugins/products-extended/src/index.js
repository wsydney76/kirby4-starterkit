import Products from "./components/Products.vue";
import Product from "./components/Product.vue";

panel.plugin("getkirby/products", {
  components: {
    "k-products-view": Products,
    "k-product-view": Product,
  },
});
