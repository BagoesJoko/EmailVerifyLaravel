/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
       backgroundImage: theme => ({
       'hero-bg': "url('/public/img/bg2.jpg')",
       'hero-bg1': "url('/public/img/bg1.jpg')",
      })
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}