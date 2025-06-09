## 🚀 FHA Stack

A **minimalist full-stack framework** combining the power of PHP and modern HTML-first interactivity:

* **F**light — lightweight PHP micro-framework.
* **H**TMX — progressive enhancement via HTML attributes.
* **A**lpine.js — declarative JavaScript behavior directly in HTML.

> ⚠️ *This stack is experimental and under active development. Expect frequent changes.*


## ✨ Features

* 🔧 **Simple routing and templating with PHP** using [Flight](https://flightphp.com/).
* ⚡ **Asynchronous HTML updates** using [HTMX](https://htmx.org/). No full-page reloads just declarative `hx-*` attributes.
* 🧠 **Interactive behavior** without bulky frameworks via [Alpine.js](https://alpinejs.dev/).
* 🛠️ **Client-side TypeScript support** with [`esbuild-wasm`](https://esbuild.github.io/) transpiles and optionally minifies `.ts` files *in the browser*.
* 📦 No build step required fully functional with just static files and PHP.

## Deployment

* Serve the project with Nginx.
* Set the web root to the `public/` directory.
