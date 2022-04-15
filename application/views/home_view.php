<h1 class="py-4 mt-2 mb-4 text-center bg-warning text-dark rounded"><?php echo $heading; ?></h1>

<?php if(($results)) : ?>
    <?php foreach($results as $row) : ?>
        <div class="home-area mb-4 border border-dark rounded p-2 bg-dark text-light">
            <div class="d-flex mb-2">
                <img class="mr-2 rounded" src="<?php echo base_url(); ?>uploads/images/thumb/<?php echo $row->img_name; ?>" alt="thumbnail image">
                <div class="flex-controller">
                    <h4 class="text-center bg-warning p-2 rounded text-dark title-control"><?php echo $row->game ?></h4>
        
                    <p class="m-0">
                        <?php  
                            $limited_text = word_limiter($row->description,75);
                            echo $limited_text;
                        ?>
                    </p>
                </div>
            </div>

            <a class="btn btn-success home-link-control" href="<?php echo base_url(); ?>articles/detail/<?php echo $row->game_id; ?>">Read More</a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>