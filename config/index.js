const path = require('path');
module.exports = {
    localUrl: 'http://localhost:8080',
    entry: {
        'bundle': path.resolve(__dirname, '../src/main.js'),
        'customizer': path.resolve(__dirname, '../src/customizer.js'),
        'home': path.resolve(__dirname, '../src/entryPagePoints/home.js'),
        'single-team': path.resolve(__dirname, '../src/entryPagePoints/single-team.js'),
        'blog': path.resolve(__dirname, '../src/entryPagePoints/blog.js'),
        'archive': path.resolve(__dirname, '../src/entryPagePoints/archive.js')
    },
    devServer: require('./devServer'),
    alias: require('./aliases'),
    copy: require('./copy')
};
