<? header("content-type: text/html; charset=utf-8");

$mail = "max.tkh.ua@gmail.com";
$subject="letter";
$header = "From: \"application\" \n";
$header .= "Content-type: text/html; charset=utf-8 \r\n";

	$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500" rel="stylesheet">
    <title>Responsive email template</title>
    <style>
        body {
            width:100%!important;
            -webkit-text-size-adjust:100%;
            -ms-text-size-adjust:100%;
            margin:0;
            padding:0;
            font-family: "Work Sans", sans-serif;
            font-weight: 300;
        }
    </style>
</head>
<body bgcolor="#fff" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="-webkit-font-smoothing:antialiased;width:100% !important;background-color:#ffffff;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;-webkit-text-size-adjust:none;">
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#fff" style="background:#fff;width:100%">
    <tr>
        <td bgcolor="#fff" width="100%" style="background:#fff;width:100%;text-align:center;">
            <table width="600" bgcolor="#f0eff5" cellpadding="0" cellspacing="0" border="0" align="center" style="width:600px;margin:0 auto;background:#f0eff5">
                <thead style="background:#6a4bf5;width:100%;">
                <tr>
                    <td colspan="3" width="100%" height="60px" bgcolor="#f0eff5" style="width:100%;height:60px;background:#6a4bf5"></td>
                </tr>
                <tr>
                    <td colspan="3" width="100%" bgcolor="#f0eff5" style="width:100%;background:#6a4bf5;text-align:center">
                        <img src="http://dev.ergonomic.be/yev/hellotime-letter/img/logo.png" alt="img" style="display:inline-block"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="100%" height="53px" bgcolor="#f0eff5" style="width:100%;height:53px;background:#6a4bf5"></td>
                </tr>
                <tr>
                    <td colspan="3" width="100%" bgcolor="#f0eff5" style="width:100%;background:#6a4bf5;text-align:center">
                        <h2 style="margin:0;padding:0;line-height:30px;font-size:30px;font-weight:300;color:#fff;">Félicitations!</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="100%" height="55px" bgcolor="#f0eff5" style="width:100%;height:55px;background:#6a4bf5;vertical-align: bottom;"></td>
                </tr>
                </thead>
                <tbody style="color:#30215b;font-size:18px;line-height:26px;text-align:left">
                <tr>
                    <td colspan="3" width="100%" height="53px" style="width:100%;height:53px;background:url(http://dev.ergonomic.be/yev/hellotime-letter/img/shadow.jpg) repeat-x"></td>
                </tr>

                <tr>
                    <td width="105px" style="width:105px"></td>
                    <td width="363px" style="width:390px">
                        <p style="margin:0;padding:0">Bonjour <strong>M. Robert,</strong></p>
                        <p style="margin:0;padding:0"><strong style="color:#6331f4">Laurenda R.</strong> a accepté votre demande de baby-sitting et se présentera chez vous ce jeudi <strong>18 avril de 18h à 22h 30min</strong>.</p>
                    </td>
                    <td width="105px" style="width:132px"></td>
                </tr>

                <tr>
                    <td colspan="3" width="100%" height="26px" style="width:100%;height:26px"></td>
                </tr>

                <tr>
                    <td></td>
                    <td width="363px" style="width:390px">
                        <p style="margin:0;padding:0">Merci d\'avance pour votre collaboration!</p>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="3" width="100%" height="26px" style="width:100%;height:26px"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <p style="margin:0;padding:0">Bien à vous,</p>
                        <p style="margin:0;padding:0"><strong>L\'équipe Hello Time</strong></p>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="3" width="100%" height="55px" style="width:100%;height:55px"></td>
                </tr>

                </tbody>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';

mail($mail, $subject, $message, $header);