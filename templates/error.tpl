<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$message.strError|escape}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/logo.gif" alt="pgpoolAdmin" /></h1>
</div>
<div id="menu">
{include file='menu.tpl'}
</div>
<div id="content">
<div id="help"><a href="help.php?help={$help|escape}"><img src="images/question.gif" alt="help"/>{$message.strHelp|escape}</a></div>
  <h2>{$message.strError|escape}</h2>
    <table>
      <tr>
        <th><label>{$message.strErrorCode|escape}</label></th>
        <td>{$errorCode|escape}</td>
      </tr>
      <tr>
        <th><label>{$message.strErrorMessage|escape}</label></th>
        <td>{$message.$errorCode|escape}</td>
      </tr>
      </td>
      
      </tr>
      
    </table>
</div>
<div id="footer">
{include file='footer.tpl'}
</div>
</body>
</html>
