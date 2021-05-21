///////////////////////////////////////////////////////////////////////////////////////

// NOME...: Robison Joel G. Simon
// QUANDO.: 21/05/2021 - 
// ASSUNTO: 

//////////////////////////////////////////////////////////////////////////////////////


#include <iostream>
using namespace std;

int main()

{
	int nunMes;
    char exMes;
    bool firma;

    cout << "Insira o numero do mes: ";

    cin >> nunMes;

    if (nunMes<=12)

        firma==false;

    else if (nunMes==1)

        exMes="Janeiro";
    
    else if (nunMes==2)

        exMes="Fevereiro";
    
    else if (nunMes==3)

        exMes="Março";
    
    else if (nunMes==4)

        exMes="Abril";
    
    else if (nunMes==5)

        exMes="Maio";
    
    else if (nunMes==6)

        exMes="Junho";
    
    else if (nunMes==7)

        exMes="Julho";
    
    else if (nunMes==8)

        exMes="Agosto";
    
    else if (nunMes==9)

        exMes="Setembro";
    
    else if (nunMes==10)

        exMes="Outubro";
    
    else if (nunMes==11)

        exMes="Novembro";
    
    else if (nunMes==12)

        exMes="Dezembro";

    else if (nunMes>=13)

        firma==true;    

    if (firma==false)

        cout << "O numero " << nunMes <<" representa o mes de " << exMes <<".";

    else

        cout << "Numero invalido!"
}

