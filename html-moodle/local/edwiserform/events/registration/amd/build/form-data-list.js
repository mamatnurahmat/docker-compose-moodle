"use strict";define(["jquery","core/ajax","local_edwiserform/form_data_list","local_edwiserform/formviewer"],function(o,t,a){return{init:function(){o(document).ready(function(e){o("body").on("click",".registration-action",function(){var e=this,i=o(this).attr("data-action"),r=o(this).closest("table").data("formid"),n=o(this).closest("tr").find(".formdata-user"),s=o(n).attr("data-userid");Formeo.dom.loading(),t.call([{methodname:"edwiserformevents_registration_action",args:{formid:r,userid:s,action:i}}])[0].done(function(t){if(Formeo.dom.loadingClose(),1==t.status)return o(e).removeClass("show").parent().find('[data-action="'+t.type+'"]').addClass("show"),void a.update_separator();alert(t.msg)}).fail(function(o){Formeo.dom.loadingClose()})})})}}});
//# sourceMappingURL=form-data-list.js.map