(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_split_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.split.js */ "./node_modules/core-js/modules/es.string.split.js");
/* harmony import */ var core_js_modules_es_string_split_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_split_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _styles_custom_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./styles/custom.css */ "./assets/styles/custom.css");
/* harmony import */ var datatables_net__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! datatables.net */ "./node_modules/datatables.net/js/jquery.dataTables.js");
/* harmony import */ var datatables_net__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(datatables_net__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var datatables_net_bs4__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! datatables.net-bs4 */ "./node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js");
/* harmony import */ var datatables_net_bs4__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(datatables_net_bs4__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _js_rotate_image_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/rotate-image.js */ "./assets/js/rotate-image.js");
/* harmony import */ var _js_rotate_image_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_js_rotate_image_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var jquery_modal__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! jquery-modal */ "./node_modules/jquery-modal/jquery.modal.js");
/* harmony import */ var jquery_modal__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(jquery_modal__WEBPACK_IMPORTED_MODULE_8__);
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");








 //import 'jquery-ui/external/jquery-1.12.1/jquery.js';

var xp = 0;
var dts = [];
var rty = 0;
$(document).on("click", "#sub_animal_button", function () {
  $.ajax({
    type: "POST",
    url: "save-sub-category.php",
    data: $("#frmsubanimals").serialize(),
    success: function success(data) {
      alert(data); //$('#animals').DataTable().ajax.reload(null, false);
      //$(".close-modal").click();
    }
  }); //alert("test");
}); ///load trip list to datatable

$("#pages").DataTable({
  "ajax": "pagelist.json",
  "columns": [{
    "data": "order"
  }, {
    "data": "title"
  }, {
    "data": "description"
  }, {
    "data": "url"
  }, {
    "data": "createdat"
  }, {
    "data": "updatedat"
  }, {
    "data": "opts"
  }]
}); ///load trip list to datatable

$("#trips").DataTable({
  "ajax": "trips.json",
  "columns": [{
    "data": "trips"
  }, {
    "data": "month"
  }, {
    "data": "year"
  }, {
    "data": "opts"
  }]
}); ///load category list to datatable

$("#animals").DataTable({
  "ajax": "animals.json",
  "columns": [{
    "data": "animal"
  }]
}); ///load location list to datatable

$("#location").DataTable({
  "ajax": "location.json",
  "columns": [{
    "data": "location"
  }]
}); ///load files to datatables

$("#tblFiles").DataTable({
  "ajax": "files.json",
  "columns": [{
    "data": "imageName"
  }, {
    "data": "type"
  }, {
    "data": "animal"
  }, {
    "data": "location"
  }, {
    "data": "year"
  }, {
    "data": "description"
  }, {
    "data": "trips"
  }, {
    "data": "option"
  }]
});
$("#tblpages").DataTable({
  "destroy": true,
  "responsive": true,
  "processing": false,
  "ordering": false,
  "bPaginate": false,
  "bLengthChange": false,
  "bFilter": true,
  "bInfo": false
}); //uploading photos

$(document).on('click', '#upload_files_button', function () {
  $("#upload_files_images").click();
}); // show preview of selected images

$(document).on('change', '#upload_files_images', function (e) {
  var files = e.target.files;
  var filesLength = files.length;

  for (var i = 0; i < filesLength; i++) {
    xp++;
    var f = files[i];
    var res_ext = files[i].name.split(".");
    var img_or_video = res_ext[res_ext.length - 1];
    var fileReader = new FileReader();
    fileReader.name = f.name;

    fileReader.onload = function (e) {
      //var file = e.target;
      $("#uploader").append('<div class="col-md-3 img-container"><img src="' + e.target.result + '" class="pic-view"><input type="hidden" name="rotation[]" class="rotation" value="0"><div class="btnsrotation"><button class="btn btn-success btn-sm rotate-left"  type="button">ROTATE LEFT</button> <button class="btn btn-success btn-sm rotate-right pull-right"   type="button">ROTATE RIGHT</button> </div><div class="bottombtns"> <button class="btn btn-danger btn-sm cancel_image btnxc cancel_fa' + xp + ' " deltsid="' + 0 + '"  type="button">REMOVE PHOTO</button> </div></div>');
    };
    /*btn-remove-photo : previous remove btn class*/


    fileReader.readAsDataURL(f);
  }

  $("#btncancelupload").toggle();
  $("#upload_files_button").toggle();
  $("#btnUploadImages").toggle();
});
$(document).on("click", ".cancel_image", function (e) {
  $('.cancel_image').each(function () {
    var chk_id = $(this).attr('deltsid');

    if (chk_id == 0) {
      rty++;
      $(this).attr('deltsid', rty);
    }
  });
  var deltsid = $(this).attr('deltsid');
  dts.push(deltsid);
  $(this).parents(".img-container").remove();
});

