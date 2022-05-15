module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors : {
       'main-color' : '#DA2F47',
       'body-color' : '#F2F2F2',
       'title'   : '#F3F8F9'
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
