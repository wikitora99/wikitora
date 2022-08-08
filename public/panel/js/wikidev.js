$(function() {

  let flashMsg = $('.flash-message').data('attr');

  $('.logout-btn').on('click', function(e) {
    e.preventDefault();
    let form = $(this).parents('form');
    
    Swal.fire({
      title: 'Logout Confirmation!',
      text: "Are you sure? your session will be end!",
      type: 'info',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, let me out!'
    })
    .then((result) => {
      if (result.value) {
        form.submit();
      }
    })
  });


  if (flashMsg){
    let data = $('.flash-message').data('attr').split('|');
    let icon = data[0];
    let message = data[1];

    Swal.fire({
      position: 'center'
      type: icon,
      title: message,
      showConfirmButton: true,
    })
  }

});