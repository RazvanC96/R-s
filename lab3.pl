abs1(X,Y)  :- Y=X, X>0.
abs1(X,Y)   :- Y is -X, X<0.

fibonacci(0,0).
fibonacci(1,1).
fibonacci(N,F) :-
	N>0, N_1 is N-1,
	fibonacci(N_1,F1),
	N_2 is N-2,
	fibonacci(N_2,F2),
	F is F1+F2.

divisor(X,Y,D) :-
        not(Y=0),
	K is X mod Y,
	divisor(Y,K,D).
divisor(X,Y,D) :-
	Y=0,
	D is X.

evaluating(Expression,Ressult) :-
	number(Expression),
	Ressult is Expression,
	plus(Expression),
	Ressult is Expression.


