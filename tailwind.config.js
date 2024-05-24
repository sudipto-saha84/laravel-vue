/** @type {import('tailwindcss').Config} */
export default {
  content: [
      '/resources/views/welcome.blade.php',
      '/resources/**/**/*.vue',
      '/resources/**/**/**/*.vue',
      "./resources/**/*.{html,js}"


  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

