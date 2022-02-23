require("./bootstrap");

import $ from "jquery";
window.$ = window.jQuery = $;

import "jquery.nicescroll";
import "moment";
// import "codemirror";
import "owl.carousel";
// import "summernote/dist/summernote-bs4";
import "bootstrap-daterangepicker";
import "bootstrap-timepicker";
import "select2/dist/js/select2";

require("./style");
require("./scripts");

$(() => {
    $(".select2").select2();
    $(".select2-tags").select2({
        tags: true,
    });
});
