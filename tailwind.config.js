const { size } = require('lodash')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-bg-purple':'#030316',
        'custom-light-green':'#0EDB7C',
        'custom-slight-purple':'#151331',
        'custom-button-purple':'#4F41B1',
        'custom-subtitle-purple':'#666386',
        'custom-footer-purple': '#04040D',
        'custom-section-purple':'#06071A',
        'custom-yellow':'#FBD149',

        'custom-light-blue':'#98DFFF',
  

      }
    },
    variants:{
      extend:{
        display:['group-focus']
      },
    },
  },
  plugins: [],
}
