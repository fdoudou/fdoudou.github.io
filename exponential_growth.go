package main

import "fmt"

func main() {
	var years int
	fmt.Scanln(&years)
	numRabbits := 0
	//your code goes here
	for c := 1; c <= years; c++ {
		numRabbits += numRabbits + c*2
	}
	fmt.Println(numRabbits)
}

/*
package main

import "fmt"

func main() {
    var years int
    fmt.Scanln(&years)
    numRabbits := 7
    //your code goes here
    for c :=0;c<years;c++ {
        numRabbits += numRabbits + c * 2
    }
    fmt.Println(numRabbits)
}

*/
