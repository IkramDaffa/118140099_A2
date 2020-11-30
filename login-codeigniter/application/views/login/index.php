<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?=$this->session->flashdata('message');?>
    <form method="post" action="<?=base_url('login/cekLogin')?>">
        <table>
            <tr>
                <td align="center" colspan="2">Enter Login Detail</td>
            </tr>
            <tr>
                <td align="right">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td align="right">Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>