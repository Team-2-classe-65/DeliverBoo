/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/frontend.js":
/*!**********************************!*\
  !*** ./resources/js/frontend.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\utente\\Boolean\\Deliverboo\\resources\\js\\frontend.js: Unexpected token (9:0)\n\n\u001b[0m \u001b[90m  7 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m  8 |\u001b[39m \u001b[33mAOS\u001b[39m\u001b[33m.\u001b[39minit()\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m  9 |\u001b[39m \u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 10 |\u001b[39m \u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 11 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 12 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mVueRouter\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m\"vue-router\"\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n    at instantiate (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:72:32)\n    at constructor (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:367:12)\n    at Parser.raise (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:3678:19)\n    at Parser.unexpected (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:3716:16)\n    at Parser.parseExprAtom (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:13265:22)\n    at Parser.parseExprSubscripts (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12790:23)\n    at Parser.parseUpdate (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12769:21)\n    at Parser.parseMaybeUnary (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12739:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12530:61)\n    at Parser.parseExprOps (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12537:23)\n    at Parser.parseMaybeConditional (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12507:23)\n    at Parser.parseMaybeAssign (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12459:21)\n    at Parser.parseExpressionBase (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12395:23)\n    at C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12389:39\n    at Parser.allowInAnd (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:14485:16)\n    at Parser.parseExpression (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:12389:17)\n    at Parser.parseStatementContent (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:14925:23)\n    at Parser.parseStatement (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:14782:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:15441:25)\n    at Parser.parseBlockBody (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:15432:10)\n    at Parser.parseProgram (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:14700:10)\n    at Parser.parseTopLevel (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:14687:25)\n    at Parser.parse (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:16710:10)\n    at parse (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\parser\\lib\\index.js:16762:38)\n    at parser (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\core\\lib\\parser\\index.js:52:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:87:38)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\Users\\utente\\Boolean\\Deliverboo\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)");

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/frontend.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\utente\Boolean\Deliverboo\resources\js\frontend.js */"./resources/js/frontend.js");


/***/ })

/******/ });