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
define( 'DB_NAME', 'mangabeiras' );

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
define( 'AUTH_KEY',         '[vVt>%[d.<,Q@](*BEVpCMuNZ|-gcrlHY-Skv-A$7KVFv2#t^7CN:bGF!!NbPC1/' );
define( 'SECURE_AUTH_KEY',  '*5i,R:^+HK}$g:lL(wH_7Jw`8Q&GS2)%zRboTK62pU;4egMx9BnZ`]=vcxJ,;|N[' );
define( 'LOGGED_IN_KEY',    'dpGub!s=}3Zf;UPd%=/wSvF{P]^Pc$~{Y!DVXn34W*1Y^/QK/T171tYq<Sk}wH1&' );
define( 'NONCE_KEY',        '{`;nYY,MDsTQlI_jH^.:az)_g-aIU^g09h W0[#`|)s;sN$Fgkh)pQ^}K*{KQM^P' );
define( 'AUTH_SALT',        'h)u0j~Fmq#.VwpvbPw^)$9t _0^rA7{BEZf>U.&O^,uHT=.bN{gTSv&;JOrih_il' );
define( 'SECURE_AUTH_SALT', '=uq.~uDk/$k&)7wp|L4JoDIa>%6`Z~vO[P$#z^I9$I^S[q^p/kinHV$W_ UY?VPR' );
define( 'LOGGED_IN_SALT',   'sI0%+cpG2YtvN#8rW4[y$~$nwaOKDpJD46J$S`7gDy0#hWh`*-`~JRTk+,i,8Sc?' );
define( 'NONCE_SALT',       'd(b:t4L}bmkbIDVP}BjUq)2Ar|^5@(Qf3<dO)U|iId?1j$:m|{%q9v[}`^H4:H>%' );

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
