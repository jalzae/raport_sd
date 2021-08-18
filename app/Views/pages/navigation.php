<script type="text/javascript">
    function loadin() {
        $(".loader-wrapper").fadeIn("slow");
    }

    function loadout() {
        $(".loader-wrapper").fadeOut("slow");
    }

    function tutupmodal() {
        $("#tutupmodal").click();
    }

    function closemodal() {
        $("#tutupmodal").click();
    }


    
    $(document).ready(function() {
        $(".loader-wrapper").fadeOut("slow");
        $("#dashboard").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/review') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
      

        //menu pegawai
        $("#employe").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/employe') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#subunit").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/subunit') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });

        ///CRUD psb system,
        $("#setting_pendaftaran").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/setting_pendaftaran') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });


        ///CRUD transaction
        $("#daftar_transaksi").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/daftar_transaksi') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#daftar_transaksi_online").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/daftar_transaksi_online') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#daftar_transaksi_online_confirm").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/daftar_transaksi_online_confirm') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#tagihan_siswa").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/tagihan_siswa') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#tagihan_uang_gedung").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/tagihan_uang_gedung') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });


        //menu transaksi finance setting
        $("#akunjurnal").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/akunjurnal') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });



        $("#form_keringanan").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/form_keringanan') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#jenistagihan").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/jenistagihan') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#detailtagihan").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/detailtagihan') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });


        //menu laporan finance,
        $("#input_keuangan_batch").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/upload_csv_form') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#print_rekap_tagihan_harian").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/print_rekap_tagihan_harian') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#print_rekap_tagihan_bulanan").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/print_rekap_tagihan_bulanan') ?>",
                success: function(data) {
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });



        //menu raport setting
        $("#semester").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_semester') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#kelas").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_kelas') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#guru").click(function() {
            loadin();
            $.ajax({
                url: "<?= base_url('master/data_guru') ?>",
                success: function(data) {

                    $(".content").html(data);
                    loadout();
                }
            });


            return false;
        });
        $("#siswa").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_siswa') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#muatansekolah").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_muatans') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#muatansekolahkd").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_muatans_kd') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#muatanpesantren").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_pesantren') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#observasi").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_observasi') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#sikap").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/data_sikap') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#ekskul").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/get_ekskul') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#sekolah").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/get_sekolah') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#btq").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/get_btq') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });



        $("#print_raport").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/print_raport') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#print_data_siswa").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/print_data_siswa') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#dm_database").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/dm_database') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });


        $("#backup").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/backup') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });
        $("#pengumuman").click(function() {
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/pengumuman') ?>",
                success: function(data) {

                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });


            return false;
        });






    });
</script>