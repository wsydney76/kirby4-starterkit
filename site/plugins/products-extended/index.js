!function(){"use strict";var t=t=>new Intl.NumberFormat("de-DE",{style:"currency",currency:"EUR"}).format(t);function r(t,r,o,e,s,n,i,c){var u,p="function"==typeof t?t.options:t;if(r&&(p.render=r,p.staticRenderFns=o,p._compiled=!0),e&&(p.functional=!0),n&&(p._scopeId="data-v-"+n),i?(u=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),s&&s.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(i)},p._ssrRegister=u):s&&(u=c?function(){s.call(this,(p.functional?this.parent:this).$root.$options.shadowRoot)}:s),u)if(p.functional){p._injectStyles=u;var d=p.render;p.render=function(t,r){return u.call(r),d(t,r)}}else{var a=p.beforeCreate;p.beforeCreate=a?[].concat(a,u):[u]}return{exports:t,options:p}}const o={};var e=r({props:{dir:String,sort:String,products:Object},computed:{sortArrow(){return"asc"===this.dir?"↓":"↑"}},methods:{price:t,sortBy(t){let r="asc";t===this.sort&&(r="asc"===this.dir?"desc":"asc"),this.$reload({query:{sort:t,dir:r}})}}},(function(){var t=this,r=t.$createElement,o=t._self._c||r;return o("k-inside",[o("k-view",[o("k-header",[t._v(" Products "),o("k-button-group",{attrs:{slot:"left"},slot:"left"},[o("k-button",{attrs:{text:"New product",icon:"add"},on:{click:function(r){return t.$dialog("products/create")}}})],1)],1),o("table",{staticClass:"k-products"},[o("tr",[o("th",[o("button",{on:{click:function(r){return t.sortBy("title")}}},[t._v(" Title "),"title"===t.sort?o("span",[t._v(t._s(t.sortArrow))]):t._e()])]),o("th",{staticClass:"k-product-type"},[o("button",{on:{click:function(r){return t.sortBy("type")}}},[t._v(" Type "),"type"===t.sort?o("span",[t._v(t._s(t.sortArrow))]):t._e()])]),o("th",[o("button",{on:{click:function(r){return t.sortBy("description")}}},[t._v(" Description "),"description"===t.sort?o("span",[t._v(t._s(t.sortArrow))]):t._e()])]),o("th",{staticClass:"k-product-price"},[o("button",{on:{click:function(r){return t.sortBy("price")}}},[t._v(" Price "),"price"===t.sort?o("span",[t._v(t._s(t.sortArrow))]):t._e()])]),o("th",{staticClass:"k-product-options"})]),t._l(t.products,(function(r,e){return o("tr",{key:e},[o("td",[o("k-link",{attrs:{to:"products/"+e}},[t._v(t._s(r.title))])],1),o("td",{staticClass:"k-product-type"},[t._v(t._s(r.type))]),o("td",[t._v(t._s(r.description))]),o("td",{staticClass:"k-product-price"},[t._v(t._s(t.price(r.price)))]),o("td",{staticClass:"k-product-options"},[o("k-options-dropdown",{attrs:{options:"products/"+e}})],1)])}))],2)],1)],1)}),[],!1,s,null,null,null);function s(t){for(let r in o)this[r]=o[r]}var n=function(){return e.exports}();const i={};var c=r({props:{product:Object},methods:{price:t}},(function(){var t=this,r=t.$createElement,o=t._self._c||r;return o("k-inside",[o("k-view",[o("k-header",[t._v(" "+t._s(t.product.title)+" "),o("k-button-group",{attrs:{slot:"left"},slot:"left"},[o("k-button",{attrs:{text:"Edit",icon:"edit"},on:{click:function(r){return t.$dialog("products/"+t.product.id+"/update")}}}),o("k-button",{attrs:{text:"Delete",icon:"trash"},on:{click:function(r){return t.$dialog("products/"+t.product.id+"/delete")}}})],1)],1),o("table",{staticClass:"k-products"},[o("tr",[o("th",{staticClass:"k-product-type"},[t._v("Type")]),o("th",[t._v("Description")]),o("th",{staticClass:"k-product-price"},[t._v("Price")])]),o("tr",[o("td",{staticClass:"k-product-type"},[t._v(t._s(t.product.type))]),o("td",[t._v(t._s(t.product.description))]),o("td",{staticClass:"k-product-price"},[t._v(t._s(t.price(t.product.price)))])])])],1)],1)}),[],!1,u,null,null,null);function u(t){for(let r in i)this[r]=i[r]}var p=function(){return c.exports}();panel.plugin("getkirby/products",{components:{"k-products-view":n,"k-product-view":p}})}();