/***/ }),

/***/ "./assets/js/rotate-image.js":
/*!***********************************!*\
  !*** ./assets/js/rotate-image.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");

$(function () {
  // $(document).ready(function(){ 
  var rotation = 0;
  $(document).on('click', ".rotate-right", function () {
    rotation = (rotation - 90) % 360;
    $(this).closest("div.col-md-3").find(".pic-view").css({
      'transform': 'rotate(' + rotation + 'deg)'
    });

    if (rotation != 0) {
      $(this).closest("div.col-md-3").find(".pic-view").css({
        'width': '260px',
        'height': '260px'
      });
    } else {
      $(this).closest("div.col-md-3").find(".pic-view").css({
        'width': '260px',
        'height': '260px'
      });
    }

    $(this).closest("div.col-md-3").find('.rotation').val(rotation); //alert('check rotate right!');
  });
  $(document).on('click', ".rotate-left", function () {
    rotation = (rotation + 90) % 360;
    $(this).closest("div.col-md-3").find(".pic-view").css({
      'transform': 'rotate(' + rotation + 'deg)'
    });

    if (rotation != 0) {
      $(this).closest("div.col-md-3").find(".pic-view").css({
        'width': '260px',
        'height': '260px'
      });
    } else {
      $(this).closest("div.col-md-3").find(".pic-view").css({
        'width': '260px',
        'height': '260px'
      });
    }

    $(this).closest("div.col-md-3").find('.rotation').val(rotation); //alert('check rotate left!');
  });
  $(document).on('click', ".btn-remove-photo", function () {
    $(this).closest("div.col-md-3").remove();
  });
});

/***/ }),

