<section>
    <div class="container text-center">
        <h2 class="title">Editar Reserva</h2>
        <hr id="hr-cat"/>
</div>

    <div class="container">
        
    <div class="col-md-12 form-group">

        <form method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
            <label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" /><br />
            <label>Password</label><input type="text" name="password" /><br />
            <label>Categoria</label>
            <select name="categoria">
                <option value="ouro" <?php if ($this->reserva[0]['categoria'] == 'ouro') echo 'selected'; ?>>OUro</option>
                <option value="prata" <?php if ($this->reserva[0]['categoria'] == 'prata') echo 'selected'; ?>>Prata</option>
                <option value="bronze" <?php if ($this->reserva[0]['categoria'] == 'bronze') echo 'selected'; ?>>Bronzer</option>
            </select><br />
            <label>Status</label>
            <select name="status">
                <option value="ativa" <?php if ($this->reserva[0]['status'] == 'ativa') echo 'selected'; ?>>Ativa</option>
                <option value="encerrada" <?php if ($this->reserva[0]['status'] == 'encerrada') echo 'selected'; ?>>Encerrada</option>
            </select><br />
            <label>&nbsp;</label><input type="submit" />
        </form>
    </div>
    </div>
</section>
