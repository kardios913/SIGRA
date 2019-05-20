<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="../assets/img/fl.png" type="image/png" >
        <title>SIEGRE</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/Font-Awenson/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../assets/css/ionicons.min.css">
        <link rel="stylesheet" href="../../assets/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../assets/css/Style.css">
        <link rel="stylesheet" href="../../assets/css/skins/skin-red.min.css">
<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
    </head>
    
    <body class="hold-transition skin-red sidebar-mini">