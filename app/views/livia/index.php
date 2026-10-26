<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Wishlist
            </button>
            <h3>Akan Dicapai Satu persatu</h3>
            <ul class="list-group">
                <?php foreach($data['livia'] as $livia) : ?>
                    <li class="list-group-item">
                        <?php echo $livia['negara']; ?>
                        <a href="<?php echo BASEURL; ?>/livia/hapus/<?php echo $livia['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>
                        <a href="<?php echo BASEURL; ?>/livia/detail/<?php echo $livia['id'];?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Wishlist Livia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>/livia/tambah" method="post">
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <input type="text" class="form-control" id="negara" name="negara">
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="kota" class="form-control" id="kota" name="kota">
                    </div>
                    <div class="form-group">
                        <label for="tempat_wisata">Tempat Wisata</label>
                        <select class="form-control" id="tempat_wisata" name="tempat_wisata">
                            <option disabled selected value="">Pilih Pantai</option>
                            <option value="Punggur Tuing">Punggur Tuing</option>
                            <option value="Tembok Besar Cina">Tembok Besar Cina</option>
                            <option value="Turun Aban">Turun Aban</option>
                            <option value="Pelabuhan Pasir">Pelabuhan Pasir</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>