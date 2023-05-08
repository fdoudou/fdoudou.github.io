package main

import (
	//"os"
	"fmt"
)

func ispowerof2() {
	/*if len(os.Args) != 2 {
		return
	}*/
	pow2 := false
	n := 3
	for c:=2;c<=n;c=c*2 {
		if c == n {
			//fmt.Println(c)
			pow2 = true
			break
		}
	}
	fmt.Println(pow2)
}

func main() {
	ispowerof2()
}
