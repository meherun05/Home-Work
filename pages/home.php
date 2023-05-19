<?php include 'includs/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) {?>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="assets/image/<?php echo $blog['image']?>" alt="" class="card-img-top" style="height: 300px">
                    <div class="card-body">
                        <h3 class="text-center"><?php echo $blog['title']?></h3>
                        <p class="fw-bold">Color:  <?php echo $blog['color']?></p>
                        <p class="fw-bold">Weight:  <?php echo $blog['weight']?></p>
                        <p class="text-muted"><?php echo $blog['details']?></p>
                        <p class="fw-bold">Price: <?php echo $blog['price']?></p>
                        <a href="" class="btn btn-outline-success rounded-0 float-end">Buy</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<?php include 'includs/footer.php'?>
