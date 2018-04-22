


$( document ).ready(function() {

$("#addproduct").click(function(){
    
    var isNotEmpty=true;
     HoldOn.open({
     theme:"sk-folding-cube",
     message: "<h4>Processing Please Wait... </h4>"
});
     
    $(".data-required").each(function(){
      //  alert($(this).val());
        if($(this).val()==""||$(this).val()==null){
            
            isNotEmpty=false;
            

            
        }
    });
  
  if(!isNotEmpty){
      HoldOn.close();
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
            url: base_url+"/Purchaseajax/purchase", 
            data: params,
            type:"post",
       success: function (data, textStatus, jqXHR) {
           //alert(data);
      
   if(data=="false"){
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
      else if(data=="true"){
        HoldOn.close();
     swal({
           title: "error!",
           text: "this product is already exist in purchase cart!",
           type: "error",
           confirmButtonClass: "btn-success",
           confirmButtonText: "Done!",
           closeOnConfirm: false,
           closeOnCancel: true
         });
         
         return false; 
         
    }
    else
    {
        
        loadcart(data);  
        HoldOn.close();
        
           // var row2 = document.getElementById("getall");
    }
  }
  
});
    
}
 
   });
   
});
function loadcart(data)
{
    var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            

            //var row1 = document.getElementById("menu");
            var row1 = document.getElementById("menuc");
            var row2 = document.getElementById("all");
            var row3 = document.getElementById("buttonn");
                var size_val=$("#size").val("");
               // var billno_val=$("#billno").val("");
                var quantity_val=$("#quantity").val("");
                var mrp_val=$("#mrp").val("");
                var discount_val=$("#discount").val("");
                var vat_val=$("#vat").val("");
                var mrptotal_val=$("#mrptotal").val("");
                var salesrate_val=$("#salesrate").val("");
            
            
            row1.innerHTML = arr[0];
            row2.innnerHTML = arr[1];
            row3.innnerHTML = arr[2];
}

function checktype()
{
  var type1= $("#type").val();
 
  
  if(type1==="3")
  {
  $('#brandall').hide();
  }
  else
    {
     
            //alert(loadtype['type_name'])
             var loadtype = {"type_name":type1};
             var formData={"loadtype":loadtype};

     $.ajax
            ({
            
            url: base_url+"/Purchaseajax/checkbrand",
            type: "POST",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){

            /* var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            

           */
            //$("#brand").chosen({max_selected_options: 5});
            var row1 = document.getElementById("brandonly");
            row1.innerHTML = data;
            
            $("#brand").chosen({no_results_text: "Oops, nothing found!"},{max_selected_options: 5}); 




           $('#brandall').show();      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
      }

 
}
function delete_purchase_cart(value)
{
   //alert(value);
     HoldOn.open({
     theme:"sk-folding-cube",
     message: "<h4>Processing Please Wait... </h4>"
});
             var id_value = {"id":value};
             var formData={"id_value":id_value};
             
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Purchaseajax/delete_purchase_cart",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){
              
            loadcart(data);
            HoldOn.close();
          

      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
      

}
function update_purchase()
{
        HoldOn.open({
     theme:"sk-folding-cube",
     message: "<h4>Processing Please Wait... </h4>"
}); 
             
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Purchaseajax/update_purchase",
            
            cache: false,

            success: function(data, textStatus, jqXHR){
           if(data=="true")
           {
             HoldOn.close();  
           swal({
           title: "success!",
           text: "Purchase successfully Completed!",
           type: "success",
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Done' 
         },
        function(isConfirm) {
          if (isConfirm) {
                window.open(base_url+"/Home/newadd","_self");
          }
        });
           }


      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
 
}



