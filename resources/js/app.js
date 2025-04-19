// Importing necessary libraries
import './bootstrap';
import 'bootstrap'; // Bootstrap JS load
import * as bootstrap from 'bootstrap'; // Import Bootstrap object
import 'livewire-sortable';
import jQuery from 'jquery';
import TomSelect from "tom-select";
import "tom-select/dist/css/tom-select.css";
import 'summernote/dist/summernote-lite';
import 'summernote/dist/summernote-lite.css';
import moment from 'moment-timezone';

// Make libraries available globally
window.TomSelect = TomSelect;
window.bootstrap = bootstrap;
window.$ = window.jQuery = jQuery;

window.moment = moment; // Make sure moment is available globally
moment().tz("Asia/Dhaka").format();

import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";

// Slick carousel and its styles
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel/slick/slick.js';

// Import ApexCharts and ApexTree
import ApexCharts from 'apexcharts';
window.ApexCharts = ApexCharts;
import ApexTree from 'apextree';
window.ApexTree = ApexTree;

// Import JSZip for handling zip files
import JSZip from 'jszip';
window.JSZip = JSZip;

// Import pdfmake and related files
import pdfmake from 'pdfmake';
import pdfFonts from 'pdfmake/build/vfs_fonts';
pdfmake.addVirtualFileSystem(pdfFonts);
// pdfmake.vfs = pdfFonts.pdfMake.vfs;
window.pdfmake = pdfmake;

// DataTables imports
import DataTable from 'datatables.net-bs5';
window.DataTable = DataTable;
import 'datatables.net-autofill-bs5';
import 'datatables.net-buttons-bs5';
import 'datatables.net-buttons/js/buttons.colVis.mjs';
import 'datatables.net-buttons/js/buttons.html5.mjs';
import 'datatables.net-buttons/js/buttons.print.mjs';
import 'datatables.net-colreorder-bs5';
import DateTime from 'datatables.net-datetime';
window.DateTime = DateTime;
import 'datatables.net-fixedcolumns-bs5';
import 'datatables.net-fixedheader-bs5';
import 'datatables.net-keytable-bs5';
import 'datatables.net-responsive-bs5';
import 'datatables.net-rowgroup-bs5';
import 'datatables.net-rowreorder-bs5';
import 'datatables.net-scroller-bs5';
import 'datatables.net-searchbuilder-bs5';
import 'datatables.net-searchpanes-bs5';
import 'datatables.net-select-bs5';
import 'datatables.net-staterestore-bs5';


document.addEventListener("DOMContentLoaded", function() {
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});

// Initialize TomSelect
window.initTomSelect = function () {
    document.querySelectorAll(".tom-select").forEach((el) => {
        if (!el.tomSelect) {
            new TomSelect(el, {
                allowEmptyOption: true,
                create: true,
            });
        }
    });
};

// for summernote
document.addEventListener("DOMContentLoaded", function () {
    var DArrow = function (context) {
        var ui = $.summernote.ui;

        var button = ui.button({
            contents: '<span style="font-size: 16px; font-weight:bold;" class="text-danger">&#11162;</span>',
            // tooltip: '<i style="font-size: 16px; font-weight:bold;" class=""></i>',
            click: function () {
                context.invoke('editor.pasteHTML', '<span style="font-size: 16px; font-weight:bold;" class="text-danger">&#11162;</span>');
            }
        });

        return button.render(); // return button as jquery object
    };
    var SArrow = function (context) {
        var ui = $.summernote.ui;

        var button = ui.button({
            contents: '<span style="font-size: 16px; font-weight:bold;" class="text-success">&#11162;</span>',
            // tooltip: '<i style="font-size: 16px; font-weight:bold;" class=""></i>',
            click: function () {
                context.invoke('editor.pasteHTML', '<span style="font-size: 16px; font-weight:bold;" class="text-success">&#11162;</span>');
            }
        });

        return button.render(); // return button as jquery object
    };
    var BArrow = function (context) {
        var ui = $.summernote.ui;

        var button = ui.button({
            contents: '<span style="font-size: 16px; font-weight:bold;" class="text-dark">&#11162;</span>',
            // tooltip: '<i style="font-size: 16px; font-weight:bold;" class=""></i>',
            click: function () {
                context.invoke('editor.pasteHTML', '<span style="font-size: 16px; font-weight:bold;" class="text-dark">&#11162;</span>');
            }
        });

        return button.render(); // return button as jquery object
    };
    
    $('#remarks').summernote(
        {
            height: 300,
            buttons: {
                DArrow : DArrow,
                SArrow : SArrow,
                BArrow : BArrow
            },
            toolbar: [
                ['style', ['style']],
                ['fontname', ['fontname']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ['mybutton', ['DArrow', 'SArrow', 'BArrow']],

            ],
            callbacks: {
                onChange: function (contents) {
                    // @this.set('remarks', contents);
                }
            }
        }
    );

    // Listen for Livewire events and set content in the editor
    Livewire.on('loadRemarks', (remarksContent) => {
        // Ensure content is a string and not an array
        if (Array.isArray(remarksContent)) {
            remarksContent = remarksContent.join(' '); // Convert array to string
        }
        $('#remarks').summernote('code', remarksContent);
    });
});