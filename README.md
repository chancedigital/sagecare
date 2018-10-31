Sagecare Therapy
=====================

## Dependencies

1. [Node & Yarn](https://yarnpkg.com) - Build packages and 3rd party dependencies are managed through Yarn, so you will need that installed globally. I recommend using [`nvm`](https://github.com/creationix/nvm) to develop with Node v8.12.
2. [Gulp](https://gulpjs.com/) - Gulp is used as the main task runner. it runs Sass, PostCSS, processes images/SVG files, and executes Webpack.
3. [Webpack](https://webpack.js.org/) - Webpack is used to process the JavaScript.
4. [Composer](https://getcomposer.org/) - Install and manage PHP dependencies.

## Getting Started

## Commands

`yarn start` (install dependencies and run initial Gulp)

`yarn watch` (watch)

`yarn build` (build all files)

`yarn deploy` (build all files ready for deployment)

## Theme Features

### Linting
* **Editor Config** [ [Base package](https://editorconfig.org/) | [Atom](https://github.com/sindresorhus/atom-editorconfig) | [Sublime](https://github.com/sindresorhus/editorconfig-sublime) | [VS Code](https://github.com/editorconfig/editorconfig-vscode) ]
* **Eslint** [ [Base package](https://github.com/eslint/eslint) | [Atom](https://github.com/AtomLinter/linter-eslint) | [Sublime](https://github.com/SublimeLinter/SublimeLinter-eslint) | [VS Code](https://github.com/Microsoft/vscode-eslint) | [eslint-config-wordpress](https://www.npmjs.com/package/eslint-config-wordpress) ]
* **Stylelint** [ [Base package](https://github.com/stylelint/stylelint) | [Atom](https://atom.io/packages/linter-stylelint) | [Sublime](https://github.com/SublimeLinter/SublimeLinter-stylelint) | [VS Code](https://github.com/shinnn/vscode-stylelint) | [stylelint-config-wordpress](https://www.npmjs.com/package/stylelint-config-wordpress) ]
* **PHP CodeSniffer** [ [Base Package](https://github.com/squizlabs/PHP_CodeSniffer) | [Atom](https://atom.io/packages/linter-phpcs) | [Sublime](https://github.com/squizlabs/sublime-PHP_CodeSniffer) | [VS Code](https://github.com/ikappas/vscode-phpcs) | [WordPress-Coding-Standards](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards) ]

### JavaScript DOM-based routing
I borrowed (stole?) the concept of DOM-based routing for JavaScript from [Sage](https://roots.io/sage/docs/theme-development-and-building/). This functionality enables you to run specific scripts on specific pages. Routes (and the scripts they include) run when the route name matches a class on the body element of the current page.

## Learn more about the default packages used with this project

- [Babel core](https://www.npmjs.com/package/@babel/core)
- [Babel preset-env](https://www.npmjs.com/package/@babel/preset-env)
- [Babel register](https://www.npmjs.com/package/@babel/register)
- [Babel eslint](https://www.npmjs.com/package/babel-eslint)
- [Babel loader](https://www.npmjs.com/package/babel-loader)
- [Babel preset env](https://www.npmjs.com/package/babel-preset-env)
- [Browserslist](https://www.npmjs.com/package/browserslist)
- [Can I Use DB](https://www.npmjs.com/package/caniuse-db)
- [Date Format](https://www.npmjs.com/package/dateformat)
- [Del](https://www.npmjs.com/package/del)
- [Eslint](https://www.npmjs.com/package/eslint)
- [Eslint config WordPress](https://www.npmjs.com/package/eslint-config-wordpress)
- [Eslint loader](https://www.npmjs.com/package/eslint-loader)
- [Gulp](https://www.npmjs.com/package/gulp)
- [Gulp CSSNano](https://www.npmjs.com/package/gulp-cssnano)
- [Gulp filter](https://www.npmjs.com/package/gulp-filter)
- [Gulp Live Reload](https://www.npmjs.com/package/gulp-livereload)
- [Gulp PostCSS](https://www.npmjs.com/package/gulp-postcss)
- [Gulp Rename](https://www.npmjs.com/package/gulp-rename)
- [Gulp Sass](https://www.npmjs.com/package/gulp-sass)
- [Gulp Sourcemaps](https://www.npmjs.com/package/gulp-sourcemaps)
- [Gulp Zip](https://www.npmjs.com/package/gulp-zip)
- [Husky](https://www.npmjs.com/package/husky)
- [Lint Staged](https://www.npmjs.com/package/lint-staged)
- [Node Sass tilde importer](https://www.npmjs.com/package/node-sass-tilde-importer)
- [PostCSS preset-env](https://www.npmjs.com/package/postcss-preset-env)
- [Pump](https://www.npmjs.com/package/pump)
- [Require DIR](https://www.npmjs.com/package/require-dir)
- [Sass Lint](https://www.npmjs.com/package/sass-lint)
- [Webpack](https://www.npmjs.com/package/webpack)
- [Webpack CLI](https://www.npmjs.com/package/webpack-cli)
- [Webpack Stream](https://www.npmjs.com/package/webpack-stream)
