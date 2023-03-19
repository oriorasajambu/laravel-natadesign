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
        'primary': '#10403C',
        'secondary': '#706F6D',
        'partial': '#404040',
      },
      aspectRatio: {
        'highlight': '25 / 12',
        'section': '1.78/1',
        'about': '2.08/1',
      },
      fontFamily: {
        'dm-sans': ['"DM Sans"', 'sans-serif'],
        'play-serif': ['"Playfair Display"', 'serif'],
      },
      transitionProperty: {
        width: "width"
      },
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        }
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out 1',
      }
    },
    screens: {
      'xs': { 'min': '320px', 'max': '479.98px' },
      'ssm': { 'min': '480px', 'max': '767.98px'},
      'sm': { 'min': '768px', 'max': '1023.98px' },
      'md': { 'min': '1024px', 'max': '1199px' },
      'lg': { 'min': '1200px', 'max': '6000px' }
    }
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
