module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors : {
       'main-color' : '#F4BFBF',
       'body-color' : '#F2F2F2',
       'title'   : '#F3F8F9'
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
// #DA2F47
