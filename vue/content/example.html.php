<div id="content" class="row p-3 justify-content-around">

<?php foreach ($data['news'] as $new) { ?>
    
    <div class="card col-lg-3 mb-3" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $new->getImg() ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $new->getTitle() ?></h5>
                <p class="card-text"><?php echo $new->getContent() ?></p>
                <p class="card-text"><?php echo $new->getDate() ?></p>
                <a href="https://<?php echo $new->getLink() ?>" class="btn btn-primary"><?php echo $new->getLink() ?></a>
            </div>
    </div>

<?php } ?>

</div>