!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/",r(r.s=41)}({41:function(e,t,r){e.exports=r(42)},42:function(e,t){for(var r=0,n=0,o=0;o<sessionStorage.length;o++){var a=sessionStorage.key(o),i=sessionStorage.getItem(a);$.ajax({url:"/warenkorb/produkt",data:{id:i},dataType:"JSON",success:function(e){r+=parseFloat(e.price);var t="removeFromShoppingCart("+e.p_id+")",o=e.p_id;$('<tr class="result">').append($("<td>").text(e.item_number),$("<td>").text(e.name),$("<td>").text(e.description),$("<td>").text(e.price+" €"),$("<td>").append('<button class="delete" id="'+o+'" onclick="'+t+'">')).appendTo("#warenkorb");if(n===sessionStorage.length-1)$("<tr>").append($("<td>").text(""),$("<td>").text(""),$('<td style="text-align: right;">').text("Gesamtpreis:"),$("<td>").text(r.toFixed(2)+" €").append('<input type=hidden value="'+r+'" name="gesamtpreis"/>')).appendTo("#warenkorb");else n++;$(".delete").html("Entfernen")}})}}});