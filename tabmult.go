package main

import (
	"fmt"
//	"os"
)

func tabmult () {
	c := 1
	res := 0
	for c < 10 {
		res = c * 9
		fmt.Println(res)
		c++
	}
}

func main () {
	tabmult()
}
