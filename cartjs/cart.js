
$(document).on('click', '.add-button button', function(){

    let count = $(this).closest('.add-button').find('.count').val();
    let action = $(this).closest('.add-button').find('.action').val();
    let id = $(this).closest('.add-button').find('.id').val();

    axios.post('http://localhost/11/cartjs/api.php', {
        count: count,
        action: action,
        id: id,
      })// iseinam i php
      .then(function (response) {
          $('#cart').empty().html(response.data.html);
          A();
        // console.log(response.data.html);
      })
      .catch(function (error) {
        console.log(error);
      });
});


var A = function(){
$(document).on('click', '.cart-remove button', function(){
    let action = $(this).closest('.cart-remove').find('.action').val();
    let id = $(this).closest('.cart-remove').find('.id').val();
    axios.post('http://localhost/11/cartjs/api.php', {
        action: action,
        id: id,
      })
      .then(function (response) {
          $('#cart').empty().html(response.data.html);
        // console.log(response.data.html);
      })
      .catch(function (error) {
        console.log(error);
      });
});
}


$(document).ready(function(){

    axios.post('http://localhost/11/cartjs/api.php', {
        action: 'refresh',
      })
      .then(function (response) {
          $('#cart').empty().html(response.data.html);
          A();
        // console.log(response.data.html);
      })
      .catch(function (error) {
        console.log('E RR O R');
        console.log(error);
      });

});