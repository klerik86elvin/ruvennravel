module.exports = {
    mode: 'jit',
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false,
    theme: {
        extend: {
            colors: {
                'regal-blue': '#013793',
            },
        },
    },
    variants: {},
    plugins: [],
};
