<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpbanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iXX:_%rN9I>uR|?P/f8Z<w:-A[Uxh_lx&$Xgd{}OSp{-@r$%tqv.Mg2Q[L7tz/DW' );
define( 'SECURE_AUTH_KEY',  'A.@7/5$Q49O| Sl*pw>+GljUjMb<.Z)Em#R4 (a/9mcUQoJOnz0&$HL. +S+YJ@M' );
define( 'LOGGED_IN_KEY',    '>(W6&IwDC%[W~c:);Cv UTL,bJl[^&DiP!sice<smy8+A:AH#~Xmx-3~@nkC_n]g' );
define( 'NONCE_KEY',        ')Ux~T$u1b)lnGzq,ue?B+3.I8D(,91^:79t*,ob-q8(I07$h4 s6*S~C2Db&]qQT' );
define( 'AUTH_SALT',        '$^&VE%#RXJmr4*_c?vPZW_(_=N^XVj+!?0p##5tNne~e! d8Tc=jE]_J2Bdo>~J3' );
define( 'SECURE_AUTH_SALT', 'X* H@[`*g]:M@[&RMd~2KS6?8X8dM/Wd;Jvjf<GYXm 52+#5CP#.8le&&os}@oa+' );
define( 'LOGGED_IN_SALT',   ']K@w:2||EPv eg71_(?M%Jf$fE.7qC^|.gl;W{iUNL_nwR`LE3C;M{>tlnQu E5O' );
define( 'NONCE_SALT',       'jfXWlENB/MPdsu9|uQ{7}&;4UNxECJnP;$:qyu1I[Z/E$;n`]zxu&hp{=uQvql;o' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
