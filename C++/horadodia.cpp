///////////////////////////////////////////////////////////////////////////////////////

// NOME...: Róbison Joel Guimarães Simon
// DATA...: 18/05/2021
// ASSUNTO: Programa que calcula se o salário da pessoa é maior ou menor ao valor de R$ 1000,00.

//////////////////////////////////////////////////////////////////////////////////////


#include <iostream>
using namespace std;

int main()

{
	int hora;

	cout << "Escreva a hora....: ";

	cin >> hora;

	if(hora<=18 && hora>=6)

		cout << "Agora e NOITE.";

	else

		cout << "Agora e DIA.";
}
