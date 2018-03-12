#include <stdio.h>
#include <stdlib.h>


char *car;

int getNextToken() {

	int stare = 0;
	char character;
	for (;;) {
		character = *car;
		switch (stare) 
		{
			case 0: 
				if (character == ',') 
				{
					stare = 20;
					car++;
				}
				else 
				if (character == ';') 
				{
					stare = 21;
					car++;
				}
				else 
				if (character == '(') 
				{
					stare = 22;
					car++;
				}
				else 
				if (character == ')') 
				{
					stare = 23;
					car++;
				}
				else 
				if (character == '[') 
				{
					stare = 24;
					car++;
				}
				else 
				if (character == ']') 
				{
					stare = 25;
					car++;
				}
				else 
				if (character == '{') 
				{
					stare = 26;
					car++;
				}
				else 
				if (character == '}') 
				{
					stare = 27;
					car++;
				}
				else if (character == '+') 
				{
					stare = 28;
					car++;
				}
				else 
				if (character == '-') 
				{
					stare = 29;
					car++;
				}
				else 
				if (character == '*') 
				{
					stare = 30;
					car++;
				}
				else
				if (character == '.') 
				{
					stare = 32;
					car++;
				}
				else 
				if (character == '&') 
				{
					stare = 33;
					car++;
				}
				else 
				if (character == '|') {
					stare = 35;
					car++;
				}
				else if (character == '!') 
				{
					stare = 37;
					car++;
				}
				else if (character == '=') 
				{
					stare = 40;
					car++;
				}
				else if (character == '<') 
				{
					stare = 43;
					car++;
				}
				else if (character == '>')
				{
					stare = 46;
					car++;
				}

				break;

		case 1:	
			addToken(ID);
			return ID;
		case 2: 
			addToken(ID);
			return ID;
		case 3:
			addToken(ID);
			return ID;
		case 4:
			addToken(ID);
			return ID;
		case 5:	
			addToken(ID);
			return ID;
		case 6:
			addToken(ID);
			return ID;
		case 7:	
			addToken(ID);
			return ID;
		case 8:	
			addToken(ID);
			return ID;
		case 9:	
			addToken(ID);
			return ID;
		case 10:
			addToken(ID);
			return ID;
		case 11:
			addToken(ID);
			return ID;
		case 12:
			addToken(ID);
			return ID;
		case 13: 
			if (character == '&') 
			{
				stare = 34;
				car++;
			}
		case 14:
			addToken(ID);
			return ID;
		case 15: 
			if (character == '|') 
			{
				stare = 36;
				car++;
			}
		case 16:
			addToken(ID);
			return ID;
		case 17: 
			if (character == '=') 
			{
				stare = 39;
				car++;
		    }
			else 
		    {
				 stare = 38;
		    }
		case 18:
			addToken(ID);
			return ID;
		case 19:
			addToken(ID);
			return ID;
		case 20: 
			if (character == '=') 
			{
				stare = 42;
				car++;
			}
			else
			{
				 stare = 21;
	    	}
		case 21:addToken(ID);
			return ID;
		case 22:addToken(ID);
			return ID;
		case 23: 
			if (character == '=') 
			{
				stare = 44;
				car++;
			}
			else 
	    	{
			    stare = 45;
			}
		case 24:
			addToken(ID);
			return ID;
		case 25:
			addToken(ID);
			return ID;
		case 26: 
			if (character == '=') 
			{
				stare = 47;
				car++;
			}
			else 
			{
				 stare = 27;
			}
		case 27:
			addToken(ID);
			return ID;
		case 28:
			addToken(ID);
			return ID;













		}

		int main() {

			char buffer[30001];
			int n;

			FILE *f;
			fisier = fopen("fisier.txt", "r");
			
			if (!fisier) 
			{
				printf("Eroare deschidere fisier.\n");
				exit(1);
			}

			n = fread(buffer, 1, 30000, f);









			return 0;
		}