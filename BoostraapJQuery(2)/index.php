<?php
require_once './shared/header.php';
?>
<div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
        <form method="get" action="./controlle/login.php">   
        <div class="row" style="border: 0px solid green; margin: 30px 30px 30px 30px; padding: 6%">
            <div class="form-control">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" 
                       placeholder="Insira seu email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" 
                       placeholder="Insira sua senha" name="senha">
            </div>
               
            <div class="d-grid">                
                <input type="submit" class="btn btn-outline-success" id="enviar" 
                       value="Enviar" name="enviar">
            </div>
            <div class="d-grid">                
                <?php
                @$cod = $_REQUEST['cod'];
                
                if(isset($cod)){
                    if($cod == '171'){
                        
                        echo('<div class="alert alert-danger" style="margin-top:5%;">Usuário ou senha inválido.</div>');
                        
                    }
                    
                }
                ?>
            </div>
                
             </div>
        </div>
        </form>
    </div>
    <div class="col-md-4"> </div>
</div>
<?php
require_once './shared/footer.php';
?>