package main

import (
	"fmt"
	"os"
)

func displayfirstparam () {
	if len(os.Args) >= 2 {
		fmt.Println(os.Args[1])
	}
}

func main () {
	displayfirstparam()
}
