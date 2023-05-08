package main

import (
	"fmt"
)

func Swap (a *int, b *int) {
	c := *a
	d := *b
	*a = d
	*b = c
}

func main() {
	a := 0
	b := 1
	Swap(&a, &b)
	fmt.Println(a)
	fmt.Println(b)
}
