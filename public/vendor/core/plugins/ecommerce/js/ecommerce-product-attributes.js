(()=>{function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(e,r){for(var i=0;i<r.length;i++){var a=r[i];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,(n=a.key,o=void 0,o=function(e,r){if("object"!==t(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var a=i.call(e,r||"default");if("object"!==t(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===r?String:Number)(e)}(n,"string"),"symbol"===t(o)?o:String(o)),a)}var n,o}var r=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.template=$("#product_attribute_template").html(),this.totalItem=0,this.deletedItems=[],this.handleChooseImage(),this.handleForm(),this.initSpectrum()}var r,i,a;return r=t,(i=[{key:"handleChooseImage",value:function(){new RvMediaStandAlone(".image-box .btn-images",{filter:"image",view_in:"all_media",onSelectFiles:function(t,e){var r=_.first(t);r&&(e.closest(".image-box").find(".image-data").val(r.url),e.closest(".image-box").find(".preview_image").attr("src",r.thumb).show())}})}},{key:"initSpectrum",value:function(){$(".input-color-picker").each((function(t,e){var r=$(e);r.spectrum({allowEmpty:!0,color:r.val()||"rgb(51, 51, 51)",showInput:!0,containerClassName:"full-spectrum",showInitial:!0,showSelectionPalette:!1,showPalette:!0,showAlpha:!0,preferredFormat:"hex",showButtons:!1,palette:[["rgb(0, 0, 0)","rgb(102, 102, 102)","rgb(183, 183, 183)","rgb(217, 217, 217)","rgb(239, 239, 239)","rgb(243, 243, 243)","rgb(255, 255, 255)","rgb(230, 184, 175)","rgb(244, 204, 204)","rgb(252, 229, 205)","rgb(255, 242, 204)","rgb(217, 234, 211)","rgb(208, 224, 227)","rgb(201, 218, 248)","rgb(207, 226, 243)","rgb(217, 210, 233)","rgb(234, 209, 220)","rgb(221, 126, 107)","rgb(234, 153, 153)","rgb(249, 203, 156)","rgb(255, 229, 153)","rgb(182, 215, 168)","rgb(162, 196, 201)","rgb(164, 194, 244)","rgb(159, 197, 232)","rgb(180, 167, 214)","rgb(213, 166, 189)","rgb(204, 65, 37)","rgb(224, 102, 102)","rgb(246, 178, 107)","rgb(255, 217, 102)","rgb(147, 196, 125)","rgb(118, 165, 175)","rgb(109, 158, 235)","rgb(111, 168, 220)","rgb(142, 124, 195)","rgb(194, 123, 160)","rgb(166, 28, 0)","rgb(204, 0, 0)","rgb(230, 145, 56)","rgb(241, 194, 50)","rgb(106, 168, 79)","rgb(69, 129, 142)","rgb(60, 120, 216)","rgb(61, 133, 198)","rgb(103, 78, 167)","rgb(166, 77, 121)","rgb(133, 32, 12)","rgb(153, 0, 0)","rgb(180, 95, 6)","rgb(191, 144, 0)","rgb(56, 118, 29)","rgb(19, 79, 92)","rgb(17, 85, 204)","rgb(11, 83, 148)","rgb(53, 28, 117)","rgb(116, 27, 71)","rgb(91, 15, 0)","rgb(102, 0, 0)","rgb(120, 63, 4)","rgb(127, 96, 0)","rgb(39, 78, 19)","rgb(12, 52, 61)","rgb(28, 69, 135)","rgb(7, 55, 99)","rgb(32, 18, 77)","rgb(76, 17, 48)","rgb(152, 0, 0)","rgb(255, 0, 0)","rgb(255, 153, 0)","rgb(255, 255, 0)","rgb(0, 255, 0)","rgb(0, 255, 255)","rgb(74, 134, 232)","rgb(0, 0, 255)","rgb(153, 0, 255)","rgb(255, 0, 255)"]],change:function(t){r.val(t.toRgbString())}})}))}},{key:"addNewAttribute",value:function(){var t=this,e=t.template.replace(/__id__/gi,0).replace(/__position__/gi,0).replace(/__checked__/gi,0==t.totalItem?"checked":"").replace(/__title__/gi,"").replace(/__slug__/gi,"").replace(/__color__/gi,"").replace(/__image__/gi,"");$(".swatches-container .swatches-list").append(e),t.totalItem++}},{key:"exportData",value:function(){var t=[];return $(".swatches-container .swatches-list li").each((function(e,r){var i=$(r);t.push({id:i.data("id"),is_default:i.find("input[type=radio]").is(":checked")?1:0,order:i.index(),title:i.find(".swatch-title input").val(),slug:i.find(".swatch-slug input").val(),color:i.find(".swatch-value input").val(),image:i.find(".swatch-image input").val()})})),t}},{key:"handleForm",value:function(){var t=this;$(".swatches-container .swatches-list").sortable(),$("body").on("submit",".update-attribute-set-form",(function(){var e=t.exportData();$("#attributes").val(JSON.stringify(e)),$("#deleted_attributes").val(JSON.stringify(t.deletedItems))})).on("click",".js-add-new-attribute",(function(e){e.preventDefault(),t.addNewAttribute(),t.initSpectrum()})).on("click",".swatches-container .swatches-list li .remove-item a",(function(e){e.preventDefault();var r=$(e.currentTarget).closest("li");t.deletedItems.push(r.data("id")),r.remove()}))}}])&&e(r.prototype,i),a&&e(r,a),Object.defineProperty(r,"prototype",{writable:!1}),t}();$(window).on("load",(function(){new r}))})();