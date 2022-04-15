<h1>Game Entry</h1>
<?php echo form_open_multipart('articles/write'); ?>
    <div class="form-group">
        <label for="game">Game</label>
        <input type="text" name="game" class="form-control form-width" value="<?php echo set_value('game') ?>">
        <?php echo form_error('game'); ?>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control form-width" cols="30" rows="10"><?php echo set_value('description'); ?></textarea>
        <?php echo form_error('description'); ?>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </div>
</form>