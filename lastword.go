package main

import (
	"os"
	"fmt"
)

func LastWord () string {

	args := os.Args
	if len(args) != 2 {
		return ""
	}

	wordarr := []string{}
	tempword := ""
	rawtext := args[1]

	if rawtext[0] == ' ' || rawtext[len(rawtext)-1] == ' ' {
		rawtext = rawtext[1:len(rawtext)-1]
	}

	for c:=0;c<=len(rawtext)-1;c++ {
		if rawtext[c] != ' ' {
			tempword += string(rawtext[c])
		} else {
			if tempword != "" {
				wordarr = append(wordarr,tempword)
				tempword = ""
			}
		}
	}

	if len(rawtext) != 0 {
		wordarr = append(wordarr, tempword)
	}

	fmt.Println(len(wordarr))
	return wordarr[len(wordarr)-1]
}

func main() {
	fmt.Println(LastWord())
}
