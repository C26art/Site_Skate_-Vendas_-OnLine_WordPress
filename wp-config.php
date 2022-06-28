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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetoskateclubwp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '{zt<^yQhu,XT>=J(g.X?{}HE$<VEJ|a~V|G~~|1 /ykMNono/yBrr^U;BI<|fO{~' );
define( 'SECURE_AUTH_KEY',  'lw;rBE(m-inr)>ldh5*MgOpPJ3MJzAk nQ*lkn&$9V(*J[u}< YB^;@ao$ tE4}x' );
define( 'LOGGED_IN_KEY',    'iSz6;hmK:u[wLy^so&cg3:K}H{e(9b>bh}osUD}(# kHVZo$+T?{>Tm{ygjZ1Bs9' );
define( 'NONCE_KEY',        './AvZb7l/r1YNA{B_`+r8}PK nW=Wb/o00#A!7g/:K`e?`:x/h*,VemI_s0YdE+4' );
define( 'AUTH_SALT',        'U[`A72aB{_SvY|099X|Ju3P10HcSfPj^ <C}u@?/8H)R;T&o5N9V?.~)XTo#Qinz' );
define( 'SECURE_AUTH_SALT', '+z{Lzh->t#vy63HeNNfeB/zk+By}y}r4#E@9V2s5e0;.s$oy*?,hN<q9]=4d~&,[' );
define( 'LOGGED_IN_SALT',   'C: y)<n^WgDPrA8k?r^g;Qk42`/Y07RbUi+Y9a7=@m%C9Ck+;O=KUi#<Jk NWnu[' );
define( 'NONCE_SALT',       'z_Ss^),#L{%|R22fr?Q*^N-IQD%uee>PnT )h`bXF]k$Jk$9Ex3rc<VP~>#/vjY^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
