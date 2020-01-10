
<script type="text/javascript">
var Alternar = "Cerrado";
var ImgUser  = document.getElementById("ImgUser");
var MenuUser = document.getElementById("MenuUser");

MenuUsuario = ()=>{
    ImgUser.addEventListener("click",()=>{
      if(Alternar == "Cerrado"){
        Alternar = "Abierto";

        MenuUser.style.display = "inline";

      }else{
        Alternar = "Cerrado";

        MenuUser.style.display = "none";

      }
    });
}
MenuUsuario();

</script>
