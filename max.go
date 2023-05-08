package main

import (
	"fmt"
)

func Max(a []int) int {
	if len(a) == 0 {
		return 0
	}

	max := a[0]

	for c:=0;c<len(a);c++ {
		if a[c] > max {
			max = a[c]
		}
	}
	return max
}

func main() {
	a := []int{23, 123, 1, 11, 55, 93, 999}
	max := Max(a)
	fmt.Println(max)
}
