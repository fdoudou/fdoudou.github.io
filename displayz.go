package main

import (
	"fmt"
	"os"
)


func displayz () {
	if len(os.Args) != 2 {
		fmt.Println("z")
		return
	} 
		
	argts := os.Args[1]
	for c:=0;c<len(argts);c++ {
		if argts[c] == 'z' {
			fmt.Println("z")
			return
		}
	}
		fmt.Println("z")
}

func main () {
	displayz()
}
