require('./bootstrap');

import pdfMake from "pdfmake/build/pdfmake";
import pdfFonts from "pdfmake/build/vfs_fonts";
pdfMake.vfs = pdfFonts.pdfMake.vfs;

require('datatables.net');
require('datatables.net-bs4');
require('datatables.net-buttons-bs4');
require('datatables.net-buttons/js/buttons.html5.js' );
require('datatables.net-buttons/js/buttons.colVis.js' );

require('select2');
const feather = require('feather-icons')
feather.replace()