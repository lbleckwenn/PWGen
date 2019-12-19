<?php
/**
 * Klasse für den Datenzugriff
 */
class Model {
	private static $words = array ();
	private static $password;
	private static $length;
	private static $settings = array (
			'noUmlauts' => 1,
			'copyPasteHelp' => 0,
			'numbers' => 1,
			'specialChars' => 1,
			'randomSpecialChars' => '!"#$%&()*+,-.:;=?_§',
			'fixedSpecialChars' => '#-',
			'minWordLength' => 3,
			'maxWordLength' => 10,
			'amountWords' => 3,
			'minPasswordLength' => 8,
			'maxPasswordLength' => 32
	);
	private static $minMaxValues = array (
			'minWordLength' => 999,
			'maxWordLength' => 0,
			'minAmountWords' => 3,
			'maxAmountWords' => 3,
			'minPasswordLength' => 0,
			'maxPasswordLength' => 0
	);
	private static function init() {
		self::loadWords ();
		self::loadUserSettings ();
		self::checkUserSettings ();
	}
	private static function loadWords() {
		$words = file ( 'wortliste.txt' );
		foreach ( $words as $word ) {
			$word = trim ( $word );
			self::$words [] = $word;
			if (strlen ( $word ) < self::$minMaxValues ['minWordLength']) {
				self::$minMaxValues ['minWordLength'] = strlen ( $word );
			}
			if (strlen ( $word ) > self::$minMaxValues ['maxWordLength']) {
				self::$minMaxValues ['maxWordLength'] = strlen ( $word );
			}
		}
	}
	private static function loadUserSettings() {
		if (isset ( $_COOKIE ['pwgen'] )) {
			$settings = json_decode ( $_COOKIE ['pwgen'], true );
			foreach ( $settings as $variable => $value ) {
				self::$settings [$variable] = $value;
			}
		}
	}
	public static function saveUserSettings($request) {
		self::$settings ['noUmlauts'] = 1;
		self::$settings ['copyPasteHelp'] = 0;
		foreach ( $request as $variable => $value ) {
			if (is_array ( $value )) {
				continue;
			}
			switch ($variable) {
				case 'noUmlauts' :
					self::$settings ['noUmlauts'] = intval ( $value );
					break;
				case 'copyPasteHelp' :
					self::$settings ['copyPasteHelp'] = intval ( $value );
					break;
				case 'numbers' :
					self::$settings ['numbers'] = intval ( $value );
					break;
				case 'specialChars' :
					self::$settings ['specialChars'] = intval ( $value );
					break;
				case 'minWordLength' :
					self::$settings ['minWordLength'] = intval ( $value );
					break;
				case 'maxWordLength' :
					self::$settings ['maxWordLength'] = intval ( $value );
					break;
				case 'amountWords' :
					self::$settings ['amountWords'] = intval ( $value );
					break;
				case 'minPasswordLength' :
					self::$settings ['minPasswordLength'] = intval ( $value );
					break;
				case 'maxPasswordLength' :
					self::$settings ['maxPasswordLength'] = intval ( $value );
					break;
				case 'randomSpecialChars' :
					self::$settings ['randomSpecialChars'] = strval ( $value );
					break;
				case 'fixedSpecialChars' :
					self::$settings ['fixedSpecialChars'] = strval ( $value );
					break;
			}
		}
		self::checkUserSettings ();
		setcookie ( 'pwgen', json_encode ( self::$settings ), time () + 31536000 );
		header ( "Refresh:0" );
	}
	private static function checkUserSettings() {
		// Benutzereinstellungen berichtigen, falls Vorgaben nicht möglich sind
		if (self::$settings ['minWordLength'] < self::$minMaxValues ['minWordLength']) {
			self::$settings ['minWordLength'] = self::$minMaxValues ['minWordLength'];
		}
		if (self::$settings ['maxWordLength'] > self::$minMaxValues ['maxWordLength']) {
			self::$settings ['maxWordLength'] = self::$minMaxValues ['maxWordLength'];
		}
		// Theoretisch mögliche Passwortlängen berechnen
		self::$minMaxValues ['minPasswordLength'] = self::$settings ['amountWords'] * self::$settings ['minWordLength'] + (self::$settings ['amountWords'] - 1) + ((self::$settings ['numbers'] & 4) ? self::$settings ['amountWords'] * strlen ( self::$settings ['minWordLength'] ) : strlen ( self::$settings ['minWordLength'] ));
		self::$minMaxValues ['maxPasswordLength'] = self::$settings ['amountWords'] * self::$settings ['maxWordLength'] + (self::$settings ['amountWords'] - 1) + ((self::$settings ['numbers'] & 4) ? self::$settings ['amountWords'] * strlen ( self::$settings ['maxWordLength'] ) : strlen ( self::$settings ['maxWordLength'] ));
		// Benutzereinstellungen berichtigen, falls Vorgaben nicht möglich sind
		if (self::$settings ['minPasswordLength'] < self::$minMaxValues ['minPasswordLength']) {
			self::$settings ['minPasswordLength'] = self::$minMaxValues ['minPasswordLength'];
		}
		if (self::$settings ['maxPasswordLength'] > self::$minMaxValues ['maxPasswordLength']) {
			self::$settings ['maxPasswordLength'] = self::$minMaxValues ['maxPasswordLength'];
		}
		if (self::$settings ['maxPasswordLength'] < self::$minMaxValues ['minPasswordLength']) {
			self::$settings ['maxPasswordLength'] = self::$minMaxValues ['minPasswordLength'];
		}
	}
	/**
	 * Gibt alle in der Datei gespeicherten Wörter zurück.
	 *
	 * @return Array Liste mit allen Wörtern.
	 */
	public static function getWords() {
		return self::$words;
	}

	/**
	 * Gibt die gespeicherten Einstellungen zurück.
	 *
	 * @return Array Benutzereinstellungen.
	 */
	public static function getSettings() {
		return self::$settings;
	}

	/**
	 * Gibt die gespeicherten Einstellungen zurück.
	 *
	 * @return Array Minimal- und Maximalwerte.
	 */
	public static function getMinMaxValues() {
		return self::$minMaxValues;
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
	 * Sucht ein zufälliges Wort aus dem Array mit den Wörtern heraus
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
					} while ( self::$settings ['noUmlauts'] && self::hasUmlauts ( $word ) );
					$length = strlen ( $word );
				} while ( $length < self::$settings ['minWordLength'] || $length > self::$settings ['maxWordLength'] );
				$words [$s1] = $word;
			}
			self::$password = implode ( '', $words ) . strlen ( $words [0] );
			self::$length = strlen ( self::$password );
		} while ( self::$length < self::$settings ['minPasswordLength'] || self::$length > self::$settings ['maxPasswordLength'] );
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