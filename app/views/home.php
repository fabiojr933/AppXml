<br>
<form action="<?php echo URL_BASE."home/lerXML" ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Digite o CNPJ</label>
    <input type="number" class="form-control" id="cnpj" placeholder="Digite o CNPJ"  name="cnpj" required  data-parsley-min="14">
  </div> 
  <label >Selecione o arquivo no formatdo XML</label>
    <input type="file" class="form-control-file" id="arquivo" name="arquivo"><br><br>
    <button type="submit" class="btn btn-primary mb-2">Gerar XML</button>
</form>


<script>
  $(function () {
    var cnpjDefault = localStorage.getItem("cnpj");
    console.log(cnpjDefault);
    var cnpj = $("#cnpj");
  
      cnpj.val(cnpjDefault);
  
    cnpj.on("change", function (arg) {     
       localStorage.setItem("cnpj", cnpj.val());
    });
});
</script>





