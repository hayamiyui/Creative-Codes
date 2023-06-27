package main
//Copyright (C) 2023 Creative & KANATA. All rights reserved.
import (
	_ "container/list"
	_ "encoding/binary"
	"errors"
	"fmt"
	_ "io"
	_ "net"
	_ "os"
	"testing"
	"time"
)
func main() {
	var a string = "andoroido"
	fmt.Println(a)
	var b int = 1
	fmt.Println(b)
	fmt.Println("Hello world")
	var x int
	var f float64
	var c bool
	var s string
	fmt.Println("%v%v%v%q\n", x, f, c, s)
	const LENGTH int = 10
	const WIDTH int = 5
	var area int
	const d, e, g = 1, false, "str"

	area = LENGTH * WIDTH
	fmt.Println("%d", area)
	println()
	println(d, e, g)

	var akane int = 10
	if akane < 20 {
		fmt.Println("a < 20")
	}

	var health = 1000
	var attack = 40
	var damageRate float64 = 0.01
	var damage = float64(attack-health) * damageRate
	fmt.Println(damage)

	var numbers = make([]int,3,5)
	printSlice(numbers)

	type Books struct {
		title string
		author string
		subject string
		book_id int64
	}
	var i int64 = 15
	fmt.Printf("",i,Final(uint64(i)))
	var p complex128 = complex(1,2)
	var y complex128 = complex(3,4)
	fmt.Println(p * y)
	type Writer interface {
		Writer([]byte) (int64,error)
	}
	type StringWriter struct {
		str string
	}
	type tohru interface {
		area() float64
	}
	type ayano struct {
		width float64
		height float64
	}
	type aoi struct {
		radius float64
	}
	Timer()
}

func printSlice(numbers []int) {
	
}
func printSLice(x []int64){
	fmt.Printf("len=%d casp=%d slice=%v\n",len(x),cap(x),x)
}
func Final(n uint64)(result uint64){
	if(n > 0){
		result = n * Final(n-1)
		return result
	}
	return 1
}
func square(f float64) (float64){
	if f <0{
		return 0
	}
	return 0
}
func akane(){
	fmt.Println("Akane")
}
var err = errors.New("an error")
func Timer(){
	start := time.Now()
	sum := 0
	for i := 0; i < 10000000; i++{
		sum++
	}
	elapsed := time.Since(start)
	fmt.Println("",elapsed)
}
func GetArea(weight int, height int)int {
	return weight * height
}
func TESTAREA(t * testing.B){
	for i := 0; i < t.N; i++{
		GetArea(40,50)
	}
}


