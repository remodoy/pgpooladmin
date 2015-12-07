<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in Japanese
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Permission to use, copy, modify, and distribute this software and
 * its documentation for any purpose and without fee is hereby
 * granted, provided that the above copyright notice appear in all
 * copies and that both that copyright notice and this permission
 * notice appear in supporting documentation, and that the name of the
 * author not be used in advertising or publicity pertaining to
 * distribution of the software without specific, written prior
 * permission. The author makes no representations about the
 * suitability of this software for any purpose.  It is provided "as
 * is" without express or implied warranty.
 *
 * @author     Ryuma Ando <ando@ecomas.co.jp>
 * @copyright  2003-2013 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'ja',
    'strLang' => '日本語',

    'descAllow_sql_comments' => '負荷分散やクエリキャッシュができるかどうかの判定の際に、SQLコメントを無視するかどうか',
    'descApp_name_redirect_preference_list' => 'アプリケーション名によって負荷分散をしたいノード番号を、"アプリケーション名:ノード番号"で指定',
    'descArping_path' => 'IP アドレス切り替え後に ARP リクエストを送信するコマンドのパス',
    'descArping_cmd' => 'IP アドレス切り替え後に ARP リクエストを送信するコマンド',
    'descAuthentication_timeout' => 'クライアント認証のタイムアウト時間(秒)',
    'descBackend_flag' => 'フェイルオーバやデタッチの可否',
    'descBackend_hostname' => 'pgpoolが接続するPostgreSQLサーバ(postmaster)が動いているホスト名',
    'descBackend_port' => 'PostgreSQLサーバのポート番号',
    'descBackend_socket_dir' => 'PostgreSQLサーバのUnix domain socketのディレクトリ',
    'descBackend_weight' => 'ロードバランスモード時のSELECTを振り分ける「重み」の定義',
    'descBackend_data_directory' => 'PostgreSQLサーバのデータベースディレクトリ',
    'descBlack_function_list' => 'データベースに書き込みを行なうカンマ区切りの関数のリスト',
    'descBlack_memqcache_table_list' => 'SELECT結果をキャッシュしたくないテーブル名のカンマ区切りのリスト',
    'descCheck_temp_table' => '一時テーブルかどうかをチェック',
    'descCheck_unlogged_table' => 'unloggedテーブルかどうかをチェック',
    'descChild_life_time' => 'pgpoolの子プロセスの寿命',
    'descChild_max_connections' => '各pgpool子プロセスが終了するまでの接続回数',
    'descClear_memqcache_on_escalation' => 'アクティブ昇格時に共有メモリ上のクエリキャッシュを削除するかどうか',
    'descClient_idle_limit' => 'クライアントからのクエリの最大待ち時間(秒)',
    'descClient_idle_limit_in_recovery' => 'リカバリ中のクライアントからのクエリの最大待ち時間(秒)',
    'descClient_min_messages' => 'クライアントに送るログの詳細レベル',
    'descConnection_cache' => 'コネクションキャッシュ機能の有無',
    'descConnection_life_time' => 'コネクションプール中のコネクションの有効期間(秒)',
    'descConnect_timeout' => 'connect()システムコールを使ってバックエンドに接続する際のタイムアウト値を指定（ミリ秒）',
    'descDatabase_redirect_preference_list' => 'データベース名によって負荷分散をしたいノード番号を、"データベース名:ノード番号"で指定',
    'descDebug_level' => 'デバッグメッセージの詳細レベル（0は無効）',
    'descDelay_threshold' => '許容するスタンバイサーバの遅延(バイト)',
    'descDelegate_IP' => '仮想 IP アドレス',
    'descEnable_pool_hba' => 'クライアント認証機能の有無',
    'descEnable_query_cache' => 'クエリキャッシュ機能の有無',
    'descFailover_command' => 'ノード切り離し時に起動するコマンド',
    'descFailback_command' => 'ノード復帰時に起動するコマンド',
    'descFailover_if_affected_tuples_mismatch' => '更新行数が一致しないときにフェイルオーバ',
    'descFail_over_on_backend_error' => 'DBノードへのソケット通信エラー時にフェイルオーバ',
    'descFollow_master_command' => 'マスタのフェイルオーバ後に実行するコマンド',
    'descHeartbeat_destination' => 'ハートビート信号の送信先ホスト名または IP アドレス',
    'descHeartbeat_destination_port' => 'ハートビート信号の送信先ポート番号',
    'descHeartbeat_device' => 'ハートビートの送受信に用いるネットワークデバイス名',
    'descHealth_check_database' => 'ヘルスチェックを行う対象のデータベース名',
    'descHealth_check_period' => 'ヘルスチェックを行なう間隔(秒)',
    'descHealth_check_timeout' => 'ヘルスチェックが長時間待たされるのを防ぐためのタイムアウト値(秒)',
    'descHealth_check_user' => 'ヘルスチェックを行うためのPostgreSQLユーザ名',
    'descHealth_check_password' => 'ヘルスチェックを行うためのPostgreSQLパスワード',
    'descHealth_check_max_retries' => 'ヘルスチェックに失敗した後にリトライする回数',
    'descHealth_check_retry_delay' => 'ヘルスチェックのリトライの間の間隔（秒）',
    'descIfconfig_path' => 'ifconfig コマンドのパス',
    'descIf_cmd_path' => 'if コマンドのパス',
    'descIf_down_cmd' => '仮想 IP を停止するために実行するコマンド',
    'descIf_up_cmd' => '仮想 IP を起動するために実行するコマンド',
    'descIgnore_leading_white_space' => 'load balance時のSQL文行頭の空白を無視',
    'descInsert_lock' => 'INSERT時に自動的にトランザクションの開始，テーブルロック，トランザクションの終了',
    'descListen_addresses' => 'TCP/IPコネクションを受け付けるアドレス',
    'descListen_backlog_multiplier' => 'フロントエンドからpgpool-IIへの接続待ち行列の長さ',
    'descLoad_balance_mode' => 'レプリケーションモード時にSELECT文を各ノードにロードバランス',
    'descLobj_lock_table' => 'ラージオブジェクトのレプリケーションでロック管理に使うためのテーブル名',
    'descLog_connections' => '受信した接続のログを出力',
    'descLog_destination' => 'ログの出力先',
    'descLog_error_verbosity' => '出力するログの詳細レベル',
    'descLog_hostname' => 'クライアントのホスト名を"ps"ステータスに出力',
    'descLog_line_prefix' => '各ログ行頭の出力形式',
    'descLog_min_messages' => 'ログとして記録するログの詳細レベル',
    'descLog_standby_delay' => 'スタンバイサーバの遅延をログに記録する',
    'descLog_statement' => 'SQL文をログ出力',
    'descLogdir' => 'pgpoolの各種ログファイルを格納するディレクトリ',
    'descLog_per_node_statement' => 'DBノード毎にSQL文をログ出力',
    'descPid_file_name' => 'pidファイルの名前',
    'descMaster_slave_mode' => 'マスタ/スレーブモードでpgpoolを運転',
    'descMaster_slave_sub_mode' => 'マスタ/スレーブモードの伝播方法',
    'descMax_pool' => 'pgpoolの各サーバプロセスがキープするPostgreSQLへの最大コネクション数',
    'descMemory_cache_enabled' => 'オンメモリクエリキャッシュの有効化',
    'descMemqcache_method' => 'キャッシュストレージ',
    'descMemqcache_memcached_host' => 'memcachedが動いているホスト名またはIPアドレス',
    'descMemqcache_memcached_port' => 'memcachedのポート番号',
    'descMemqcache_total_size' => 'キャッシュストレージに使用する共有メモリ領域のサイズ(バイト)',
    'descMemqcache_max_num_cache' => 'キャッシュエントリの数',
    'descMemqcache_expire' => 'クエリキャッシュの寿命(秒)。 0 は無限の寿命',
    'descMemqcache_auto_cache_invalidation' => '更新されたテーブルに関連するキャッシュを無効化',
    'descMemqcache_maxcache' => 'キャッシュされるSELECT実行結果の最大サイズ(バイト)',
    'descMemqcache_cache_block_size' => 'キャッシュブロックサイズ(バイト)',
    'descMemqcache_oiddir' => 'テーブルOIDを格納するディレクトリ',
    'descNum_init_children' => 'Number of pgpool processes initially forked',
    'descNum_init_children' => 'preforkするpgpoolのサーバプロセス数',
    'descOther_pgpool_hostname' => '監視する pgpool-II が稼働するホスト名',
    'descOther_pgpool_port' => '監視する pgpool-II が稼働するポート番号',
    'descOther_wd_port' => '監視する watchdog が稼働するポート番号',
    'descParallel_mode' => 'パラレルモードでpgpoolを運転',
    'descPcp_port' => 'pcpがTCP/IPコネクションを受け付けるポート番号',
    'descPcp_listen_addresses' => 'pcpがTCP/IPコネクションを受け付けるアドレス',
    'descPcp_socket_dir' => 'pcpがコネクションを受け付けるUnix domain socketディレクトリ',
    'descPcp_timeout' => 'この時間内にクライアントから応答がない場合はコネクションを切断して終了',
    'descPgpool2_hostname' => 'pgpool2 が動作しているホスト名',
    'descPool_passwd' => 'md5 認証で用いる認証ファイル',
    'descPing_path' => 'ping コマンドのパス',
    'descPort' => 'pgpoolがTCP/IPコネクションを受け付けるポート番号',
    'descPrint_timestamp' => 'pgpoolのログにタイムスタンプを追加',
    'descRecovery_user' => 'リカバリを行うためのPostgreSQLユーザ',
    'descRecovery_password' => 'リカバリを行うためのPostgreSQLユーザパスワード',
    'descRecovery_1st_stage_command' => 'オンラインリカバリ第1ステージで実行するコマンド',
    'descRecovery_2nd_stage_command' => 'オンラインリカバリ第2ステージで実行するコマンド',
    'descRecovery_timeout' => 'オンラインリカバリ終了までの待ち時間(秒)。0 は待ち時間無し',
    'descRelcache_expire' => 'システムカタログキャッシュの有効時間(秒)',
    'descRelcache_size' => 'システムカタログキャッシュのサイズ(バイト)',
    'descReplication_mode' => 'レプリケーションモードの有効化',
    'descReplication_stop_on_mismatch' => 'マスタ/セカンダリ間のデータ不一致時に縮退運転',
    'descReplicate_select' => 'SELECT 文のレプリケーション',
    'descReplication_timeout' => 'デッドロックを監視するためのタイムアウト時間。'.
                                 '厳密でないレプリケーションモードでは、デッドロックが発生しやすくなります。',
    'descReset_query_list' => 'セッションが終了するときにコネクションを初期化するためのSQLコマンド',
    'descSearch_primary_node_timeout' => 'フェイルオーバーが起きた時にプライマリノードを検索する際のタイムアウト時間(秒)',
    'descSerialize_accept' => 'クライアントからの接続受け付け時、accept() をシリアライズする',
    'descSocket_dir' => 'pgpoolがコネクションを受け付けるUnix domain socketディレクトリ',
    'descSsl' => 'pgpool-IIとバックエンドの間のSSL接続',
    'descSsl_ca_cert' => 'opensslの-CAFileに指定するパス',
    'descSsl_ca_cert_dir' => 'opensslの-CApathに指定するディレクトリパス',
    'descSsl_cert' => 'フロントエンドとの接続に使用する公開x509証明書のフルパス',
    'descSsl_key' => 'フロントエンドとの接続に使用するプライベートキーファイルのフルパス',
    'descSr_check_database' => 'ストリーミングレプリケーションの遅延チェックを行なう対象のデータベース名',
    'descSr_check_period' => 'ストリーミングレプリケーションの遅延チェックの間隔(秒)',
    'descSr_check_user' => 'ストリーミングレプリケーションの遅延チェックを行うユーザ',
    'descSr_check_password' => 'ストリーミングレプリケーションの遅延チェックを行うユーザのパスワード',
    'descSyslog_facility' => 'Syslogのファシリティ',
    'descSyslog_ident' => 'Syslog中でのプログラム名',
    'descSystem_db_dbname' => 'System DBのデータベース名',
    'descSystem_db_hostname' => 'System DBが動いているホスト名',
    'descSystem_db_password' => 'System DBに接続するユーザのパスワード',
    'descSystem_db_port' => 'System DBに接続するためのポート番号',
    'descSystem_db_schema' => 'System DBのスキーマ',
    'descSystem_db_user' => 'System DBに接続するときのユーザ名',
    'descTrusted_servers' => '上位サーバのコンマ区切りのリスト',
    'descUse_watchdog' => 'watchdog 機能の有無',
    'descWd_authkey' => 'wachdog 間通信で用いられる認証キー',
    'descWd_de_escalation_command' => 'マスタ（コーディネータ）降格時に実行するコマンド',
    'descWd_escalation_command' => 'マスタ（コーディネータ）昇格時に実行するコマンド',
    'descWd_heartbeat_deadtime' => '障害発生とみなすまでの猶予（秒）',
    'descWd_heartbeat_keepalive' => 'ハートビート信号を送信する間隔（秒）',
    'descWd_heartbeat_port' => 'ハートビート信号を受信するポート番号',
    'descWd_hostname' => 'watchdog プロセスが相互監視を受信するためのホスト名',
    'descWd_interval' => '死活監視の間隔(秒)',
    'descWd_ipc_socket_dir' => 'watchdog の IPC（プロセス間通信）で受け付ける UNIX ドメインソケットが作成されるディレクトリ',
    'descWd_life_point' => '死活監視のリトライ回数',
    'descWd_lifecheck_dbname' => '死活監視を行なうために接続するデータベース',
    'descWd_lifecheck_method' => '死活監視の方法',
    'descWd_lifecheck_query' => '死活監視で実行するクエリ',
    'descWd_lifecheck_password' => '死活監視を行なうユーザのパスワード',
    'descWd_lifecheck_user' => '死活監視を行なうユーザ',
    'descWd_port' => 'watchdog プロセスが相互監視を受信するためのポート番号',
    'descWd_priority' => '自身の watchdog ノードがリーダに選ばれる優先度',
    'descWhite_function_list' => 'データベースに書き込みを行なわないカンマ区切りの関数のリスト',
    'descWhite_memqcache_table_list' => 'SELECT結果をキャッシュしたいテーブル名のカンマ区切りのリスト',

    'errAlreadyExist' => 'すでに登録されています',
    'errFileNotExecutable' => 'コマンドを実行できません',
    'errFileNotFound' => 'ファイルが見つかりません',
    'errFileNotWritable' => 'ファイルの書き込みができません',
    'errIllegalHostname' => '不正なホスト名です',
    'errIllegalPipe' => 'パイプの指定が不正です',
    'errInputEverything' => 'すべてを入力してください',
    'errInvalidOwner' => '所有者が正しくありません',
    'errInvalidPermission' => 'パーミッションが正しくありません',
    'errNoDefined' => 'パラメータが設定されていません',
    'errNotSameLength' => '列名リストと列データ型リストの配列の長さが一致しません。'.
                          '同じ要素数である必要があります。',
    'errPasswordMismatch' => 'パスワードが一致しません',
    'errRequired' => 'これは必須項目です',
    'errShouldBeInteger' => '0以上の整数を入力してください',
    'errShouldBeZeroOrMore' => '0以上である必要があります',
    'errSingleQuotation' => '配列要素をシングルクォーテーションで囲んでください。',
    'errWrongVersion' => 'pgpool コマンドと一致していません。',

    'msgAddBackend' => 'バックエンドノードとして追加してよろしいですか？',
    'msgAddBackendNg' => 'バックエンドノード情報に不備があります。',
    'msgDeleteConfirm' => '本当に削除してよいですか？',
    'msgHasNotLoadedNode' => '新しいノード情報を読み込むには pgpool の設定をリロードする必要があります。',
    'msgMasterDbConnectionError' => 'マスターDBに接続できません',
    'msgPgpoolConfNotFound' => 'pgpool.confが見つかりません',
    'msgPleaseSetup' => '設定ファイルが見つかりません。セットアップを実行してください。',
    'msgReloadPgpool' => '設定ファイルを再読み込みしてもよろしいですか？',
    'msgRestart' => '変更を反映するには再起動してください',
    'msgRestartPgpool' => 'pgpoolを再起動してよろしいですか？',
    'msgSameAsPasswordFile' => '値はパスワードファイルの設定値となります',
    'msgSameAsPgpoolFile' => '値はpgpool.confファイルの設定値となります',
    'msgStartPgpool' => 'pgpoolを起動しますか？',
    'msgStopPgpool' => 'pgpoolを停止してよろしいですか？',
    'msgUpdateComplete' => '更新は正常に終了しました。',
    'msgUpdateCompleteInfo' => '設定を反映するには、pgpoolの設定リロードか再起動をする必要があります。',
    'msgUpdateFailed' => '更新に失敗しました。',
    'msgDetachConfirm' => 'このノードを pgpool-II の管理から切断してよいですか？',
    'msgReturnConfirm' => 'このノードを pgpool-II の管理下に復帰させてよいですか？',
    'msgRecoveryConfirm' => 'このノードをリカバリしますか？',
    'msgRemoveBackend' => 'このバックエンドノードを削除してよろしいですか？',
    'msgRPromoteConfirm' => 'このノードをマスタに昇格しますか？',

    'strAdd' => '追加',
    'strAddBackend' => '新しいバックエンドを登録',
    'strAddBackendNow' => '即座に追加する（pgpool の設定をリロードします）',
    'strAdminPassword' => '管理者パスワード',
    'strBack' => '戻る',
    'strBackendPid' => 'バックエンドプロセスID',
    'strCancel' => 'キャンセル',
    'strChangePassword' => 'パスワード変更',
    'strClear' => 'クリア',
    'strClearQueryCache' => 'クエリキャッシュ削除',
    'strCmdC' => 'クエリキャッシュクリア',
    'strCmdD' => 'デバッグモード',
    'strCmdDesc' => '空白の場合には無視',
    'strCmdLargeC' => 'オンメモリキャッシュの oid map をリセット',
    'strCmdLargeD' => 'pgpool_status を無視',
    'strCmdM' => '停止モード',
    'strCmdN' => '非デーモンモード',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => '列名リスト',
    'strColName' => '分散キー列名',
    'strCommon' => '共通',
    'strConnectionError' => 'コネクションエラー',
    'strConnTime' => 'コネクション作成時刻',
    'strConnUsed' => 'コネクション使用回数',
    'strConnUser' => '接続ユーザ名',
    'strCreateTime' => '作成時刻',
    'strDataError' => 'データエラー',
    'strDateFormat' => 'Y年m月d日 H時i分s秒',
    'strDb' => 'データベース名',
    'strDbName' => 'データベース名',
    'strDebug' => 'デバッグモード',
    'strDelete' => '削除',
    'strDeleted' => 'レコードが削除されました',
    'strDetail' => '詳細',
    'strDetailInfo' => '詳細情報',
    'strDisconnect' => '切断',
    'strDistDefFunc'=> '分散関数名',
    'strDown' => 'ダウン',
    'strError' => 'エラー',
    'strErrorCode' => 'エラーコード',
    'strErrorMessage' => 'エラーメッセージ',
    'strExecute' => '実行',
    'strFeature' => '機能',
    'strFrontendConnected' => 'フロントエンド接続有無',
    'strHealthCheck' => 'ヘルスチェック',
    'strHelp' => 'ヘルプ',
    'strInvalidation' => '無効',
    'strIPaddress' => 'IPアドレス',
    'strLanguage' => '言語',
    'strLoadBalanceMode' => 'ロードバランスモード',
    'strLog' => 'ログ',
    'strLogin' => 'ログイン',
    'strLoginName' => 'ログイン名',
    'strLogLatest' => '最新',
    'strLogNext' => '次へ',
    'strLogout' => 'ログアウト',
    'strLogPrev' => '前へ',
    'strLogReload' => '更新',
    'strLogShowAll' => '全ての行を表示',
    'strLogShowLines' => '行を表示',
    'strMasterServer' => 'マスターサーバ',
    'strMasterSlaveMode' => 'マスタースレーブモード',
    'strMeasures' => '対策',
    'strNodeInfo' => 'ノード情報',
    'strNodeStatus' => 'ノードステータス',
    'strNodeStatus1' => 'ノード稼働中。接続無し。',
    'strNodeStatus2' => 'ノード稼働中。接続有り。',
    'strNodeStatus3' => 'ノードダウン',
    'strNoNode' => 'ノードがありません',
    'strOff' => 'オフ',
    'strOn' => 'オン',
    'strParallelMode' => 'パラレルモード',
    'strParameter' => '項目',
    'strPassword' => 'パスワード',
    'strPasswordConfirmation' => 'パスワード(確認)',
    'strPasswordFile' => 'パスワードファイル',
    'strPcpConfFile' => 'pcp.confファイル',
    'strPcpDir' => 'PCPディレクトリ',
    'strPcpHostName' => 'PCPホスト名',
    'strPcpRefreshTime' => '更新間隔(0で自動更新しない)',
    'strPcpTimeout' => 'PCPタイムアウト',
    'strPgConfFile' => 'pgpool.confファイル',
    'strPgConfSetting' => 'pgpool.conf設定',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'pgpoolコマンド',
    'strPgpoolCommandOption' => 'pgpoolコマンドオプション',
    'strPgpoolLogFile' => 'pgpoolログ出力先',
    'strPgpoolManagementSystem' => 'pgpool-II管理システム',
    'strPgpoolServer' => 'pgpool-IIサーバ',
    'strPgpoolStatus' => 'pgpoolステータス',
    'strPgpoolSummary' => 'サマリー',
    'strPleaseWait' => 'しばらくお待ちください・・・',
    'strPort' => 'ポート',
    'strPrimaryRunning' => 'プライマリとして稼働中',
    'strProcId' => 'プロセスID',
    'strProcInfo' => 'プロセス情報',
    'strProcTime' => 'プロセススタート時刻',
    'strPromote' => 'マスタ昇格',
    'strProtocolMajorVersion' => 'プロトコルメジャーバージョン',
    'strProtocolNinorVersion' => 'プロトコルマイナーバージョン',
    'strQueryCache' => 'クエリキャッシュ',
    'strQueryStr' => 'クエリ文字列',
    'strReloadPgpool' => '設定リロード',
    'strReloadPgsql' => '設定リロード',
    'strReplicationMode' => 'レプリケーションモード',
    'strReset' => 'リセット',
    'strRestart' => '再起動',
    'strRestartOption' => 'pgpool再起動オプション',
    'strRestartPgpool' => 'pgpool再起動',
    'strRestartPgsql' => '再起動',
    'strRestartPgsqlOption' => 'PostgreSQL再起動オプション',
    'strRemoveBackend' => '登録削除',
    'strReturn' => '復帰',
    'strRecovery' => 'リカバリ',
    'strSchemaName' => 'スキーマ名',
    'strSearch' => '検索',
    'strSecondaryServer' => 'セカンダリサーバ',
    'strSetting' => 'pgpoolAdmin設定',
    'strSetup' => 'セットアップ',
    'strSlonyMode' => 'Slony-Iモード',
    'strStandbyRunning' => 'スタンバイとして稼働中',
    'strStartOption' => '起動オプション',
    'strStartPgpool' => 'pgpool起動',
    'strStartPgsql' => '起動',
    'strStatus' => 'ステータス',
    'strStopOption' => 'pgpool停止オプション',
    'strStopPgpool' => 'pgpool停止',
    'strStopPgsql' => '停止',
    'strStopPgsqlOption' => 'PostgreSQL停止オプション',
    'strStoppingNow' => '停止中',
    'strStreamingRepMode' => 'Streaming Replicationモード',
    'strSummary' => '概要',
    'strSystemDb' => '分散ルール',
    'strSystemCatalog' => 'システムカタログ情報',
    'strTable' => 'テーブル名',
    'strTrustedServers' => '上位サーバリスト',
    'strTypeList' => '列データ型リスト',
    'strUp' => 'アップ',
    'strUpdate' => '更新',
    'strUnknown' => '不明',
    'strValue' => '値',
    'strVersion' => 'pgpool-II バージョン',
    'strVIP' => '仮想IP',
    'strWdActive' => 'アクティブ',
    'strWdDown' => 'ダウン',
    'strWdInit' => '未起動',
    'strWdStandby' => 'スタンバイ',
    'strWeight' => 'ウェイト',

    'e1' => 'pgmgt.conf.phpが見つかりません',
    'e2' => 'メッセージカタログが見つかりません',
    'e3' => 'pcpコマンドエラーが発生しました',
    'e1' => 'pgmgt.conf.phpが見つかりません',
    'e2' => 'メッセージカタログが見つかりません',
    'e3' => 'pcpコマンドエラーが発生しました',
    'e4' => 'pgpool.confが見つかりません',
    'e5' => 'テンプレートファイルが見つかりません',
    'e6' => 'ヘルプが見つかりません',
    'e7' => 'pgmgt.conf.phpのパラメータが足りません',
    'e8' => 'pcp_timeoutがpgpool.confで見つかりません',
    'e9' => 'pcp_portがpgpool.confで見つかりません',
    'e1001' => 'pcpコマンドエラーが発生しました',
    'e1002' => 'pcp_node_countコマンドでエラーが発生しました',
    'e1003' => 'pcp_node_infoコマンドでエラーが発生しました',
    'e1004' => 'pcp_proc_countコマンドでエラーが発生しました',
    'e1005' => 'pcp_proc_infoコマンドでエラーが発生しました',
    'e1006' => 'pcp_stop_pgpoolコマンドでエラーが発生しました',
    'e1007' => 'pcp_detach_nodeコマンドでエラーが発生しました',
    'e1008' => '指定したpgpool.confが見つかりません',
    'e1009' => '指定したpcp.confが見つかりません',
    'e1010' => 'pcp_attach_nodeコマンドでエラーが発生しました',
    'e1011' => 'ログファイルが見つかりません',
    'e1012' => 'pcp_recovery_nodeコマンドでエラーが発生しました',
    'e1013' => 'pcp_watchdog_infoコマンドでエラーが発生しました',
    'e1014' => '.pcppass ファイルの読み込みに失敗しました',
    'e2001' => 'データベースに接続できません',
    'e2002' => 'レコード取得時にエラーが発生しました',
    'e2003' => 'pgpool.confが見つかりません',
    'e3001' => 'データベースに接続できません',
    'e3002' => 'レコード取得時にエラーが発生しました',
    'e3003' => 'レコード登録時にエラーが発生しました',
    'e3004' => 'レコード更新時にエラーが発生しました',
    'e3005' => 'レコード削除時にエラーが発生しました',
    'e3006' => 'pgpool.confが見つかりません',
    'e4001' => 'pgpool.confが見つかりません',
    'e4002' => 'pgpool.confから読み込みができません',
    'e4003' => 'pgpool.confに書き込みができません',
    'e5001' => 'pgmgt.conf.phpが見つかりません',
    'e5002' => 'pgmgt.conf.phpから読み込みができません',
    'e5003' => 'pgmgt.conf.phpに書き込みができません',
    'e6001' => 'pcp.confが見つかりません',
    'e6002' => 'pcp.confに読み込みができません',
    'e6003' => 'pcp.confに書き込みができません',
    'e7001' => 'pcp.confが見つかりません',
    'e8001' => '詳細情報が取得できません',
    'cautionaryNote' => '注: 更新した設定を反映させるには、設定のリロードが必要です。'.
                        'また、[*]が付いている項目は pgpool の再起動が必要となります。',

);

?>
