var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
var purid = $("#pid").val();
var type = $(".jsclass #type").val();
var brand = $(".jsclass #brand").val();
var size = $(".jsclass #size").val();

 var price = $(".jsclass #price").val();
 var discount_price = $(".jsclass #discount_price").val();
 var quantity = $(".jsclass #quantity").val();
//$("#Belt_type").val(enteredgrade);

btn.onclick = function() {
    modal.style.display = "block";
     $('.purchaseid #pur_id').val(purid);
     $('.purchase #Btype').val(type);
     $('.purchase #Bbrand').val(brand);
     $('.purchase #Bsize').val(size);
     $('.scpt #price').val(price);
     $('.scpt #discount_price').val(discount_price);
     $('.scpt #current_quantity').val(quantity);
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
