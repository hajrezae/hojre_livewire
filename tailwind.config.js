module.exports = {
    purge: [
        './resources/shop/**/*.blade.php',
        './resources/shop/**/*.js',
        './resources/shop/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {

            fontSize: {
                'xxs': '.7rem'
            },
            container: {
                center: true
            }
        },
        screens: {
            '2xl': '1366px'
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
