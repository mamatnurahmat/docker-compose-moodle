"use strict";define(["jquery","core/ajax"],function(e,t){e(document).click(function(t){var i=e(".select-container.active");e(t.target).parents(".select-container");i.is(t.target)||0!==i.has(t.target).length||e(i).removeClass("active"),i.length>1&&e.each(i,function(i,s){0===e(s).has(t.target).length&&e(s).removeClass("active")})}).keydown(function(t){var i=e(".select-container.active");if(0===i.length)return!0;if(-1==[13,27,33,34,35,36,38,40].indexOf(t.keyCode))return!0;var s=e(i).find(".select-list"),n=e(s).find(".select-list-item:not(.d-none)");if(0==n.length)return!1;var a=e(s).find(".select-list-item.active"),l=e(n).index(a),c=!1;switch(t.keyCode){case 13:e(a).trigger("click");break;case 27:e(i).removeClass("active");break;case 33:l>0&&(c=(c=l-10)<=0?0:c);break;case 34:l<n.length-1&&(c=(c=l+10)>n.length-1?n.length-1:c);break;case 35:c=n.length-1;break;case 36:c=0;break;case 38:l>0&&(c=l-1);break;case 40:l<n.length-1&&(c=l+1)}return!1!==c&&-1!=[33,34,35,36,38,40].indexOf(t.keyCode)&&(e(s).find(".select-list-item").removeClass("active"),e(n[c]).addClass("active"),e(s).scrollTop(e(s).scrollTop()+e(n[c]).position().top-e(n[c]).height()-14)),!1}),window.addEventListener("keydown",function(t){if(0===e(".select-container.active").length)return!0;switch(t.keyCode){case 37:case 39:case 38:case 40:case 32:t.preventDefault()}},!1),e("body").on("focus",".form-control",function(){e(this).parent().addClass("active")}).on("change blur",".form-control",function(t){""===e(this).val()&&e(this).parent().removeClass("active")}).on("click",".selected-option",function(){var t=this;if(e(this).parents(".select-container").toggleClass("active"),e(this).parents(".select-container").is(".active")){var i=function(t,i){arguments.length>2&&void 0!==arguments[2]&&arguments[2]||e(t).find(".select-list-item").removeClass("active"),e(t).find('.select-list-item[data-value="'+i+'"]').addClass("active")},s=e(this).parents(".select-container").siblings("select").val(),n=null;e.isArray(s)?(e.each(s,function(s,n){i(e(t).next(),n,!0)}),n=e(e(this).next().find(".select-list-item.active")[0]).position().top):(i(e(this).next(),s),n=e(this).next().find(".select-list-item.active").position().top),e(this).next().scrollTop(e(this).next().scrollTop()+n),e(this).next().find(".select-list-search").focus()}}).on("click",".select-list-item",function(){var t=e(this).parents(".select-container").siblings("select");if(!e(t).is('[multiple="true"]'))return i(e(t),e(this).data("value")),void e(this).parents(".select-container").removeClass("active");var n=e(t).val();e(this).is(".active")?(n.splice(n.indexOf(e(this).data("value")),1),e(this).removeClass("active")):(n.push(e(this).data("value")),e(this).addClass("active")),e(t).val(n),s(t)}).on("mouseover",".select-list-item",function(){}).on("click",".select-file-button",function(){e(this).parents(".file-container").prev().click()}).on("change",'.input-file-wrapper input[type="file"]',function(t){0!=e(this)[0].files.length?(e(this).next().find(".selected-file").val(e(this)[0].files[0].name),e(this).parents(".input-file-wrapper").addClass("active")):(e(this).next().find(".selected-file").val(""),e(this).parents(".input-file-wrapper").removeClass("active"))}).on("input",'.select-list-wrapper input[type="text"].select-list-search',function(t){var i=e(this).val().trim().toLowerCase(),s=e(this).parents(".select-list-wrapper").find("ul.select-list");e(s).find(".select-list-item").each(function(t,s){e(s).toggleClass("d-none",""!=i&&-1==e(s).text().toLowerCase().search(i))}),e(s).find(".active").removeClass("active"),e(e(s).find(".select-list-item:not(.d-none)")[0]).addClass("active")});var i=function(t,i){e(t).val(i)[0].dispatchEvent(new CustomEvent("change",{target:e(t)[0]})),i=function(t){var i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return""!==i?e(t).find('option[value="'+i+'"]'):e(t).find('option[value="'+e(t).val()+'"]')}(e(t)),e("#select-"+e(t).attr("id")+" .selected-option").attr("selected",i.attr("value")),e("#select-"+e(t).attr("id")+" .selected-option").text(i.attr("label"))},s=function(t){var i=e(t).val();e.each(i,function(s,n){n=e(t).find('option[value="'+n+'"]'),i[s]=e(n).attr("label")}),i.length<4?e(t).next().find(".selected-option").text(i.join(", ")):e(t).next().find(".selected-option").text(M.util.get_string("options-selected-count","local_edwiserform",{count:i.length,max:e(t).find("option").length}))},n={"style-2":{add:function(t){e(t).find("select").each(function(t,i){e(i).hide();var n=e(i).attr("id"),a=e(i).is('[multiple="true"]')?" multiple":"";if(e(i).after('<div class="select-container '+a+'" id="select-'+n+'"></div>'),e("#select-"+n).append('<div class="selected-option form-control f-addon"></div>'),e(i).is('[multiple="true"]'))s(i);else{var l=e(i).find('option[value="'+e(i).val()+'"]');e("#select-"+n+" .selected-option").text(e(l).attr("label"))}e("#select-"+n).append('<div class="select-list-wrapper"><div class="select-list-search-wrapper"><i class="fa fa-search" aria-hidden="true"></i><input type="text" class="select-list-search"/></div><ul class="select-list" id="select-list-'+n+'" for="'+n+'"></ul></div>'),e(i).find("option").each(function(t,i){var s=e("<li></li>");e(s).addClass("select-list-item"),e(s).attr("data-value",e(i).attr("value")),e(s).text(e(i).attr("label")),e("#select-list-"+n).append(s)})}),function(t){e(t).find('input[type="file"]').each(function(t,i){e(i).hide();var s=e(i).attr("id"),n="";0!=e(this)[0].files.length&&(n=e(this)[0].files[0].name),e(i).after('<div class="file-container f-addon" id="file-'+s+'"></div>'),e("#file-"+s).append('<div class="file-input-selected-wrapper"><input type="text" disabled class="selected-file" value="'+n+'"/></div>'),e("#file-"+s).append('<div class="file-input-button-wrapper"><button class="btn btn-primary select-file-button" type="button"><i class="fa fa-upload" aria-hidden="true"></i></button></div>'),0!=e(this)[0].files.length&&e(i).parents(".input-file-wrapper").addClass("active")})}(t)},remove:function(t){e(t).find("select").each(function(t,i){e(i).show().next(".select-container").remove()}),e(t).find('input[type="file"]').each(function(t,i){e(i).show().next(".file-container").remove()})}}};return n["style-3"]=n["style-2"],n["style-4"]=n["style-2"],{apply:function(t,i,s){return e(t)[i+"Class"]("form-style-"+s),null==n["style-"+s]||n["style-"+s][i](t)}}});
//# sourceMappingURL=form_styles.js.map