<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bdgarda');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!^d7Ap`W7Eh28lH<ItQdjsc#La}+Ed1EPO,{>tcmsni*!2N1t$zV<h.uSCYhxyG^');
define('SECURE_AUTH_KEY',  '3x4n|zdZkZnC*AOqa(|mktAO[D90+aMPazlYcPlIn=I2)7we}6%WD; |m!P@X1SU');
define('LOGGED_IN_KEY',    'CWy5JYK_jBJ)1a8-[Vdw=BjLjIMuy:56ybwj+8q2Ew,`uce0^b%ETuqZ:bZ0)]KE');
define('NONCE_KEY',        'Xu [PM1U2M_1*NnveKgrkowZ,+I2$9y!&({fk_5G{10PO+%os;_Dsl=3:GwUWMMi');
define('AUTH_SALT',        '6Z9931{TU~*CYyppkp>=!Hoi5-v*/C},7^.|2?uq>6C1Rsv(vaJ%+DiU@oK>Ba~!');
define('SECURE_AUTH_SALT', 'CuvdR]H|Gz130cQnLNXlE#}|4a-m_h-1x]4tsO|Adu=`=<(ej%S4$#,;%H_B,bMb');
define('LOGGED_IN_SALT',   '~VI8HP8:4u7OW-36(6`ZX/S.Luc[srD$?@CQoKp^iPECoR*P?7BZ|ybZ),Jj{yp=');
define('NONCE_SALT',       ')o8W&w@xf#5#9|%j.{9BZ-Gy{=)d3.>hd,7@d]$~:Perb<Eo,8hrL^Tz5k]Z4FXX');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');