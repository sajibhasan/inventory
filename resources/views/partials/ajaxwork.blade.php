 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
$.ajaxSetup({
   headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 $("#add-new-brand").hide();
      $('#add-brand-btn').click(function(){
        $("#add-new-brand").slideToggle(function(){
          $('#new_brand').focus();
        });
        return false;
      });
            $('#save-brand-btn').click(function(){
          var newBrand = $('#new_brand');
          if(newBrand){

          $.ajax({
              url:"{{route('product.storebrand')}}",
              method:'post',
              data:{
                  brand_name: newBrand.val(),
                  _token:$("input[name =_token]").val()
              },
              success:function(response){
                  if (response.success == true) {
              // remove error message
              var inputBrand = newBrand.closest('.input-group');
              inputBrand.removeClass('has-error');
              inputBrand.next('.text-danger').remove();

              // add new group to the select
              $("select[name = brand_id]")
                  .append($("<option></option>")
                  .attr("value", response.brand.id)
                  .attr("selected", true)
                  .text(response.brand.name));

              // clear the text
              newBrand.val("");
            }
              },
              error: function(xhr) {
            var errors = xhr.responseJSON;
            var error = errors.name[0];

            if (error) {
              var inputBrand = newBrand
                                  .closest('.input-group');

                inputBrand.next('.text-danger').remove();

                inputBrand.addClass('has-error')
                  .after('<p class="text-danger">' + error + '</p>');
            }
          }
          });
          }else{

                $('select[name="brand_id"]').empty();

            }
      });
      
      $("#add-new-suplier").hide();
      $('#add-suplier-btn').click(function(){
        $("#add-new-suplier").slideToggle(function(){
          $('#new_suplier').focus();
        });
        return false;
      });
      
       $('#save-suplier-btn').click(function(){
          var newsuplier = $('#new_suplier');
          if(newsuplier){

          $.ajax({
              url:"{{route('product.storesuplier')}}",
              method:'post',
              data:{
                  suplier_name: newsuplier.val(),
                  _token:$("input[name =_token]").val()
              },
              success:function(response){
                  if (response.success == true) {
              // remove error message
              var inputSuplier = newsuplier.closest('.input-group');
              inputSuplier.removeClass('has-error');
              inputSuplier.next('.text-danger').remove();

              // add new group to the select
              $("select[name = suplier_id]")
                  .append($("<option></option>")
                  .attr("value", response.suplier.id)
                  .attr("selected", true)
                  .text(response.suplier.name));

              // clear the text
              newsuplier.val("");
            }
              },
              error: function(xhr) {
            var errors = xhr.responseJSON;
            var error = errors.name[0];

            if (error) {
              var inputSuplier = newsuplier
                                  .closest('.input-group');

                inputSuplier.next('.text-danger').remove();

                inputSuplier.addClass('has-error')
                  .after('<p class="text-danger">' + error + '</p>');
            }
          }
          });
          }else{

                $('select[name="suplier_id"]').empty();

            }
      });
 </script>