<?php
    include "header.php";
    include "leftside.php";
?>              
        <div class="admin-content-right">
            Trang Admin 
         </div>
     </section>
     <section>
     </section>
     <script>
            const meNuleft = document.querySelectorAll(".admin-content-left > ul > li")
            meNuleft.forEach(function(menuitem,index){
            menuitem.addEventListener("click",function(){
            menuitem.classList.toggle("active")    
    })
    }) 
    </script>
 </body>
 </html>  
                        