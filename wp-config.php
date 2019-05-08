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
define( 'DB_NAME', 'chevrolet_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'agencialife' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'feemdeus1' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'server1.ceobavitwals.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '(71LqB0PZ3$mzD~)8A@hJ(8J!1/>_+6Yp>J0}6G%p)`4 ]%cLTWV5[K+k{I+,xCn' );
define( 'SECURE_AUTH_KEY',  '/AKk`+C-+FO0a2}kUXOMN]}RtVSr*>`8(GH6~lMLcX37=)NRZV?1i4+@nxF4u-##' );
define( 'LOGGED_IN_KEY',    '}b:$K@(YA@@RCjbH6]aKE)0LA4/BuWsmm:_CN^9+zI?ui,@@$6*a*9X0*L4]u&`F' );
define( 'NONCE_KEY',        '@U}/Q8g1m[Qm!L<Rz_<#-L.(xBF-Yc$2a.qQ4o}d|rXbS6?<MtH&%k-W/.dlhEEu' );
define( 'AUTH_SALT',        ']5,nY6v&mMPxn]s. Yt-/O$]v[NI.1{Fc*m-insMttkm~=m15D5CFV[+| eKb;op' );
define( 'SECURE_AUTH_SALT', 'g^4MpFy)e|ZA]X{+_a&ipNrNbK*B,]1(/d0Z)sZG/FX0^DJpb{kRY9JE#Ozv45DL' );
define( 'LOGGED_IN_SALT',   ']mye!s>zD%>#ei7N5YVI+M6EfY W7<bb/l]4fg[Sh{t#SEWjO=HHtx%uLuaYdK&7' );
define( 'NONCE_SALT',       'I_ O((@o7C7F(TcAyP~S&b+%!v}(ujZvk W&)nWv%)QdqScR2c<3,?WxkNEVjfi^' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
