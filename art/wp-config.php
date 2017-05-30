<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'kohimoto_risakoyamada_dev');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'kohimoto');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'kohimoto_manage');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql537.db.sakura.ne.jp');
//define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bO%&9s3Pje!V|MJm|,@4)`Qb(z+`$M|~M^xe}aq=Y!{)mKqzH/|P~9V7yxAH2aVQ');
define('SECURE_AUTH_KEY',  'CWcY(!w u}erBDJ|c x-]z_|B:F3y/X.Zh,0#uhSzV.X%XBI4,:I#c:Ya4(&pt%T');
define('LOGGED_IN_KEY',    'Kze+t:>yg,]u2j=>9*)n;AK@M.pyT=04$#NptweYp_j[*]3Y:vY0H{E-tNc^ f4<');
define('NONCE_KEY',        '&_(Vx()#Pd,5Z+0tC75h-x&s@PlcoJ]vbeG*I8tNH,EJ`Pm(telnp8#~C.6-d7ZS');
define('AUTH_SALT',        'FNj,c+}JW]xy+:f;Qc(:S{SF;lW1~AhMSdjOOT#y-$LfAQ>x}pFY(~^P>+/Q2N2[');
define('SECURE_AUTH_SALT', 'vE-MjM;1X=%vmKDQha|1UC2{dK*~*u?_DX@G6+Xu(wT)*AAD% iDozeKEZE,(_YL');
define('LOGGED_IN_SALT',   'mTHE^R}4 %tHzUB=2nsF?%yjL/!,WXJj[N#x[OV+FI}Y~W=`q[>;=P<)<3JL:YfM');
define('NONCE_SALT',       'k[-,=_c(uMnX8!*Thf_e$+z=NQC< 6da4kE`Ye2}&>cy:or%KrQo?x_G{b*eBJY$');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'manage';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
