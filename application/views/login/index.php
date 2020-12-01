<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style type="text/css">
        body {
            margin-left: 500px;
            background-color: darksalmon;
            font-size: 20px;
            font-family: sans-serif;
            padding-top: 200px;
            position: fixed;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?= base_url('login/cekLogin') ?>">
        <table align='center'>
            <tr>
                <td align="center" colspan="2">Enter Login Details</td><br>
            </tr>
            <tr>
                <td align="right">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td align="rigth">Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>