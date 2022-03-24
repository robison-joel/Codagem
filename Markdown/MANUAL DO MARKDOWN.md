# MANUAL DO MARKDOWN

# Índice
1. O que é?
2. Como usar?
3. Como editar?
	* Tabulação;
	* Texto comum
	* Negrito;
	* Itálico;
	* Links;
		* Link direto;
		* Link com texto;
	* Citações;
	* Código;
    	* Linha de código;
    	* Bloco de código;
	* Listas;
    	* Numeradas;
    	* Não numeradas;
  	* Tabelas;



# __Tabulação__

# Título 1 
<pre># Título 1</pre>
## Título 2
<pre>## Título 2</pre>
### Título 3
<pre>### Título 3</pre>
#### Título 4
<pre>#### Título 4</pre>
##### Título 5
<pre>##### Título 5</pre>





# __Texto comum__

Para texto comum não é necessário nenhum caracter.





# __Negrito__

Para negrito, utiliza-se dois "*" (asteríscos) ou "_"(underscore).

~~~
**negrito** ou __negrito__
~~~


# __Itálico__

Para itálico, utiliza-se um "*" (asterísco) ou "_"(underscore).

~~~
*itálico* ou _itálico_
~~~



# __Link's__

Existem duas formas de escrever um link com o Markdown. Link direto e link com texto:


#### Link direto

<https://www.google.com.br>
~~~
<https://www.google.com.br>
~~~


#### Link com texto

[Google](http://google.com.br)
~~~
[Google](http://google.com.br)
~~~



# __Listas__

Usam-se o "*" (asterísco) ou no caso das listas ordenadas, "número." número acompanhado do ponto á direita.
 
#### Lista normal

* Ítem
* Ítem
* Ítem
* Ítem
* Ítem

~~~
* Ítem
* Ítem
* Ítem
* Ítem
* Ítem
~~~

#### Listas ordenadas

1. Primeiro ítem
2. Segundo ítem
3. Terceiro ítem
4. Quarto ítem
5. Quinto ítem

~~~
1. Primeiro ítem
2. Segundo ítem
3. Terceiro ítem
4. Quarto ítem
5. Quinto ítem
~~~


# Citações

Para escrever uma citação, basta colocar o caracter ">" no início da linha.

> Essa é uma citação.

~~~
> Essa é uma citação.
~~~


# Bloco de código

#### Código em linha

O código em uma linha só é estilizado com "`" (acento agudo) no início e no fim da linha.

~~~
`Linha de código` 
~~~

#### Código em bloco

O Bloco de código é delimitado por três "~~~" (tils) no início e no fim do bloco.

~~~
Esse é um
Exemplo de
Bloco de Código
~~~

<pre>
~~~
Esse é um
Exemplo de
Bloco de Código
~~~

</pre>


# Tabelas

N  | Descição      | Quantidade |
:-:|:------------: | :---------:|
1  | Item 1        | Muitos     |
2  | Item 2        | Vários     |