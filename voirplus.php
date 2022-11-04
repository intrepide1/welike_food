<?php
?>
<!DOCTYPE html>
<html>

<head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
                #voirplus {
                        position: relative;
                        top: 20px;
                        width: 98%;
                        background-color: white;
                        border: 3px #00d226 solid;
                        border-radius: 20px;
                        color: #000;
                        font-size: 30px;
                }
        </style>
</head>

<body>

        <div class="load-wrap text-center">
                <button class="voirplus" type="button" id="voirplus" data-id="<?php echo $lastid; ?>" class="btn btn-primary">Voir plus...</button>
        </div>

</body>

</html>

<?php
?>