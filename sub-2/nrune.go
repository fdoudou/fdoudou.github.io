package main

import (
	//"github.com/01-edu/z01"
	//"piscine"
	"fmt"
)


func NRune(s string, n int) string {
	strlen := len(s)
	
	if n >= 1 && n <= strlen {
		return string(s[n-1])
	} 

	return string(0)
}

func main () {
	/*z01.PrintRune(NRune("Hello!", 3))
	z01.PrintRune(NRune("Salut!", 2))
	z01.PrintRune(NRune("Bye!", -1))
	z01.PrintRune(NRune("Bye!", 5))
	z01.PrintRune(NRune("Ola!", 4))
	z01.PrintRune('\n')*/
	fmt.Println(NRune("Hello!",3))
	fmt.Println(NRune("Salut!",2))
	fmt.Println(NRune("Bye!",-1))
	fmt.Println(NRune("Bye", 5))
	fmt.Println(NRune("Ola!",4))
	fmt.Println("\n")
}
