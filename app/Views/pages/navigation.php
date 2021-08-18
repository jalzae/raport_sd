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

    function Unactive() {
        $("#dashboard").removeClass('active');
        $("#config").removeClass('active');
        $("#input").removeClass('active');
        $("#lapharian").removeClass('active');
        $("#laputs").removeClass('active');
        $("#lapukk").removeClass('active');
        $("#lapledgeruts").removeClass('active');
        $("#lapledgerukk").removeClass('active');
        $("#lapledgerraport").removeClass('active');
        $("#backup").removeClass('active');
    }



    $(document).ready(function() {
        $(".loader-wrapper").fadeOut("slow");
        $("#dashboard").click(function() {
            Unactive();
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('master/review') ?>",
                success: function(data) {
                    $(this).addClass('active');
                    // $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });
        $("#siswa").click(function() {
            Unactive();
            $(".loader-wrapper").fadeIn("slow");
            $.ajax({
                url: "<?= base_url('siswa/index') ?>",
                success: function(data) {
                    $("#config").addClass('active');
                    $(".content").html(data);
                    $(".loader-wrapper").fadeOut("slow");
                }
            });
            return false;
        });


        
    });
</script>