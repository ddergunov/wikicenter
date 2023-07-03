/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/filament/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                danger: colors.amber,
                primary: colors.slate,
                success: colors.green,
                warning: colors.teal,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
}
