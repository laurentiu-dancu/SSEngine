const fs = require("fs");
const mustache = require("mustache");
const minify = require('html-minifier').minify;

fs.readdir('videos', function (err, list) {
    let array = [];
    Object.keys(list).forEach(function(key) {
        array.push({'item': list[key]});
    });
    let fileString = fs.readFileSync('index.html.mustache', 'utf8');
    let outputString = mustache.render(fileString, {"list": array});
    let result = minify(outputString, {
        removeAttributeQuotes: true,
        collapseInlineTagWhitespace: true,
        collapseWhitespace: true,
        decodeEntities: true,
        minifyCSS: true,
        minifyJS: true,
        removeComments: true,
    });
    fs.writeFileSync('index.html', result);
});
