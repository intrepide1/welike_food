<?php
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="style_css.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://netdna.bootstrapcdn.com/boostrap/3.0.0/css/boostrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <select id="filter" name="choix" style="border-style: none;font-weight: bold;">
        <option value="" value="" disabled="" selected>Tout afficher</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Recette"> Recette</option>
        <option value="Retour d\'experience">Retour d'exprience</option>
        <option value="conseil">Conseil</option>
    </select>
</body>

<?php
?>
<script>
    $(document).ready(function() {
        $("#filter").on('change', function() {
            var value = $(this).val();
            // alert(value); 

            $.ajax({
                url: "filter.php",
                type: 'POST',
                data: 'request=' + value,
                // beforeSend:function(){ 
                // $(".amg_car").html('<span>Working....</span>');
                // },
                success: function(data) {
                    $(".amg_car").html(data);
                },
            });
        });
    });
</script>