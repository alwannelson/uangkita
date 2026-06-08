/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'nunito': ['Nunito Sans', 'sans-serif'],
            },
            colors: {
                'primary': '#9CC5A1',
                'primary-dark': '#7a9e7f',
                'body-bg': '#f3f4f6',
                'text-main': '#1f2937',
            },
        },
    },
    plugins: [],
}