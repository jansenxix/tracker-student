<!DOCTYPE html>
<html>
<head>
    <title>Account Already Exists</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h2>Dear {{ $user->fName }},</h2>

<p>We noticed that you already have an account with us. Below are your account details:</p>

<table>
    <tr>
        <th>Email:</th>
        <td>{{ $user->Uname }}</td>
    </tr>
    <tr>
        <th>Password:</th>
        <td>{{ $user->pass }}</td>
    </tr>
</table>

<p>
    Please keep your password confidential and do not share it with anyone.
</p>

<p>
    If you have any questions or need further assistance, please feel free to contact us.
</p>

<p>Thank you,</p>
<p>University of Cagayan Valley</p>
</body>
</html>
