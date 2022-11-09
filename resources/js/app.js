import "./bootstrap";
import "./dashboard";
import router from "./router";
import { createApp } from "vue";
// import the root component App from a single-file component.
import App from "./App.vue";

const app = createApp(App);
app.use(router);
app.mount("#app");
