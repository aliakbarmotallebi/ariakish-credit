/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                "2sm": "425px",
                "3sm": "375px",
                "4sm": "320px",
            },
            fontFamily: {
                iransans: ["IRANSans"],
            },
            colors: {
                primary: "#042F2E",
                textMain: "#374151",
                main: "#F3F4F6",
                link: "#2563EB",
                line: "#E5E7EB",
                darkLine: "#CBD5E1",
                success: "#10B981",
                error: "#DC2626",
            },
        },
    },
    plugins: [],
};
