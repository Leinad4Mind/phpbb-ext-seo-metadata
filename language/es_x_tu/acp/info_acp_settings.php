<?php

/**
 * SEO Metadata extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2018 Alfredo Ramos
 * @license GNU GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_SEO_METADATA' => 'Metadatos SEO',
	'ACP_SEO_METADATA_EXPLAIN' => 'Los cambios en los siguientes valores sólo serán aplicados a los temas nuevos, si deseas que tambien sean aplicados a los temas antiguos, necesitarás limpiar la caché.',

	'ACP_SEO_METADATA_META_DESCRIPTION' => 'Habilitar descripción',
	'ACP_SEO_METADATA_META_DESCRIPTION_EXPLAIN' => 'Metatag de descripción.',

	'ACP_SEO_METADATA_DESC_LENGTH' => 'Longitud de la descripción',
	'ACP_SEO_METADATA_DESC_LENGTH_EXPLAIN' => 'Longitud máxima para la descripción que será utilizada en metaetiquetas como <samp>og:description</samp>. Tiene un límite máximo de <samp>255</samp> caracteres.',
	'ACP_SEO_METADATA_DESC_STRATEGY' => 'Estrategia para la descripción',
	'ACP_SEO_METADATA_DESC_STRATEGY_EXPLAIN' => '<samp>Cortar</samp> trunca la descripción en la posición exacta si ésta excede la longitud máxima.<br /><samp>Puntos suspensivos</samp> añade puntos suspensivos (<code>…</code>) al final de la descripción si ésta excede la longitud máxima.<br /><samp>Dividir palabras</samp> añade tantas palabras como sea posible sin exceder la longitud máxima.',
	'ACP_SEO_METADATA_DESC_CUT' => 'Cortar',
	'ACP_SEO_METADATA_DESC_ELLIPSIS' => 'Puntos suspensivos',
	'ACP_SEO_METADATA_DESC_BREAK_WORDS' => 'Dividir palabras',

	'ACP_SEO_METADATA_IMAGE_STRATEGY' => 'Estrategia para la imagen',
	'ACP_SEO_METADATA_IMAGE_STRATEGY_EXPLAIN' => '<samp>Primera encontrada</samp> selecciona la primer imagen encontrada que pueda ser usada dentro del cuerpo del mensaje.<br /><samp>Dimensiones de imagen</samp> selecciona la imagen con mayor dimensiones (ancho, alto) dentro del cuerpo del mensaje.',
	'ACP_SEO_METADATA_IMAGE_FIRST' => 'Primera encontrada',
	'ACP_SEO_METADATA_IMAGE_DIMENSIONS' => 'Dimensiones de imagen',

	'ACP_SEO_METADATA_DEFAULT_IMAGE' => 'Imagen por defecto',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_EXPLAIN' => 'URL de la imagen por defecto que será usada en metaetiquetas como <samp>og:image</samp>. Solo será usada si no se puede encontrar una imagen en la página actual. La ruta debe ser relativa a <samp>%s</samp>',

	'ACP_SEO_METADATA_ATTACHMENTS' => 'Incluir adjuntos',
	'ACP_SEO_METADATA_ATTACHMENTS_EXPLAIN' => 'También se incluirán imágenes adjuntas. Serán elegidas en el mismo orden en el que fueron subidas.',

	'ACP_SEO_METADATA_PREFER_ATTACHMENTS' => 'Preferir adjuntos',
	'ACP_SEO_METADATA_PREFER_ATTACHMENTS_EXPLAIN' => 'Las imágenes adjuntas tendrán mayor prioridad sobre las que han sido extraídas del mensaje.',

	'ACP_SEO_METADATA_LOCAL_IMAGES' => 'Imágenes locales',
	'ACP_SEO_METADATA_LOCAL_IMAGES_EXPLAIN' => 'Extrae imágenes del cuerpo del mensaje únicamente de tu dominio (<samp>%s</samp>).',

	'ACP_SEO_METADATA_SETTINGS_SAVED' => 'Los ajustes de Metadatos SEO Metadata han sido guardados satisfactoriamente.',

	'ACP_SEO_METADATA_DATA_EXPLAIN' => 'Los metadatos son generados de manera dinámica usando los datos de tu foro.',

	'ACP_GLOBAL_SETTINGS' => 'Ajustes globales',

	'ACP_OPEN_GRAPH_SETTINGS' => 'Ajustes de Open Graph',
	'ACP_OPEN_GRAPH' => 'Habilitar Open Graph',

	'ACP_FACEBOOK_APPLICATION' => 'ID de la applicación de Facebook',
	'ACP_FACEBOOK_APPLICATION_EXPLAIN' => 'Identificador de tu applicación de Facebook.',
	'ACP_FACEBOOK_PUBLISHER' => 'Editor de Facebook',
	'ACP_FACEBOOK_PUBLISHER_EXPLAIN' => 'La URL de tu página de Facebook.',

	'ACP_TWITTER_CARD_SETTINGS' => 'Ajustes de Twitter Cards',
	'ACP_TWITTER_CARDS' => 'Habilitar Twitter Cards',
	'ACP_TWITTER_PUBLISHER' => 'Editor de Twitter',
	'ACP_TWITTER_PUBLISHER_EXPLAIN' => 'El nombre de usuario de la cuenta de Twitter de tu sitio web.',

	'ACP_JSON_LD_SETTINGS' => 'Ajustes de JSON-LD',
	'ACP_JSON_LD' => 'Habilitar JSON-LD',

	'LOG_SEO_METADATA_DATA' => '<strong>Datos de Metadatos SEO modificados</strong><br />» %s'
]);
