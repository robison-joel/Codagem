///////////////////////////////////////////////////////////////////////////////////////

// NOME...: Robison Joel
// DATA...: 16/05/2021
// ASSUNTO: Algoritmo que calcula a IDADE da pessoa a partir do ano do nascimento.

//////////////////////////////////////////////////////////////////////////////////////

#include <iostream>
using namespace std;

int main()

{
int anoAtual, anoNasc, idade;

cout <<"Ano atual: ";

cin >> anoAtual;

cout <<"Ano de nascimento:";

cin >> anoNasc;

idade=anoAtual-anoNasc;

cout <<"Voce tem ou fara " << idade << " anos.";

}
