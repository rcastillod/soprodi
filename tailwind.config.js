/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: 'var(--ast-global-color-0)',
        secondary: 'var(--ast-global-color-1)',
      },
      fontFamily: {
        aktivGrotesk: ["aktiv-grotesk", "sans-serif"],
      },
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("@tailwindcss/forms"),
    require("@tailwindcss/line-clamp"),
  ],
};