package main 

import (
	"os"

	"fmt"
)

/*func wdmatch () string {
	if len(os.Args) != 2 {
		return 
	}
}*/

func main () {
	if len(os.Args) != 3 {
		return
	}
	words := os.Args
	iswritable := true
	wo := ""
	for z:=0;z<len(words[2]);z++{
		for c:=0;c<len(words[1]);c++{
			if words[1][c] == words[2][z] {
				fmt.Println(string(words[2][z]))
				wo = wo + string(words[2][z])
				x := z + 1
z = x
				fmt.Println(z)
			} /*else {
				fmt.Println("not in")
				//x = x
				fmt.Println(x)
			}*/
			
		}
		
		fmt.Println("----")
	}
	fmt.Println(wo)
	
	/*for c:=0;c<len(words[1]);c++{
		x := 0
		for z:=0;z<len(words[2]);z++{
			x = z
			if words[2][z] != words[1][c] {
				fmt.Println("not in")
			} else {
				fmt.Println("in")
				z = x
				continue
			}
		}
		fmt.Println("------")
	}*/

	if iswritable == true {
		fmt.Println(words[1]+"\n")
	} else {
		return
	}
}