/***/ "./assets/styles/custom.css":
/*!**********************************!*\
  !*** ./assets/styles/custom.css ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_find_js-node_modules_core-js_modules_es_functio-9a21cd"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9yb3RhdGUtaW1hZ2UuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9jdXN0b20uY3NzPzVlMjAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2NzcyJdLCJuYW1lcyI6WyJ4cCIsImR0cyIsInJ0eSIsIiQiLCJkb2N1bWVudCIsIm9uIiwiYWpheCIsInR5cGUiLCJ1cmwiLCJkYXRhIiwic2VyaWFsaXplIiwic3VjY2VzcyIsImFsZXJ0IiwiRGF0YVRhYmxlIiwiY2xpY2siLCJlIiwiZmlsZXMiLCJ0YXJnZXQiLCJmaWxlc0xlbmd0aCIsImxlbmd0aCIsImkiLCJmIiwicmVzX2V4dCIsIm5hbWUiLCJzcGxpdCIsImltZ19vcl92aWRlbyIsImZpbGVSZWFkZXIiLCJGaWxlUmVhZGVyIiwib25sb2FkIiwiYXBwZW5kIiwicmVzdWx0IiwicmVhZEFzRGF0YVVSTCIsInRvZ2dsZSIsImVhY2giLCJjaGtfaWQiLCJhdHRyIiwiZGVsdHNpZCIsInB1c2giLCJwYXJlbnRzIiwicmVtb3ZlIiwicm90YXRpb24iLCJjbG9zZXN0IiwiZmluZCIsImNzcyIsInZhbCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtDQUVBOztBQUVBLElBQUlBLEVBQUUsR0FBRyxDQUFUO0FBQ0EsSUFBSUMsR0FBRyxHQUFHLEVBQVY7QUFDQSxJQUFJQyxHQUFHLEdBQUcsQ0FBVjtBQUlBQyxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsT0FBZixFQUF3QixvQkFBeEIsRUFBOEMsWUFBWTtBQUV0REYsR0FBQyxDQUFDRyxJQUFGLENBQU87QUFDSEMsUUFBSSxFQUFFLE1BREg7QUFFSEMsT0FBRyxFQUFFLHVCQUZGO0FBR0hDLFFBQUksRUFBRU4sQ0FBQyxDQUFDLGdCQUFELENB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R0FSRDtBQVdILENBOUNKLENBQUQsQzs7Ozs7Ozs7Ozs7O0FDQUE7Ozs7Ozs7Ozs7Ozs7QUNBQSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcbmltcG9ydCAnLi9zdHlsZXMvY3VzdG9tLmNzcyc7XG5pbXBvcnQgJ2RhdGF0YWJsZXMubmV0JztcbmltcG9ydCAnZGF0YXRhYmxlcy5uZXQtYnM0JztcbmltcG9ydCAnLi9qcy9yb3RhdGUtaW1hZ2UuanMnO1xuaW1wb3J0ICdqcXVlcnktbW9kYWwnO1xuLy9pbXBvcnQgJ2pxdWVyeS11aS9leHRlcm5hbC9qcXVlcnktMS4xMi4xL2pxdWVyeS5qcyc7XG5cbnZhciB4cCA9IDA7XG52YXIgZHRzID0gW107XG52YXIgcnR5ID0gMDtcblxuXG5cbiQoZG9jdW1lbnQpLm9uKFwiY2xpY2tcIiwgXCIjc3ViX2FuaW1hbF9idXR0b25cIiwgZnVuY3Rpb24gKCkge1xuXG4gICAgJC5hamF4KHtcbiAgICAgICAgdHlwZTogXCJQT1NUXCIsXG4gICAgICAgIHVybDogXCJzYXZlLXN1Yi1jYXRlZ29yeS5waHBcIixcbiAgICAgICAgZGF0YTogJChcIiNmcm1zdWJhbmltYWxzXCIpLnNlcmlhbGl6ZSgpLFxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoZGF0YSkge1xuICAgICAgICAgICAgYWxlcnQoZGF0YSlcbiAgICAgICAgICAgIC8vJCgnI2FuaW1hbHMnKS5EYXRhVGFibGUoKS5hamF4LnJlbG9hZChudWxsLCBmYWxzZSk7XG4gICAgICAgICAgICAvLyQoXCIuY2xvc2UtbW9kYWxcIikuY2xpY2soKTtcblxuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICAvL2FsZXJ0KFwidGVzdFwiKTtcblxufSk7XG5cbi8vL2xvYWQgdHJpcCBsaXN0IHRvIGRhdGF0YWJsZVxuJChcIiNwYWdlc1wiKS5EYXRhVGFibGUoe1xuICAgIFwiYWpheFwiOiBcInBhZ2VsaXN0Lmpzb25cIixcbiAgICBcImNvbHVtbnNcIjogW1xuICAgICAgICB7IFwiZGF0YVwiOiBcIm9yZGVyXCIgfSxcbiAgICAgICAgeyBcImRhdGFcIjogXCJ0aXRsZVwiIH0sXG4gICAgICAgIHsgXCJkYXRhXCI6IFwiZGVzY3JpcHRpb25cIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcInVybFwiIH0sXG4gICAgICAgIHsgXCJkYXRhXCI6IFwiY3JlYXRlZGF0XCIgfSxcbiAgICAgICAgeyBcImRhdGFcIjogXCJ1cGRhdGVkYXRcIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcIm9wdHNcIiB9XG4gICAgXVxufSk7XG5cblxuLy8vbG9hZCB0cmlwIGxpc3QgdG8gZGF0YXRhYmxlXG4kKFwiI3RyaXBzXCIpLkRhdGFUYWJsZSh7XG4gICAgXCJhamF4XCI6IFwidHJpcHMuanNvblwiLFxuICAgIFwiY29sdW1uc1wiOiBbXG4gICAgICAgIHsgXCJkYXRhXCI6IFwidHJpcHNcIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcIm1vbnRoXCIgfSxcbiAgICAgICAgeyBcImRhdGFcIjogXCJ5ZWFyXCIgfSxcbiAgICAgICAgeyBcImRhdGFcIjogXCJvcHRzXCIgfVxuICAgIF1cbn0pO1xuXG4vLy9sb2FkIGNhdGVnb3J5IGxpc3QgdG8gZGF0YXRhYmxlXG4kKFwiI2FuaW1hbHNcIikuRGF0YVRhYmxlKHtcbiAgICBcImFqYXhcIjogXCJhbmltYWxzLmpzb25cIixcbiAgICBcImNvbHVtbnNcIjogW1xuICAgICAgICB7IFwiZGF0YVwiOiBcImFuaW1hbFwiIH1cbiAgICBdXG59KTtcblxuLy8vbG9hZCBsb2NhdGlvbiBsaXN0IHRvIGRhdGF0YWJsZVxuJChcIiNsb2NhdGlvblwiKS5EYXRhVGFibGUoe1xuICAgIFwiYWpheFwiOiBcImxvY2F0aW9uLmpzb25cIixcbiAgICBcImNvbHVtbnNcIjogW1xuICAgICAgICB7IFwiZGF0YVwiOiBcImxvY2F0aW9uXCIgfVxuICAgIF1cbn0pO1xuXG4vLy9sb2FkIGZpbGVzIHRvIGRhdGF0YWJsZXNcbiQoXCIjdGJsRmlsZXNcIikuRGF0YVRhYmxlKHtcbiAgICBcImFqYXhcIjogXCJmaWxlcy5qc29uXCIsXG4gICAgXCJjb2x1bW5zXCI6IFtcbiAgICAgICAgeyBcImRhdGFcIjogXCJpbWFnZU5hbWVcIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcInR5cGVcIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcImFuaW1hbFwiIH0sXG4gICAgICAgIHsgXCJkYXRhXCI6IFwibG9jYXRpb25cIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcInllYXJcIiB9LFxuICAgICAgICB7IFwiZGF0YVwiOiBcImRlc2NyaXB0aW9uXCIgfSxcbiAgICAgICAgeyBcImRhdGFcIjogXCJ0cmlwc1wiIH0sXG4gICAgICAgIHsgXCJkYXRhXCI6IFwib3B0aW9uXCIgfVxuICAgIF1cbn0pO1xuJChcIiN0YmxwYWdlc1wiKS5EYXRhVGFibGUoe1xuICAgIFwiZGVzdHJveVwiOiB0cnVlLFxuICAgIFwicmVzcG9uc2l2ZVwiOiB0cnVlLFxuICAgIFwicHJvY2Vzc2luZ1wiOiBmYWxzZSxcbiAgICBcIm9yZGVyaW5nXCI6IGZhbHNlLFxuICAgIFwiYlBhZ2luYXRlXCI6IGZhbHNlLFxuICAgIFwiYkxlbmd0aENoYW5nZVwiOiBmYWxzZSxcbiAgICBcImJGaWx0ZXJcIjogdHJ1ZSxcbiAgICBcImJJbmZvXCI6IGZhbHNlXG59KTtcblxuLy91cGxvYWRpbmcgcGhvdG9zXG5cbiQoZG9jdW1lbnQpLm9uKCdjbGljaycsICcjdXBsb2FkX2ZpbGVzX2J1dHRvbicsIGZ1bmN0aW9uICgpIHtcblxuICAgICQoXCIjdXBsb2FkX2ZpbGVzX2ltYWdlc1wiKS5jbGljaygpO1xuXG59KTtcblxuLy8gc2hvdyBwcmV2aWV3IG9mIHNlbGVjdGVkIGltYWdlc1xuJChkb2N1bWVudCkub24oJ2NoYW5nZScsICcjdXBsb2FkX2ZpbGVzX2ltYWdlcycsIGZ1bmN0aW9uIChlKSB7XG4gICAgdmFyIGZpbGVzID0gZS50YXJnZXQuZmlsZXM7XG4gICAgdmFyIGZpbGVzTGVuZ3RoID0gZmlsZXMubGVuZ3RoO1xuICAgIGZvciAodmFyIGkgPSAwOyBpIDwgZmlsZXNMZW5ndGg7IGkrKykge1xuICAgICAgICB4cCsrO1xuICAgICAgICB2YXIgZiA9IGZpbGVzW2ldO1xuICAgICAgICB2YXIgcmVzX2V4dCA9IGZpbGVzW2ldLm5hbWUuc3BsaXQoXCIuXCIpO1xuICAgICAgICB2YXIgaW1nX29yX3ZpZGVvID0gcmVzX2V4dFtyZXNfZXh0Lmxlbmd0aCAtIDFdO1xuICAgICAgICB2YXIgZmlsZVJlYWRlciA9IG5ldyBGaWxlUmVhZGVyKCk7XG4gICAgICAgIGZpbGVSZWFkZXIubmFtZSA9IGYubmFtZTtcbiAgICAgICAgZmlsZVJlYWRlci5vbmxvYWQgPSBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgLy92YXIgZmlsZSA9IGUudGFyZ2V0O1xuICAgICAgICAgICAgJChcIiN1cGxvYWRlclwiKS5hcHBlbmQoJzxkaXYgY2xhc3M9XCJjb2wtbWQtMyBpbWctY29udGFpbmVyXCI+PGltZyBzcmM9XCInICsgZS50YXJnZXQucmVzdWx0ICsgJ1wiIGNsYXNzPVwicGljLXZpZXdcIj48aW5wdXQgdHlwZT1cImhpZGRlblwiIG5hbWU9XCJyb3RhdGlvbltdXCIgY2xhc3M9XCJyb3RhdGlvblwiIHZhbHVlPVwiMFwiPjxkaXYgY2xhc3M9XCJidG5zcm90YXRpb25cIj48YnV0dG9uIGNsYXNzPVwiYnRuIGJ0bi1zdWNjZXNzIGJ0bi1zbSByb3RhdGUtbGVmdFwiICB0eXBlPVwiYnV0dG9uXCI+Uk9UQVRFIExFRlQ8L2J1dHRvbj4gPGJ1dHRvbiBjbGFzcz1cImJ0biBidG4tc3VjY2VzcyBidG4tc20gcm90YXRlLXJpZ2h0IHB1bGwtcmlnaHRcIiAgIHR5cGU9XCJidXR0b25cIj5ST1RBVEUgUklHSFQ8L2J1dHRvbj4gPC9kaXY+PGRpdiBjbGFzcz1cImJvdHRvbWJ0bnNcIj4gPGJ1dHRvbiBjbGFzcz1cImJ0biBidG4tZGFuZ2VyIGJ0bi1zbSBjYW5jZWxfaW1hZ2UgYnRueGMgY2FuY2VsX2ZhJyArIHhwICsgJyBcIiBkZWx0c2lkPVwiJyArIDAgKyAnXCIgIHR5cGU9XCJidXR0b25cIj5SRU1PVkUgUEhPVE88L2J1dHRvbj4gPC9kaXY+PC9kaXY+Jyk7XG5cbiAgICAgICAgfTsgIC8qYnRuLXJlbW92ZS1waG90byA6IHByZXZpb3VzIHJlbW92ZSBidG4gY2xhc3MqL1xuICAgICAgICBmaWxlUmVhZGVyLnJlYWRBc0RhdGFVUkwoZik7XG4gICAgfVxuXG4gICAgJChcIiNidG5jYW5jZWx1cGxvYWRcIikudG9nZ2xlKCk7XG4gICAgJChcIiN1cGxvYWRfZmlsZXNfYnV0dG9uXCIpLnRvZ2dsZSgpO1xuICAgICQoXCIjYnRuVXBsb2FkSW1hZ2VzXCIpLnRvZ2dsZSgpO1xufSk7XG5cbiQoZG9jdW1lbnQpLm9uKFwiY2xpY2tcIiwgXCIuY2FuY2VsX2ltYWdlXCIsIGZ1bmN0aW9uIChlKSB7XG4gICAgJCgnLmNhbmNlbF9pbWFnZScpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgY2hrX2lkID0gJCh0aGlzKS5hdHRyKCdkZWx0c2lkJyk7XG4gICAgICAgIGlmIChjaGtfaWQgPT0gMCkgeyBydHkrKzsgJCh0aGlzKS5hdHRyKCdkZWx0c2lkJywgcnR5KTsgfVxuXG4gICAgfSk7XG4gICAgdmFyIGRlbHRzaWQgPSAkKHRoaXMpLmF0dHIoJ2RlbHRzaWQnKTtcbiAgICBkdHMucHVzaChkZWx0c2lkKTtcbiAgICAkKHRoaXMpLnBhcmVudHMoXCIuaW1nLWNvbnRhaW5lclwiKS5yZW1vdmUoKTtcblxufSk7XG5cblxuXG5cbiIsIiQoZnVuY3Rpb24oKSB7XHJcbiAgICAvLyAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpeyBcclxuICAgICAgICB2YXIgcm90YXRpb24gPSAwO1xyXG4gICAgICAgICQoZG9jdW1lbnQpLm9uKCdjbGljaycsIFwiLnJvdGF0ZS1yaWdodFwiICwgZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIHJvdGF0aW9uID0gKHJvdGF0aW9uIC05MCkgJSAzNjA7XHJcbiAgICAgICAgICAgICQodGhpcykuY2xvc2VzdChcImRpdi5jb2wtbWQtM1wiKS5maW5kKFwiLnBpYy12aWV3XCIpLmNzcyh7J3RyYW5zZm9ybSc6ICdyb3RhdGUoJytyb3RhdGlvbisnZGVnKSd9KTtcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgICAgIGlmKHJvdGF0aW9uICE9IDApe1xyXG4gICAgICAgICAgICAgICAgJCh0aGlzKS5jbG9zZXN0KFwiZGl2LmNvbC1tZC0zXCIpLmZpbmQoXCIucGljLXZpZXdcIikuY3NzKHsnd2lkdGgnOiAnMjYwcHgnLCAnaGVpZ2h0JzogJzI2MHB4J30pO1xyXG4gICAgICAgICAgICB9ZWxzZXtcclxuICAgICAgICAgICAgICAgICQodGhpcykuY2xvc2VzdChcImRpdi5jb2wtbWQtM1wiKS5maW5kKFwiLnBpYy12aWV3XCIpLmNzcyh7J3dpZHRoJzogJzI2MHB4JywgJ2hlaWdodCc6ICcyNjBweCd9KTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAkKHRoaXMpLmNsb3Nlc3QoXCJkaXYuY29sLW1kLTNcIikuZmluZCgnLnJvdGF0aW9uJykudmFsKHJvdGF0aW9uKTtcclxuICAgIFxyXG4gICAgICAgICAgICAvL2FsZXJ0KCdjaGVjayByb3RhdGUgcmlnaHQhJyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICAgICAgXHJcbiAgICAgICAgJChkb2N1bWVudCkub24oJ2NsaWNrJywgXCIucm90YXRlLWxlZnRcIiwgZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIHJvdGF0aW9uID0gKHJvdGF0aW9uICsgOTApICUgMzYwO1xyXG4gICAgXHJcbiAgICBcclxuICAgIFxyXG4gICAgICAgICAgICAkKHRoaXMpLmNsb3Nlc3QoXCJkaXYuY29sLW1kLTNcIikuZmluZChcIi5waWMtdmlld1wiKS5jc3Moeyd0cmFuc2Zvcm0nOiAncm90YXRlKCcrcm90YXRpb24rJ2RlZyknfSk7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICBpZihyb3RhdGlvbiAhPSAwKXtcclxuICAgICAgICAgICAgICAgICQodGhpcykuY2xvc2VzdChcImRpdi5jb2wtbWQtM1wiKS5maW5kKFwiLnBpYy12aWV3XCIpLmNzcyh7J3dpZHRoJzogJzI2MHB4JywgJ2hlaWdodCc6ICcyNjBweCd9KTtcclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICAkKHRoaXMpLmNsb3Nlc3QoXCJkaXYuY29sLW1kLTNcIikuZmluZChcIi5waWMtdmlld1wiKS5jc3Moeyd3aWR0aCc6ICcyNjBweCcsICdoZWlnaHQnOiAnMjYwcHgnfSk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgJCh0aGlzKS5jbG9zZXN0KFwiZGl2LmNvbC1tZC0zXCIpLmZpbmQoJy5yb3RhdGlvbicpLnZhbChyb3RhdGlvbik7XHJcbiAgICBcclxuICAgICAgICAgICAgLy9hbGVydCgnY2hlY2sgcm90YXRlIGxlZnQhJyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICBcclxuICAgIFxyXG4gICAgICAgICQoZG9jdW1lbnQpLm9uKCdjbGljaycsIFwiLmJ0bi1yZW1vdmUtcGhvdG9cIiwgZnVuY3Rpb24oKXtcclxuICAgIFxyXG4gICAgXHJcbiAgICAgICAgICAgICAgICQodGhpcykuY2xvc2VzdChcImRpdi5jb2wtbWQtM1wiKS5yZW1vdmUoKTsgXHJcbiAgICBcclxuICAgICAgICAgICAgICAgXHJcbiAgICBcclxuICAgIFxyXG4gICAgICAgIH0pO1xyXG4gICAgXHJcbiAgICBcclxuICAgIH0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJzb3VyY2VSb290IjoiIn0=