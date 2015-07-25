$('.close-alert').on('click',function(event){
   event.preventDefault();
   $(".alert").transition({
      height: 0
   },300,'snap');
});