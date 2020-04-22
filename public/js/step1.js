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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/step1.js":
/*!*******************************!*\
  !*** ./resources/js/step1.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Company & Joint details
$('#company, #joint').click(function () {
  var content = $(this).parent().parent().find('.content');

  if ($(this).is(':checked')) {
    content.removeClass('opacity');
    content.find('input, select').attr('required', true).removeAttr('disabled');
  } else {
    content.addClass('opacity');
    content.find('input, select').removeAttr('required').attr('disabled', true);
  }
}); // Type check

$('#pr-link').click(function () {
  $('#tdo, #sp').removeAttr('checked');
  $('#pr').attr('checked', 'checked');
  $('#pr_modal').removeClass('d-none');
  $('#tdo_modal, #sp_modal').addClass('d-none');
});
$('#tdo-link').click(function () {
  $('#pr, #sp').removeAttr('checked');
  $('#tdo').attr('checked', 'checked');
  $('#tdo_modal').removeClass('d-none');
  $('#sp_modal, #pr_modal').addClass('d-none');
});
$('#sp-link').click(function () {
  $('#pr, #tdo').removeAttr('checked');
  $('#sp').attr('checked', 'checked');
  $('#sp_modal').removeClass('d-none');
  $('#tdo_modal, #pr_modal').addClass('d-none');
}); // Calculator PR

$('.calculator-pr input').change(function () {
  var calculator = $(this).closest('.calculator');
  var number = calculator.find('.cal_number').val();
  var duration = parseFloat(calculator.find('input.cal_duration:checked').val());
  var price = calculator.find('.cal_price').val();
  var percent = 0;
  if (duration === 2) percent = 10;else if (duration === 3) percent = 11;else percent = 12;
  var cost = number * price;
  var profit = cost * (percent / 100) * duration;
  var quarterly = profit / (duration * 4);
  calculator.find('.cal_investment').val('€ ' + cost.formatMoney(0, ',', ' '));
  calculator.find('.cal_profit').val('€ ' + profit.formatMoney(0, ',', ' '));
  calculator.find('.cal_quarterly').val('€ ' + quarterly.formatMoney(2, ',', ' '));
}); // Calculator TDO

$('.calculator-tdo input').change(function () {
  var calculator = $(this).closest('.calculator');
  var shares = calculator.find('.cal_shares').val();
  var investment = shares * 40000;
  var roi = 143000 * shares;
  calculator.find('.cal_investment').val('€ ' + investment.formatMoney(0, ',', ' '));
  calculator.find('.cal_roi').val('€ ' + roi.formatMoney(0, ',', ' '));
}); // Calculator SP

$('.calculator-sp input').change(function () {
  var calculator = $(this).closest('.calculator');
  var shares = calculator.find('.cal_shares').val();
  var investment = shares * 150000;
  var yearly_dividend = investment / 100 * 25;
  var roi = 900000 * shares;
  calculator.find('.cal_investment').val('€ ' + investment.formatMoney(0, ',', ' '));
  calculator.find('.cal_yearly_dividend').val('€ ' + yearly_dividend.formatMoney(0, ',', ' '));
  calculator.find('.cal_roi').val('€ ' + roi.formatMoney(0, ',', ' '));
}); //// Pred akciou
//// Calculator SP
//$('.calculator-sp input').change(function() {
//    let calculator = $(this).closest('.calculator');
//
//    let shares = calculator.find('.cal_shares').val();
//    let investment = shares * 40000;
//    let roi = 143000 * shares;
//
//    calculator.find('.cal_investment').val('€ ' + investment.formatMoney(0, ',', ' '));
//    calculator.find('.cal_roi').val('€ ' + roi.formatMoney(0, ',', ' '));
//});
// Button disable on form submit

$('#step1Form').submit(function () {
  $('#submitButton').attr('disabled', true).html('Working...');
}); // Helper functions

Number.prototype.formatMoney = function (c, d, t) {
  var n = this,
      c = isNaN(c = Math.abs(c)) ? 2 : c,
      d = d == undefined ? "." : d,
      t = t == undefined ? "," : t,
      s = n < 0 ? "-" : "",
      i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
      j = (j = i.length) > 3 ? j % 3 : 0;
  return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************!*\
  !*** multi ./resources/js/step1.js ./resources/sass/app.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\www\transport\resources\js\step1.js */"./resources/js/step1.js");
module.exports = __webpack_require__(/*! C:\www\transport\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });