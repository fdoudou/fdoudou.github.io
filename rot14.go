package piscine

func Rot14(s string) string {
	resultat := ""

	for i := 0; i < len(s); i++ {
		character := s[i]

		if character >= 65 && character <= 90 { // [A - Z]
			if character >= 65 && character <= 76 { // [A - L ]
				resultat = resultat + string(character+14)
			} else if character >= 77 && character <= 90 { // [M - Z]
				resultat = resultat + string(character-12)
			}
		} else if character >= 97 && character <= 122 { // [a - z]
			if character >= 97 && character <= 108 { // [a - l ]
				resultat = resultat + string(character+14)
			} else if character >= 109 && character <= 122 { // [m - z]
				resultat = resultat + string(character-12)
			}
		} else { // caractères spéciaux par exemple
			resultat = resultat + string(character)
		}
	}
	return resultat
}
