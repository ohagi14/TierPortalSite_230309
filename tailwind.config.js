const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
		"./storage/framework/views/*.php",
		"./resources/views/**/*.blade.php",
		"./resources/js/**/*.vue",
	],

	theme: {
		extend: {
			fontFamily: {
				sans: ["Nunito", ...defaultTheme.fontFamily.sans],
			},
			colors: {
				'main': '#FA5D18',
				'mainSecond': '#feb42f',
				'sub': '#ffec00',
				'subSecond': '#cbc56d',
				'card': '#E5E7EB',
				'copyright': '#F3F4F6',
			},
		},
	},

	plugins: [require("@tailwindcss/forms"), require("tw-elements/dist/plugin")],
};
