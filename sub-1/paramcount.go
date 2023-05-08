package main 

import (
	"fmt"
	"os"
)

func paramcount () {
	if len(os.Args) == 1 {
		fmt.Println(0)
		return
	}
	
	fmt.Println(len(os.Args)-1)
}

func main () {
	paramcount()
}
