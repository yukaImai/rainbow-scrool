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
define('DB_NAME', 'LAA0763374-azbpbu');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0763374');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'IO88fBjy');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql133.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'K/dy?MytF~F:i!*2]50BIBZa@fQ&LivU4s[InLR}iEuN?1owgxED,+5<W7y*T>9T');
define('SECURE_AUTH_KEY', 'h*"i4<|,G;?QO""u:9lZ^,5|s:9<$g=RbAo-&^RqRm3w*WK-*8e""+Wn>]C5ZlJ;');
define('LOGGED_IN_KEY', 'RI/+9p47$Uwk2a-&Z/UF1>xBE0-B)u2=ca4B_u.5)nb*8CsIyX7H5f"ojTMvZF$f');
define('NONCE_KEY', 'z1v8*~O4eHJJI(pcXwel(QX.aoaM#^7DKrz8HRQ]Y!nXy|9a>fq>kko.^g^Fyi<G');
define('AUTH_SALT', 'Q"2R,a3g6;HfPU41xe|b06Hh+XS:4N96m*|@qsf=}{v&YX0f<w$z2$7+oc!:`ecX');
define('SECURE_AUTH_SALT', 'e4||zl/Oc+ms|}8>yIG.eB/=jTRW^GrQ:(sw&~+mV{$?|?<Tspms,b}qI`}e[ZvR');
define('LOGGED_IN_SALT', ':{!,U:V]TyY"l.C=U%htA5$,Ic.+!l0pkN_y`Z0lBzpD(Com.):~a6Reu/v1Yt5)');
define('NONCE_SALT', ',of#Tfiyx@Z-O#3L3gcc@`>N|m{m>`J4dd2RRuf6_dW",W[IK#hly[9Rq$%%%o)V');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp4_';

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
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
