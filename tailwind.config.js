/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./components/**/*.php",
    "./admin/**/*.php"
  ],
  theme: {
    extend: {
      height: {
        'logo': '50px'
      },
      width: {
        'logo': '50px',
        '3/10': '30%',
        '7/10': '70%'
      },
      strokeWidth: {
        '20': '20px'
      },
      screens: {
        'mobile': {'max': '767px'},
        'tablet': {'min': '768px', 'max': '1023px'},
        'laptop': {'min': '1024px', 'max': '1279px'},
        'desktop': {'min': '1280px', 'max': '1534px'},
        'large-screen': '1535px'
      }
    },
  },
  plugins: [],
}
