require('./bootstrap');

const $ = require('jquery');

$(document).ready(function(){
  $('#filter').change(function(){
    console.log($(this).val());
  })
});
