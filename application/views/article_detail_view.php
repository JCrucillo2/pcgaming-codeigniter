<h1><?php echo $heading ?></h1>

<?php if(($results)) : ?>
    <?php foreach($results as $row) : ?>
        <?php
            $originalDate = $row->timedate;
            $newDate = date('F d, Y | h:i a', strtotime($originalDate));
        ?>
        
        <div class="detail-information">
            <h2 class="text-center text-warning bg-dark rounded p-3"><?php echo $row->game; ?></h2>
            <p class="bg-dark text-light p-2 rounded"><?php echo $this->typography->nl2br_except_pre($row->description); ?></p>

            <div class="bg-dark text-light p-1 rounded mb-3 d-inline-block">Added by: <span class="text-success"><?php echo $row->first_name . " " . $row->last_name; ?></span> on <span class="text-warning"><?php echo $newDate; ?></span></div>
            
            <?php if ($this->ion_auth->logged_in()) : ?>
                <?php if(($row->author_id) == $user_id) : ?>
                    <div class="mt-0 mb-3">
                        <a href="<?php echo base_url() ."articles/edit/" .$row->game_id;?>" class="btn btn-success"><i class="material-icons mr-1">edit</i>Edit</a>
                        <a href="<?php echo base_url() ."articles/delete/" .$row->game_id;?>" class="btn btn-danger"><i class="material-icons mr-1">delete</i>Delete</a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <img class="mr-2 detail-img-control" src="<?php echo base_url(); ?>uploads/images/<?php echo $row->img_name; ?>" alt="large image">
        </div>
    <?php endforeach ?>
    <?php else : ?>
        <p>No Information</p>
<?php endif; ?>