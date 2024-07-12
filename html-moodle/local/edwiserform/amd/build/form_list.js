"use strict";define(["jquery","core/ajax","core/notification","local_edwiserform/jquery.dataTables","local_edwiserform/dataTables.bootstrap4","local_edwiserform/buttons.bootstrap4","local_edwiserform/fixedColumns.bootstrap4","local_edwiserform/formviewer"],function(e,t,o){return{init:function(){var a,l=function(e,o,a,l){return t.call([{methodname:"edwiserform_get_forms",args:{search:e,start:o,length:a,order:l}}])[0]};e(document).ready(function(r){a=e("#efb-forms").DataTable({paging:!0,ordering:!0,bProcessing:!0,bServerSide:!0,rowId:"DT_RowId",bDeferRender:!0,scrollY:"400px",scrollX:!0,scrollCollapse:!0,fixedColumns:{leftColumns:1,rightColumns:1},classes:{sScrollHeadInner:"efb_dataTables_scrollHeadInner"},dom:'<"efb-top"<"efb-listing"l><"efb-list-filtering"f>>t<"efb-bottom"<"efb-form-list-info"i><"efb-list-pagination"p>><"efb-shortcode-copy-note">',columns:[{data:"title"},{data:"type"},{data:"shortcode",orderable:!1},{data:"author"},{data:"created"},{data:"author2"},{data:"modified"},{data:"allowsubmissionsfromdate"},{data:"allowsubmissionstodate"},{data:"actions",orderable:!1}],ajax:function(e,t,o){l(e.search.value,e.start,e.length,e.order[0]).done(function(e){t(e)}).fail(Notification.exception)},language:{sSearch:M.util.get_string("efb-search-form","local_edwiserform"),emptyTable:M.util.get_string("listforms-empty","local_edwiserform"),info:M.util.get_string("efb-heading-listforms-showing","local_edwiserform",{start:"_START_",end:"_END_",total:"_TOTAL_"}),infoEmpty:M.util.get_string("efb-heading-listforms-showing","local_edwiserform",{start:"0",end:"0",total:"0"})},fnRowCallback:function(t,o,a,l){e("td:eq(0)",t).addClass("efb-tbl-col-title"),e("td:eq(2)",t).addClass("efb-tbl-col-shortcode").attr("title",M.util.get_string("clickonshortcode","local_edwiserform"))},drawCallback:function(t){e(".efb-shortcode-copy-note").html(M.util.get_string("note","local_edwiserform")+" "+M.util.get_string("clickonshortcode","local_edwiserform"))}}),e(".efb-modal-close").click(function(){e("#efb-modal").removeClass("show")}),e("body").on("click",".efb-form-delete",function(t){t.preventDefault();var o=e(this).data("formid"),a=e(this).parents("tr"),l=e(a).children(".efb-tbl-col-title").text();e("#efb-modal .efb-modal-header").removeClass("bg-success").addClass("bg-warning").children(".efb-modal-title").html(M.util.get_string("warning","local_edwiserform")),e("#efb-modal .efb-modal-body").html("<h5>"+M.util.get_string("efb-delete-form-and-data","local_edwiserform",{title:l,id:o})+"</h5>"),e("#efb-modal").addClass("show delete").removeClass("pro"),e("#efb-modal .efb-modal-delete-form").data("formid",o)}).on("click",".efb-form-export",function(t){if("available"!=license)return e("#efb-modal .efb-modal-header").removeClass("bg-success").addClass("bg-warning"),e("#efb-modal .efb-modal-title").html(M.util.get_string("hey-wait","local_edwiserform")),e("#efb-modal .efb-modal-body").html("<h5>"+M.util.get_string("efb-template-inactive-license","local_edwiserform",M.util.get_string("efb-form-action-export-title","local_edwiserform"))+"</h5>"),e("#efb-modal").addClass("show pro").removeClass("delete"),void t.preventDefault()}).on("click",".efb-modal-pro-activate",function(){window.location.href=M.cfg.wwwroot+"/admin/settings.php?section=local_edwiserform&activetab=local_edwiserform_license_status"}),e("body").on("click",".efb-modal-delete-form",function(l){l.preventDefault();var r=e(this).data("formid");t.call([{methodname:"edwiserform_delete_form",args:{id:r}}])[0].done(function(e){1==e.status&&a.draw()}).fail(o.exception),e(".efb-modal-close").click()}),e("body").on("click",".efb-enable-disable-form",function(a){!function(a){var l=e(a).data("formid");t.call([{methodname:"edwiserform_enable_disable_form",args:{id:l,action:!e(a).is(":checked")}}])[0].done(function(t){t.status?e(a).prop("checked",e(a).is(":checked")):e(a).prop("checked",!e(a).is(":checked")),e(a).parent().attr("title",e(a).is(":checked")?e(a).data("disable-title"):e(a).data("enable-title"))}).fail(o.exception)}(e(this).prev())}),e("body").on("click",".efb-tbl-col-shortcode",function(t){var o=e("<input>");e("body").append(o);var a=e(this).text();o.val(a).select(),document.execCommand("copy"),o.remove(),Formeo.dom.toaster(M.util.get_string("shortcodecoppied","local_edwiserform",a))})})}}});
//# sourceMappingURL=form_list.js.map
