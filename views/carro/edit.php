<section>
    <div class="container text-center">
        <h2 class="title">Editar usuario</h2>
        <hr id="hr-cat"/>
</div>

    <div class="container">
        
    <div class="col-md-12 form-group">

        <form method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
            <label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" /><br />
            <label>Password</label><input type="text" name="password" /><br />
            <label>Role</label>
            <select name="role">
                <option value="admin" <?php if ($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="owner" <?php if ($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
            </select><br />
            <label>&nbsp;</label><input type="submit" />
        </form>
    </div>
    </div>
</section>
