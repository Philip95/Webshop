!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=38)}({38:function(e,t,n){e.exports=n(39)},39:function(e,t){for(var n=0,r=0,o=0;o<sessionStorage.length;o++){var a=sessionStorage.key(o),i=sessionStorage.getItem(a);$.ajax({url:"/warenkorb/produkt",data:{id:i},dataType:"JSON",success:function(e){n+=parseFloat(e.price);e.p_id,e.p_id,$('<tr class="result">').append($("<td>").text(e.item_number),$("<td>").text(e.name),$("<td>").text(e.description),$("<td>").text(e.price+" €")).appendTo("#warenkorb");if(r===sessionStorage.length-1)$("<tr>").append($("<td>").text(""),$("<td>").text(""),$('<td style="text-align: right;">').text("Gesamtpreis:"),$("<td>").text(n.toFixed(2)+" €").append('<input type=hidden value="'+n+'" name="gesamtpreis"/>')).appendTo("#warenkorb");else r++}})}$((function(){$("#home").on("click",(function(e){0==$(this).hasClass("post-page")&&sessionStorage.clear()}))}))}});