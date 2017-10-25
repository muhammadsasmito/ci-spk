<div id="page-wrapper">
            <!-- isi kontentnya -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $title ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url(); ?>alternatif/store_ubah" method="POST">
                                        <input style="display: none;" type="text" name="id" value="<?php echo $alternatif->id ?>">
                                        <div class="form-group">
                                            <label>Alternatif</label>
                                            <input name="alternatif" class="form-control" value="<?php echo $alternatif->alternatif ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi"> <?php echo $alternatif->deskripsi ?></textarea> 
                                        </div> 
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input name="gambar" type="file" class="form-control" value="<?php echo $alternatif->gambar ?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Bersihkan</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->