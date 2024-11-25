<?php
session_start();
require 'config.php';

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['clear'])) {
    file_put_contents('../logs/access.log', '');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>M4R5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
        .row {
            margin-top: 30px;
        }
    </style>
</head>
<style>
    body {

        background: url(https://images.idgesg.net/images/article/2018/07/anonymous_guy_fawkes_mask_hoodie_smoke_grenades_disruption_security_hacker_protest_by_tom_roberts_cc0_via_unsplash_1200x800-100765700-large.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

<div class="container" style="opacity: 0.8;">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="card">

                <div class="card-header">
                    Info | <a href="logout.php" style="color:black;">Logout</a>
                    <center>GHOSTRULES</center>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>

                        <tbody>
                            <?php require 'down.php'; ?>

                        </tbody>
                        </tr>
                        </thead>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center>© BEAST | GHOSTRULES Community
                                        </center>
                                    </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>

<script>
    $(function() {
        $('table').DataTable({
            "order": [
                [0, "desc"]
            ]
        });

        $(document).on('click', '#clear', function() {
            $.post('index.php', {
                clear: true
            }, function(data) {
                //alert('Reset');
                setTimeout(function() {
                    window.location.reload();
                }, 500);
            });
        });
    });
</script>