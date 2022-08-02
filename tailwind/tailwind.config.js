// Set flag to include Preflight conditionally based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const defaultTheme = require( 'tailwindcss/defaultTheme' );
/** @type {import('tailwindcss').Config} */
module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require( './tailwind-typography.config.js' ),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/templates/**/*.twig',
		'./theme/theme.json',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				lora: "'Lora', serif",
				mono: [ "'Monserrat'", "'DM Mono'", ...defaultTheme.fontFamily.mono ],
			},
			colors: {
				cta: {
					light: '#fd8383',
					dark: '#487F89FF',
					hover: '#FD83838C',
				},
				patrimony: '#AAB7D8FF',
				walk: '#64966FFF',
				art: '#F5CC73FF',
				delicacy: '#EFBFB1FF',
				party: '#EFD7CDFF',
				home: '#E8DACBFF',
				caractere: '#636061',
				borderjf: '#dee2e6',
				grey: {
					dark: '#636061FF',
					basic: '#808080FF',
				},
				bglighter: '#ededec',
			},
			backgroundImage: {
				bg_home:
					"url('https://visitmarche.be/wp-content/themes/visitmarche/assets/tartine/rsc/img/bg_home.jpg')",
				chasse:
					"url('https://visitmarche.be/wp-content/uploads/2021/09/DSC_0504-scaled.jpg')",
				escape:
					"url('https://visitmarche.be/wp-content/uploads/2021/10/4index.png')",
				noel: "url('https://visitmarche.be/wp-content/uploads/2021/11/christmas-g22147f560_1280.png')",
				totemus:
					"url('https://visitmarche.be/wp-content/uploads/2021/05/Chasse-au-tre%E2%95%A0usor.jpeg')",
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography.
		require( '@tailwindcss/typography' ),

		// Extract colors and widths from `theme.json`.
		require( '@_tw/themejson' )( require( '../theme/theme.json' ) ),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/forms' ),
		require( '@tailwindcss/line-clamp' ),
	],
};
