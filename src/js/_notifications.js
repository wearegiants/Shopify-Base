$('.close-alert').on('click',function(event){
   event.preventDefault();
   $(".alert").removeClass('alert-active');
});