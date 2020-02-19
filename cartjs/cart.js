
$(document).on('click', '.add-button button', function(){
    
    let count = $(this).closest('.add-button').find('.count').val();
    let action = $(this).closest('.add-button').find('.action').val();
    let id = $(this).closest('.add-button').find('.id').val();

    axios.post('http://localhost/11/cartjs/api.php', {
        count: count,
        action: action,
        id: id,
      })
      .then(function (response) {
        // console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
});