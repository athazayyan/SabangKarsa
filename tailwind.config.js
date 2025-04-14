// tailwind.config.js
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
          sans: ['Rubik', 'ui-sans-serif', 'system-ui'],
        },
      },
    },
    plugins: [],
  }
