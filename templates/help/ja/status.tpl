<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$message.strPgpoolStatus|escape}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/logo.gif" alt="pgpoolAdmin" /></h1>
</div>
<div id="menu">
{include file="menu.tpl"}
</div>
<div id="content">
<div id="help"><a href="{$help|escape}.php"><img src="images/back.gif" />{$message.strBack|escape}</a></div>
<h2>ヘルプ({$message.strStatus|escape})</h2>
<h3>概要</h3>
ステータスでは、pgpoolについて
<ul>
  <li>サマリー</li>
  <li>プロセス情報</li>
  <li>ノード情報</li>
  <li>ログ</li>
</ul>
の表示とpgpoolの
<ul>
  <li>起動</li>
  <li>停止</li>
  <li>再起動</li>
</ul>
を行うことができます。
<h3>説明</h3>

<table>
  <tr>
    <th class="right_border"><label>サマリー</label></th>
    <td>pgpool.confの内容を表示します。</td>
  </tr>
  <tr>
    <th class="right_border"><label>プロセス情報</label></th>
    <td><p>pgppolの各プロセスについて</p>
      <ul>
        <li>プロセスID</li>
        <li>データベース名</li>
        <li>接続ユーザ名</li>
        <li>プロセススタート時刻</li>
        <li>コネクション作成時刻</li>
        <li>プロトコルメジャーバージョン</li>
        <li>プロトコルマイナーバージョン</li>
        <li>コネクション使用回数</li>
        </ul>
      <p>が表示されます。<br />
      各プロセスについて、最大でpgpool.confのmax_pool分だけ表示されます。
      </p></td>
  </tr>
  <tr>
    <th class="right_border"><label>ノード情報</label></th>
    <td><p>各ノードについて</p>
        <ul>
          <li>IPアドレス</li>
          <li>ボート番号</li>
          <li>ステータス</li>
          <li>負荷分散ウェイト</li>
          <li>切断ボタン</li>
        </ul>
      <p>が表示されます。ただし、pgpoolがパラレルモードで動いているときは、切断ボタンは表示されません。</p>
      <p>ステータスには</p>
      <ul>
          <li>ノード稼働中。接続無し</li>
        <li>ノード稼働中。接続中</li>
        <li>ノードダウン</li>
      </ul>
      <p>の3つの状態が表示されます。</p></td>
  </tr>
  <tr>
    <th class="right_border"><label>ログ</label></th>
    <td>pgpool非デーモンモード(-n)で起動されているときに、pgpoolのログを表示することができます。</td>
  </tr>
  <tr>
    <th class="right_border"><label>起動</label></th>
    <td>pgpoolの停止時には、pgpoolを起動することができます。起動オプションとして
    <ul>
    <li>クエリキャッシュクリア</li>
    <li>非デーモンモード</li>
    <li>デバッグモード</li>
    <li>pgpool.conf</li>
    <li>pcp.conf</li>
    </ul>
    を指定することかできます。
    </td>
  </tr>
  <tr>
    <th class="right_border"><label>停止</label></th>
    <td>pgpoolのすべてのプロセスを終了します。pgpool停止ボタンを押すと、終了オプションが表示されます。停止モードとして
    <ul>
    <li>smart</li>
    <li>fast</li>
    <li>immediate</li>
    </ul>
    を選択することができます。終了すると、pgpoolステータスが「pgpool停止」となり、起動用画面が表示されます。</td>
  </tr>
  <tr>
    <th class="right_border"><label>再起動</label></th>
    <td>pgpoolのすべてのプロセスを終了し続けて起動処理をします。上記の起動と停止の両方の項目を指定することができます。</td>
  </tr>
</table>
</div>
<div id="footer">
{include file='footer.tpl'}
</div>
</body>
</html>
