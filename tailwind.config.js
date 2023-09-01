
//tailwin.config
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  darkMode: false,
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [require("daisyui")],
    daisyui: {
      themes: [
          {
          light: {
            ...require("daisyui/src/colors/themes")["[data-theme=light]"],
            '--title': '50, 53%, 34%'
          },

        }
      ]
    },

}


// require("daisyui")