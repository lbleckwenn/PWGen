<?php
/**
 * Klasse für den Datenzugriff
 */
class Model {
	private static $noUmlauts = true;
	private static $minLengthWord = 1;
	private static $maxLengthWord = 99;
	private static $minLengthPassword = 20;
	private static $maxLengthPassword = 30;
	private static $words = array ();
	private static $password;
	private static $length;
	private static function init() {
		$words = file ( 'wortliste.txt' );
		foreach ( $words as $word ) {
			self::$words [] = trim ( $word );
		}
	}

	/**
	 * Gibt alle in der Datei gespeicherten Wörter zurück.
	 *
	 * @return Array Array von Wörtern.
	 */
	public static function getWords() {
		return self::$words;
	}

	/**
	 * Prüft, ob das Wort einen deutschen Umlaut enthält
	 *
	 * @param string $word
	 *        	Deutsches Wort
	 * @return Bool Gibt true zurück, wenn ein Umlaut gefunden wurde
	 *         ansonsten wird galse zurück gegeben
	 */
	public static function hasUmlauts($word) {
		$umlauts = array (
				'ä',
				'ö',
				'ü',
				'Ä',
				'Ö',
				'Ü',
				'ß'
		);
		$cut = array (
				'',
				'',
				'',
				'',
				'',
				'',
				''
		);
		$out = str_replace ( $umlauts, $cut, $word );
		if ($word == $out) {
			return false;
		} else {
			return true;
		}
	}

	/**
	 * Sucht ein zufälliges Wort aus dem Array mit den Wörter heraus
	 *
	 * @return String Das Wort
	 *        
	 */
	public static function getRandomWord() {
		$id = random_int ( 0, sizeof ( self::$words ) - 1 );
		if (array_key_exists ( $id, self::$words )) {
			return self::$words [$id];
		} else {
			return null;
		}
	}

	/**
	 * Gibt ein Passwort zurück
	 *
	 * @return String Das Passwort
	 *        
	 */
	public static function getPasswort() {
		do {
			$words = array (
					'',
					'#',
					'',
					'-',
					''
			);
			for($s1 = 0; $s1 < 5; $s1 += 2) {
				do {
					do {
						$word = self::getRandomWord ();
					} while ( self::$noUmlauts && self::hasUmlauts ( $word ) );
					$length = strlen ( $word );
				} while ( $length < self::$minLengthWord || $length > self::$maxLengthWord );
				$words [$s1] = $word;
			}
			self::$password = implode ( '', $words ) . strlen ( $words [0] );
			self::$length = strlen ( self::$password );
		} while ( self::$length < self::$minLengthPassword || self::$length > self::$maxLengthPassword );
		return self::$password;
	}
	public static function getPasswortLength() {
		return self::$length;
	}
}
(function () {
	static::init ();
})->bindTo ( null, Model::class ) ();
?>