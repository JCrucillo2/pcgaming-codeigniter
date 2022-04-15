<?php
    if($results) {
        foreach($results as $row) {
            $game_name = $row->game;
            $description = $row->description;
            $id = $row->game_id;
        }
    }
?>

<h1>Edit Game Entry</h1>
<?php echo form_open_multipart("articles/edit/$id"); ?>
    <div class="form-group">
        <label for="game">Game</label>
        <input type="text" name="game" class="form-control form-width" value="<?php echo set_value('game', $game_name) ?>">
        <?php echo form_error('game'); ?>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control form-width" cols="30" rows="10"><?php echo set_value('description', $description); ?></textarea>
        <?php echo form_error('description'); ?>
    </div>

    <div class="form-group d-flex">
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
        <a class="btn btn-danger ml-2" href="<?php echo base_url(); ?>articles/detail/<?php echo $id; ?>">Cancel</a>
    </div>
</form>