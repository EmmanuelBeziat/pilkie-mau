const { src, dest, series, parallel, watch } = require('gulp')
const clean = require('gulp-clean')
const stylus = require('gulp-stylus')
const uglify = require('gulp-uglify')
const concat = require('gulp-concat')
const cssnano = require('cssnano')
const postcss = require('gulp-postcss')
const plumber = require('gulp-plumber')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('autoprefixer')

const cleanCSS = () => {
	return src('./assets/css', { read: false, allowEmpty: true })
		.pipe(clean())
}
const cleanJS = () => {
	return src('./assets/js', { read: false, allowEmpty: true })
		.pipe(clean())
}

const scripts = () => {
	return src('./src/scripts/main.js')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(sourcemaps.write('.'))
		.pipe(dest('./assets/js'))
}

const styles = () => {
	return src('./src/stylus/main.styl')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(stylus())
		.pipe(postcss([autoprefixer, cssnano]))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('./assets/css'))
}

const watchTasks = () => {
	watch('./src/stylus/**/*.styl', series(cleanCSS, styles))
	watch('./src/scripts/**/*.js', series(cleanJS, scripts))
}

module.exports = {
	clean: parallel(cleanCSS, cleanJS),
	styles: series(cleanCSS, styles),
	scripts: series(cleanJS, scripts),
	watch: watchTasks,
	default: parallel(series(cleanCSS, styles), series(cleanJS, scripts))
}
