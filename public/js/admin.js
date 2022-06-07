/******/
(() => {
    // webpackBootstrap
    /******/
    var __webpack_modules__ = {
        /***/
        "./resources/js/admin.js":
        /*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
        /***/
            () => {
            throw new Error(
                "Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\resources\\js\\admin.js: Identifier 'init_sidebar' has already been declared. (5987:9)\n\n\u001b[0m \u001b[90m 5985 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5986 |\u001b[39m \u001b[90m// Sidebar\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 5987 |\u001b[39m \u001b[36mfunction\u001b[39m init_sidebar() {\u001b[0m\n\u001b[0m \u001b[90m      |\u001b[39m          \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5988 |\u001b[39m     \u001b[90m// TODO: This is some kind of easy fix, maybe we can improve this\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5989 |\u001b[39m     \u001b[36mvar\u001b[39m setContentHeight \u001b[33m=\u001b[39m \u001b[36mfunction\u001b[39m () {\u001b[0m\n\u001b[0m \u001b[90m 5990 |\u001b[39m         \u001b[90m// reset height\u001b[39m\u001b[0m\n    at instantiate (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:72:32)\n    at constructor (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:358:12)\n    at Parser.raise (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:3341:19)\n    at ScopeHandler.checkRedeclarationInScope (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:3525:19)\n    at ScopeHandler.declareName (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:3491:12)\n    at Parser.registerFunctionStatementId (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:15464:16)\n    at Parser.parseFunction (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:15444:12)\n    at Parser.parseFunctionStatement (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:15037:17)\n    at Parser.parseStatementContent (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:14689:21)\n    at Parser.parseStatement (C:\\Users\\tranc\\Downloads\\DOAN\\homegraden\\node_modules\\@babel\\parser\\lib\\index.js:14645:17)"
            );

            /***/
        },

        /******/
    };
    /************************************************************************/
    /******/
    /******/ // startup
    /******/ // Load entry module and return exports
    /******/ // This entry module doesn't tell about it's top-level declarations so it can't be inlined
    /******/
    var __webpack_exports__ = {};
    /******/
    __webpack_modules__["./resources/js/admin.js"]();
    /******/
    /******/
})();

(function($) {
    var soluong,
        gianhap = 0;

    $(document).ready(function() {
        console.log($("tongtien").val());
        console.log($("#"));
        $("#soluong").keydown(function() {
            soluong = $(this).val();
        });
        $("#gianhap").keydown(function() {
            gianhap = $(this).val();
        });
        console.log(soluong, gianhap);
        $("#tongtien").val(soluong * gianhap);
    });
});