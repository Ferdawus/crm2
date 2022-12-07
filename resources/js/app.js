import "./bootstrap";
import "./dashboard";
// vuetify
import "vuetify/styles";
import "material-design-icons-iconfont/dist/material-design-icons.css";
import "@mdi/font/css/materialdesignicons.css";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

import router from "./router";
import { createApp } from "vue";
// import the root component App from a single-file component.
import App from "./App.vue";

const app = createApp(App);
const vuetify = createVuetify({
    components,
    directives,
});

app.use(vuetify, {
    iconfont: "md",
    iconfont: "mdi",
});
app.use(router);
app.mount("#app");
