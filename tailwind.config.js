/** @type {import('tailwindcss').Config} */
const options = require("./config"); //options from config.js

module.exports = {
	content: ["./**/*.{html,js,php}"],
	theme: {
		extend: {
			colors: {
				primary: 'var(--ast-global-color-0)',
				secondary: 'var(--ast-global-color-8)',
				tertiary: 'var(--ast-global-color-1)',
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
