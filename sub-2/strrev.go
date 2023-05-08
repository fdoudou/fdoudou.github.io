package main

import (
	"fmt"
)

func StrRev(s string) string {
	reversedstr := ""
	for c:=len(s)-1;c>=0;c-- {
		reversedstr += string(s[c])
	}
	return reversedstr
}

func main() {
	s := "Hello World!"
	s = StrRev(s)
	fmt.Println(s)
}
