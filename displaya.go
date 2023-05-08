package main

import (
"os"
"fmt"
)

func displaya () {
	if len(os.Args) != 2 {
		fmt.Println("a")
		return
	}

	argts := os.Args[1]
	c:=0;
	for c<len(argts) {
		if argts[c] == 'a' {
			fmt.Println("a")
			return
		}
		c++
	}
	fmt.Println("a")
}

func main () {
	displaya()
}
