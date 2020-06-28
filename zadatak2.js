/*Fibonačijevi nizovi definisani su relacijom:

Fn = Fn−1 + Fn−2, gdje F1 = 1 i F2 = 1.
Prvih 12 elemenata su:

F1 = 1
F2 = 1
F3 = 2
F4 = 3
F5 = 5
F6 = 8
F7 = 13
F8 = 21
F9 = 34
F10 = 55
F11 = 89
F12 = 144
12. element, F12, je prvi element koji sadrži 3 cifre.

Koji redni broj ima element koji ima 1000 cifara?*/

let f1=1;
let f2=1;
function f(n){
	if(n<0){
		return -1;
	}else if(n==1 || n==2){
		return 1;
	}else{
		return f(n-1)+f(n-2);
	}
}
let string;
let i=0;
for(i;i<=10000;i++){
	string = f(i).toString();
	if(string.length==1000){
		console.log(i);
		break;
	}
}