import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/css/homepage.css",
        "resources/css/projects.css",

        "resources/js/app.js",
        "resources/js/burger.js",
        "resources/js/table-of-contents.js",
        "resources/js/homepage.js",
      ],
      refresh: true,
    }),
  ],
});
