const {
    src,
    dest,
    watch
} = require('gulp');
const sass = require('gulp-sass');

function compile() {
    // TODO: Update path to your main sass file - one importing all others
    return src(['wp-content/themes/codyclingerexteriors/sass/style.scss'])
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        // TODO: Update path to output, will auto-name to ^
        .pipe(dest('wp-content/themes/codyclingerexteriors/'));
}

function watcher() {
    // TODO: Update path to all your sass files
    return watch('wp-content/themes/codyclingerexteriors/sass/*/*.scss', {
            ignoreInitial: false
        },
        compile);
}

exports.compile = compile;
exports.default = watcher;
