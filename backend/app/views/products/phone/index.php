  <!-- CONTENT   -->
  <section class="padding-y">
    <div class="container-md  mt-5">
      <header class="section-heading">
        <!-- <button class="bg-label btn mt-2"><i class="fa-solid fa-circle-arrow-left"></i></button> -->
        <h3 class="section-title text-center fw-bold text-muted mt-5"><?= $data['product']; ?></h3>
        <hr class="divider">
      </header>

      <div class="row py-3 mt-5 mx-auto">
        <?php foreach ($data['productsData'] as $data): ?>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="px-2 py-2 ">
            <span class="topbar"> <span class="badge mt-2 mx-2 bg-<?= $data['bg_badge']; ?> position-absolute "><?= $data['note']; ?></span> </span>
          <figure class="card-product-grid border-label rounded-2 px-2 py-2 justify-content-center mx-auto text-center">
            <a href="<?=BASEURL;?>products/detail/" type="button" data-bs-toggle="modal" class="img-wrap mb-2 rounded bg-gray-light ">
              <img height="180" width="200" class="mix-blend-multiply" src="<?= BASEURL; ?>/img/<?=$data['photo_product']?>">
            </a>
            
            <figcaption class="pt-2 text-start  px-2 py-2 rounded-2 bg-light ">
              <a href="#" class="float-end  btn btn-light btn-icon bg-label"> <i class="fa fa-heart"></i> </a>
              <strong class="price label"><?= $data['price_after']; ?></strong> <!-- price.// -->
              <small class="price"> <del class=""><?= $data['price_before']; ?> </del></small> <!-- price.// --> <br>
              <small class="text-muted"><?= $data['name_product']; ?></small> <br>
              <small class="text-muted">Brand: <?= $data['brand']; ?></small> <br>
              <small class="gray">Cateogory: <?= $data['category']; ?></small>
              <div class="stars float-end">
                <span class="fa fa-star star-active"></span>
                <small><?= $data['rating']; ?></small> 
              </div><br>
              <hr>
              <div class="justify-content-center mx-auto text-center">
              <!-- <button class="btn btn-sm bg-outline-label "><small>Buy now</small></button> -->
              <a href="<?= BASEURL; ?>products/getmodalbuy<?= $data['product_id']; ?>"class="btn btn-sm bg-label w-50 me-1 justify-content-center showModalBuy" data-bs-target="#buyModal"  data-id="<?= $data['product_id']; ?>" type="button" data-bs-toggle="modal"><small>add to cart</small></a>
              <a href="<?=BASEURL;?>products/detail/<?= $data['product_id']; ?>"class="btn btn-sm bg-label w-30"><small>detail</small></a>
            </div>
            </figcaption>
          </figure>
          </div>
        </div> <!-- col end.// -->
        <?php endforeach; ?>
        
      </div> <!-- row end.// -->

    </div> <!-- container end.// -->
  </section>
  <!-- END CONTENT   -->

  <!-- Button trigger modal -->


  <!-- <script>
    exampleModal = document.getElementById('exampleModal')

    exampleModal.addEventListener('show.bs.modal',())
  </script> -->