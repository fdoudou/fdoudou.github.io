package main

import "fmt"

func main() {
	var years int
	fmt.Scanln(&years)
	numRabbits := 0
	//your code goes here
	for c := 1; c <= years; c++ {
		numRabbits += numRabbits * 2
	}
	fmt.Println(numRabbits)
}
