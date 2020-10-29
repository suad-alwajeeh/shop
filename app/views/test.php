    function cart<?php echo $row->Product_id;?>(){
        document.getElementById('cart<?php echo $row->Product_id;?>').style.display='none';
        document.getElementById('dcart<?php echo $row->Product_id;?>').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    }
      function dcart<?php echo $row->Product_id;?>(){
            document.getElementById('cart<?php echo $row->Product_id;?>').style.display='inline-block';
        document.getElementById('dcart<?php echo $row->Product_id;?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
          function favorite(){
            //  document.getElementById('favorite').style.display='none';
       // document.getElementById('dfavorite').style.display='inline-block';
$.post("add/add_cart/addtofavorite",{product_id:$("#id1").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
     
      function dfavorite(){
             document.getElementById('favorite').style.display='inline-block';
        document.getElementById('dfavorite').style.display='none';
$.post("add/add_cart/deletefromfavorite",{product_id:$("#id1").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    
    }