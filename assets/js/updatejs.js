

$( document ).ready(function() {

$("#updateproduct").click(function(){
    var isNotEmpty=true;
    $(".data-required").each(function(){
      //  alert($(this).val());
        if($(this).val()==""||$(this).val()==null){
            
            isNotEmpty=false;
            

            
        }
    });
  
  if(!isNotEmpty){
      
              swal({
           title: "error!",
           text: "Please fill all the fields!",
           type: "error",
           confirmButtonClass: "btn-success",
           confirmButtonText: "Done!",
           closeOnConfirm: false,
           closeOnCancel: true
         });
         
         return false;
      
  }else{
      
  
  HoldOn.open({
     theme:"sk-folding-cube",
     message: "<h4>Processing Please Wait... </h4>"
});       
  var type_val=$("#type").val();
  var brand_val=$("#brand").val();
  var supplier_val=$("#supplier").val();
  var size_val=$("#size").val();
  var billno_val=$("#billno").val();
  var quantity_val=$("#quantity").val();
  var mrp_val=$("#mrp").val();
  var discount_val=$("#discount").val();
  var vat_val=$("#vat").val();
  var mrptotal_val=$("#mrptotal").val();
  var salesrate_val=$("#salesrate").val();


  var json_arr=[];

  var json={"type_val":type_val,"brand_val":brand_val,"supplier_val":supplier_val,"size_val":size_val,
  "billno_val":billno_val,"quantity_val":quantity_val,"mrp_val":mrp_val,"discount_val":discount_val,
  "vat_val":vat_val,"mrptotal_val":mrptotal_val,"salesrate_val":salesrate_val };
  
  
json_arr.push(json);


 var prodall={"products": json_arr}
 var params={"prodall":prodall}
  $.ajax({
            url: base_url+"/Updateajax/update", 
            data: params,
            type:"post",
       success: function (data, textStatus, jqXHR) {
        

         if(data=="success"){
             HoldOn.close();
     
    swal({
        
          title: "Success!",
          text: "Products are updated successfully!",
          type: "success",
          confirmButtonClass: "btn-success",
          confirmButtonText: "Done!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
                window.open(base_url+"/Home/newupdate","_self");
          }
        });
  }
  else if(data=="fail"){
      HoldOn.close();
        
     swal({
           title: "error!",
           text: "this product is already exist please update!",
           type: "error",
           confirmButtonClass: "btn-success",
           confirmButtonText: "Done!",
           closeOnConfirm: false,
           closeOnCancel: true
         });
         
         return false;                
    }
  }
  
});
    
}
 
   });
});














function checktype()
{
  var type1= $("#type").val();
  if(type1=="3")
  {
  $('#brandall').hide();


      }
      else
      {
          $('#brandall').show();
      }

   
     
       
             var loadtype = {"type_name":type1};
             var formData={"loadtype":loadtype};
             
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Updateajax/checkbrand",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){
              
             var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            

            var row1 = document.getElementById("brand");
            var row2 = document.getElementById("size");
           
            row1.innerHTML = arr[0];
            row2.innerHTML = arr[1];
            


      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
      

 
}
function getall()
{
    HoldOn.open({
     theme:"sk-folding-cube",
     message: "<h4>Processing Please Wait... </h4>"
});
    var type_val= $("#type").val();
    var brand_val= $("#brand").val();
    var size_val= $("#size").val();
    
    
    var loadtype = {"type_val":type_val,"brand_val":brand_val,"size_val":size_val};
    var formData={"loadtype":loadtype};
    
    $.ajax
            ({
            type: "POST",
            url: base_url+"/Updateajax/getall",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){

             var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            
          
            var row1 = document.getElementById("supplier");
         
            var row2 = document.getElementById("getall");
           
            row1.innerHTML = arr[0];
            row2.innerHTML = arr[1];
            HoldOn.close();
            


      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
    
}