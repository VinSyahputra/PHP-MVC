<?php include("pages/parts/header.php"); ?>
<div class="pagetitle">
    <h1>Chat</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php $base_url ?>index.php?pages=chat">Home</a></li>
            <li class="breadcrumb-item active">Chat</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row flex-column-reverse flex-sm-row">
        <div class="col-12 col-sm-10">
            <div class="card info-card sales-card" style="height: 73vh !important;">
                <div class="card-header"><i class="bi bi-chat"></i> Chat</div>
                <div class="card-body bg-light d-flex flex-column-reverse px-3 py-4" style="overflow-y: auto;">
                    <!-- chat -->
                    <div class="d-flex flex-column bg-white p-2 border mb-3" style="max-width: 70%; border-radius:10px;">
                        <small>Johndoe</small>
                        <hr>
                        <div class="">
                            <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil fuga deserunt possimus earum voluptas vel ea eligendi magni, voluptatibus doloribus modi et inventore exercitationem optio, beatae reiciendis aliquid voluptates laborum.
                            </small>
                        </div>
                        <hr>
                        <small><?= date('d F Y'); ?></small>
                    </div>
                    <!-- end of chat -->

                    <!-- chat -->
                    <div class="d-flex flex-column alert-primary p-2 border mb-3 ms-auto" style="max-width: 70%; border-radius:10px;">
                        <small>Johndoe</small>
                        <hr>
                        <div class="">
                            <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil fuga deserunt possimus earum voluptas vel ea eligendi magni, voluptatibus doloribus modi et inventore exercitationem optio, beatae reiciendis aliquid voluptates laborum.
                            </small>
                        </div>
                        <hr>
                        <small><?= date('d F Y'); ?></small>
                    </div>
                    <!-- end of chat -->
                    <!-- chat -->
                    <div class="d-flex flex-column bg-white p-2 border mb-3" style="max-width: 70%; border-radius:10px;">
                        <small>Johndoe</small>
                        <hr>
                        <div class="">
                            <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil fuga deserunt possimus earum voluptas vel ea eligendi magni, voluptatibus doloribus modi et inventore exercitationem optio, beatae reiciendis aliquid voluptates laborum.
                            </small>
                        </div>
                        <hr>
                        <small><?= date('d F Y'); ?></small>
                    </div>
                    <!-- end of chat -->
                    <!-- chat -->
                    <div class="d-flex flex-column bg-white p-2 border mb-3" style="max-width: 70%; border-radius:10px;">
                        <small>Johndoe</small>
                        <hr>
                        <div class="">
                            <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil fuga deserunt possimus earum voluptas vel ea eligendi magni, voluptatibus doloribus modi et inventore exercitationem optio, beatae reiciendis aliquid voluptates laborum.
                            </small>
                        </div>
                        <hr>
                        <small><?= date('d F Y'); ?></small>
                    </div>
                    <!-- end of chat -->
                    <!-- chat -->
                    <div class="d-flex flex-column bg-white p-2 border mb-3" style="max-width: 70%; border-radius:10px;">
                        <small>Johndoe</small>
                        <hr>
                        <div class="">
                            <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil fuga deserunt possimus earum voluptas vel ea eligendi magni, voluptatibus doloribus modi et inventore exercitationem optio, beatae reiciendis aliquid voluptates laborum.
                            </small>
                        </div>
                        <hr>
                        <small><?= date('d F Y'); ?></small>
                    </div>
                    <!-- end of chat -->
                </div>
                <div class="card-footer">
                    <div class="input-group h-100">
                        <textarea class="form-control custom-control" placeholder="ketikkan pesan" rows="2" style="resize:none"></textarea>
                        <span class="input-group-addon btn-success text-center rounded px-3 h-100 d-inline-flex align-items-center" style="cursor: pointer;"><i class="bi bi-cursor-fill"></i> Kirim</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-sm-2">
            <div class="card info-card sales-card">
                <div class="card-header bg-primary text-white">Info</div>
                <div class="card-body bg-light">
                    <h5 class="card-title">Sisa <span>| Hari</span></h5>

                </div>
            </div>
        </div>

    </div>
</section>

</main><!-- End #main -->
<?php include("pages/parts/footer.php"); ?>
</body>

</html>