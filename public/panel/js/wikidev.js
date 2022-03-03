$(function() {

  $('.logout-btn').on('click', function(e) {
    e.preventDefault();
    let form = $(this).parents('form');
    
    Swal.fire({
      title: 'Logout Confirmation!',
      text: "Are you sure? your session will be end!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, let me out!'
    }).then(function(isConfirm) {
      if (isConfirm) {
        form.submit();
      }
    })
  });

});