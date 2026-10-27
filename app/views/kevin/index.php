<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Nama - Nama
            </button>
            <h3>Mohon diisi</h3>
            <ul class="list-group">
                <?php foreach($data['kevin'] as $kevin) : ?>
                    <li class="list-group-item">
                        <?php echo $kevin['nama_istri']; ?>
                        <a href="<?php echo BASEURL; ?>/kevin/hapus/<?php echo $kevin['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>
                        <a href="<?php echo BASEURL; ?>/kevin/detail/<?php echo $kevin['id'];?>" class="badge badge-primary float-right ml-1">Detail</a>
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
                <form action="<?php echo BASEURL; ?>/kevin/tambah" method="post">
                    <div class="form-group">
                        <label for="nama_istri">Nama Istri</label>
                        <input type="text" class="form-control" id="nama_istri" name="nama_istri">
                    </div>
                    <div class="form-group">
                        <label for="nama_orang">Nama Orang</label>
                        <input type="kota" class="form-control" id="nama_orang" name="nama_orang">
                    </div>
                    <div class="form-group">
                        <label for="nama_teman">Nama Teman</label>
                        <select class="form-control" id="nama_teman" name="nama_teman">
                            <option disabled selected value="">Pilih Teman</option>
                            <option value="dika">Dika</option>
                            <option value="monik">Monik</option>
                            <option value="jefri">Jeffri</option>
                            <option value="adit">Adit</option>
                            <option value="widya">widyar</option>
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