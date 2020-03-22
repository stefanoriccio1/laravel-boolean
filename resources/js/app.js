require('./bootstrap');

const $ = require('jquery');

$(document).ready(function(){
  $('#filter').change(function(){
    // console.log($(this).val());
    $.ajax({
      'url': window.location.protocol + '//' + window.location.host + '/api/students/genders',
      'data': {
        'gender': $(this).val()
      },
      'method': 'POST',
      success: function(data){
        console.log(data.response);
      },
      error: function(){
        console.log('error');
      }
    })
  })
});
