/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class", // 👈 TAMBAHKAN INI
    theme: {
        extend: {},
    },
    plugins: [],
};
